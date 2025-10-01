# Article Block Documentation

## Overview

The Article block is a clean and minimal component designed for displaying rich text content. It serves as a wrapper for the Article component system, providing a focused content area perfect for long-form text, documentation, and editorial content.

## Purpose and Use Cases

### Primary Use Cases
- **Long-form content** like blog posts and articles
- **Documentation pages** with structured content
- **About sections** with detailed company information
- **Editorial content** with rich text formatting
- **Legal pages** like privacy policies and terms

### Design Philosophy
The Article block follows a minimal, content-first approach that prioritizes readability and typography. It provides a clean container for rich content without visual distractions.

## Component Structure

### HTML Architecture
```html
<div class="wrapper article-wrapper">
    <section class="block article-section article-block">
        <div class="container article-container">
            <div class="article-content">
                <!-- Article component renders here -->
            </div>
        </div>
    </section>
</div>
```

## CSS Classes Reference

### Container Classes

#### `.article-wrapper`
- **Purpose**: Outermost container for the article section
- **Tailwind Classes**: Applied through block settings
- **Customization**: Add background colors, spacing, or layout modifications
- **Usage**: Section-wide styling and spacing control

#### `.article-block`
- **Purpose**: Main semantic container with default styling
- **Tailwind Classes**: `block article-section article-block`
- **Customization**: Override with background colors, borders, or shadows
- **Usage**: Section-level visual modifications

#### `.article-container`
- **Purpose**: Content width and spacing container
- **Tailwind Classes**: `container` + custom classes from block settings
- **Default Behavior**: 
  - Responsive max-width
  - Automatic horizontal centering
  - Standard container padding
- **Customization**: Override container width, padding, or alignment

### Content Classes

#### `.article-content`
- **Purpose**: Direct wrapper for the Article component
- **Tailwind Classes**: Base semantic class (no default Tailwind classes)
- **Default Styling**: Clean container without predefined spacing
- **Customization**: Add padding, margins, or typography modifications

## Block Settings Integration

### Custom Classes
```php
{{ $block->block_settings->block_classes ?? '' }}      // Applied to .article-wrapper
{{ $block->block_settings->container_classes ?? '' }}  // Applied to .article-container
```

### Inline Styles
```php
{{ $block->block_settings->block_styles ?? '' }}      // Applied to .article-block
{{ $block->block_settings->container_styles ?? '' }}  // Applied to .article-container
```

## Content Fields

### Available Fields
- **article** (Bard/Rich Text): Main content field using Statamic's Bard editor

### Field Validation
- **article**: Required for meaningful content display

## Integration with Article Component

The Article block renders content through the Article component (`<x-article>`), which handles:
- Rich text formatting
- Embedded media
- Button sets
- Typography hierarchy
- Content blocks

## Customization Examples

### 1. Centered Content with Max Width
```html
<div class="article-container max-w-4xl mx-auto px-6">
```

### 2. Full-Width Content
```html
<div class="article-container w-full max-w-none">
```

### 3. Narrow Reading Column
```html
<div class="article-container max-w-2xl mx-auto px-4">
```

### 4. Two-Column Layout (Desktop)
```html
<div class="article-container lg:grid lg:grid-cols-2 lg:gap-12">
```

## Best Practices

### Content Guidelines
1. **Structure**: Use proper heading hierarchy (h2, h3, h4)
2. **Readability**: Keep paragraphs short and scannable
3. **Media**: Include relevant images and media
4. **Links**: Use descriptive link text

### Technical Guidelines
1. **Performance**: Optimize embedded images
2. **SEO**: Use semantic heading structure
3. **Accessibility**: Include alt text for all images
4. **Mobile**: Test content on various screen sizes

---

*This documentation covers the Article block version 1.0. The block serves as a simple wrapper for the more complex Article component system.*