# 🚀 Statamic Block-Based Template

A modern, flexible Statamic template designed for rapid website development with a powerful block-based content system and live theme customization directly from the control panel.

## ✨ Features

### 🧱 **Block-Based Content System**
- **Flexible Content Blocks**: Create rich, dynamic pages using pre-built content blocks
- **Modular Architecture**: Easy-to-extend component system with reusable Blade components
- **Simple Hero Block**: Perfect for landing pages and featured content
- **Article Block**: Rich content with full typography support
- **Dynamic Block Renderer**: Automatically renders blocks with fallback support

### 🎨 **Live Theme Customization**
- **Real-time Theme Editor**: Modify colors, typography, and spacing directly from Statamic's control panel
- **Tailwind 4 Integration**: Built with modern CSS variables and utility-first approach
- **Comprehensive Color System**: Primary, semantic (success, error, warning, info), and UI colors with hover states
- **Typography Control**: Configure font families, sizes, and weights
- **Dark Mode Ready**: Full dark theme support with separate color schemes

### 🛠 **Developer Experience**
- **Modern Tech Stack**: Laravel + Statamic 6 + Tailwind 4 + Vite
- **Component Library**: Pre-built components (Button, Heading, Text, Picture, Article)
- **CSS Variables System**: Dynamic theme variables with HEX color support
- **Responsive Design**: Mobile-first approach with consistent spacing and layout
- **SEO Optimized**: Built-in SEO partials and meta tag management

### 📱 **UI Components**
- **Button Component**: Multiple variants (primary, secondary, success, destructive, info, warning, outline, ghost, link) with hover effects
- **Typography Components**: Heading and text components with size variations
- **Picture Component**: Optimized image handling with Statamic's Glide integration and WebP support
- **Article Component**: Rich content rendering with proper typography hierarchy

## 🚀 Quick Start

1. **Clone the repository**
   ```bash
   git clone [repository-url]
   cd base_template_statamic
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Setup environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Start development**
   ```bash
   npm run dev
   php artisan serve
   ```

5. **Access the control panel**
   - Visit `/cp` and create your admin user
   - Go to **Globals → Theme Settings** to customize your theme

## 🎯 Usage

### Creating Content Blocks

1. **Edit a page** in the control panel
2. **Add blocks** using the Blocks field
3. **Choose from available blocks**:
   - **Simple Hero**: Perfect for page headers with heading, text, buttons, and image
   - **Article**: Rich content blocks for long-form content

### Customizing the Theme

Navigate to **Globals → Theme Settings** and customize:

- **Colors Tab**: Background, text, brand, semantic, and UI colors
- **Typography Tab**: Font families and sizes
- **Spacing & Layout Tab**: Border radius and shadow values  
- **Animation Tab**: Transition durations and z-index layers

Changes are applied instantly across your entire website!

### Adding New Blocks

1. Create a new fieldset in `resources/fieldsets/`
2. Add the block template in `resources/views/blocks/`
3. Create any needed components in `resources/views/components/`
4. Update the blocks fieldset to include your new block

## 📁 Project Structure

```
resources/
├── views/
│   ├── components/          # Reusable Blade components
│   │   ├── button.blade.php
│   │   ├── heading.blade.php
│   │   ├── text.blade.php
│   │   ├── picture.blade.php
│   │   └── article.blade.php
│   ├── blocks/              # Block templates
│   │   ├── simple_hero.blade.php
│   │   └── article.blade.php
│   ├── partials/
│   │   ├── blocks-renderer.blade.php
│   │   ├── theme-variables.blade.php
│   │   └── seo.blade.php
│   └── layout.blade.php
├── fieldsets/               # Content structure definitions
├── blueprints/
│   └── globals/
│       └── theme.yaml       # Theme customization fields
└── css/
    └── site.css            # Tailwind 4 with CSS variables
```

## 🛡 Requirements

- **PHP**: 8.2+
- **Node.js**: 18+
- **Statamic**: 6.0+
- **Laravel**: 11.0+


## 🎨 Theme Customization Examples

### Changing Brand Colors
```yaml
# In Control Panel: Globals → Theme Settings → Colors
primary: "#3b82f6"           # Your brand blue
primary_foreground: "#ffffff" # White text on brand color
primary_hover: "#2563eb"     # Darker blue for hover
```

### Typography Customization  
```yaml
# Configure font stacks
font_sans: "'Poppins', system-ui, sans-serif"
font_serif: "'Playfair Display', Georgia, serif"

# Adjust text sizes
font_size_base: "1.125rem"   # Larger base text
font_size_lg: "1.375rem"     # Bigger large text
```

### Adding Custom Components

Create new reusable components by adding them to `resources/views/components/`:

```blade
{{-- resources/views/components/card.blade.php --}}
@props(['title' => null, 'class' => ''])

<div {{ $attributes->class(['card', $class]) }}>
    @if($title)
        <h3 class="card__title">{{ $title }}</h3>
    @endif
    
    <div class="card__content">
        {{ $slot }}
    </div>
</div>
```

## 🔧 Advanced Configuration

### Custom CSS Variables
Add your own CSS variables to `resources/css/site.css`:

```css
:root {
    --custom-spacing: 2.5rem;
    --custom-shadow: 0 10px 25px rgb(0 0 0 / 0.15);
}
```

### Dynamic Variables
Extend `theme-variables.blade.php` to include your custom fields:

```blade
@if($theme->custom_spacing)--custom-spacing: {{ $theme->custom_spacing }};@endif
```

## 📋 Best Practices

- **Performance**: Use WebP images with the Picture component for optimal loading
- **SEO**: Always add alt texts to images and use semantic HTML structure
- **Accessibility**: Test color contrast ratios when customizing colors
- **Content**: Use the Article component for rich, long-form content
- **Consistency**: Stick to the defined color and spacing variables

## 🐛 Troubleshooting

### Theme Changes Not Applying
1. Clear Statamic caches: `php artisan cache:clear`
2. Rebuild assets: `npm run build`
3. Hard refresh browser: `Ctrl+F5` / `Cmd+Shift+R`

### Images Not Displaying
1. Check asset container configuration
2. Verify file permissions in `public/assets/`
3. Ensure Glide is working: `php artisan statamic:glide:clear`

### CSS Not Compiling
1. Check Tailwind configuration in `tailwind.config.js`
2. Verify Vite setup: `npm run dev`
3. Check for CSS syntax errors in DevTools

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## 📞 Support

- **Documentation**: [Statamic Documentation][docs]
- **Community**: [Statamic Discord][discord]
- **Issues**: [GitHub Issues](../../issues)

---

**Built with ❤️ using Statamic, Laravel, and Tailwind CSS**

[docs]: https://statamic.dev/
[discord]: https://statamic.com/discord
[contribution]: https://github.com/statamic/cms/blob/master/CONTRIBUTING.md
[cms-repo]: https://github.com/statamic/cms
