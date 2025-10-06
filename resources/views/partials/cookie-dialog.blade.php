{{-- Cookie Consent Dialog --}}
@if (
    $seo->use_cookie_dialog && 
    $seo->tracker_type !== 'none' &&
    ((config('app.env') == 'local' && $seo->trackers_local) ||
     (config('app.env') == 'staging' && $seo->trackers_staging) ||
     (config('app.env') == 'production' && $seo->trackers_production))
)
<div id="cookie-consent" class="cookie-consent flex hidden fixed inset-x-0 bottom-0 z-50 p-4 h-screen  items-center justify-center">
    <div class="bg-card text-card-foreground rounded-panel-sm shadow-custom-lg p-6 max-w-md mx-auto">
        <h3 class="text-3xl font-semibold mb-3">
            {{ $seo->cookie['title'] ?? 'Cookie Consent' }}
        </h3>
        
        <div class="text-base text-muted-foreground mb-4">
            {!! $seo->cookie['description'] ?? 'We use cookies to enhance your browsing experience.' !!}
        </div>

        <div class="consent-options mb-4 space-y-2">
            @if ($seo->cookie['consent_types'])
                @foreach ($seo->cookie['consent_types'] as $type)
                    <label class="flex items-center space-x-2">
                        <input 
                            type="checkbox" 
                            name="consent-{{ $type['name'] }}"
                            value="{{ $type['name'] }}"
                            {{ $type['value'] ? 'checked' : '' }}
                            {{ $type['name'] === 'functionalCookies' ? 'disabled' : '' }}
                            class="rounded border-default checked:bg-primary/10 checked:border-primary"
                        >
                        <div class="flex-1">
                            <div class="font-medium text-base">{{ $type['label'] }}</div>
                            <div class="text-sm text-muted-foreground">{{ $type['description'] }}</div>
                        </div>
                    </label>
                @endforeach
            @endif
        </div>

        <div class="flex gap-2 flex-wrap">
            <button 
                onclick="acceptAllCookies()" 
                class="btn btn--primary"
            >
                {{ $seo->cookie['accept_label'] ?? 'Accept All' }}
            </button>
            
            <button 
                onclick="acceptSelectedCookies()" 
                class="btn btn--muted"
            >
                {{ $seo->cookie['accept_selected_label'] ?? 'Accept Selected' }}
            </button>
            
            <button 
                onclick="rejectCookies()" 
                class="btn btn--destructive"
            >
                {{ $seo->cookie['reject_label'] ?? 'Reject All' }}
            </button>
        </div>
    </div>
</div>

<script>
// Глобальные функции для управления cookies
window.showCookieSettings = function() {
    // Восстанавливаем текущие настройки
    const currentConsent = JSON.parse(localStorage.getItem('cookie-consent') || '{}');
    
    document.querySelectorAll('[name^="consent-"]').forEach(input => {
        const consentName = input.value;
        if (currentConsent.hasOwnProperty(consentName)) {
            input.checked = currentConsent[consentName];
        }
    });
    
    document.getElementById('cookie-consent').classList.remove('hidden');
};

window.resetCookieConsent = function() {
    localStorage.removeItem('cookie-consent');
    localStorage.removeItem('cookie-consent-date');
    location.reload();
};

document.addEventListener('DOMContentLoaded', function() {
    // Проверяем, нужно ли показывать диалог
    const consentGiven = localStorage.getItem('cookie-consent');
    const consentDate = localStorage.getItem('cookie-consent-date');
    const revokeDate = '{{ $seo->cookie["consent_revoke_before"] ?? "" }}';
    
    let shouldShowDialog = !consentGiven;
    
    // Проверяем дату отзыва согласия
    if (revokeDate && consentDate) {
        const consentDateTime = new Date(consentDate);
        const revokeDateTime = new Date(revokeDate);
        if (consentDateTime < revokeDateTime) {
            shouldShowDialog = true;
        }
    }
    
    if (shouldShowDialog) {
        document.getElementById('cookie-consent').classList.remove('hidden');
    }
});

function acceptAllCookies() {
    const consent = {};
    document.querySelectorAll('[name^="consent-"]').forEach(input => {
        consent[input.value] = true;
    });
    
    saveConsent(consent);
    updateGoogleConsent(consent);
    hideCookieDialog();
}

function acceptSelectedCookies() {
    const consent = {};
    document.querySelectorAll('[name^="consent-"]').forEach(input => {
        consent[input.value] = input.checked;
    });
    
    saveConsent(consent);
    updateGoogleConsent(consent);
    hideCookieDialog();
}

function rejectCookies() {
    const consent = {
        functionalCookies: true // Функциональные куки всегда включены
    };
    
    document.querySelectorAll('[name^="consent-"]').forEach(input => {
        if (input.value !== 'functionalCookies') {
            consent[input.value] = false;
        }
    });
    
    saveConsent(consent);
    updateGoogleConsent(consent);
    hideCookieDialog();
}

function saveConsent(consent) {
    localStorage.setItem('cookie-consent', JSON.stringify(consent));
    localStorage.setItem('cookie-consent-date', new Date().toISOString());
}

function updateGoogleConsent(consent) {
    if (typeof gtag !== 'undefined') {
        const consentUpdate = {};
        
        @if ($seo->cookie['consent_types'])
            @foreach ($seo->cookie['consent_types'] as $type)
                @if ($type['consent_api'] && $type['consent_api_handle'])
                    consentUpdate['{{ $type["consent_api_handle"] }}'] = consent['{{ $type["name"] }}'] ? 'granted' : 'denied';
                @endif
            @endforeach
        @endif
        
        gtag('consent', 'update', consentUpdate);
    }
}

function hideCookieDialog() {
    document.getElementById('cookie-consent').classList.add('hidden');
}


</script>

<style>
.cookie-consent {
    backdrop-filter: blur(4px);
    background-color: rgba(0, 0, 0, 0.5);
}
</style>
@endif