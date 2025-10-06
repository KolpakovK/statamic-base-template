@props([
    'modal_id' => null,
    'blocks' => null,
    'title' => null,
    'size' => 'md',
    'backdrop' => true,
    'keyboard' => true,
    'class' => '',
    'show' => false,
])

@if($modal_id)
    {{-- Modal Backdrop --}}
    <div id="{{ $modal_id }}" 
        class="fixed inset-0 z-50 overflow-y-auto {{ $show ? '' : 'hidden' }} {{ $class }}" 
        aria-labelledby="{{ $modal_id }}Label" 
        aria-hidden="{{ $show ? 'false' : 'true' }}"
        role="dialog"
        aria-modal="true">
        
        {{-- Backdrop overlay --}}
        <div class="fixed inset-0 bg-black/50 transition-opacity" 
             @if($backdrop) onclick="closeModal('{{ $modal_id }}')" @endif></div>        {{-- Modal container --}}
        <div class="relative min-h-screen flex items-center justify-center p-4">
            <div class="relative bg-white rounded-lg shadow-xl w-full 
                        @if($size === 'sm') max-w-sm 
                        @elseif($size === 'lg') max-w-4xl 
                        @elseif($size === 'xl') max-w-6xl 
                        @else max-w-2xl @endif
                        transform transition-all duration-300 ease-out">
                
                {{-- Close button (always visible) --}}
                <button type="button" 
                        class="absolute top-4 right-4 z-10 text-gray-400 hover:text-gray-600 transition-colors duration-200 p-1 rounded-full hover:bg-gray-100"
                        onclick="closeModal('{{ $modal_id }}')"
                        aria-label="Close">
                    <i class="ti ti-x text-xl"></i>
                </button>
                
                @if($title)
                {{-- Modal Header --}}
                <div class="flex items-center justify-between p-6 border-b border-gray-200 pr-12">
                    <h3 class="text-lg font-semibold text-gray-900" id="{{ $modal_id }}Label">
                        {{ $title }}
                    </h3>
                </div>
                @endif
                
                {{-- Modal Body --}}
                <div class="p-6 @if(!$title) pt-12 @endif">
                    @if($blocks && count($blocks) > 0)
                        {{-- Use blocks renderer for content --}}
                        @include('partials.blocks-renderer', ['blocks' => $blocks])
                    @else
                        {{-- Fallback content slot --}}
                        {{ $slot }}
                    @endif
                </div>
                
                @if(isset($footer) && $footer)
                {{-- Modal Footer --}}
                <div class="flex items-center justify-end px-6 py-4 border-t border-gray-200 space-x-3">
                    {{ $footer }}
                </div>
                @endif
            </div>
        </div>
    </div>

    {{-- Modal JavaScript --}}
    @once
        <script>
        // Modal utility functions
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.remove('hidden');
                modal.setAttribute('aria-hidden', 'false');
                document.body.style.overflow = 'hidden'; // Prevent background scrolling
                
                // Focus trap
                const focusableElements = modal.querySelectorAll(
                    'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
                );
                if (focusableElements.length > 0) {
                    focusableElements[0].focus();
                }
            }
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.add('hidden');
                modal.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = ''; // Restore scrolling
            }
        }

        // Close modal on Escape key (respects keyboard prop)
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                const visibleModals = document.querySelectorAll('.fixed.inset-0.z-50:not(.hidden)');
                if (visibleModals.length > 0) {
                    const lastModal = visibleModals[visibleModals.length - 1];
                    const modalId = lastModal.getAttribute('id');
                    if (modalId) {
                        closeModal(modalId);
                    }
                }
            }
        });

        // Global modal functions for external use
        window.openModal = openModal;
        window.closeModal = closeModal;
        </script>
    @endonce
@endif