/**
 * When extending the control panel, be sure to uncomment the necessary code for your build process:
 * https://statamic.dev/extending/control-panel
 */

/** Example Fieldtype

import ExampleFieldtype from './components/fieldtypes/ExampleFieldtype.vue';

Statamic.booting(() => {
    Statamic.$components.register('example-fieldtype', ExampleFieldtype);
});

*/


document.addEventListener('DOMContentLoaded', function() {
    // Initialize rebuild styles widget
    const rebuildBtn = document.getElementById('rebuild-btn');
    if (rebuildBtn) {
        console.log('Rebuild button found, adding listener'); // Debug log
        rebuildBtn.addEventListener('click', rebuildStyles);
    } else {
        console.log('Rebuild button not found'); // Debug log
    }
    
    // Initialize technical support widget
    if (document.getElementById('support-form')) {
        console.log('Technical support widget found, initializing...');
        initializeTechnicalSupport();
    }
});

async function rebuildStyles() {
    const btn = document.getElementById('rebuild-btn');
    const btnText = document.getElementById('btn-text');
    const btnLoading = document.getElementById('btn-loading');
    const resultMessage = document.getElementById('result-message');
    const messageText = document.getElementById('message-text');
    const detailsList = document.getElementById('details-list');
    
    // Show loading state
    btn.disabled = true;
    btn.classList.add('opacity-50', 'cursor-not-allowed');
    btnText.classList.add('hidden');
    btnLoading.classList.remove('hidden');
    btnLoading.classList.add('flex');
    resultMessage.classList.add('hidden');
    
    try {
        // Get CSRF token from button data attribute
        const csrfToken = btn.getAttribute('data-csrf-token');
        
        const formData = new FormData();
        formData.append('_token', csrfToken);
        
        const response = await fetch('/cp/rebuild-styles/execute', {
            method: 'POST',
            headers: {
                'Accept': 'application/json'
            },
            body: formData
        });

        const data = await response.json();
        
        if (data.success) {
            messageText.textContent = data.message || 'Build process completed successfully!';
            resultMessage.className = 'mt-3 p-3 rounded bg-green-50 border border-green-200 text-green-700';
        } else {
            messageText.textContent = data.message || 'An error occurred during the build process.';
            resultMessage.className = 'mt-3 p-3 rounded bg-red-50 border border-red-200 text-red-700';
        }
        
        // Show details if available
        if (data.details && data.details.length > 0) {
            detailsList.innerHTML = '';
            data.details.forEach(detail => {
                const div = document.createElement('div');
                div.textContent = detail;
                div.className = detail.startsWith('[SUCCESS]') ? 'text-green-600' : 
                               detail.startsWith('[ERROR]') ? 'text-red-600' : 
                               detail.startsWith('[DEBUG]') ? 'text-blue-600' :
                               'text-gray-600';
                detailsList.appendChild(div);
            });
            detailsList.classList.remove('hidden');
        } else {
            detailsList.classList.add('hidden');
        }
        
        resultMessage.classList.remove('hidden');
        
    } catch (error) {
        messageText.textContent = 'Network error occurred. Please try again.';
        resultMessage.className = 'mt-3 p-3 rounded bg-red-50 border border-red-200 text-red-700';
        resultMessage.classList.remove('hidden');
    } finally {
        // Reset button state
        btn.disabled = false;
        btn.classList.remove('opacity-50', 'cursor-not-allowed');
        btnText.classList.remove('hidden');
        btnLoading.classList.add('hidden');
        btnLoading.classList.remove('flex');
        
        // Clear message after 5 seconds
        setTimeout(() => {
            resultMessage.classList.add('hidden');
        }, 5000);
    }
}

// Technical Support Widget Functions
function initializeTechnicalSupport() {
    checkSupportStatus();
    
    const form = document.getElementById('support-form');
    if (form) {
        form.addEventListener('submit', handleTechnicalSupportSubmit, false);
    }
    
    // Add file validation
    const fileInput = document.getElementById('support-file');
    if (fileInput) {
        fileInput.addEventListener('change', function() {
            validateFile(this);
        });
    }
}

function handleTechnicalSupportSubmit(e) {
    // Prevent default form submission
    e.preventDefault();
    e.stopPropagation();
    e.stopImmediatePropagation();

    console.log('Technical Support form submit intercepted');

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

    // Get values from data attributes (will be set from Blade template)
    const supportForm = document.getElementById('support-form');
    const apiUrl = supportForm.getAttribute('data-api-url');
    const appId = supportForm.getAttribute('data-app-id');

    // Prepare form data
    formData.append('api_id', appId);
    formData.append('title', titleInput.value.trim());
    formData.append('description', descriptionInput.value.trim());

    // Add file if selected
    if (fileInput.files[0]) {
        formData.append('file', fileInput.files[0]);
    }

    // Submit ticket
    submitTicket(formData, apiUrl);

    return false;
}

async function checkSupportStatus() {
    const loadingInfo = document.getElementById('loading-info');
    const supportInfo = document.getElementById('support-info');
    const errorMessage = document.getElementById('error-message');
    const supportForm = document.getElementById('support-form');

    if (!supportForm) return;

    const apiUrl = supportForm.getAttribute('data-api-url');
    const appId = supportForm.getAttribute('data-app-id');

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
        if (loadingInfo) loadingInfo.classList.add('hidden');
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
    const supportForm = document.getElementById('support-form');
    if (supportForm) supportForm.classList.remove('hidden');
}

function hideForm() {
    const supportForm = document.getElementById('support-form');
    if (supportForm) supportForm.classList.add('hidden');
}

async function submitTicket(formData, apiUrl) {
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

    if (submitBtn) submitBtn.disabled = false;
    if (submitText) submitText.classList.remove('hidden');
    if (submitLoading) submitLoading.classList.add('hidden');
}

function resetWidget() {
    const supportForm = document.getElementById('support-form');
    const successMessage = document.getElementById('success-message');
    const resultMessage = document.getElementById('result-message');

    // Show form and hide success message
    if (supportForm) supportForm.classList.remove('hidden');
    if (successMessage) successMessage.classList.add('hidden');
    if (resultMessage) resultMessage.classList.add('hidden');

    // Reset button state
    resetSubmitButton();

    // Clear form
    if (supportForm) supportForm.reset();
}

function clearForm() {
    const supportForm = document.getElementById('support-form');
    const resultMessage = document.getElementById('result-message');
    
    if (supportForm) supportForm.reset();
    if (resultMessage) resultMessage.classList.add('hidden');
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
    const resultMessage = document.getElementById('result-message');
    if (resultMessage) resultMessage.classList.add('hidden');
}


