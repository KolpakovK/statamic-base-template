# CTA (Call to Action) Block Documentation

## Overview

The CTA block is a versatile conversion-focused component designed to drive user actions. It features multiple layout options, background styling, and flexible content arrangement in a responsive two-column grid system.

## Purpose and Use Cases

### Primary Use Cases
- **Newsletter signups** with compelling copy
- **Product promotions** with featured imagery
- **Service offerings** with clear value propositions
- **Contact forms** with persuasive messaging
- **Download prompts** for resources and guides

### Design Philosophy
The CTA block prioritizes conversion optimization through strategic layout options, compelling typography, and clear visual hierarchy that guides users toward the desired action.

## Component Structure

### HTML Architecture
```html
<div class="wrapper cta-wrapper">
    <section class="block cta-block bg-background">
        <div class="container cta-container flex flex-col gap-12 py-8">
            <div class="cta-content-column grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center">
                <div class="flex flex-col gap-12">
                    <div class="flex flex-col gap-4 cta-content">
                        <!-- Content here -->
                    </div>
                </div>
                <!-- Optional image/form column -->
            </div>
        </div>
    </section>
</div>
```

## CSS Classes Reference

### Container Classes

#### `.cta-wrapper`
- **Purpose**: Outermost container for the CTA section
- **Tailwind Classes**: `wrapper` + custom classes from block settings
- **Customization**: Add full-width backgrounds, gradients, or section styling
- **Usage**: Section-wide visual modifications

#### `.cta-block`
- **Purpose**: Main semantic container with default background
- **Tailwind Classes**: `block bg-background`
- **Default Styling**:
  ```css
  .cta-block {
    display: block;
    background-color: var(--background);
  }
  ```
- **Customization**: Override background colors, add borders or shadows

#### `.cta-container`
- **Purpose**: Content width and layout container
- **Tailwind Classes**: `container flex flex-col gap-12 py-8`
- **Conditional Classes**: `dark` (when `block_layout == 'main'`)
- **Default Styling**:
  ```css
  .cta-container {
    max-width: responsive; /* container */
    display: flex;         /* flex */
    flex-direction: column; /* flex-col */
    gap: 3rem;             /* gap-12 */
    padding-top: 2rem;     /* py-8 */
    padding-bottom: 2rem;  /* py-8 */
  }
  ```

### Layout Classes

#### `.cta-content-column`
- **Purpose**: Main grid container for content layout
- **Tailwind Classes**: `w-full grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center`
- **Conditional Classes**: 
  - `p-8 lg:py-12 lg:px-24 bg-background rounded-panel-md` (main layout)
  - `p-8 lg:py-12 lg:px-24 bg-background rounded-panel-md` (image layout)
- **Background Image**: Applied when `block_layout == 'image'`
- **Default Styling**:
  ```css
  .cta-content-column {
    width: 100%;
    display: grid;
    grid-template-columns: 1fr; /* grid-cols-1 */
    gap: 3rem; /* gap-12 */
    align-items: center; /* items-center */
  }
  
  @media (min-width: 1024px) {
    .cta-content-column {
      grid-template-columns: repeat(2, 1fr); /* lg:grid-cols-2 */
      gap: 2rem; /* lg:gap-8 */
    }
  }
  ```

#### `.cta-content`
- **Purpose**: Container for text content and buttons
- **Tailwind Classes**: `flex flex-col gap-4`
- **Default Styling**:
  ```css
  .cta-content {
    display: flex;
    flex-direction: column;
    gap: 1rem; /* gap-4 */
  }
  ```

### Typography Classes

#### CTA Heading
- **Tailwind Classes**: `text-3xl lg:text-5xl font-medium tracking-tighter text-foreground text-balance`
- **Default Styling**:
  ```css
  .cta-heading {
    font-size: 1.875rem;      /* text-3xl */
    font-weight: 500;         /* font-medium */
    letter-spacing: -0.025em; /* tracking-tighter */
    color: var(--foreground); /* text-foreground */
    text-wrap: balance;       /* text-balance */
  }
  
  @media (min-width: 1024px) {
    .cta-heading {
      font-size: 3rem; /* lg:text-5xl */
    }
  }
  ```

### Button Container
- **Tailwind Classes**: `flex flex-wrap gap-4`
- **Default Styling**:
  ```css
  .cta-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem; /* gap-4 */
  }
  ```

## Block Layout Options

### Main Layout (`block_layout == 'main'`)
- Adds `dark` class to container
- Applies padding and background: `p-8 lg:py-12 lg:px-24 bg-background rounded-panel-md`
- **Desktop Padding**: 3rem top/bottom, 6rem left/right
- **Mobile Padding**: 2rem all sides
- **Background**: Uses `--background` color with rounded corners

### Image Layout (`block_layout == 'image'`)
- Applies same padding as main layout
- Adds background image: `background-image: url('...')`
- **Background Properties**:
  ```css
  background-size: cover;
  background-position: center;
  ```
- Creates overlay effect with content

### Standard Layout (default)
- No additional padding beyond container
- Clean minimal presentation
- Content flows naturally in grid

## Block Settings Integration

### Custom Classes
```php
{{ $block->block_settings->block_classes ?? '' }}      // Applied to .cta-wrapper
{{ $block->block_settings->container_classes ?? '' }}  // Applied to .cta-container
```

### Inline Styles
```php
{{ $block->block_settings->block_styles ?? '' }}      // Applied to .cta-block
{{ $block->block_settings->container_styles ?? '' }}  // Applied to .cta-container
```

## Content Fields

### Available Fields
- **heading** (Text): Main CTA headline
- **article** (Bard): Supporting content and description
- **buttons** (Replicator): Call-to-action buttons
- **image** (Asset): Background or featured image
- **block_layout** (Select): Main, Image, or Standard layout
- **form** (Form): Optional form integration

## Responsive Behavior

### Grid System
```css
/* Mobile (default) */
.cta-content-column {
  grid-template-columns: 1fr;
  gap: 3rem;
}

/* Desktop (1024px+) */
@media (min-width: 1024px) {
  .cta-content-column {
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem;
  }
}
```

### Padding Adjustments
```css
/* Mobile Padding (Layout: Main/Image) */
.cta-content-column {
  padding: 2rem; /* p-8 */
}

/* Desktop Padding (Layout: Main/Image) */
@media (min-width: 1024px) {
  .cta-content-column {
    padding: 3rem 6rem; /* lg:py-12 lg:px-24 */
  }
}
```

## Customization Examples

### 1. Single Column Layout
```html
<div class="w-full grid grid-cols-1 gap-8 items-center cta-content-column">
```

### 2. Reverse Column Order (Desktop)
```html
<div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center cta-content-column">
    <div class="lg:order-2"><!-- Content --></div>
    <div class="lg:order-1"><!-- Image/Form --></div>
</div>
```

### 3. Vertical Center Alignment
```html
<div class="container cta-container flex flex-col gap-12 py-16 min-h-screen justify-center">
```

### 4. Compact Spacing
```html
<div class="container cta-container flex flex-col gap-8 py-4">
    <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-6 items-center">
```

### 5. Full-Width Background
```html
<section class="block cta-block bg-gradient-to-r from-primary to-primary-hover">
    <div class="container cta-container text-white">
```

## Form Integration

### Form Column
When a form is included:
```blade
@if($block->form)
    <div class="cta-form-column">
        <x-form :form="$block->form" />
    </div>
@endif
```

### Form Styling
- Inherits container styling based on layout
- Responsive grid behavior
- Proper spacing and alignment

## Performance Considerations

### Background Images
- Images processed through Statamic's Glide
- Optimized for different screen sizes
- Lazy loading applied when appropriate

### Layout Shifts
- Fixed aspect ratios prevent layout shifts
- Proper sizing for responsive images
- Consistent spacing across layouts

## Best Practices

### Content Guidelines
1. **Headlines**: Keep under 10 words for impact
2. **Copy**: Focus on benefits, not features
3. **Buttons**: Use action-oriented language
4. **Images**: High-quality, relevant visuals
5. **Forms**: Minimize required fields

### Technical Guidelines
1. **Performance**: Optimize background images
2. **Accessibility**: Ensure proper contrast ratios
3. **Mobile**: Test on various screen sizes
4. **Loading**: Consider critical CSS for above-fold CTAs

### Design Guidelines
1. **Contrast**: Ensure text readability on backgrounds
2. **Spacing**: Maintain consistent gaps
3. **Alignment**: Use grid alignment effectively
4. **Colors**: Match brand color scheme
5. **Typography**: Maintain hierarchy

## Troubleshooting

### Common Issues

**Issue**: Background image not displaying
**Solution**: Check image permissions and URL generation

**Issue**: Grid not responsive
**Solution**: Verify Tailwind grid classes are applied correctly

**Issue**: Content overlapping on mobile
**Solution**: Adjust gap sizes and padding for smaller screens

**Issue**: Poor text contrast on image backgrounds
**Solution**: Add overlay or adjust image opacity

---

*This documentation covers the CTA block version 1.0. The flexible layout system adapts to various conversion scenarios and content types.*