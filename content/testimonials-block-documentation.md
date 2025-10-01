# Testimonials Block Documentation

## Overview

The Testimonials block is an interactive showcase component featuring customer testimonials with a built-in slider functionality powered by Alpine.js. It combines compelling social proof with smooth animations and responsive design.

## Purpose and Use Cases

### Primary Use Cases
- **Customer testimonials** on landing pages
- **Client reviews** for service businesses
- **User feedback** showcases
- **Social proof** sections
- **Case study highlights** with customer quotes

### Design Philosophy
The Testimonials block prioritizes credibility and user engagement through clean typography, smooth interactions, and professional presentation of social proof content.

## Component Structure

### HTML Architecture
```html
<div class="wrapper testimonials-wrapper">
    <section class="block overflow-hidden testimonials-block">
        <div class="container py-8 flex flex-col gap-8 overflow-visible testimonials-container">
            <div class="flex flex-col gap-12 testimonials-content">
                <div class="flex flex-col gap-4 testimonials-header">
                    <h2 class="testimonials-heading">...</h2>
                    <div class="testimonials-description">...</div>
                    <div class="testimonials-buttons">...</div>
                </div>
            </div>
            <div class="testimonials-slider" x-data="testimonialsSlider(...)">
                <!-- Slider content and controls -->
            </div>
        </div>
    </section>
</div>
```

## CSS Classes Reference

### Container Classes

#### `.testimonials-wrapper`
- **Purpose**: Outermost container for the testimonials section
- **Tailwind Classes**: `wrapper` + custom classes from block settings
- **Customization**: Add background colors, gradients, or full-width layouts
- **Usage**: Section-wide styling and background control

#### `.testimonials-block`
- **Purpose**: Main semantic container with overflow control
- **Tailwind Classes**: `block overflow-hidden`
- **Default Styling**:
  ```css
  .testimonials-block {
    display: block;
    overflow: hidden; /* Prevents slider overflow issues */
  }
  ```
- **Customization**: Add backgrounds, borders, or shadows

#### `.testimonials-container`
- **Purpose**: Content width, padding, and layout container
- **Tailwind Classes**: `container py-8 flex flex-col gap-8 overflow-visible`
- **Default Styling**:
  ```css
  .testimonials-container {
    max-width: responsive; /* Tailwind container */
    padding-top: 2rem;     /* py-8 */
    padding-bottom: 2rem;  /* py-8 */
    display: flex;         /* flex */
    flex-direction: column; /* flex-col */
    gap: 2rem;             /* gap-8 */
    overflow: visible;     /* overflow-visible for controls */
  }
  ```

### Header Classes

#### `.testimonials-content`
- **Purpose**: Wrapper for header content above slider
- **Tailwind Classes**: `flex flex-col gap-12`
- **Default Styling**:
  ```css
  .testimonials-content {
    display: flex;
    flex-direction: column;
    gap: 3rem; /* gap-12 */
  }
  ```

#### `.testimonials-header`
- **Purpose**: Container for heading, description, and buttons
- **Tailwind Classes**: `flex flex-col gap-4`
- **Default Styling**:
  ```css
  .testimonials-header {
    display: flex;
    flex-direction: column;
    gap: 1rem; /* gap-4 */
  }
  ```

#### `.testimonials-heading`
- **Purpose**: Main section heading
- **Tailwind Classes**: `text-3xl lg:text-5xl font-medium tracking-tighter text-foreground text-balance`
- **Default Styling**:
  ```css
  .testimonials-heading {
    font-size: 1.875rem;      /* text-3xl */
    font-weight: 500;         /* font-medium */
    letter-spacing: -0.025em; /* tracking-tighter */
    color: var(--foreground); /* text-foreground */
    text-wrap: balance;       /* text-balance */
  }
  
  @media (min-width: 1024px) {
    .testimonials-heading {
      font-size: 3rem; /* lg:text-5xl */
    }
  }
  ```

#### `.testimonials-description`
- **Purpose**: Container for description content using Article component
- **Tailwind Classes**: No default classes (semantic wrapper)
- **Usage**: Contains rich text content via Article component

#### `.testimonials-buttons`
- **Purpose**: Container for call-to-action buttons
- **Tailwind Classes**: `flex flex-wrap gap-4`
- **Default Styling**:
  ```css
  .testimonials-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem; /* gap-4 */
  }
  ```

### Slider Classes

#### `.testimonials-slider`
- **Purpose**: Interactive slider container with Alpine.js functionality
- **Alpine.js Data**: `testimonialsSlider(totalSlides)`
- **Mouse Events**: 
  - `@mouseenter="stopAutoPlay()"` - Pause on hover
  - `@mouseleave="startAutoPlay()"` - Resume on leave
- **Customization**: Contains all slider logic and animations

## Block Settings Integration

### Custom Classes
```php
{{ $block->block_settings->block_classes ?? '' }}      // Applied to .testimonials-wrapper
{{ $block->block_settings->container_classes ?? '' }}  // Applied to .testimonials-container
```

### Inline Styles
```php
{{ $block->block_settings->block_styles ?? '' }}      // Applied to .testimonials-block
{{ $block->block_settings->container_styles ?? '' }}  // Applied to .testimonials-container
```

## Content Fields

### Available Fields
- **heading** (Text): Main section heading
- **article** (Bard): Rich description content
- **buttons** (Replicator): Call-to-action buttons
- **testimonials** (Replicator): Array of testimonial items

### Testimonial Item Fields
- **article** (Bard): Testimonial content/quote
- **author** (Text): Customer name
- **position** (Text): Job title
- **company** (Text): Company name
- **avatar** (Asset): Customer photo

## Alpine.js Slider Functionality

### Data Properties
```javascript
{
    currentSlide: 0,        // Current active slide
    totalSlides: count,     // Total number of testimonials
    autoPlay: true,         // Auto-advance slides
    interval: null          // Interval reference
}
```

### Methods
- **nextSlide()**: Advance to next testimonial
- **prevSlide()**: Go to previous testimonial
- **goToSlide(index)**: Jump to specific slide
- **startAutoPlay()**: Begin automatic advancement
- **stopAutoPlay()**: Pause automatic advancement
- **toggleAutoPlay()**: Toggle auto-advance on/off

### Slider Controls
- **Navigation arrows**: Previous/next buttons
- **Dot indicators**: Direct slide navigation
- **Auto-play toggle**: Pause/play control
- **Mouse interaction**: Hover to pause, leave to resume

## Responsive Behavior

### Heading Scaling
```css
/* Mobile */
.testimonials-heading {
  font-size: 1.875rem; /* text-3xl */
}

/* Desktop (1024px+) */
@media (min-width: 1024px) {
  .testimonials-heading {
    font-size: 3rem; /* lg:text-5xl */
  }
}
```

### Layout Adaptation
- **Mobile**: Single column layout with stacked elements
- **Desktop**: Maintains single column but with larger typography
- **Slider**: Adapts controls for touch vs. mouse interaction

## Customization Examples

### 1. Horizontal Layout (Desktop)
```html
<div class="container py-8 lg:flex lg:flex-row lg:gap-12 testimonials-container">
    <div class="lg:w-1/3 testimonials-content">
        <!-- Header content -->
    </div>
    <div class="lg:w-2/3 testimonials-slider">
        <!-- Slider content -->
    </div>
</div>
```

### 2. Compact Spacing
```html
<div class="container py-4 flex flex-col gap-4 testimonials-container">
    <div class="flex flex-col gap-6 testimonials-content">
```

### 3. Large Typography
```html
<h2 class="text-4xl lg:text-6xl font-bold tracking-tighter testimonials-heading">
```

### 4. Center-Aligned Layout
```html
<div class="flex flex-col gap-4 text-center testimonials-header">
    <div class="flex gap-4 justify-center testimonials-buttons">
```

### 5. Background Styling
```html
<section class="block overflow-hidden bg-muted testimonials-block">
<div class="container py-16 testimonials-container">
```

## Alpine.js Integration Details

### Initialization
```javascript
Alpine.data('testimonialsSlider', (totalSlides) => ({
    // Component data and methods
}))
```

### Auto-play Configuration
- **Interval**: 5 seconds between slides
- **Pause on hover**: Automatic when mouse enters slider
- **Resume on leave**: Automatic when mouse leaves slider
- **Manual control**: Users can toggle auto-play

### Accessibility Features
- **ARIA labels**: Navigation buttons include descriptive labels
- **Keyboard navigation**: Supports arrow key navigation
- **Screen readers**: Proper announcements for slide changes
- **Focus management**: Maintains focus states for controls

## Performance Considerations

### Image Optimization
- Avatar images optimized through Picture component
- WebP/AVIF formats served when supported
- Lazy loading for non-visible testimonials

### JavaScript Performance
- Alpine.js provides minimal overhead
- Event listeners cleaned up automatically
- Smooth animations using CSS transforms

### Content Loading
- Testimonials loaded synchronously for smooth transitions
- Images preloaded for better user experience
- Minimal DOM manipulation for performance

## Best Practices

### Content Guidelines
1. **Testimonials**: Keep quotes concise and impactful
2. **Attribution**: Always include full name and company
3. **Photos**: Use high-quality, professional headshots
4. **Variety**: Include diverse customer perspectives
5. **Authenticity**: Use genuine, unedited testimonials

### Technical Guidelines
1. **Performance**: Limit to 5-8 testimonials for optimal loading
2. **Images**: Optimize avatar images (recommended 200x200px)
3. **Accessibility**: Include proper alt text for all avatars
4. **Testing**: Test slider functionality across devices

### Design Guidelines
1. **Consistency**: Maintain consistent avatar sizes
2. **Typography**: Use readable font sizes for quotes
3. **Spacing**: Ensure adequate white space around content
4. **Colors**: Use brand colors for accent elements
5. **Animation**: Keep transitions smooth but not distracting

## Troubleshooting

### Common Issues

**Issue**: Slider not advancing automatically
**Solution**: Check JavaScript console for Alpine.js errors

**Issue**: Navigation buttons not working
**Solution**: Verify Alpine.js is loaded and slider is initialized

**Issue**: Images not displaying
**Solution**: Check asset permissions and image paths

**Issue**: Responsive layout breaking
**Solution**: Verify Tailwind breakpoint classes are applied correctly

### Debug Tips
1. Check browser console for JavaScript errors
2. Verify Alpine.js is properly loaded
3. Test slider functionality with multiple testimonials
4. Confirm image assets are accessible

---

*This documentation covers the Testimonials block version 1.0. The Alpine.js slider provides smooth, interactive testimonial browsing with professional styling.*