# Picture Block Documentation

## Overview

The Picture block is a minimal, flexible image display component designed for straightforward image presentation. It provides a clean container structure while leveraging the comprehensive Image component for optimal performance and responsive behavior.

## Purpose and Use Cases

### Primary Use Cases
- **Standalone images** in content flows
- **Gallery items** with consistent spacing
- **Decorative images** between content sections  
- **Product shots** with minimal styling
- **Featured images** in articles

### Design Philosophy
The Picture block emphasizes simplicity and performance, delegating complex image handling to the underlying Image component while providing consistent container styling.

## Component Structure

### HTML Architecture
```html
<div class="wrapper picture-wrapper">
    <section class="block picture-block bg-background">
        <div class="container picture-container py-8">
            <x-image 
                :src="$block->image" 
                :alt="$block->alt ?? ''" 
                :lazy="true" 
            />
        </div>
    </section>
</div>
```

## CSS Classes Reference

### Container Classes

#### `.picture-wrapper`
- **Purpose**: Outermost container for the Picture section
- **Tailwind Classes**: `wrapper` + custom classes from block settings
- **Customization**: Add full-width backgrounds, borders, or section styling
- **Usage**: Section-wide visual modifications

#### `.picture-block`
- **Purpose**: Main semantic container with default background
- **Tailwind Classes**: `block bg-background`
- **Default Styling**:
  ```css
  .picture-block {
    display: block;
    background-color: var(--background);
  }
  ```
- **Customization**: Override background colors, add borders or shadows

#### `.picture-container`
- **Purpose**: Content width and vertical spacing container
- **Tailwind Classes**: `container py-8`
- **Default Styling**:
  ```css
  .picture-container {
    max-width: responsive; /* container */
    padding-top: 2rem;     /* py-8 */
    padding-bottom: 2rem;  /* py-8 */
  }
  ```

### Image Component Integration

The Picture block relies entirely on the Image component (`<x-image>`) for:
- **Responsive sizing**: Automatic width/height calculations
- **Lazy loading**: Performance optimization
- **Alt text handling**: Accessibility compliance
- **Format optimization**: WebP/AVIF support
- **Aspect ratio maintenance**: Prevents layout shift

## Block Layout Options

### Standard Layout (default)
- **Container**: Standard responsive container width
- **Spacing**: 2rem top and bottom padding (`py-8`)
- **Background**: Uses `--background` CSS variable
- **Image**: Full container width with responsive behavior

### Content Integration
The Picture block integrates seamlessly with content flows:
- Inherits text alignment from parent containers
- Maintains consistent vertical rhythm
- Respects container max-widths
- Adapts to theme color schemes

## Block Settings Integration

### Custom Classes
```php
{{ $block->block_settings->block_classes ?? '' }}      // Applied to .picture-wrapper
{{ $block->block_settings->container_classes ?? '' }}  // Applied to .picture-container
```

### Inline Styles
```php
{{ $block->block_settings->block_styles ?? '' }}      // Applied to .picture-block
{{ $block->block_settings->container_styles ?? '' }}  // Applied to .picture-container
```

## Content Fields

### Available Fields
- **image** (Asset): The main image to display
- **alt** (Text): Alternative text for accessibility
- **lazy** (Boolean): Enable/disable lazy loading (default: true)

### Field Configuration
```yaml
# Blueprint configuration
image:
  type: assets
  container: assets
  max_files: 1
  restrict: images

alt:
  type: text
  instructions: 'Alternative text for screen readers and SEO'

lazy:
  type: toggle
  default: true
  instructions: 'Enable lazy loading for performance'
```

## Responsive Behavior

### Container Responsiveness
```css
/* Mobile-first container sizing */
.picture-container {
  max-width: 100%;
  padding-left: 1rem;
  padding-right: 1rem;
}

/* Tablet and up */
@media (min-width: 768px) {
  .picture-container {
    max-width: 768px;
    margin-left: auto;
    margin-right: auto;
  }
}

/* Desktop and up */
@media (min-width: 1024px) {
  .picture-container {
    max-width: 1024px;
  }
}
```

### Image Responsiveness
The Image component handles all responsive behavior:
- Automatic srcset generation
- Viewport-based sizing
- Device pixel ratio optimization
- Progressive loading

## Customization Examples

### 1. Full-Width Image
```html
<div class="container picture-container py-0 max-w-none">
    <x-image :src="$block->image" :alt="$block->alt" class="w-full h-auto" />
</div>
```

### 2. Centered with Limited Width
```html
<div class="container picture-container py-8 max-w-2xl mx-auto">
    <x-image :src="$block->image" :alt="$block->alt" class="mx-auto" />
</div>
```

### 3. Compact Spacing
```html
<div class="container picture-container py-4">
    <x-image :src="$block->image" :alt="$block->alt" />
</div>
```

### 4. Extended Spacing
```html
<div class="container picture-container py-16">
    <x-image :src="$block->image" :alt="$block->alt" />
</div>
```

### 5. Card-Style Presentation
```html
<section class="block picture-block bg-card border border-border rounded-panel-lg">
    <div class="container picture-container p-8">
        <x-image :src="$block->image" :alt="$block->alt" class="rounded-lg" />
    </div>
</section>
```

## Image Component Features

### Performance Optimizations
- **Lazy Loading**: Images load when entering viewport
- **Progressive Enhancement**: Base image loads first, then optimized versions
- **Format Negotiation**: WebP/AVIF served when supported
- **Size Optimization**: Multiple sizes generated automatically

### Accessibility Features
- **Alt Text**: Required for screen readers
- **Semantic Markup**: Proper image element structure
- **Loading Indicators**: Visual feedback during loading
- **Keyboard Navigation**: Focus management for interactive images

## Integration Patterns

### Within Content Flows
```blade
<!-- Article with images -->
<x-blocks.article :block="$articleBlock" />
<x-blocks.picture :block="$pictureBlock" />
<x-blocks.article :block="$continueArticle" />
```

### Gallery Layouts
```blade
<!-- Grid of pictures -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach($pictureBlocks as $block)
        <x-blocks.picture :block="$block" />
    @endforeach
</div>
```

### Mixed Content Sections
```blade
<!-- Hero with supporting image -->
<x-blocks.simple-hero :block="$heroBlock" />
<x-blocks.picture :block="$supportingImage" />
<x-blocks.cta :block="$ctaBlock" />
```

## Performance Considerations

### Loading Strategy
- **Above-fold images**: Load immediately
- **Below-fold images**: Lazy load by default
- **Critical images**: Preload in head
- **Background images**: Load on viewport entry

### Optimization Checklist
1. **Image Sizing**: Upload appropriately sized source images
2. **Compression**: Use optimized formats (WebP, AVIF)
3. **Alt Text**: Always provide meaningful descriptions
4. **Loading**: Enable lazy loading for performance
5. **Caching**: Leverage Statamic's asset caching

## Best Practices

### Content Guidelines
1. **Alt Text**: Describe image content and context
2. **File Names**: Use descriptive, SEO-friendly names
3. **Sizing**: Upload high-quality source images
4. **Format**: Use modern image formats when possible
5. **Context**: Consider image placement in content flow

### Technical Guidelines
1. **Performance**: Always use lazy loading unless critical
2. **Accessibility**: Provide comprehensive alt text
3. **SEO**: Use descriptive file names and alt text
4. **Responsive**: Let the Image component handle sizing
5. **Caching**: Configure appropriate cache headers

### Design Guidelines
1. **Consistency**: Maintain spacing standards
2. **Alignment**: Use container classes for positioning
3. **Quality**: Ensure high-resolution source images
4. **Context**: Match image style to content theme
5. **Loading**: Provide visual feedback during loading

## Troubleshooting

### Common Issues

**Issue**: Image not displaying
**Solution**: Check file permissions and asset URL generation

**Issue**: Poor performance on mobile
**Solution**: Ensure lazy loading is enabled and source images are optimized

**Issue**: Layout shifts during loading
**Solution**: Specify image dimensions or aspect ratios

**Issue**: Images not responsive
**Solution**: Verify the Image component is handling responsive behavior

**Issue**: Missing alt text warnings
**Solution**: Always provide alt text, even if empty for decorative images

## Image Component API

### Properties
```php
// Required
:src="$asset"           // Statamic Asset object

// Optional  
:alt="string"           // Alternative text
:lazy="boolean"         // Enable lazy loading (default: true)
:class="string"         // Additional CSS classes
:width="integer"        // Fixed width override
:height="integer"       // Fixed height override
:quality="integer"      // Image quality (1-100)
```

### Example Usage
```blade
<x-image 
    :src="$block->image" 
    :alt="$block->alt ?? 'Decorative image'"
    :lazy="false"
    class="rounded-lg shadow-lg"
    quality="85"
/>
```

---

*This documentation covers the Picture block version 1.0. The minimal design focuses on performance and flexibility through the underlying Image component system.*