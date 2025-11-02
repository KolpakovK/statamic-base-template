<ui-widget title="Technical Support Request">
    <div class="widget-card p-4">

        <p class="text-gray-600 text-sm mb-4">
            Submit a technical support request. Fill out the form below and attach any relevant files to help us assist
            you better.
        </p>

        <!-- Loading state -->
        <div id="loading-info" class="mb-4">
            <div class="flex items-center gap-2 text-sm text-gray-500">
                <svg class="animate-spin h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                        stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
                Checking technical support status...
            </div>
        </div>

        <!-- Support info -->
        <div id="support-info" class="mb-4 hidden"></div>

        <!-- Error message -->
        <div id="error-message" class="mb-4 hidden"></div>

        <!-- Success message (replaces form) -->
        <div id="success-message" class="hidden">
            <div class="mt-3 p-6 rounded bg-green-50 border border-green-200 text-green-700 text-center">
                <div class="mb-3">
                    <svg class="w-12 h-12 mx-auto text-green-500" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2">Request Submitted Successfully!</h3>
                <p id="success-text" class="text-sm mb-4"></p>
                <button onclick="resetWidget()"
                    class="relative inline-flex items-center justify-center whitespace-nowrap shrink-0 font-medium antialiased cursor-pointer no-underline text-green-700 bg-green-100 border border-green-300 hover:bg-green-200 shadow-ui-sm px-4 h-10 text-sm gap-2 rounded-lg">
                    Submit Another Request
                </button>
            </div>
        </div>

        <form id="support-form" class="space-y-4" 
              data-api-url="{{ $api_url }}" 
              data-app-id="{{ $app_id }}">
            <!-- Title Field -->
            <div>
                <label for="support-title"
                    class="flex justify-between mb-1.5 text-sm font-medium [&_button]:font-medium text-gray-950 select-none dark:text-gray-300">
                    Title <span class="text-red-500">*</span>
                </label>
                <input type="text" id="support-title" name="title" placeholder="Brief description of the issue"
                    required
                    class="w-full block bg-white dark:bg-gray-950 border border-gray-300 with-contrast:border-gray-500 dark:border-white/15 dark:inset-shadow-2xs dark:inset-shadow-black text-gray-950 dark:text-gray-300 placeholder:text-gray-500 dark:placeholder:text-gray-400/75 appearance-none antialiased shadow-ui-sm disabled:shadow-none disabled:opacity-50 read-only:border-dashed not-prose text-base rounded-lg px-3 py-2 h-10 leading-[1.375rem]">
            </div>

            <!-- Description Field -->
            <div>
                <label for="support-description"
                    class="flex justify-between mb-1.5 text-sm font-medium [&_button]:font-medium text-gray-950 select-none dark:text-gray-300">
                    Description <span class="text-red-500">*</span>
                </label>
                <textarea id="support-description" name="description" rows="4"
                    placeholder="Detailed description of the issue, steps to reproduce, expected vs actual behavior..." required
                    class="w-full block bg-white dark:bg-gray-950 border border-gray-300 with-contrast:border-gray-500 dark:border-white/15 dark:inset-shadow-2xs dark:inset-shadow-black text-gray-950 dark:text-gray-300 placeholder:text-gray-500 dark:placeholder:text-gray-400/75 appearance-none antialiased shadow-ui-sm disabled:shadow-none disabled:opacity-50 read-only:border-dashed not-prose text-base rounded-lg px-3 py-2 leading-[1.375rem] resize-vertical"></textarea>
            </div>

            <!-- File Upload Field -->
            <div>
                <label for="support-file"
                    class="flex justify-between mb-1.5 text-sm font-medium [&_button]:font-medium text-gray-950 select-none dark:text-gray-300">
                    Attachment
                    <span class="text-xs text-gray-500 font-normal">Optional</span>
                </label>
                <div class="relative">
                    <input type="file" id="support-file" name="file"
                        accept=".jpg,.jpeg,.png,.gif,.pdf,.doc,.docx,.txt,.log,.zip"
                        class="w-full block bg-white dark:bg-gray-950 border border-gray-300 with-contrast:border-gray-500 dark:border-white/15 dark:inset-shadow-2xs dark:inset-shadow-black text-gray-950 dark:text-gray-300 placeholder:text-gray-500 dark:placeholder:text-gray-400/75 appearance-none antialiased shadow-ui-sm disabled:shadow-none disabled:opacity-50 read-only:border-dashed not-prose text-base rounded-lg px-3 py-2 h-10 leading-[1.375rem] file:mr-3 file:py-1 file:px-2 file:rounded file:border-0 file:text-sm file:bg-gray-100 file:text-gray-700 dark:file:bg-gray-800 dark:file:text-gray-300"
                        data-validate-file="true">
                </div>
                <p class="text-xs text-gray-500 mt-1">
                    Supported formats: JPG, PNG, PDF, DOC, TXT, LOG, ZIP (max 10MB)
                </p>
            </div>

            <!-- Form Actions -->
            <div class="flex gap-2 pt-2">
                <button type="submit" id="submit-btn"
                    class="relative inline-flex items-center justify-center whitespace-nowrap shrink-0 font-medium antialiased cursor-pointer no-underline disabled:text-gray-400 dark:disabled:text-gray-600 disabled:cursor-not-allowed [&_svg]:shrink-0 dark:[&_svg]:text-white bg-linear-to-b from-primary/90 to-primary hover:bg-primary-hover text-white border border-primary-border shadow-ui-md inset-shadow-2xs inset-shadow-white/25 [&_svg]:text-white [&_svg]:opacity-60 px-4 h-10 text-sm gap-2 rounded-lg">
                    <span id="submit-text">Submit Request</span>
                    <span id="submit-loading" class="hidden">
                        <svg class="animate-spin -ml-1 mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                        Submitting...
                    </span>
                </button>

                <button type="button" onclick="clearForm()"
                    class="relative inline-flex items-center justify-center whitespace-nowrap shrink-0 font-medium antialiased cursor-pointer no-underline text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-900 border border-gray-300 dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 shadow-ui-sm px-4 h-10 text-sm gap-2 rounded-lg">
                    Clear
                </button>
            </div>

            <!-- Result Message -->
            <div id="result-message" class="mt-3 p-3 rounded hidden">
                <p id="message-text" class="text-sm font-medium"></p>
            </div>
        </form>
    </div>
</ui-widget>
