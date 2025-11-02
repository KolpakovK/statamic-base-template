<ui-widget title="Rebuild Styles"> 
    <div class="widget-card p-4">
        
        <p class="text-gray-600 text-sm mb-4">
            Rebuild your styles, assets and generate sitemap. This will run the build process and update your sitemap.xml file.
        </p>
        
        <div id="rebuild-widget">
            <button 
                id="rebuild-btn" 
                class="relative inline-flex items-center justify-center whitespace-nowrap shrink-0 font-medium antialiased cursor-pointer no-underline disabled:text-gray-400 dark:disabled:text-gray-600 disabled:cursor-not-allowed [&_svg]:shrink-0 dark:[&_svg]:text-white bg-linear-to-b from-primary/90 to-primary hover:bg-primary-hover text-white border border-primary-border shadow-ui-md inset-shadow-2xs inset-shadow-white/25 [&_svg]:text-white [&_svg]:opacity-60 px-4 h-10 text-sm gap-2 rounded-lg"
                data-csrf-token="{{ csrf_token() }}"
            >
                <span id="btn-text">Rebuild & Generate</span>
                <span id="btn-loading" class="items-center gap-2 hidden">
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


</ui-widget>