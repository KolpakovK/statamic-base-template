# Documentation Block Documentation

## Overview

The Documentation block is a specialized layout component designed for structured documentation presentation. It features a comprehensive navigation system with nested menu support, content display area, and responsive layout optimized for technical documentation and knowledge bases.

## Purpose and Use Cases

### Primary Use Cases
- **Technical documentation** with hierarchical navigation
- **Knowledge bases** with organized content sections
- **API documentation** with structured references
- **User guides** with step-by-step instructions
- **Help centers** with categorized content

### Design Philosophy
The Documentation block emphasizes content organization and navigation efficiency, providing a clean sidebar-content layout that helps users find information quickly while maintaining readability and accessibility.

## Component Structure

### HTML Architecture
```html
<div class="wrapper documentation-wrapper">
    <section class="block documentation-block">
        <div class="container documentation-container py-8">
            <div class="grid grid-cols-1 lg:grid-cols-8 gap-8">
                
                <!-- Navigation Sidebar -->
                <div class="flex flex-col gap-2 col-span-1 lg:col-span-2 documentation-navigation">
                    <!-- Navigation Menu -->
                </div>
                
                <!-- Content Area -->
                <div class="flex flex-col gap-8 col-span-1 lg:col-span-4 documentation-content">
                    <x-article :article="$block->article" />
                </div>
                
            </div>
        </div>
    </section>
</div>
```

## CSS Classes Reference

### Container Classes

#### `.documentation-wrapper`
- **Purpose**: Outermost container for the documentation section
- **Tailwind Classes**: `wrapper` + custom classes from block settings
- **Customization**: Add full-width backgrounds, borders, or section styling
- **Usage**: Section-wide visual modifications

#### `.documentation-block`
- **Purpose**: Main semantic container without default background
- **Tailwind Classes**: `block`
- **Default Styling**:
  ```css
  .documentation-block {
    display: block;
  }
  ```
- **Note**: No background applied for flexible theming

#### `.documentation-container`
- **Purpose**: Content width and spacing container
- **Tailwind Classes**: `container py-8`
- **Default Styling**:
  ```css
  .documentation-container {
    max-width: responsive; /* container */
    padding-top: 2rem;     /* py-8 */
    padding-bottom: 2rem;  /* py-8 */
  }
  ```

### Layout Grid Classes

#### Main Grid Container
- **Purpose**: Responsive grid layout for sidebar and content
- **Tailwind Classes**: `grid grid-cols-1 lg:grid-cols-8 gap-8`
- **Default Styling**:
  ```css
  .documentation-grid {
    display: grid;                    /* grid */
    grid-template-columns: 1fr;       /* grid-cols-1 */
    gap: 2rem;                       /* gap-8 */
  }
  
  @media (min-width: 1024px) {
    .documentation-grid {
      grid-template-columns: repeat(8, 1fr); /* lg:grid-cols-8 */
    }
  }
  ```

### Navigation Classes

#### `.documentation-navigation`
- **Purpose**: Sidebar navigation container
- **Tailwind Classes**: `flex flex-col gap-2 col-span-1 lg:col-span-2`
- **Default Styling**:
  ```css
  .documentation-navigation {
    display: flex;           /* flex */
    flex-direction: column;  /* flex-col */
    gap: 0.5rem;            /* gap-2 */
    grid-column: span 1;    /* col-span-1 */
  }
  
  @media (min-width: 1024px) {
    .documentation-navigation {
      grid-column: span 2;  /* lg:col-span-2 */
    }
  }
  ```

#### `.documentation-subnavigation`
- **Purpose**: Nested navigation menu container
- **Tailwind Classes**: `flex flex-col pl-4 mt-2 gap-2`
- **Default Styling**:
  ```css
  .documentation-subnavigation {
    display: flex;           /* flex */
    flex-direction: column;  /* flex-col */
    padding-left: 1rem;     /* pl-4 */
    margin-top: 0.5rem;     /* mt-2 */
    gap: 0.5rem;            /* gap-2 */
  }
  ```

### Content Classes

#### `.documentation-content`
- **Purpose**: Main content area container
- **Tailwind Classes**: `flex flex-col gap-8 col-span-1 lg:col-span-4`
- **Default Styling**:
  ```css
  .documentation-content {
    display: flex;           /* flex */
    flex-direction: column;  /* flex-col */
    gap: 2rem;              /* gap-8 */
    grid-column: span 1;    /* col-span-1 */
  }
  
  @media (min-width: 1024px) {
    .documentation-content {
      grid-column: span 4;  /* lg:col-span-4 */
    }
  }
  ```

## Navigation System

### Statamic Navigation Integration
```blade
<statamic:nav :handle="$block->navigation">
    @if($url=='#' || $url=='')
        <p class="text-sm text-foreground-muted uppercase tracking-wider pl-4">
            {{ $title }}
        </p>
    @else
        <x-button 
            :label="$title" 
            :link="$url" 
            variant="{{ $url == $current_uri ? 'ghost' : 'link' }}" 
            class="justify-start text-left w-full"
        />
    @endif
</statamic:nav>
```

### Navigation Features
- **Hierarchical Structure**: Supports nested menu items
- **Active States**: Highlights current page
- **Button Integration**: Uses Button component for styling
- **Accessibility**: Proper semantic markup

### Navigation Typography
#### Section Headers
- **Purpose**: Category/section identifiers
- **Tailwind Classes**: `text-sm text-foreground-muted uppercase tracking-wider pl-4`
- **Default Styling**:
  ```css
  .nav-section {
    font-size: 0.875rem;        /* text-sm */
    color: var(--foreground-muted); /* text-foreground-muted */
    text-transform: uppercase;   /* uppercase */
    letter-spacing: 0.1em;      /* tracking-wider */
    padding-left: 1rem;         /* pl-4 */
  }
  ```

#### Navigation Links
- **Component**: Uses `<x-button>` component
- **Variants**: `ghost` (active) or `link` (inactive)
- **Classes**: `justify-start text-left w-full`
- **Active Detection**: Compares `$url` with `$current_uri`

### Nested Navigation
```blade
@if($children && count($children) > 0)
    <div class="flex flex-col pl-4 mt-2 gap-2 documentation-subnavigation">
        @foreach($children as $child)
            <x-button 
                :label="$child['title']" 
                :link="$child['url']" 
                variant="{{ $child['url'] == $current_uri ? 'ghost' : 'link' }}" 
                class="justify-start text-left w-full"
            />
        @endforeach
    </div>
@endif
```

## Content Fields

### Available Fields
- **navigation** (Navigation): Statamic navigation handle
- **article** (Bard): Main documentation content
- **sidebar_width** (Select): Navigation column width (future enhancement)
- **show_toc** (Toggle): Table of contents display (future enhancement)

### Field Configuration
```yaml
# Blueprint configuration
navigation:
  type: nav
  instructions: 'Navigation structure for the documentation'

article:
  type: bard
  instructions: 'Main documentation content with rich text'
  sets:
    text:
      display: Text
      fields:
        - type: bard
    code:
      display: Code Block
      fields:
        - code
        - language
```

## Block Settings Integration

### Custom Classes
```php
{{ $block->block_settings->block_classes ?? '' }}      // Applied to .documentation-wrapper
{{ $block->block_settings->container_classes ?? '' }}  // Applied to .documentation-container
```

### Inline Styles
```php
{{ $block->block_settings->block_styles ?? '' }}      // Applied to .documentation-block
{{ $block->block_settings->container_styles ?? '' }}  // Applied to .documentation-container
```

## Grid Layout Breakdown

### Column Distribution
- **Navigation**: 2 columns (lg:col-span-2)
- **Content**: 4 columns (lg:col-span-4)
- **Available**: 2 columns (unused, future enhancements)

### Responsive Behavior
```css
/* Mobile (default) */
.documentation-grid {
  grid-template-columns: 1fr;
  /* Navigation stacks above content */
}

/* Desktop (1024px+) */
@media (min-width: 1024px) {
  .documentation-grid {
    grid-template-columns: repeat(8, 1fr);
    /* 2-column nav, 4-column content, 2-column available */
  }
}
```

## Customization Examples

### 1. Wider Content Area
```html
<div class="flex flex-col gap-8 col-span-1 lg:col-span-6 documentation-content">
    <!-- Expand content to 6 columns -->
</div>
```

### 2. Narrow Navigation
```html
<div class="flex flex-col gap-2 col-span-1 lg:col-span-1 documentation-navigation">
    <!-- Reduce navigation to 1 column -->
</div>
```

### 3. Full-Width Content (No Navigation)
```html
<div class="flex flex-col gap-8 col-span-1 lg:col-span-8 documentation-content">
    <!-- Content spans all 8 columns -->
</div>
```

### 4. Three-Column Layout
```html
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
    <div class="col-span-3"><!-- Navigation --></div>
    <div class="col-span-6"><!-- Content --></div>
    <div class="col-span-3"><!-- Table of Contents --></div>
</div>
```

### 5. Compact Navigation Spacing
```html
<div class="flex flex-col gap-1 col-span-1 lg:col-span-2 documentation-navigation">
    <!-- Reduced gap from 0.5rem to 0.25rem -->
</div>
```

## Navigation Setup

### Creating Navigation Structure
```yaml
# content/navigation/docs.yaml
tree:
  - entry: getting-started
    children:
      - entry: installation
      - entry: configuration
  - entry: components
    children:
      - entry: buttons
      - entry: forms
  - entry: examples
```

### Navigation Builder
Use Statamic's Navigation builder in the Control Panel:
1. Navigate to Navigation section
2. Create new navigation tree
3. Add entries and organize hierarchy
4. Reference navigation handle in block

## Article Component Integration

### Content Rendering
```blade
@if($block->article)
    <x-article :article="$block->article" />
@endif
```

### Supported Content Types
- **Rich Text**: Standard paragraph content
- **Code Blocks**: Syntax-highlighted code samples
- **Images**: Inline images with captions  
- **Lists**: Ordered and unordered lists
- **Tables**: Data tables with proper styling
- **Headings**: Hierarchical content structure

## Performance Considerations

### Navigation Caching
- **Statamic Caching**: Navigation structures are cached
- **Button Components**: Reusable button components
- **Static Navigation**: No JavaScript required
- **Efficient Queries**: Navigation data loaded once

### Content Loading
- **Progressive Enhancement**: Works without JavaScript
- **Image Optimization**: Article images use lazy loading
- **Code Highlighting**: Server-side syntax highlighting
- **Clean Markup**: Semantic HTML structure

## Accessibility Features

### Navigation Accessibility
- **Semantic Markup**: Proper navigation structure
- **Focus Management**: Keyboard navigation support
- **Active States**: Clear current page indication
- **Screen Readers**: Descriptive link text

### Content Accessibility
- **Heading Hierarchy**: Logical heading structure
- **Alt Text**: Images include descriptive alt text
- **Color Contrast**: Sufficient contrast ratios
- **Keyboard Access**: All interactive elements accessible

## Best Practices

### Content Guidelines
1. **Structure**: Use clear heading hierarchy
2. **Navigation**: Organize content logically
3. **Links**: Use descriptive link text
4. **Code**: Provide syntax highlighting and context
5. **Images**: Include alt text and captions

### Technical Guidelines
1. **Performance**: Optimize images and code blocks
2. **Caching**: Leverage navigation caching
3. **Mobile**: Ensure mobile-friendly navigation
4. **Accessibility**: Follow WCAG guidelines
5. **SEO**: Structure content for search engines

### Design Guidelines
1. **Consistency**: Maintain consistent styling
2. **Spacing**: Use appropriate gaps and padding
3. **Typography**: Clear hierarchy and readability
4. **Navigation**: Intuitive menu organization
5. **Responsive**: Test on various screen sizes

## Troubleshooting

### Common Issues

**Issue**: Navigation not displaying
**Solution**: Verify navigation handle exists and has content

**Issue**: Active states not working
**Solution**: Check current_uri variable and URL matching

**Issue**: Mobile navigation difficult to use
**Solution**: Consider mobile-specific navigation patterns

**Issue**: Content overlapping navigation
**Solution**: Verify grid column spans and responsive behavior

**Issue**: Poor mobile experience
**Solution**: Test navigation stacking and content flow

## Advanced Features

### Dynamic Navigation Width
```php
@php
$navColumns = $block->nav_width ?? 2;
$contentColumns = 8 - $navColumns;
@endphp

<div class="col-span-1 lg:col-span-{{ $navColumns }}">
<div class="col-span-1 lg:col-span-{{ $contentColumns }}">
```

### Table of Contents Generation
```blade
@if($block->show_toc)
    <div class="col-span-1 lg:col-span-2">
        <x-table-of-contents :content="$block->article" />
    </div>
@endif
```

### Search Integration
```blade
@if($block->enable_search)
    <div class="mb-4">
        <x-search-box placeholder="Search documentation..." />
    </div>
@endif
```

---

*This documentation covers the Documentation block version 1.0. The structured layout system provides comprehensive navigation and content organization for technical documentation.*