# Two Columns Block Documentation

## Overview

The Two Columns block is a versatile layout component designed for content presentation with image support. It features flexible column arrangements, responsive grid behavior, integrated card systems, and comprehensive content organization with optional image positioning.

## Purpose and Use Cases

### Primary Use Cases
- **Feature sections** with supporting imagery
- **Product showcases** with detailed descriptions
- **Service descriptions** with visual elements
- **About sections** with team photos or graphics
- **Process explanations** with step-by-step cards

### Design Philosophy
The Two Columns block balances visual impact with information density, providing flexible layouts that work across all device sizes while maintaining clear content hierarchy and engaging presentation.

## Component Structure

### HTML Architecture
```html
<div class="wrapper two-columns-wrapper">
    <section class="block bg-background two-columns-block">
        <div class="container py-8 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center two-columns-container">
            
            <!-- Left Image (when block_layout == "left") -->
            <x-picture class="w-full h-[450px] two-columns-image" />
            
            <!-- Content Column -->
            <div class="flex flex-col gap-12 two-columns-content">
                <div class="flex flex-col gap-4">
                    <h2 class="text-3xl lg:text-5xl font-medium tracking-tighter text-foreground text-balance two-columns-heading">
                        <!-- Heading -->
                    </h2>
                    <x-article class="two-columns-description" />
                    <div class="flex flex-wrap gap-4 two-columns-buttons">
                        <!-- Buttons -->
                    </div>
                </div>
                
                <!-- Optional Cards Grid -->
                <div class="w-full flex flex-col lg:grid gap-4 two-columns-cards">
                    <!-- Cards -->
                </div>
            </div>
            
            <!-- Right Image (when block_layout == "right") -->
            <x-picture class="w-full h-[450px] two-columns-image" />
            
        </div>
    </section>
</div>
```

## CSS Classes Reference

### Container Classes

#### `.two-columns-wrapper`
- **Purpose**: Outermost container for the Two Columns section
- **Tailwind Classes**: `wrapper` + custom classes from block settings
- **Customization**: Add full-width backgrounds, borders, or section styling
- **Usage**: Section-wide visual modifications

#### `.two-columns-block`
- **Purpose**: Main semantic container with default background
- **Tailwind Classes**: `block bg-background`
- **Default Styling**:
  ```css
  .two-columns-block {
    display: block;
    background-color: var(--background);
  }
  ```
- **Customization**: Override background colors, add borders or shadows

#### `.two-columns-container`
- **Purpose**: Main grid container with responsive layout
- **Tailwind Classes**: `container py-8 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center`
- **Default Styling**:
  ```css
  .two-columns-container {
    max-width: responsive;    /* container */
    padding-top: 2rem;       /* py-8 */
    padding-bottom: 2rem;    /* py-8 */
    display: grid;           /* grid */
    grid-template-columns: 1fr; /* grid-cols-1 */
    gap: 2rem;              /* gap-8 */
    align-items: center;    /* items-center */
  }
  
  @media (min-width: 1024px) {
    .two-columns-container {
      grid-template-columns: repeat(2, 1fr); /* lg:grid-cols-2 */
    }
  }
  ```

### Content Layout Classes

#### `.two-columns-content`
- **Purpose**: Main content column container
- **Tailwind Classes**: `flex flex-col gap-12`
- **Default Styling**:
  ```css
  .two-columns-content {
    display: flex;
    flex-direction: column;
    gap: 3rem; /* gap-12 */
  }
  ```

#### Content Inner Container
- **Purpose**: Groups primary content elements
- **Tailwind Classes**: `flex flex-col gap-4`
- **Default Styling**:
  ```css
  .content-inner {
    display: flex;
    flex-direction: column;
    gap: 1rem; /* gap-4 */
  }
  ```

### Typography Classes

#### `.two-columns-heading`
- **Purpose**: Main section heading
- **Tailwind Classes**: `text-3xl lg:text-5xl font-medium tracking-tighter text-foreground text-balance`
- **Default Styling**:
  ```css
  .two-columns-heading {
    font-size: 1.875rem;      /* text-3xl */
    font-weight: 500;         /* font-medium */
    letter-spacing: -0.025em; /* tracking-tighter */
    color: var(--foreground); /* text-foreground */
    text-wrap: balance;       /* text-balance */
  }
  
  @media (min-width: 1024px) {
    .two-columns-heading {
      font-size: 3rem; /* lg:text-5xl */
    }
  }
  ```

#### `.two-columns-description`
- **Purpose**: Article content styling
- **Component**: Uses `<x-article>` component
- **Inheritance**: Inherits all article typography styles
- **Customization**: Can be styled through article component CSS

### Interactive Classes

#### `.two-columns-buttons`
- **Purpose**: Button group container
- **Tailwind Classes**: `flex flex-wrap gap-4`
- **Default Styling**:
  ```css
  .two-columns-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem; /* gap-4 */
  }
  ```

### Image Classes

#### `.two-columns-image`
- **Purpose**: Image container with fixed dimensions
- **Tailwind Classes**: `w-full h-[450px]`
- **Default Styling**:
  ```css
  .two-columns-image {
    width: 100%;     /* w-full */
    height: 450px;   /* h-[450px] */
  }
  ```
- **Features**: 
  - Supports `cover` and `contain` scaling options
  - Responsive width and height controls
  - Integration with Picture component

### Cards System Classes

#### `.two-columns-cards`
- **Purpose**: Dynamic grid for card components
- **Base Classes**: `w-full flex flex-col lg:grid gap-4`
- **Dynamic Grid**: Uses inline CSS for column control
- **Default Styling**:
  ```css
  .two-columns-cards {
    width: 100%;              /* w-full */
    display: flex;            /* flex */
    flex-direction: column;   /* flex-col */
    gap: 1rem;               /* gap-4 */
  }
  
  @media (min-width: 1024px) {
    .two-columns-cards {
      display: grid;           /* lg:grid */
      grid-template-columns: repeat(var(--cards-columns, 2), minmax(0, 1fr));
    }
  }
  ```

## Block Layout Options

### Left Image Layout (`block_layout == "left"`)
- **Image Position**: Left column, content right
- **Image Scaling**: Uses `cover` attribute by default
- **Responsive**: Image stacks above content on mobile
```blade
@if($block->block_layout == "left")
    <x-picture :image="$block->image" class="w-full h-[450px] two-columns-image" cover="true" />
@endif
```

### Right Image Layout (`block_layout == "right"`)
- **Image Position**: Right column, content left
- **Image Scaling**: Respects `image_scaling` setting
- **Responsive**: Image appears below content on mobile
```blade
@if($block->block_layout == "right")
    <x-picture 
        :image="$block->image" 
        class="w-full h-[450px] two-columns-image" 
        :cover="$block->image_scaling=='cover'" 
        :contain="$block->image_scaling=='contain'"
    />
@endif
```

### Content-Only Layout (no image)
- **Full Width**: Content spans full container width
- **Centered**: Content remains in original column
- **Cards**: Still supports card grid system

## Content Fields

### Available Fields
- **heading** (Text): Main section heading
- **article** (Bard): Rich text content
- **buttons** (Replicator): Call-to-action buttons
- **image** (Asset): Featured image
- **block_layout** (Select): "left", "right", or none
- **image_scaling** (Select): "cover" or "contain"
- **image_width** (Number): Custom image width
- **image_height** (Number): Custom image height
- **cards** (Replicator): Card components
- **cards_columns** (Number): Cards grid columns (default: 2)

### Field Configuration
```yaml
# Blueprint configuration
heading:
  type: text
  instructions: 'Main heading for the section'

article:
  type: bard
  instructions: 'Rich text content'

buttons:
  type: replicator
  sets:
    button:
      fields:
        - label
        - link
        - variant
        - show_icon
        - icon

image:
  type: assets
  container: assets
  max_files: 1
  restrict: images

block_layout:
  type: select
  options:
    left: 'Image Left'
    right: 'Image Right'
  default: 'left'

cards_columns:
  type: number
  default: 2
  min: 1
  max: 4
```

## Cards Integration

### Dynamic Grid System
The cards system uses dynamic CSS grid with configurable columns:
```php
style="grid-template-columns: repeat({{ $block->cards_columns ?? 2 }}, minmax(0, 1fr));"
```

### Card Component Integration
```blade
@foreach($block->cards as $card)
    <x-card 
        :icon="$card->icon ?? null"
        :image="$card->image ?? null"
        :heading="$card->heading ?? null"
        :article="$card->article ?? null"
        :buttons="$card->buttons ?? null"
    />
@endforeach
```

### Responsive Cards Behavior
- **Mobile**: Single column stack (flex flex-col)
- **Desktop**: Grid layout with specified columns (lg:grid)
- **Gap**: Consistent 1rem spacing (gap-4)

## Responsive Behavior

### Grid Breakpoints
```css
/* Mobile (default) */
.two-columns-container {
  grid-template-columns: 1fr;
  gap: 2rem;
}

/* Desktop (1024px+) */
@media (min-width: 1024px) {
  .two-columns-container {
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem;
  }
}
```

### Content Stacking
- **Mobile**: Image above content (natural document flow)
- **Desktop**: Side-by-side layout based on `block_layout`
- **Alignment**: Centered alignment maintains visual balance

### Image Responsiveness
- **Width**: Full container width (w-full)
- **Height**: Fixed 450px height maintains aspect ratio
- **Scaling**: Configurable cover/contain behavior
- **Quality**: Picture component handles optimization

## Customization Examples

### 1. Three Column Cards Grid
```blade
<div class="w-full flex flex-col lg:grid gap-4 two-columns-cards"
     style="grid-template-columns: repeat(3, minmax(0, 1fr));">
```

### 2. Compact Image Height
```blade
<x-picture :image="$block->image" class="w-full h-[300px] two-columns-image" />
```

### 3. Full-Width Layout
```blade
<div class="container py-8 gap-8 two-columns-container">
    <!-- Remove grid classes for single column -->
</div>
```

### 4. Reverse Column Order (Mobile)
```blade
<div class="container py-8 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center flex-col-reverse lg:flex-row">
```

### 5. Custom Card Spacing
```blade
<div class="w-full flex flex-col lg:grid gap-8 two-columns-cards">
    <!-- Increased gap from 1rem to 2rem -->
</div>
```

## Image Configuration

### Scaling Options
```php
// Cover scaling (default)
:cover="$block->image_scaling=='cover'"

// Contain scaling  
:contain="$block->image_scaling=='contain'"
```

### Custom Dimensions
```php
:w="$block->image_width"   // Custom width
:h="$block->image_height"  // Custom height
```

### Picture Component Features
- **Responsive Images**: Automatic srcset generation
- **Lazy Loading**: Performance optimization
- **Format Support**: WebP/AVIF when available
- **Aspect Ratio**: Maintains proportions with scaling options

## Performance Considerations

### Image Optimization
- **Lazy Loading**: Picture component includes lazy loading
- **Format Negotiation**: Modern formats served when supported
- **Size Control**: Custom width/height prevent oversized images
- **Aspect Ratio**: Fixed heights prevent layout shift

### Content Loading
- **Progressive Enhancement**: Cards load independently
- **Component Caching**: Reusable card components
- **Minimal JavaScript**: No client-side dependencies

## Best Practices

### Content Guidelines
1. **Balance**: Maintain visual balance between image and content
2. **Hierarchy**: Use heading levels appropriately
3. **Cards**: Limit to 2-4 cards for optimal readability
4. **Images**: Use high-quality, relevant imagery
5. **Buttons**: Limit to 2-3 primary actions

### Technical Guidelines
1. **Performance**: Optimize images for web delivery
2. **Accessibility**: Provide alt text for all images
3. **Responsive**: Test layouts on various screen sizes
4. **Content**: Keep card content concise and scannable
5. **Loading**: Consider image lazy loading for performance

### Design Guidelines
1. **Consistency**: Maintain consistent spacing and typography
2. **Alignment**: Use items-center for balanced layouts
3. **Contrast**: Ensure proper contrast for text readability
4. **Whitespace**: Leverage gap classes for clean spacing
5. **Flow**: Consider content reading order on mobile

## Troubleshooting

### Common Issues

**Issue**: Grid not responsive
**Solution**: Verify Tailwind grid classes are applied correctly

**Issue**: Image not displaying correctly
**Solution**: Check image scaling settings and Picture component props

**Issue**: Cards not aligning properly
**Solution**: Verify cards_columns setting and grid CSS

**Issue**: Content overlapping on mobile
**Solution**: Adjust gap values and test mobile breakpoints

**Issue**: Poor image quality
**Solution**: Check source image resolution and Picture component settings

## Advanced Features

### Dynamic Column Control
```php
@php
$cardColumns = $block->cards_columns ?? 2;
$gridClass = "repeat({$cardColumns}, minmax(0, 1fr))";
@endphp

<div style="grid-template-columns: {{ $gridClass }};">
```

### Conditional Image Display
```blade
@if($block->image && $block->block_layout)
    <!-- Image with layout -->
@else
    <!-- Content-only layout -->
@endif
```

### Custom Image Aspect Ratios
```blade
<x-picture 
    :image="$block->image" 
    class="w-full aspect-video two-columns-image"
    cover="true"
/>
```

---

*This documentation covers the Two Columns block version 1.0. The flexible layout system adapts to various content presentation needs with integrated card systems and responsive image handling.*