@if($theme)
<style>
    @layer base{
        :root {
            /* Background colors */
            @if($theme->background)--color-background: {{ $theme->background }};@endif
            @if($theme->background_secondary)--color-background-secondary: {{ $theme->background_secondary }};@endif
            @if($theme->background_muted)--color-background-muted: {{ $theme->background_muted }};@endif

            /* Text colors */
            @if($theme->foreground)--color-foreground: {{ $theme->foreground }};@endif
            @if($theme->foreground_secondary)--color-foreground-secondary: {{ $theme->foreground_secondary }};@endif
            @if($theme->foreground_muted)--color-foreground-muted: {{ $theme->foreground_muted }};@endif

            /* Primary colors */
            @if($theme->primary)--color-primary: {{ $theme->primary }};@endif
            @if($theme->primary_foreground)--color-primary-foreground: {{ $theme->primary_foreground }};@endif
            @if($theme->primary_hover)--color-primary-hover: {{ $theme->primary_hover }};@endif

            /* Semantic colors */
            @if($theme->success)--color-success: {{ $theme->success }};@endif
            @if($theme->success_foreground)--color-success-foreground: {{ $theme->success_foreground }};@endif
            @if($theme->success_hover)--color-success-hover: {{ $theme->success_hover }};@endif
            @if($theme->destructive)--color-destructive: {{ $theme->destructive }};@endif
            @if($theme->destructive_foreground)--color-destructive-foreground: {{ $theme->destructive_foreground }};@endif
            @if($theme->destructive_hover)--color-destructive-hover: {{ $theme->destructive_hover }};@endif
            @if($theme->info)--color-info: {{ $theme->info }};@endif
            @if($theme->info_foreground)--color-info-foreground: {{ $theme->info_foreground }};@endif
            @if($theme->info_hover)--color-info-hover: {{ $theme->info_hover }};@endif
            @if($theme->warning)--color-warning: {{ $theme->warning }};@endif
            @if($theme->warning_foreground)--color-warning-foreground: {{ $theme->warning_foreground }};@endif
            @if($theme->warning_hover)--color-warning-hover: {{ $theme->warning_hover }};@endif

            /* UI colors */
            @if($theme->border)--color-border: {{ $theme->border }};@endif
            @if($theme->card)--color-card: {{ $theme->card }};@endif
            @if($theme->card_foreground)--color-card-foreground: {{ $theme->card_foreground }};@endif
            @if($theme->muted)--color-muted: {{ $theme->muted }};@endif
            @if($theme->muted_foreground)--color-muted-foreground: {{ $theme->muted_foreground }};@endif
            @if($theme->accent)--color-accent: {{ $theme->accent }};@endif
            @if($theme->accent_foreground)--color-accent-foreground: {{ $theme->accent_foreground }};@endif

            /* Typography */
            @if($theme->font_sans)--font-sans: {!! $theme->font_sans !!};@endif
            @if($theme->font_serif)--font-serif: {!! $theme->font_serif !!};@endif
            @if($theme->font_mono)--font-mono: {!! $theme->font_mono !!};@endif
            
            /* Font sizes - Tailwind 4 format */
            @if($theme->font_size_xs)--text-xs: {{ $theme->font_size_xs }} !important;@endif
            @if($theme->font_size_sm)--text-sm: {{ $theme->font_size_sm }} !important;@endif
            @if($theme->font_size_base)--text-base: {{ $theme->font_size_base }} !important;@endif
            @if($theme->font_size_lg)--text-lg: {{ $theme->font_size_lg }} !important;@endif
            @if($theme->font_size_xl)--text-xl: {{ $theme->font_size_xl }} !important;@endif
            @if($theme->font_size_2xl)--text-2xl: {{ $theme->font_size_2xl }} !important;@endif
            @if($theme->font_size_3xl)--text-3xl: {{ $theme->font_size_3xl }} !important;@endif
            @if($theme->font_size_4xl)--text-4xl: {{ $theme->font_size_4xl }} !important;@endif
            @if($theme->font_size_5xl)--text-5xl: {{ $theme->font_size_5xl }} !important;@endif
            @if($theme->font_size_6xl)--text-6xl: {{ $theme->font_size_6xl }} !important;@endif
            
            /* Border radius */
            @if($theme->radius_button)--radius-button: {{ $theme->radius_button }};@endif
            @if($theme->radius_input)--radius-input: {{ $theme->radius_input }};@endif
            @if($theme->radius_panel_sm)--radius-panel-sm: {{ $theme->radius_panel_sm }};@endif
            @if($theme->radius_panel_md)--radius-panel-md: {{ $theme->radius_panel_md }};@endif
            @if($theme->radius_panel_lg)--radius-panel-lg: {{ $theme->radius_panel_lg }};@endif
            
            /* Shadows */
            @if($theme->shadow_sm)--shadow-sm: {!! $theme->shadow_sm !!};@endif
            @if($theme->shadow_md)--shadow-md: {!! $theme->shadow_md !!};@endif
            @if($theme->shadow_lg)--shadow-lg: {!! $theme->shadow_lg !!};@endif
            @if($theme->shadow_xl)--shadow-xl: {!! $theme->shadow_xl !!};@endif
            
            /* Animation durations */
            @if($theme->duration_fast)--duration-fast: {{ $theme->duration_fast }};@endif
            @if($theme->duration_normal)--duration-normal: {{ $theme->duration_normal }};@endif
            @if($theme->duration_slow)--duration-slow: {{ $theme->duration_slow }};@endif
            
            /* Z-index layers */
            @if($theme->z_dropdown)--z-dropdown: {{ $theme->z_dropdown }};@endif
            @if($theme->z_modal)--z-modal: {{ $theme->z_modal }};@endif
            @if($theme->z_popover)--z-popover: {{ $theme->z_popover }};@endif
            @if($theme->z_tooltip)--z-tooltip: {{ $theme->z_tooltip }};@endif
        }

        .dark {
            /* Dark mode colors */
            @if($theme->background_dark)--color-background: {{ $theme->background_dark }};@endif
            @if($theme->background_secondary_dark)--color-background-secondary: {{ $theme->background_secondary_dark }};@endif
            @if($theme->background_muted_dark)--color-background-muted: {{ $theme->background_muted_dark }};@endif
            @if($theme->foreground_dark)--color-foreground: {{ $theme->foreground_dark }};@endif
            @if($theme->foreground_secondary_dark)--color-foreground-secondary: {{ $theme->foreground_secondary_dark }};@endif
            @if($theme->foreground_muted_dark)--color-foreground-muted: {{ $theme->foreground_muted_dark }};@endif
            @if($theme->primary_dark)--color-primary: {{ $theme->primary_dark }};@endif
            @if($theme->primary_foreground_dark)--color-primary-foreground: {{ $theme->primary_foreground_dark }};@endif
            @if($theme->border_dark)--color-border: {{ $theme->border_dark }};@endif
        }

        .light{
            @if($theme->background)--color-background: {{ $theme->background }};@endif
            @if($theme->background_secondary)--color-background-secondary: {{ $theme->background_secondary }};@endif
            @if($theme->background_muted)--color-background-muted: {{ $theme->background_muted }};@endif

            /* Text colors */
            @if($theme->foreground)--color-foreground: {{ $theme->foreground }};@endif
            @if($theme->foreground_secondary)--color-foreground-secondary: {{ $theme->foreground_secondary }};@endif
            @if($theme->foreground_muted)--color-foreground-muted: {{ $theme->foreground_muted }};@endif

            /* Primary colors */
            @if($theme->primary)--color-primary: {{ $theme->primary }};@endif
            @if($theme->primary_foreground)--color-primary-foreground: {{ $theme->primary_foreground }};@endif
            @if($theme->primary_hover)--color-primary-hover: {{ $theme->primary_hover }};@endif

            /* Semantic colors */
            @if($theme->success)--color-success: {{ $theme->success }};@endif
            @if($theme->success_foreground)--color-success-foreground: {{ $theme->success_foreground }};@endif
            @if($theme->success_hover)--color-success-hover: {{ $theme->success_hover }};@endif
            @if($theme->destructive)--color-destructive: {{ $theme->destructive }};@endif
            @if($theme->destructive_foreground)--color-destructive-foreground: {{ $theme->destructive_foreground }};@endif
            @if($theme->destructive_hover)--color-destructive-hover: {{ $theme->destructive_hover }};@endif
            @if($theme->info)--color-info: {{ $theme->info }};@endif
            @if($theme->info_foreground)--color-info-foreground: {{ $theme->info_foreground }};@endif
            @if($theme->info_hover)--color-info-hover: {{ $theme->info_hover }};@endif
            @if($theme->warning)--color-warning: {{ $theme->warning }};@endif
            @if($theme->warning_foreground)--color-warning-foreground: {{ $theme->warning_foreground }};@endif
            @if($theme->warning_hover)--color-warning-hover: {{ $theme->warning_hover }};@endif

            /* UI colors */
            @if($theme->border)--color-border: {{ $theme->border }};@endif
            @if($theme->card)--color-card: {{ $theme->card }};@endif
            @if($theme->card_foreground)--color-card-foreground: {{ $theme->card_foreground }};@endif
            @if($theme->muted)--color-muted: {{ $theme->muted }};@endif
            @if($theme->muted_foreground)--color-muted-foreground: {{ $theme->muted_foreground }};@endif
            @if($theme->accent)--color-accent: {{ $theme->accent }};@endif
            @if($theme->accent_foreground)--color-accent-foreground: {{ $theme->accent_foreground }};@endif
        }
    }
</style>
@endif