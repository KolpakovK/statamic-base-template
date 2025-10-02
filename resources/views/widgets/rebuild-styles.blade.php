<ui-widget title="Rebuild Styles"> 
    <div class="widget-card p-4">
        
        <p class="text-gray-600 text-sm mb-4">
            Rebuild your styles, assets and generate sitemap. This will run the build process and update your sitemap.xml file.
        </p>
        
        <div id="rebuild-widget">
            <button 
                id="rebuild-btn" 
                class="relative inline-flex items-center justify-center whitespace-nowrap shrink-0 font-medium antialiased cursor-pointer no-underline disabled:text-gray-400 dark:disabled:text-gray-600 disabled:cursor-not-allowed [&_svg]:shrink-0 dark:[&_svg]:text-white bg-linear-to-b from-primary/90 to-primary hover:bg-primary-hover text-white border border-primary-border shadow-ui-md inset-shadow-2xs inset-shadow-white/25 [&_svg]:text-white [&_svg]:opacity-60 px-4 h-10 text-sm gap-2 rounded-lg"
                onclick="rebuildStyles()"
            >
                <span id="btn-text">Rebuild & Generate</span>
                <span id="btn-loading" class="flex items-center gap-2 hidden">
                    <svg class="animate-spin -ml-1 mr-3 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Processing...
                </span>
            </button>
            
            <div id="result-message" class="mt-3 p-3 rounded hidden">
                <p id="message-text" class="text-sm font-medium mb-2"></p>
                <div id="details-list" class="text-xs space-y-1 hidden"></div>
            </div>
        </div>
    </div>

    <script>
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
        resultMessage.classList.add('hidden');
        
        try {
            const response = await fetch('/cp/rebuild-styles/execute', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({})
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
                    div.className = detail.startsWith('✓') ? 'text-green-600' : 
                                   detail.startsWith('✗') ? 'text-red-600' : 'text-gray-600';
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
            
            // Clear message after 5 seconds
            setTimeout(() => {
                resultMessage.classList.add('hidden');
            }, 5000);
        }
    }
    </script>
</ui-widget>