<ui-widget title="Technical Support Request"> 
    <div class="widget-card p-4">
        
        <p class="text-gray-600 text-sm mb-4">
            Submit a technical support request. Fill out the form below and attach any relevant files to help us assist you better.
        </p>
        
        <!-- Loading state -->
        <div id="loading-info" class="mb-4">
            <div class="flex items-center gap-2 text-sm text-gray-500">
                <svg class="animate-spin h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
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
                    <svg class="w-12 h-12 mx-auto text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold mb-2">Request Submitted Successfully!</h3>
                <p id="success-text" class="text-sm mb-4"></p>
                <button 
                    onclick="resetWidget()"
                    class="relative inline-flex items-center justify-center whitespace-nowrap shrink-0 font-medium antialiased cursor-pointer no-underline text-green-700 bg-green-100 border border-green-300 hover:bg-green-200 shadow-ui-sm px-4 h-10 text-sm gap-2 rounded-lg"
                >
                    Submit Another Request
                </button>
            </div>
        </div>
        
        <form id="support-form" class="space-y-4" onsubmit="return handleFormSubmit(event);">
            <!-- Title Field -->
            <div>
                <label for="support-title" class="flex justify-between mb-1.5 text-sm font-medium [&_button]:font-medium text-gray-950 select-none dark:text-gray-300">
                    Title <span class="text-red-500">*</span>
                </label>
                <input 
                    type="text" 
                    id="support-title" 
                    name="title"
                    placeholder="Brief description of the issue"
                    required
                    class="w-full block bg-white dark:bg-gray-950 border border-gray-300 with-contrast:border-gray-500 dark:border-white/15 dark:inset-shadow-2xs dark:inset-shadow-black text-gray-950 dark:text-gray-300 placeholder:text-gray-500 dark:placeholder:text-gray-400/75 appearance-none antialiased shadow-ui-sm disabled:shadow-none disabled:opacity-50 read-only:border-dashed not-prose text-base rounded-lg px-3 py-2 h-10 leading-[1.375rem]"
                >
            </div>

            <!-- Description Field -->
            <div>
                <label for="support-description" class="flex justify-between mb-1.5 text-sm font-medium [&_button]:font-medium text-gray-950 select-none dark:text-gray-300">
                    Description <span class="text-red-500">*</span>
                </label>
                <textarea 
                    id="support-description" 
                    name="description"
                    rows="4"
                    placeholder="Detailed description of the issue, steps to reproduce, expected vs actual behavior..."
                    required
                    class="w-full block bg-white dark:bg-gray-950 border border-gray-300 with-contrast:border-gray-500 dark:border-white/15 dark:inset-shadow-2xs dark:inset-shadow-black text-gray-950 dark:text-gray-300 placeholder:text-gray-500 dark:placeholder:text-gray-400/75 appearance-none antialiased shadow-ui-sm disabled:shadow-none disabled:opacity-50 read-only:border-dashed not-prose text-base rounded-lg px-3 py-2 leading-[1.375rem] resize-vertical"
                ></textarea>
            </div>

            <!-- File Upload Field -->
            <div>
                <label for="support-file" class="flex justify-between mb-1.5 text-sm font-medium [&_button]:font-medium text-gray-950 select-none dark:text-gray-300">
                    Attachment
                    <span class="text-xs text-gray-500 font-normal">Optional</span>
                </label>
                <div class="relative">
                    <input 
                        type="file" 
                        id="support-file" 
                        name="file"
                        accept=".jpg,.jpeg,.png,.gif,.pdf,.doc,.docx,.txt,.log,.zip"
                        class="w-full block bg-white dark:bg-gray-950 border border-gray-300 with-contrast:border-gray-500 dark:border-white/15 dark:inset-shadow-2xs dark:inset-shadow-black text-gray-950 dark:text-gray-300 placeholder:text-gray-500 dark:placeholder:text-gray-400/75 appearance-none antialiased shadow-ui-sm disabled:shadow-none disabled:opacity-50 read-only:border-dashed not-prose text-base rounded-lg px-3 py-2 h-10 leading-[1.375rem] file:mr-3 file:py-1 file:px-2 file:rounded file:border-0 file:text-sm file:bg-gray-100 file:text-gray-700 dark:file:bg-gray-800 dark:file:text-gray-300"
                        onchange="validateFile(this)"
                    >
                </div>
                <p class="text-xs text-gray-500 mt-1">
                    Supported formats: JPG, PNG, PDF, DOC, TXT, LOG, ZIP (max 10MB)
                </p>
            </div>

            <!-- Form Actions -->
            <div class="flex gap-2 pt-2">
                <button 
                    type="submit"
                    id="submit-btn"
                    class="relative inline-flex items-center justify-center whitespace-nowrap shrink-0 font-medium antialiased cursor-pointer no-underline disabled:text-gray-400 dark:disabled:text-gray-600 disabled:cursor-not-allowed [&_svg]:shrink-0 dark:[&_svg]:text-white bg-linear-to-b from-primary/90 to-primary hover:bg-primary-hover text-white border border-primary-border shadow-ui-md inset-shadow-2xs inset-shadow-white/25 [&_svg]:text-white [&_svg]:opacity-60 px-4 h-10 text-sm gap-2 rounded-lg"
                >
                    <span id="submit-text">Submit Request</span>
                    <span id="submit-loading" class="hidden">
                        <svg class="animate-spin -ml-1 mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Submitting...
                    </span>
                </button>
                
                <button 
                    type="button"
                    onclick="clearForm()"
                    class="relative inline-flex items-center justify-center whitespace-nowrap shrink-0 font-medium antialiased cursor-pointer no-underline text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-900 border border-gray-300 dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 shadow-ui-sm px-4 h-10 text-sm gap-2 rounded-lg"
                >
                    Clear
                </button>
            </div>

            <!-- Result Message -->
            <div id="result-message" class="mt-3 p-3 rounded hidden">
                <p id="message-text" class="text-sm font-medium"></p>
            </div>
        </form>
    </div>

    <script>
    // Check technical support status on page load
    document.addEventListener('DOMContentLoaded', function() {
        checkSupportStatus();
        initializeForm();
    });
    
    function initializeForm() {
        const form = document.getElementById('support-form');
        if (form) {
            form.addEventListener('submit', handleFormSubmit, false);
        }
    }
    
    function handleFormSubmit(e) {
        // Prevent default form submission
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();
        
        console.log('Form submit intercepted'); // Для отладки
        
        const submitBtn = document.getElementById('submit-btn');
        const submitText = document.getElementById('submit-text');
        const submitLoading = document.getElementById('submit-loading');
        const resultMessage = document.getElementById('result-message');
        const messageText = document.getElementById('message-text');
        
        // Get form data
        const formData = new FormData();
        const titleInput = document.getElementById('support-title');
        const descriptionInput = document.getElementById('support-description');
        const fileInput = document.getElementById('support-file');
        
        // Validate required fields
        if (!titleInput.value.trim()) {
            showFormError('Title is required.');
            return false;
        }
        
        if (!descriptionInput.value.trim()) {
            showFormError('Description is required.');
            return false;
        }
        
        // Show loading state
        submitBtn.disabled = true;
        submitText.classList.add('hidden');
        submitLoading.classList.remove('hidden');
        resultMessage.classList.add('hidden');
        
        // Prepare form data
        formData.append('api_id', '{{ $app_id }}');
        formData.append('title', titleInput.value.trim());
        formData.append('description', descriptionInput.value.trim());
        
        // Add file if selected
        if (fileInput.files[0]) {
            formData.append('file', fileInput.files[0]);
        }
        
        // Submit ticket
        submitTicket(formData);
        
        return false;
    }

    async function checkSupportStatus() {
        const loadingInfo = document.getElementById('loading-info');
        const supportInfo = document.getElementById('support-info');
        const errorMessage = document.getElementById('error-message');
        const supportForm = document.getElementById('support-form');
        
        const apiUrl = '{{ $api_url }}';
        const appId = '{{ $app_id }}';
        
        if (!apiUrl || !appId) {
            showError('Website API configuration is missing. Please contact developer.');
            return;
        }
        
        try {
            const response = await fetch(`${apiUrl}project/${appId}`, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }
            });
            
            const data = await response.json();
            
            if (data.success && data.data) {
                const project = data.data;
                const supportUntil = new Date(project.tech_support_until);
                const today = new Date();
                
                // Remove time part for date comparison
                today.setHours(0, 0, 0, 0);
                supportUntil.setHours(0, 0, 0, 0);
                
                if (supportUntil >= today) {
                    // Support is active
                    showSupportInfo(project);
                    showForm();
                } else {
                    // Support expired
                    showExpiredSupport(project);
                    hideForm();
                }
            } else {
                showError('Failed to retrieve project information. Please try again later.');
                hideForm();
            }
        } catch (error) {
            showError('Unable to connect to support system. Please try again later.');
            hideForm();
        } finally {
            loadingInfo.classList.add('hidden');
        }
    }
    
    function showSupportInfo(project) {
        const supportInfo = document.getElementById('support-info');
        const supportDate = new Date(project.tech_support_until).toLocaleDateString('en-US', {
            year: 'numeric',
            month: 'long', 
            day: 'numeric'
        });
        
        supportInfo.innerHTML = `
            <div class="mt-3 p-3 rounded bg-green-50 border border-green-200 text-green-700">
                <p class="text-sm font-medium">
                    ✓ Technical support is active for "${project.name}" until ${supportDate}
                </p>
            </div>
        `;
        supportInfo.classList.remove('hidden');
    }
    
    function showExpiredSupport(project) {
        const errorMessage = document.getElementById('error-message');
        const supportDate = new Date(project.tech_support_until).toLocaleDateString('en-US', {
            year: 'numeric',
            month: 'long', 
            day: 'numeric'
        });
        
        errorMessage.innerHTML = `
            <div class="mt-3 p-3 rounded bg-red-50 border border-red-200 text-red-700">
                <p class="text-sm font-medium">
                    Technical support for "${project.name}" has expired (${supportDate}). Please contact your developer to renew support.
                </p>
            </div>
        `;
        errorMessage.classList.remove('hidden');
    }
    
    function showError(message) {
        const errorMessage = document.getElementById('error-message');
        
        errorMessage.innerHTML = `
            <div class="mt-3 p-3 rounded bg-red-50 border border-red-200 text-red-700">
                <p class="text-sm font-medium">${message}</p>
            </div>
        `;
        errorMessage.classList.remove('hidden');
    }
    
    function showForm() {
        document.getElementById('support-form').classList.remove('hidden');
    }
    
    function hideForm() {
        document.getElementById('support-form').classList.add('hidden');
    }
    
    async function submitTicket(formData) {
        const apiUrl = '{{ $api_url }}';
        
        try {
            const response = await fetch(`${apiUrl}ticket`, {
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json'
                    // Don't set Content-Type for FormData, browser will set it with boundary
                }
            });
            
            const data = await response.json();
            
            if (response.ok && data.success) {
                // Success - hide form and show success message
                showSuccessMessage(data.message || 'Support ticket submitted successfully! We will get back to you soon.');
            } else {
                // API returned error
                const errorMsg = data.message || data.error || 'Failed to submit support ticket. Please try again.';
                showTicketError(errorMsg);
            }
        } catch (error) {
            // Network or other error
            showTicketError('Unable to submit ticket. Please check your connection and try again.');
        }
    }
    
    function showFormError(message) {
        const resultMessage = document.getElementById('result-message');
        const messageText = document.getElementById('message-text');
        
        messageText.textContent = message;
        resultMessage.className = 'mt-3 p-3 rounded bg-red-50 border border-red-200 text-red-700';
        resultMessage.classList.remove('hidden');
        
        // Reset button state
        resetSubmitButton();
    }
    
    function showSuccessMessage(message) {
        const supportForm = document.getElementById('support-form');
        const successMessage = document.getElementById('success-message');
        const successText = document.getElementById('success-text');
        
        // Hide form and show success
        supportForm.classList.add('hidden');
        successText.textContent = message;
        successMessage.classList.remove('hidden');
    }
    
    function showTicketError(message) {
        const resultMessage = document.getElementById('result-message');
        const messageText = document.getElementById('message-text');
        
        messageText.textContent = message;
        resultMessage.className = 'mt-3 p-3 rounded bg-red-50 border border-red-200 text-red-700';
        resultMessage.classList.remove('hidden');
        
        // Reset button state
        resetSubmitButton();
    }
    
    function resetSubmitButton() {
        const submitBtn = document.getElementById('submit-btn');
        const submitText = document.getElementById('submit-text');
        const submitLoading = document.getElementById('submit-loading');
        
        submitBtn.disabled = false;
        submitText.classList.remove('hidden');
        submitLoading.classList.add('hidden');
    }
    
    function resetWidget() {
        const supportForm = document.getElementById('support-form');
        const successMessage = document.getElementById('success-message');
        const resultMessage = document.getElementById('result-message');
        
        // Show form and hide success message
        supportForm.classList.remove('hidden');
        successMessage.classList.add('hidden');
        resultMessage.classList.add('hidden');
        
        // Reset button state
        resetSubmitButton();
        
        // Clear form
        supportForm.reset();
    }
    
    function clearForm() {
        document.getElementById('support-form').reset();
        document.getElementById('result-message').classList.add('hidden');
    }
    
    function validateFile(input) {
        const file = input.files[0];
        if (!file) return;
        
        const maxSize = 10 * 1024 * 1024; // 10MB in bytes
        const allowedTypes = [
            'image/jpeg', 'image/jpg', 'image/png', 'image/gif',
            'application/pdf',
            'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'text/plain',
            'application/zip', 'application/x-zip-compressed'
        ];
        
        if (file.size > maxSize) {
            showFormError('File size must be less than 10MB.');
            input.value = '';
            return;
        }
        
        if (!allowedTypes.includes(file.type)) {
            showFormError('File type not supported. Please use JPG, PNG, PDF, DOC, TXT, LOG, or ZIP files.');
            input.value = '';
            return;
        }
        
        // Clear any previous error messages when file is valid
        document.getElementById('result-message').classList.add('hidden');
    }
    </script>
</ui-widget>