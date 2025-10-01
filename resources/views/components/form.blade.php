@props([
    'form' => null, 
    'success_message' => "Thank you for your submission!", 
    'submit_label' => "Submit"
])


@if($form)
    {{-- {!! Statamic::modify($form)->toJson() !!} --}}

    <s:form:create
        :in="$form->handle"
        :id="'form-'. $form->handle"
        csrf="false"
        attr:x-ref="form"
        js="alpine"
    >
        <div
            class="form-component"
            x-data="{
                success: false,
                loading: false,
                errors: @json($errors ?? []),
                
                init() {
                    console.log('=== CUSTOM FORM INITIALIZATION ===');
                    console.log('Form element:', $refs.form);
                    console.log('Form action:', $refs.form.getAttribute('action'));
                    console.log('Initial errors:', this.errors);
                    
                    $refs.form.addEventListener('submit', async (e) => {
                        e.preventDefault();
                        console.log('Form submission started');
                        
                        this.loading = true;
                        this.errors = {};
                        
                        try {
                            const formData = new FormData(e.target);
                            console.log('Form data:', Object.fromEntries(formData));
                            
                            const response = await fetch(e.target.action, {
                                method: 'POST',
                                body: formData,
                                headers: {
                                    'X-Requested-With': 'XMLHttpRequest',
                                    'Accept': 'application/json',
                                }
                            });
                            
                            console.log('Response status:', response.status);
                            
                            if (response.ok) {
                                const data = await response.json();
                                console.log('Response data:', data);
                                
                                if (data.success) {
                                    console.log('Success!');
                                    this.success = true;
                                    e.target.reset();
                                    this.$refs.form.scrollIntoView({ behavior: 'smooth' });
                                } else if (data.errors) {
                                    console.log('Validation errors:', data.errors);
                                    this.errors = data.errors;
                                }
                            } else {
                                const errorData = await response.json().catch(() => ({}));
                                console.log('Error data:', errorData);
                                this.errors = errorData.errors || { general: ['Ошибка отправки'] };
                            }
                            
                        } catch (error) {
                            console.error('Network error:', error);
                            this.errors = { general: ['Ошибка соединения'] };
                        } finally {
                            this.loading = false;
                            console.log('Form submission completed');
                        }
                    });
                }
            }"
        >
            <template x-if="success">
                <div class="w-full p-6 border border-success bg-background rounded-panel-md mb-8 form-success-message">
                    <div class="text-success" x-text="'{{ $success_message }}'"></div>
                </div>
            </template>

            <template x-if="errors.general">
                <div class="w-full p-6 border border-destructive bg-background rounded-panel-md mb-8 form-error-message">
                    <template x-for="error in errors.general" :key="error">
                        <div class="text-destructive" x-text="error"></div>
                    </template>
                </div>
            </template>

            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input type="text" name="honeypot" class="hidden" />

            <div class="space-y-12 divide-y divide-gray-300">
                @foreach ($sections as $section)
                    <div @class(['pb-12' => ! $loop->last])>
                        @isset($section->display)
                            <h3 class="text-2xl text-foreground font-semibold mb-8">{!! $section->display !!}</h3>
                        @endisset

                        <div class="grid gap-x-8 gap-y-6 md:grid-cols-12">
                            @foreach ($section['fields'] as $field)
                                <x-form-field :$field />
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="pt-8">
                <x-button
                    :label="$submit_label"
                    type="submit"
                >
                </x-button>
            </div>
        </div>
    </s:form:create>
@endif