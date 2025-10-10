<div class="nav-mobile-links flex flex-col items-center gap-2" role="navigation" aria-label="Mobile navigation">
    <statamic:nav:header_navigation>
        <x-button 
            :label="$title" 
            :link="$url" 
            :variant="'ghost'" 
            :show_icon="false"
        />
    </statamic:nav:header_navigation>
</div>