# Blog Paginated Block Documentation

## Overview

The Blog Paginated block is a comprehensive blog listing component designed for paginated content display. It integrates with Statamic's collection system to provide automated post listing with responsive grid layouts, pagination controls, and flexible content presentation.

## Purpose and Use Cases

### Primary Use Cases
- **Blog listing pages** with paginated navigation
- **News sections** with chronological content
- **Article archives** with organized display
- **Content collections** with structured browsing
- **Portfolio showcases** with project listings

### Design Philosophy
The Blog Paginated block prioritizes content discoverability through clean grid layouts, efficient pagination, and responsive design that works across all device sizes while maintaining fast loading performance.

## Component Structure

### HTML Architecture
```html
<div class="wrapper blog-paginated-wrapper">
    <section class="block blog-paginated-block">
        <div class="container blog-paginated-container py-8">
            
            <!-- Posts Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-y-12 gap-8">
                <!-- Entry Posts Components -->
            </div>
            
            <!-- Pagination Controls -->
            <x-pagination class="mt-20" :$paginate />
            
        </div>
    </section>
</div>
```

## CSS Classes Reference

### Container Classes

#### `.blog-paginated-wrapper`
- **Purpose**: Outermost container for the blog section
- **Tailwind Classes**: `wrapper` + custom classes from block settings
- **Customization**: Add full-width backgrounds, borders, or section styling
- **Usage**: Section-wide visual modifications

#### `.blog-paginated-block`
- **Purpose**: Main semantic container
- **Tailwind Classes**: `block`
- **Default Styling**:
  ```css
  .blog-paginated-block {
    display: block;
  }
  ```
- **Note**: No default background to allow flexible theming

#### `.blog-paginated-container`
- **Purpose**: Content width and spacing container
- **Tailwind Classes**: `container py-8`
- **Default Styling**:
  ```css
  .blog-paginated-container {
    max-width: responsive; /* container */
    padding-top: 2rem;     /* py-8 */
    padding-bottom: 2rem;  /* py-8 */
  }
  ```

### Grid Layout Classes

#### Posts Grid Container
- **Purpose**: Responsive grid for blog post entries
- **Tailwind Classes**: `grid grid-cols-1 lg:grid-cols-3 gap-y-12 gap-8`
- **Default Styling**:
  ```css
  .posts-grid {
    display: grid;                    /* grid */
    grid-template-columns: 1fr;       /* grid-cols-1 */
    row-gap: 3rem;                   /* gap-y-12 */
    column-gap: 2rem;                /* gap-8 */
  }
  
  @media (min-width: 1024px) {
    .posts-grid {
      grid-template-columns: repeat(3, 1fr); /* lg:grid-cols-3 */
    }
  }
  ```

### Pagination Classes

#### Pagination Component
- **Purpose**: Navigation controls for paginated content
- **Tailwind Classes**: `mt-20`
- **Default Styling**:
  ```css
  .pagination-wrapper {
    margin-top: 5rem; /* mt-20 */
  }
  ```
- **Component**: Uses `<x-pagination>` component for styling

## Statamic Collection Integration

### Collection Query
```blade
<s:collection
    from="posts"
    paginate="true"
    :limit="$block->limit"
    on_each_side="1"
    as="posts"
>
```

### Query Parameters
- **from**: Collection handle ("posts")
- **paginate**: Enable pagination (true)
- **limit**: Posts per page (configurable)
- **on_each_side**: Pagination context pages (1)
- **as**: Variable name for results ("posts")

### Content Processing
```blade
@isset($posts)
    @foreach ($posts as $post)
        <x-entry-posts
            :image="$post->preview_image"
            :url="$post->url"
            :title="$post->title"
            :excerpt="$post->excerpt"
            :date="$post->date"
            :categories="$post->categories"
        />
    @endforeach
@endisset
```

## Entry Posts Component

### Component Properties
- **image**: Post preview image asset
- **url**: Post permalink URL
- **title**: Post title string
- **excerpt**: Post excerpt/summary
- **date**: Publication date
- **categories**: Post category taxonomy

### Component Structure
The `<x-entry-posts>` component handles:
- **Image Display**: Responsive preview images
- **Typography**: Consistent title and excerpt styling
- **Metadata**: Date and category information
- **Links**: Proper URL handling
- **Accessibility**: Semantic markup

## Content Fields

### Available Fields
- **limit** (Number): Posts per page (default: 12)
- **collection** (Collection): Target collection (default: "posts")
- **sort_by** (Select): Sorting criteria (future enhancement)
- **filter_by** (Select): Content filtering options (future enhancement)

### Field Configuration
```yaml
# Blueprint configuration
limit:
  type: number
  default: 12
  min: 1
  max: 48
  instructions: 'Number of posts to display per page'

collection:
  type: collection
  default: posts
  instructions: 'Collection to display posts from'
```

## Block Settings Integration

### Custom Classes
```php
{{ $block->block_settings->block_classes ?? '' }}      // Applied to .blog-paginated-wrapper
{{ $block->block_settings->container_classes ?? '' }}  // Applied to .blog-paginated-container
```

### Inline Styles
```php
{{ $block->block_settings->block_styles ?? '' }}      // Applied to .blog-paginated-block
{{ $block->block_settings->container_styles ?? '' }}  // Applied to .blog-paginated-container
```

## Responsive Behavior

### Grid Breakpoints
```css
/* Mobile (default) */
.posts-grid {
  grid-template-columns: 1fr;
  row-gap: 3rem;
  column-gap: 2rem;
}

/* Desktop (1024px+) */
@media (min-width: 1024px) {
  .posts-grid {
    grid-template-columns: repeat(3, 1fr);
  }
}
```

### Intermediate Breakpoints
```css
/* Tablet (768px+) */
@media (min-width: 768px) {
  .posts-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
```

## Pagination System

### Pagination Component Features
- **Navigation**: Previous/Next links
- **Page Numbers**: Numbered pagination
- **Context**: Shows current page and total
- **Accessibility**: Proper ARIA labels
- **Responsive**: Adapts to mobile screens

### Pagination Variables
```php
@isset($paginate)
    // Available pagination data:
    // $paginate->currentPage
    // $paginate->totalPages  
    // $paginate->hasPages
    // $paginate->links()
@endisset
```

## Customization Examples

### 1. Two Column Grid
```html
<div class="grid grid-cols-1 md:grid-cols-2 gap-y-12 gap-8">
```

### 2. Four Column Grid (Desktop)
```html
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-12 gap-8">
```

### 3. Compact Spacing
```html
<div class="grid grid-cols-1 lg:grid-cols-3 gap-y-8 gap-6">
```

### 4. List Layout (Single Column)
```html
<div class="flex flex-col gap-8">
```

### 5. Custom Pagination Spacing
```html
<x-pagination class="mt-12" :$paginate />
```

## Collection Customization

### Different Collection
```blade
<s:collection
    from="news"
    paginate="true"
    :limit="$block->limit"
    as="articles"
>
```

### Custom Sorting
```blade
<s:collection
    from="posts"
    sort="date:desc"
    paginate="true"
    :limit="$block->limit"
    as="posts"
>
```

### Filtered Content
```blade
<s:collection
    from="posts"
    where="featured:true"
    paginate="true"
    :limit="$block->limit"
    as="posts"
>
```

## Performance Considerations

### Collection Caching
- **Statamic Caching**: Collections are cached automatically
- **Image Optimization**: Entry images use lazy loading
- **Pagination**: Efficient database queries
- **Content**: Excerpts prevent large content loading

### Loading Optimization
- **Eager Loading**: Images loaded with proper dimensions
- **Progressive Enhancement**: Works without JavaScript
- **Critical CSS**: Above-fold content styled immediately
- **Lazy Images**: Below-fold images load on demand

## SEO Considerations

### Pagination SEO
- **Canonical URLs**: Proper canonical tags for paginated content
- **Prev/Next**: Pagination relationship tags
- **Meta Tags**: Appropriate meta descriptions
- **Structured Data**: Article schema markup

### Content Structure
- **Semantic HTML**: Proper heading hierarchy
- **Image Alt Text**: Descriptive alt attributes
- **URL Structure**: Clean, descriptive URLs
- **Content Sampling**: Proper excerpt handling

## Entry Posts Component Integration

### Required Fields
Every entry should have:
- **title**: Post title (required)
- **url**: Generated permalink (automatic)
- **date**: Publication date (required)
- **preview_image**: Featured image (recommended)
- **excerpt**: Content summary (recommended)
- **categories**: Taxonomy relationships (optional)

### Component Styling
The Entry Posts component includes:
- **Card Layout**: Consistent card presentation
- **Image Handling**: Responsive image display
- **Typography**: Hierarchical text styling
- **Hover Effects**: Interactive feedback
- **Link Areas**: Proper clickable regions

## Best Practices

### Content Guidelines
1. **Excerpts**: Write compelling post summaries
2. **Images**: Use consistent aspect ratios for preview images
3. **Categories**: Organize content with relevant taxonomies
4. **Titles**: Keep titles concise and descriptive
5. **Publishing**: Maintain regular publishing schedule

### Technical Guidelines
1. **Performance**: Optimize preview images for web
2. **Pagination**: Choose appropriate page limits (12-24 posts)
3. **Caching**: Leverage Statamic's caching features
4. **Mobile**: Test grid layouts on mobile devices
5. **Loading**: Monitor page load times with many posts

### Design Guidelines
1. **Consistency**: Maintain uniform card styling
2. **Spacing**: Use consistent gaps throughout
3. **Hierarchy**: Clear visual hierarchy for content
4. **Navigation**: Intuitive pagination controls
5. **Responsive**: Ensure layouts work on all screens

## Troubleshooting

### Common Issues

**Issue**: No posts displaying
**Solution**: Verify collection exists and has published entries

**Issue**: Pagination not working
**Solution**: Check collection query syntax and limit settings

**Issue**: Grid layout broken on mobile
**Solution**: Verify responsive grid classes are applied

**Issue**: Images not loading
**Solution**: Check asset URLs and Entry Posts component

**Issue**: Poor performance with many posts
**Solution**: Optimize images and consider reducing page limit

## Advanced Features

### Custom Post Types
```blade
<s:collection
    from="{{ $block->collection ?? 'posts' }}"
    paginate="true"
    :limit="$block->limit"
    as="entries"
>
```

### Dynamic Grid Columns
```php
@php
$columns = $block->columns ?? 3;
$gridClass = "grid-cols-1 lg:grid-cols-{$columns}";
@endphp

<div class="grid {{ $gridClass }} gap-y-12 gap-8">
```

### Conditional Content Display
```blade
@if(count($posts) > 0)
    <!-- Display posts grid -->
@else
    <div class="text-center py-16">
        <p class="text-foreground-secondary">No posts found.</p>
    </div>
@endif
```

### Search Integration
```blade
<s:collection
    from="posts"
    :search="request('q')"
    paginate="true"
    :limit="$block->limit"
    as="posts"
>
```

## Collection Requirements

### Post Collection Structure
```yaml
# collections/posts.yaml
title: Posts
route: '/blog/{slug}'
date: true
sort_dir: desc
blueprints:
  - post
```

### Post Blueprint Fields
```yaml
# blueprints/collections/posts/post.yaml
fields:
  - title
  - slug
  - date
  - excerpt
  - preview_image
  - content
  - categories
```

---

*This documentation covers the Blog Paginated block version 1.0. The system provides efficient blog listing with responsive layouts and integrated pagination controls.*