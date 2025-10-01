---
id: 0f14c7c8-0035-4b85-9940-a110b36bb431
blueprint: page
title: 'Blog Grid'
blocks:
  -
    id: mg7u4e5a
    navigation: documentation_navigation
    article:
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Blog Grid Block Documentation'
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: Overview
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: "The Blog Grid block is a flexible content display component that showcases blog posts in a responsive grid layout. It supports multiple query types and automatically handles different screen sizes with Tailwind's responsive grid system."
      -
        type: heading
        attrs:
          textAlign: null
          level: 4
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Purpose and Use Cases'
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Primary Use Cases'
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Blog post listings'
                  -
                    type: text
                    text: ' on homepage or blog pages'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Featured content'
                  -
                    type: text
                    text: ' showcases'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Latest articles'
                  -
                    type: text
                    text: ' sections'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Custom post collections'
                  -
                    type: text
                    text: ' with specific criteria'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'News and updates'
                  -
                    type: text
                    text: ' grid displays'
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Design Philosophy'
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            text: 'The Blog Grid uses a mobile-first responsive approach, displaying single column on mobile and expanding to a three-column grid on larger screens for optimal content discovery.'
      -
        type: heading
        attrs:
          textAlign: null
          level: 4
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Component Structure'
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'HTML Architecture'
      -
        type: codeBlock
        attrs:
          language: html
        content:
          -
            type: text
            text: |
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
      -
        type: heading
        attrs:
          textAlign: null
          level: 4
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'CSS Classes Reference'
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Container Classes'
      -
        type: heading
        attrs:
          textAlign: null
          level: 4
        content:
          -
            type: text
            marks:
              -
                type: code
            text: .blog-grid-wrapper
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Purpose
                  -
                    type: text
                    text: ': Outermost container for the blog grid section'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Tailwind Classes'
                  -
                    type: text
                    text: ': '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: wrapper
                  -
                    type: text
                    text: ' + custom classes from block settings'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Customization
                  -
                    type: text
                    text: ': Add background colors, full-width layouts, or spacing'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Usage
                  -
                    type: text
                    text: ': Section-wide styling and background control'
      -
        type: heading
        attrs:
          textAlign: null
          level: 4
        content:
          -
            type: text
            marks:
              -
                type: code
            text: .blog-grid-block
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Purpose
                  -
                    type: text
                    text: ': Main semantic container for the grid'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Tailwind Classes'
                  -
                    type: text
                    text: ': '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: 'block blog-grid'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Customization
                  -
                    type: text
                    text: ': Override with background colors, borders, or shadows'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Usage
                  -
                    type: text
                    text: ': Section-level visual modifications'
      -
        type: heading
        attrs:
          textAlign: null
          level: 4
        content:
          -
            type: text
            marks:
              -
                type: code
            text: .blog-grid-container
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Purpose
                  -
                    type: text
                    text: ': Content width and padding container'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Tailwind Classes'
                  -
                    type: text
                    text: ': '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: 'container py-8'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Default Styling'
                  -
                    type: text
                    text: ':'
              -
                type: codeBlock
                attrs:
                  language: css
                content:
                  -
                    type: text
                    text: |
                      .blog-grid-container {
                        max-width: responsive; /* Tailwind container */
                        padding-top: 2rem;     /* py-8 */
                        padding-bottom: 2rem;  /* py-8 */
                        margin: 0 auto;        /* container centering */
                      }
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Customization
                  -
                    type: text
                    text: ': Adjust padding, margins, or max-width'
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Grid Classes'
      -
        type: heading
        attrs:
          textAlign: null
          level: 4
        content:
          -
            type: text
            marks:
              -
                type: code
            text: .blog-grid-list
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Purpose
                  -
                    type: text
                    text: ': CSS Grid container for blog entries'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Tailwind Classes'
                  -
                    type: text
                    text: ': '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: 'grid grid-cols-1 lg:grid-cols-3 gap-8'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Default Responsive Behavior'
                  -
                    type: text
                    text: ':'
              -
                type: codeBlock
                attrs:
                  language: css
                content:
                  -
                    type: text
                    text: |
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
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Customization
                  -
                    type: text
                    text: ': Change column counts, gaps, or add tablet breakpoints'
      -
        type: heading
        attrs:
          textAlign: null
          level: 4
        content:
          -
            type: text
            marks:
              -
                type: code
            text: .blog-grid-item
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Purpose
                  -
                    type: text
                    text: ': Individual wrapper for each blog entry'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Tailwind Classes'
                  -
                    type: text
                    text: ': No default classes (semantic wrapper)'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Usage
                  -
                    type: text
                    text: ': Add hover effects, shadows, or individual item styling'
      -
        type: heading
        attrs:
          textAlign: null
          level: 4
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Block Settings Integration'
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Custom Classes'
      -
        type: codeBlock
        attrs:
          language: php
        content:
          -
            type: text
            text: |
              {{ $block->block_settings->block_classes ?? '' }}      // Applied to .blog-grid-wrapper
              {{ $block->block_settings->container_classes ?? '' }}  // Applied to .blog-grid-container
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Inline Styles'
      -
        type: codeBlock
        attrs:
          language: php
        content:
          -
            type: text
            text: |
              {{ $block->block_settings->block_styles ?? '' }}      // Applied to .blog-grid-block
              {{ $block->block_settings->container_styles ?? '' }}  // Applied to .blog-grid-container
      -
        type: heading
        attrs:
          textAlign: null
          level: 4
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Content Fields and Query Types'
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Available Query Types'
      -
        type: heading
        attrs:
          textAlign: null
          level: 6
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Custom Selection'
      -
        type: codeBlock
        attrs:
          language: php
        content:
          -
            type: text
            text: |
              @if ($block->query->value() === 'custom')
                  @php($entries = $block->entries)
              @endif
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Manually selected posts'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Full control over content'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Custom ordering'
      -
        type: heading
        attrs:
          textAlign: null
          level: 6
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Latest Posts'
      -
        type: codeBlock
        attrs:
          language: php
        content:
          -
            type: text
            text: |
              @elseif ($block->query->value() === 'latest')
                  @php($entries = Statamic::tag('collection:posts')->limit($block->limit)->sort('date:desc')->fetch())
              @endif
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Automatically pulls recent posts'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Date-based sorting'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Configurable limit'
      -
        type: heading
        attrs:
          textAlign: null
          level: 6
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Featured Posts'
      -
        type: codeBlock
        attrs:
          language: php
        content:
          -
            type: text
            text: |
              @elseif ($block->query->value() === 'featured')
                  @php($entries = Statamic::tag('collection:posts')->limit($block->limit)->featured()->sort('order')->fetch())
              @endif
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Curated featured content'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Order-based sorting'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Editorial control'
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Configuration Fields'
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: query
                  -
                    type: text
                    text: ' (Select): Custom, Latest, or Featured'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: limit
                  -
                    type: text
                    text: ' (Integer): Number of posts to display'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: entries
                  -
                    type: text
                    text: ' (Collection): Manual post selection (Custom query only)'
      -
        type: heading
        attrs:
          textAlign: null
          level: 4
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Responsive Behavior'
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Breakpoint Strategy'
      -
        type: codeBlock
        attrs:
          language: css
        content:
          -
            type: text
            text: |
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
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Gap Management'
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Mobile
                  -
                    type: text
                    text: ': 2rem gap ('
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: gap-8
                  -
                    type: text
                    text: ') for comfortable spacing'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Desktop
                  -
                    type: text
                    text: ': Same 2rem gap maintains consistency'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Customization
                  -
                    type: text
                    text: ': Use '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: gap-4
                  -
                    type: text
                    text: ', '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: gap-6
                  -
                    type: text
                    text: ', or '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: gap-12
                  -
                    type: text
                    text: ' for different spacing'
      -
        type: heading
        attrs:
          textAlign: null
          level: 4
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Integration with Entry Component'
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'The Blog Grid uses the '
          -
            type: text
            marks:
              -
                type: code
            text: '<x-entry-posts>'
          -
            type: text
            text: ' component for individual entries:'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |
              <x-entry-posts
                  :image="$entry->preview_image"
                  :url="$entry->url"
                  :title="$entry->title"
                  :excerpt="$entry->excerpt"
                  :date="$entry->date"
              />
      -
        type: heading
        attrs:
          textAlign: null
          level: 4
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Performance Considerations'
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Image Loading'
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Entry images use lazy loading by default'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'WebP/AVIF formats served when supported'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Responsive image sizes for different screen densities'
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Query Optimization'
      -
        type: bulletList
        content:
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Limit queries to reasonable numbers (6-12 posts)'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Use pagination for larger collections'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Cache frequently accessed content'
    type: documentation
    enabled: true
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
updated_by: f9af95ec-86dd-4779-927c-e2e325f894ee
updated_at: 1759314104
---
