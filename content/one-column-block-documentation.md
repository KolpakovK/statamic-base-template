# One Column Block Documentation

## Overview

The One Column block is a foundational content layout component designed for single-column text presentation. It provides flexible width control, optional center alignment, and comprehensive typography support through the Article component integration.

## Purpose and Use Cases

### Primary Use Cases
- **Article content** with optimal reading width
- **Landing page copy** with centered presentation
- **Documentation sections** with consistent formatting
- **Blog posts** with readable line lengths
- **Marketing copy** with focused messaging

### Design Philosophy
The One Column block prioritizes readability through optimal line lengths, consistent vertical rhythm, and flexible width controls that adapt to various content types and presentation needs.

## Component Structure

### HTML Architecture
```html
<div class="wrapper one-column-wrapper">
    <section class="block one-column-block bg-background">
        <div class="container one-column-container py-8">
            <div class="flex flex-col gap-12 w-full mx-auto max-w-5xl">
                @if($block->heading)
                    <x-heading 
                        :level="2" 
                        :text="$block->heading" 
                        class="text-3xl lg:text-5xl font-medium tracking-tighter text-foreground text-balance" 
                    />
                @endif
                
                @if($block->article)
                    <div class="mx-auto {{ $block->center ? 'text-center max-w-3xl' : 'w-full' }}">
                        <x-article :content="$block->article" />
                    </div>
                @endif
            </div>
        </div>
    </section>
</div>
```

## CSS Classes Reference

### Container Classes

#### `.one-column-wrapper`
- **Purpose**: Outermost container for the One Column section
- **Tailwind Classes**: `wrapper` + custom classes from block settings
- **Customization**: Add full-width backgrounds, borders, or section styling
- **Usage**: Section-wide visual modifications

#### `.one-column-block`
- **Purpose**: Main semantic container with default background
- **Tailwind Classes**: `block bg-background`
- **Default Styling**:
  ```css
  .one-column-block {
    display: block;
    background-color: var(--background);
  }
  ```
- **Customization**: Override background colors, add borders or shadows

#### `.one-column-container`
- **Purpose**: Content width and spacing container
- **Tailwind Classes**: `container py-8`
- **Default Styling**:
  ```css
  .one-column-container {
    max-width: responsive; /* container */
    padding-top: 2rem;     /* py-8 */
    padding-bottom: 2rem;  /* py-8 */
  }
  ```

### Layout Classes

#### Main Content Container
- **Purpose**: Primary layout container with max-width control
- **Tailwind Classes**: `flex flex-col gap-12 w-full mx-auto max-w-5xl`
- **Default Styling**:
  ```css
  .one-column-content {
    display: flex;           /* flex */
    flex-direction: column;  /* flex-col */
    gap: 3rem;              /* gap-12 */
    width: 100%;            /* w-full */
    margin-left: auto;      /* mx-auto */
    margin-right: auto;     /* mx-auto */
    max-width: 64rem;       /* max-w-5xl (1024px) */
  }
  ```

#### Article Container (Conditional)
- **Purpose**: Article content wrapper with center alignment option
- **Base Classes**: `mx-auto`
- **Conditional Classes**: 
  - `text-center max-w-3xl` (when `$block->center` is true)
  - `w-full` (when `$block->center` is false/null)
- **Default Styling**:
  ```css
  /* Centered layout */
  .article-centered {
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    max-width: 48rem; /* max-w-3xl (768px) */
  }
  
  /* Full-width layout */
  .article-full {
    margin-left: auto;
    margin-right: auto;
    width: 100%;
  }
  ```

### Typography Classes

#### One Column Heading
- **Tailwind Classes**: `text-3xl lg:text-5xl font-medium tracking-tighter text-foreground text-balance`
- **Default Styling**:
  ```css
  .one-column-heading {
    font-size: 1.875rem;      /* text-3xl */
    font-weight: 500;         /* font-medium */
    letter-spacing: -0.025em; /* tracking-tighter */
    color: var(--foreground); /* text-foreground */
    text-wrap: balance;       /* text-balance */
  }
  
  @media (min-width: 1024px) {
    .one-column-heading {
      font-size: 3rem; /* lg:text-5xl */
    }
  }
  ```

## Content Width Control

### Max-Width Options

#### Standard Layout (max-w-5xl)
- **Width**: 64rem (1024px)
- **Use Case**: General content, articles, documentation
- **Line Length**: Optimal for mixed content types

#### Centered Layout (max-w-3xl)
- **Width**: 48rem (768px) when centered
- **Use Case**: Marketing copy, focused messaging
- **Line Length**: Optimal for reading comprehension

### Responsive Behavior
```css
/* Mobile (default) */
.one-column-content {
  max-width: 100%;
  padding-left: 1rem;
  padding-right: 1rem;
}

/* Tablet */
@media (min-width: 768px) {
  .one-column-content {
    max-width: 64rem; /* max-w-5xl */
  }
}

/* Desktop - Centered */
@media (min-width: 1024px) {
  .article-centered {
    max-width: 48rem; /* max-w-3xl */
  }
}
```

## Content Fields

### Available Fields
- **heading** (Text): Optional section heading
- **article** (Bard): Main content with rich text support
- **center** (Toggle): Enable center text alignment
- **width** (Select): Content width options (future enhancement)

### Field Configuration
```yaml
# Blueprint configuration
heading:
  type: text
  instructions: 'Optional heading for the content section'

article:
  type: bard
  instructions: 'Main content with rich text formatting'
  sets:
    text:
      display: Text
      fields:
        - type: bard

center:
  type: toggle
  default: false
  instructions: 'Center-align the content text'
```

## Block Settings Integration

### Custom Classes
```php
{{ $block->block_settings->block_classes ?? '' }}      // Applied to .one-column-wrapper
{{ $block->block_settings->container_classes ?? '' }}  // Applied to .one-column-container
```

### Inline Styles
```php
{{ $block->block_settings->block_styles ?? '' }}      // Applied to .one-column-block
{{ $block->block_settings->container_styles ?? '' }}  // Applied to .one-column-container
```

## Customization Examples

### 1. Narrow Content Width
```html
<div class="flex flex-col gap-12 w-full mx-auto max-w-2xl">
    <!-- Content limited to 42rem (672px) -->
</div>
```

### 2. Full Container Width
```html
<div class="flex flex-col gap-12 w-full">
    <!-- No max-width restriction -->
</div>
```

### 3. Compact Spacing
```html
<div class="flex flex-col gap-8 w-full mx-auto max-w-5xl">
    <!-- Reduced gap from 3rem to 2rem -->
</div>
```

### 4. Extended Spacing
```html
<div class="flex flex-col gap-16 w-full mx-auto max-w-5xl">
    <!-- Increased gap from 3rem to 4rem -->
</div>
```

### 5. Custom Background Section
```html
<section class="block one-column-block bg-card border border-border rounded-panel-lg">
    <div class="container one-column-container p-12">
        <!-- Enhanced container styling -->
    </div>
</section>
```

## Typography Integration

### Heading Component Features
- **Semantic HTML**: Uses proper heading levels (h2 default)
- **Responsive Sizing**: Scales from mobile to desktop
- **Typography Scale**: Consistent with design system
- **Text Balance**: Prevents orphaned words

### Article Component Features
- **Rich Text Support**: Full Bard editor integration
- **Nested Components**: Supports buttons, images, etc.
- **List Formatting**: Styled lists and typography
- **Link Styling**: Consistent link presentation

## Layout Variations

### Standard Article Layout
```blade
<!-- Optimal reading width, left-aligned -->
<div class="mx-auto w-full">
    <x-article :content="$block->article" />
</div>
```

### Centered Marketing Copy
```blade
<!-- Narrower width, center-aligned -->
<div class="mx-auto text-center max-w-3xl">
    <x-article :content="$block->article" />
</div>
```

### Full-Width Content
```blade
<!-- Container-wide content -->
<div class="w-full">
    <x-article :content="$block->article" />
</div>
```

## Performance Considerations

### Content Loading
- **Lazy Components**: Article component loads efficiently
- **Image Optimization**: Embedded images use lazy loading
- **Text Rendering**: Optimal font loading and display

### SEO Optimization
- **Semantic Structure**: Proper heading hierarchy
- **Content Organization**: Clear content structure
- **Reading Experience**: Optimal line lengths for engagement

## Best Practices

### Content Guidelines
1. **Line Length**: Keep content within readable limits (45-75 characters)
2. **Hierarchy**: Use headings to structure content
3. **Spacing**: Maintain consistent vertical rhythm
4. **Alignment**: Use center alignment sparingly for impact
5. **Focus**: Single column for focused reading experience

### Technical Guidelines
1. **Performance**: Minimize nested components
2. **Accessibility**: Maintain proper heading levels
3. **SEO**: Structure content with semantic HTML
4. **Responsive**: Test content flow on all screen sizes
5. **Typography**: Maintain design system consistency

### Design Guidelines
1. **Width**: Use max-width for optimal reading
2. **Spacing**: Consistent gap sizing throughout
3. **Alignment**: Choose alignment based on content type
4. **Contrast**: Ensure proper text/background contrast
5. **Hierarchy**: Clear visual hierarchy with headings

## Article Component Integration

### Bard Editor Sets
The Article component supports various content sets:
- **Text Blocks**: Standard paragraph content
- **Button Groups**: Call-to-action buttons
- **Image Blocks**: Inline images with captions
- **Quote Blocks**: Pull quotes and testimonials
- **Code Blocks**: Syntax-highlighted code samples

### Content Styling
All article content inherits the one-column styling:
- Proper spacing between elements
- Consistent typography scale
- Responsive behavior
- Theme color integration

## Troubleshooting

### Common Issues

**Issue**: Content too wide on mobile
**Solution**: Verify container classes and max-width settings

**Issue**: Poor readability with long lines
**Solution**: Use max-w-3xl or max-w-2xl for better line length

**Issue**: Inconsistent spacing
**Solution**: Check gap classes and ensure consistent usage

**Issue**: Heading hierarchy problems
**Solution**: Verify heading levels in the Heading component

**Issue**: Center alignment not working
**Solution**: Ensure `center` field is properly set and conditional classes applied

## Advanced Customization

### Custom Width Control
```blade
@php
$widthClass = match($block->width ?? 'standard') {
    'narrow' => 'max-w-2xl',
    'wide' => 'max-w-6xl',
    'full' => 'max-w-none',
    default => 'max-w-5xl'
};
@endphp

<div class="flex flex-col gap-12 w-full mx-auto {{ $widthClass }}">
```

### Dynamic Alignment
```blade
@php
$alignmentClass = $block->center ? 'text-center max-w-3xl' : 'text-left w-full';
@endphp

<div class="mx-auto {{ $alignmentClass }}">
```

### Conditional Spacing
```blade
@php
$spacingClass = $block->compact ? 'gap-8' : 'gap-12';
@endphp

<div class="flex flex-col {{ $spacingClass }} w-full mx-auto max-w-5xl">
```

---

*This documentation covers the One Column block version 1.0. The flexible layout system adapts to various content presentation needs while maintaining optimal readability.*