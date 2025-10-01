# Blog Grid Block Documentation

## Overview

The Blog Grid block is a flexible content display component that showcases blog posts in a responsive grid layout. It supports multiple query types and automatically handles different screen sizes with Tailwind's responsive grid system.

## Purpose and Use Cases

### Primary Use Cases
- **Blog post listings** on homepage or blog pages
- **Featured content** showcases
- **Latest articles** sections
- **Custom post collections** with specific criteria
- **News and updates** grid displays

### Design Philosophy
The Blog Grid uses a mobile-first responsive approach, displaying single column on mobile and expanding to a three-column grid on larger screens for optimal content discovery.

## Component Structure

### HTML Architecture
```html
<div class="wrapper blog-grid-wrapper">
    <section class="block blog-grid blog-grid-block">
        <div class="container py-8 blog-grid-container">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 blog-grid-list">
                <div class="blog-grid-item">
                    <!-- Entry component renders here -->
                </div>
            </div>
        </div>
    </section>
</div>
```

## CSS Classes Reference

### Container Classes

#### `.blog-grid-wrapper`
- **Purpose**: Outermost container for the blog grid section
- **Tailwind Classes**: `wrapper` + custom classes from block settings
- **Customization**: Add background colors, full-width layouts, or spacing
- **Usage**: Section-wide styling and background control

#### `.blog-grid-block`
- **Purpose**: Main semantic container for the grid
- **Tailwind Classes**: `block blog-grid`
- **Customization**: Override with background colors, borders, or shadows
- **Usage**: Section-level visual modifications

#### `.blog-grid-container`
- **Purpose**: Content width and padding container
- **Tailwind Classes**: `container py-8`
- **Default Styling**:
  ```css
  .blog-grid-container {
    max-width: responsive; /* Tailwind container */
    padding-top: 2rem;     /* py-8 */
    padding-bottom: 2rem;  /* py-8 */
    margin: 0 auto;        /* container centering */
  }
  ```
- **Customization**: Adjust padding, margins, or max-width

### Grid Classes

#### `.blog-grid-list`
- **Purpose**: CSS Grid container for blog entries
- **Tailwind Classes**: `grid grid-cols-1 lg:grid-cols-3 gap-8`
- **Default Responsive Behavior**:
  ```css
  .blog-grid-list {
    display: grid;
    grid-template-columns: repeat(1, minmax(0, 1fr)); /* mobile */
    gap: 2rem; /* gap-8 */
  }
  
  @media (min-width: 1024px) {
    .blog-grid-list {
      grid-template-columns: repeat(3, minmax(0, 1fr)); /* lg:grid-cols-3 */
    }
  }
  ```
- **Customization**: Change column counts, gaps, or add tablet breakpoints

#### `.blog-grid-item`
- **Purpose**: Individual wrapper for each blog entry
- **Tailwind Classes**: No default classes (semantic wrapper)
- **Usage**: Add hover effects, shadows, or individual item styling

## Block Settings Integration

### Custom Classes
```php
{{ $block->block_settings->block_classes ?? '' }}      // Applied to .blog-grid-wrapper
{{ $block->block_settings->container_classes ?? '' }}  // Applied to .blog-grid-container
```

### Inline Styles
```php
{{ $block->block_settings->block_styles ?? '' }}      // Applied to .blog-grid-block
{{ $block->block_settings->container_styles ?? '' }}  // Applied to .blog-grid-container
```

## Content Fields and Query Types

### Available Query Types

#### Custom Selection
```php
@if ($block->query->value() === 'custom')
    @php($entries = $block->entries)
@endif
```
- Manually selected posts
- Full control over content
- Custom ordering

#### Latest Posts
```php
@elseif ($block->query->value() === 'latest')
    @php($entries = Statamic::tag('collection:posts')->limit($block->limit)->sort('date:desc')->fetch())
@endif
```
- Automatically pulls recent posts
- Date-based sorting
- Configurable limit

#### Featured Posts
```php
@elseif ($block->query->value() === 'featured')
    @php($entries = Statamic::tag('collection:posts')->limit($block->limit)->featured()->sort('order')->fetch())
@endif
```
- Curated featured content
- Order-based sorting
- Editorial control

### Configuration Fields
- **query** (Select): Custom, Latest, or Featured
- **limit** (Integer): Number of posts to display
- **entries** (Collection): Manual post selection (Custom query only)

## Responsive Behavior

### Breakpoint Strategy
```css
/* Mobile (default) */
.blog-grid-list {
  grid-template-columns: 1fr;
}

/* Desktop (1024px+) */
@media (min-width: 1024px) {
  .blog-grid-list {
    grid-template-columns: repeat(3, 1fr);
  }
}
```

### Gap Management
- **Mobile**: 2rem gap (`gap-8`) for comfortable spacing
- **Desktop**: Same 2rem gap maintains consistency
- **Customization**: Use `gap-4`, `gap-6`, or `gap-12` for different spacing

## Customization Examples

### 1. Two-Column Grid
```html
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 blog-grid-list">
```

### 2. Four-Column Desktop Grid
```html
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 blog-grid-list">
```

### 3. Larger Gap Spacing
```html
<div class="grid grid-cols-1 lg:grid-cols-3 gap-12 blog-grid-list">
```

### 4. Masonry-Style Layout
```html
<div class="columns-1 lg:columns-3 gap-8 space-y-8 blog-grid-list">
```

### 5. Compact Mobile Layout
```html
<div class="container py-4 blog-grid-container">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 blog-grid-list">
```

## Integration with Entry Component

The Blog Grid uses the `<x-entry-posts>` component for individual entries:

```blade
<x-entry-posts
    :image="$entry->preview_image"
    :url="$entry->url"
    :title="$entry->title"
    :excerpt="$entry->excerpt"
    :date="$entry->date"
/>
```

## Performance Considerations

### Image Loading
- Entry images use lazy loading by default
- WebP/AVIF formats served when supported
- Responsive image sizes for different screen densities

### Query Optimization
- Limit queries to reasonable numbers (6-12 posts)
- Use pagination for larger collections
- Cache frequently accessed content

## Best Practices

### Content Guidelines
1. **Consistency**: Ensure all entries have featured images
2. **Excerpts**: Keep excerpts similar length for visual consistency
3. **Categories**: Use consistent categorization
4. **Publishing**: Maintain regular publishing schedule

### Technical Guidelines
1. **Limits**: Don't exceed 12 posts per grid for performance
2. **Images**: Use consistent aspect ratios for featured images
3. **SEO**: Include proper meta descriptions in excerpts
4. **Accessibility**: Ensure proper alt text for all images

### Design Guidelines
1. **Spacing**: Maintain consistent gap throughout site
2. **Alignment**: Keep text alignment consistent
3. **Colors**: Use consistent color scheme for metadata
4. **Typography**: Match heading sizes across entries

## Troubleshooting

### Common Issues

**Issue**: Grid items have different heights
**Solution**: Ensure consistent content length or use CSS flexbox

**Issue**: Images not loading
**Solution**: Check asset permissions and image optimization settings

**Issue**: Grid not responsive
**Solution**: Verify Tailwind breakpoint classes are correctly applied

**Issue**: Too many database queries
**Solution**: Implement proper caching and limit entry counts

---

*This documentation covers the Blog Grid block version 1.0. For pagination functionality, see the Blog Paginated block documentation.*