# Running Logos Block Documentation

## Overview

The Running Logos block is an animated marquee component designed to showcase logos, brands, partners, or client testimonials in a continuously scrolling horizontal display. It features smooth infinite animation with gradient fade effects and Alpine.js-powered dynamic content duplication.

## Purpose and Use Cases

### Primary Use Cases
- **Partner showcases** with client logos
- **Brand galleries** displaying portfolio work  
- **Certification displays** showing credentials
- **Sponsor recognition** for events or content
- **Technology stacks** highlighting tools used

### Design Philosophy
The Running Logos block creates visual interest through motion while maintaining readability and performance. The infinite scroll effect draws attention without being overwhelming, perfect for social proof displays.

## Component Structure

### HTML Architecture
```html
<div class="wrapper marquee-wrapper">
    <section class="block bg-background marquee-block">
        <div class="container marquee-container flex flex-col gap-12 py-8">
            <h2 class="text-base font-medium text-foreground-secondary text-balance marquee-text">
                <!-- Optional descriptive text -->
            </h2>
            
            <div x-data class="relative w-full">
                <div class="relative w-full mx-auto overflow-hidden max-w-7xl">
                    <div class="absolute left-0 z-20 w-40 h-full bg-gradient-to-r from-background to-transparent marquee-left-gradient"></div>
                    <div class="absolute right-0 z-20 w-40 h-full bg-gradient-to-l from-background to-transparent marquee-right-gradient"></div>
                    
                    <div x-ref="content" class="flex animate-marquee">
                        <div x-ref="item" class="flex items-center justify-around flex-shrink-0 w-full space-x-2 marquee-inner">
                            <!-- Logo items -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
```

## CSS Classes Reference

### Container Classes

#### `.marquee-wrapper`
- **Purpose**: Outermost container for the marquee section
- **Tailwind Classes**: `wrapper` + custom classes from block settings
- **Customization**: Add full-width backgrounds, borders, or section styling
- **Usage**: Section-wide visual modifications

#### `.marquee-block`
- **Purpose**: Main semantic container with default background
- **Tailwind Classes**: `block bg-background`
- **Default Styling**:
  ```css
  .marquee-block {
    display: block;
    background-color: var(--background);
  }
  ```
- **Customization**: Override background colors, add borders or shadows

#### `.marquee-container`
- **Purpose**: Content width and layout container
- **Tailwind Classes**: `container flex flex-col gap-12 py-8`
- **Default Styling**:
  ```css
  .marquee-container {
    max-width: responsive; /* container */
    display: flex;         /* flex */
    flex-direction: column; /* flex-col */
    gap: 3rem;             /* gap-12 */
    padding-top: 2rem;     /* py-8 */
    padding-bottom: 2rem;  /* py-8 */
  }
  ```

### Typography Classes

#### `.marquee-text`
- **Purpose**: Optional descriptive text above logos
- **Tailwind Classes**: `text-base font-medium text-foreground-secondary text-balance`
- **Default Styling**:
  ```css
  .marquee-text {
    font-size: 1rem;              /* text-base */
    font-weight: 500;             /* font-medium */
    color: var(--foreground-secondary); /* text-foreground-secondary */
    text-wrap: balance;           /* text-balance */
  }
  ```

### Animation Container Classes

#### Marquee Viewport
- **Purpose**: Defines the visible area with overflow hidden
- **Tailwind Classes**: `relative w-full mx-auto overflow-hidden max-w-7xl`
- **Default Styling**:
  ```css
  .marquee-viewport {
    position: relative;    /* relative */
    width: 100%;          /* w-full */
    margin-left: auto;    /* mx-auto */
    margin-right: auto;   /* mx-auto */
    overflow: hidden;     /* overflow-hidden */
    max-width: 80rem;     /* max-w-7xl (1280px) */
  }
  ```

#### `.marquee-left-gradient`
- **Purpose**: Left fade-out gradient overlay
- **Tailwind Classes**: `absolute left-0 z-20 w-40 h-full bg-gradient-to-r from-background to-transparent`
- **Default Styling**:
  ```css
  .marquee-left-gradient {
    position: absolute;           /* absolute */
    left: 0;                     /* left-0 */
    z-index: 20;                 /* z-20 */
    width: 10rem;                /* w-40 */
    height: 100%;                /* h-full */
    background: linear-gradient(to right, var(--background), transparent);
  }
  ```

#### `.marquee-right-gradient`
- **Purpose**: Right fade-out gradient overlay
- **Tailwind Classes**: `absolute right-0 z-20 w-40 h-full bg-gradient-to-l from-background to-transparent`
- **Default Styling**:
  ```css
  .marquee-right-gradient {
    position: absolute;           /* absolute */
    right: 0;                    /* right-0 */
    z-index: 20;                 /* z-20 */
    width: 10rem;                /* w-40 */
    height: 100%;                /* h-full */
    background: linear-gradient(to left, var(--background), transparent);
  }
  ```

### Animation Classes

#### `.animate-marquee`
- **Purpose**: Container for the scrolling animation
- **Tailwind Classes**: `flex`
- **Custom Animation**:
  ```css
  .animate-marquee {
    display: flex;
    animation: marquee 20s linear infinite;
  }
  
  @keyframes marquee {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(-100%);
    }
  }
  ```

#### `.marquee-inner`
- **Purpose**: Content container that gets duplicated
- **Tailwind Classes**: `flex items-center justify-around flex-shrink-0 w-full space-x-2`
- **Default Styling**:
  ```css
  .marquee-inner {
    display: flex;           /* flex */
    align-items: center;     /* items-center */
    justify-content: space-around; /* justify-around */
    flex-shrink: 0;         /* flex-shrink-0 */
    width: 100%;            /* w-full */
  }
  
  .marquee-inner > * + * {
    margin-left: 0.5rem;    /* space-x-2 */
  }
  ```

#### `.marquee-item`
- **Purpose**: Individual logo styling
- **Tailwind Classes**: `h-12 w-12 object-contain`
- **Default Styling**:
  ```css
  .marquee-item {
    height: 3rem;        /* h-12 */
    width: 3rem;         /* w-12 */
    object-fit: contain; /* object-contain */
  }
  ```

## Alpine.js Integration

### Initialization Script
```javascript
x-data
x-init="
    $nextTick(() => {
        const content = $refs.content;
        const item = $refs.item;
        const clone = item.cloneNode(true);
        content.appendChild(clone);
    });
"
```

### Functionality
- **Content Duplication**: Clones logo container for seamless loop
- **Dynamic Loading**: Executes after DOM is ready
- **Performance**: Minimal JavaScript footprint
- **Accessibility**: Maintains semantic structure

## Content Fields

### Available Fields
- **text** (Text): Optional descriptive text above logos
- **logos** (Assets): Collection of logo images
- **animation_speed** (Number): Custom animation duration (future enhancement)
- **logo_size** (Select): Size options for logos (future enhancement)

### Field Configuration
```yaml
# Blueprint configuration
text:
  type: text
  instructions: 'Optional descriptive text above the logos'

logos:
  type: assets
  container: assets
  max_files: 20
  restrict: images
  instructions: 'Logo images to display in the marquee'
```

## Block Settings Integration

### Custom Classes
```php
{{ $block->block_settings->block_classes ?? '' }}      // Applied to .marquee-wrapper
{{ $block->block_settings->container_classes ?? '' }}  // Applied to .marquee-container
```

### Inline Styles
```php
{{ $block->block_settings->block_styles ?? '' }}      // Applied to .marquee-block
{{ $block->block_settings->container_styles ?? '' }}  // Applied to .marquee-container
```

## Animation Customization

### Speed Control
```css
/* Faster animation (10 seconds) */
.animate-marquee {
    animation: marquee 10s linear infinite;
}

/* Slower animation (30 seconds) */
.animate-marquee {
    animation: marquee 30s linear infinite;
}
```

### Direction Control
```css
/* Reverse direction */
@keyframes marquee-reverse {
    0% {
        transform: translateX(-100%);
    }
    100% {
        transform: translateX(0);
    }
}

.animate-marquee-reverse {
    animation: marquee-reverse 20s linear infinite;
}
```

### Pause on Hover
```css
.animate-marquee:hover {
    animation-play-state: paused;
}
```

## Responsive Behavior

### Logo Size Adjustments
```css
/* Mobile */
.marquee-item {
    height: 2rem;  /* h-8 */
    width: 2rem;   /* w-8 */
}

/* Tablet */
@media (min-width: 768px) {
    .marquee-item {
        height: 2.5rem; /* h-10 */
        width: 2.5rem;  /* w-10 */
    }
}

/* Desktop */
@media (min-width: 1024px) {
    .marquee-item {
        height: 3rem; /* h-12 */
        width: 3rem;  /* w-12 */
    }
}
```

### Container Width
```css
/* Mobile container */
.marquee-viewport {
    max-width: 100%;
}

/* Desktop container */
@media (min-width: 1024px) {
    .marquee-viewport {
        max-width: 80rem; /* max-w-7xl */
    }
}
```

## Customization Examples

### 1. Larger Logo Size
```html
<img class="h-16 w-16 object-contain marquee-item" />
```

### 2. Different Logo Proportions
```html
<img class="h-12 w-24 object-contain marquee-item" />
```

### 3. Custom Spacing
```html
<div class="flex items-center justify-around flex-shrink-0 w-full space-x-8 marquee-inner">
```

### 4. Vertical Marquee
```html
<div class="flex flex-col animate-marquee-vertical">
    <!-- Requires custom vertical animation -->
</div>
```

### 5. Multi-Row Display
```html
<div class="flex flex-wrap items-center justify-around flex-shrink-0 w-full gap-4 marquee-inner">
```

## Performance Considerations

### Animation Performance
- **CSS Transforms**: Uses GPU-accelerated transforms
- **Linear Animation**: Consistent frame rate
- **Cloning**: Minimal DOM manipulation
- **Content Optimization**: Compress logo images

### Image Optimization
- **Format**: Use WebP or AVIF when possible
- **Size**: Optimize images for display size
- **Loading**: Consider lazy loading for many logos
- **Caching**: Leverage browser caching for logos

## Accessibility Considerations

### Motion Preferences
```css
@media (prefers-reduced-motion: reduce) {
    .animate-marquee {
        animation: none;
    }
    
    .marquee-inner {
        overflow-x: auto;
        scroll-behavior: smooth;
    }
}
```

### Screen Readers
- **Alt Text**: Provide meaningful alt text for logos
- **ARIA Labels**: Consider aria-label for the marquee
- **Focus Management**: Ensure keyboard navigation works

## Best Practices

### Content Guidelines
1. **Logo Quality**: Use high-resolution, consistent logos
2. **Alt Text**: Provide descriptive alt text for each logo
3. **Quantity**: 8-20 logos work best for continuous flow
4. **Contrast**: Ensure logos are visible on background
5. **Branding**: Maintain consistent logo styling

### Technical Guidelines
1. **Performance**: Optimize all logo images
2. **Animation**: Keep animation smooth and not distracting
3. **Accessibility**: Respect motion preferences
4. **Loading**: Consider progressive enhancement
5. **Fallback**: Provide static display for animation failures

### Design Guidelines
1. **Consistency**: Maintain uniform logo sizes
2. **Spacing**: Ensure adequate space between logos
3. **Background**: Use gradient fades for smooth edges
4. **Speed**: Choose appropriate animation speed
5. **Alignment**: Center-align logos vertically

## Troubleshooting

### Common Issues

**Issue**: Animation not working
**Solution**: Verify Alpine.js is loaded and CSS animation is defined

**Issue**: Logos appearing distorted
**Solution**: Check object-fit property and aspect ratios

**Issue**: Poor performance on mobile
**Solution**: Optimize image sizes and consider reducing logo count

**Issue**: Animation jumping or stuttering
**Solution**: Ensure content duplication is working correctly

**Issue**: Gradient edges not visible
**Solution**: Verify background colors match the parent container

## Advanced Customization

### Custom Animation Timing
```css
.animate-marquee {
    animation: marquee var(--marquee-duration, 20s) linear infinite;
}
```

### Dynamic Logo Loading
```blade
@if($block->logos && count($block->logos) > 0)
    @foreach($block->logos as $logo)
        <img 
            src="{{ $logo->url }}" 
            alt="{{ $logo->alt }}" 
            class="h-12 w-12 object-contain marquee-item"
            loading="lazy"
        />
    @endforeach
@endif
```

### Conditional Text Display
```blade
@if($block->text)
    <h2 class="text-base font-medium text-foreground-secondary text-balance marquee-text">
        {!! $block->text !!}
    </h2>
@endif
```

---

*This documentation covers the Running Logos block version 1.0. The marquee animation creates engaging visual displays for partner showcases and brand galleries.*