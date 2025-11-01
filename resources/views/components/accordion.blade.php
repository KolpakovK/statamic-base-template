@props([
    'items' => [],
    'allowMultiple' => false,
    'openFirst' => false,
])

<div 
    x-data="{ 
        openItems: {{ $openFirst ? '[0]' : '[]' }},
        allowMultiple: {{ $allowMultiple ? 'true' : 'false' }},
        toggle(index) {
            if (this.allowMultiple) {
                if (this.openItems.includes(index)) {
                    this.openItems = this.openItems.filter(i => i !== index);
                } else {
                    this.openItems.push(index);
                }
            } else {
                this.openItems = this.openItems.includes(index) ? [] : [index];
            }
        },
        isOpen(index) {
            return this.openItems.includes(index);
        }
    }"
    class="accordion space-y-2"
>
    @foreach($items as $index => $item)
        <div class="accordion-item border border-border rounded-lg overflow-hidden">
            {{-- Header --}}
            <button
                @click="toggle({{ $index }})"
                class="accordion-header w-full flex items-center justify-between px-6 py-4 text-left bg-card hover:bg-background-muted/15 transition-colors duration-200"
                :aria-expanded="isOpen({{ $index }})"
                aria-controls="accordion-content-{{ $index }}"
            >
                <span class="font-semibold text-foreground text-base">
                    {{ $item['title'] ?? '' }}
                </span>
                
                {{-- Icon --}}
                <i  class="ti ti-chevron-down"
                    :class="{ 'rotate-180': isOpen({{ $index }}) }"
                >
                </i>
            </button>

            {{-- Content --}}
            <div
                x-show="isOpen({{ $index }})"
                x-collapse
                id="accordion-content-{{ $index }}"
                class="accordion-content"
            >
                <div class="px-6 py-4 bg-card">
                    @if($item['data'])
                        <div class="article__content article-text-block">
                            <div class="article-text-content">{!! $item['data'] !!}</div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>