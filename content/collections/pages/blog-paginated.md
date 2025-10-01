---
id: 54032a22-068a-4f6e-b19b-d6ee9309a759
blueprint: page
title: 'Blog Paginated'
blocks:
  -
    id: mg7u84eg
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
            text: 'Blog Paginated Block Documentation'
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
            text: "The Blog Paginated block is a comprehensive blog listing component designed for paginated content display. It integrates with Statamic's collection system to provide automated post listing with responsive grid layouts, pagination controls, and flexible content presentation."
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
                    text: 'Blog listing pages'
                  -
                    type: text
                    text: ' with paginated navigation'
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
                    text: 'News sections'
                  -
                    type: text
                    text: ' with chronological content'
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
                    text: 'Article archives'
                  -
                    type: text
                    text: ' with organized display'
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
                    text: 'Content collections'
                  -
                    type: text
                    text: ' with structured browsing'
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
                    text: 'Portfolio showcases'
                  -
                    type: text
                    text: ' with project listings'
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
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'The Blog Paginated block prioritizes content discoverability through clean grid layouts, efficient pagination, and responsive design that works across all device sizes while maintaining fast loading performance.'
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
            text: .blog-paginated-wrapper
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
                    text: ': Outermost container for the blog section'
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
                    text: ': Add full-width backgrounds, borders, or section styling'
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
                    text: ': Section-wide visual modifications'
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
            text: .blog-paginated-block
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
                    text: ': Main semantic container'
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
                    text: block
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
                      .blog-paginated-block {
                        display: block;
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
                    text: Note
                  -
                    type: text
                    text: ': No default background to allow flexible theming'
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
            text: .blog-paginated-container
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
                    text: ': Content width and spacing container'
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
                      .blog-paginated-container {
                        max-width: responsive; /* container */
                        padding-top: 2rem;     /* py-8 */
                        padding-bottom: 2rem;  /* py-8 */
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
            text: 'Grid Layout Classes'
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
            text: 'Posts Grid Container'
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
                    text: ': Responsive grid for blog post entries'
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
                    text: 'grid grid-cols-1 lg:grid-cols-3 gap-y-12 gap-8'
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
            text: 'Pagination Classes'
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
            text: 'Pagination Component'
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
                    text: ': Navigation controls for paginated content'
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
                    text: mt-20
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
                      .pagination-wrapper {
                        margin-top: 5rem; /* mt-20 */
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
                    text: Component
                  -
                    type: text
                    text: ': Uses '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: '<x-pagination>'
                  -
                    type: text
                    text: ' component for styling'
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
            text: 'Statamic Collection Integration'
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
            text: 'Collection Query'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |
              <s:collection
                  from="posts"
                  paginate="true"
                  :limit="$block->limit"
                  on_each_side="1"
                  as="posts"
              >
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
            text: 'Query Parameters'
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
                    text: from
                  -
                    type: text
                    text: ': Collection handle ("posts")'
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
                    text: paginate
                  -
                    type: text
                    text: ': Enable pagination (true)'
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
                    text: ': Posts per page (configurable)'
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
                    text: on_each_side
                  -
                    type: text
                    text: ': Pagination context pages (1)'
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
                    text: as
                  -
                    type: text
                    text: ': Variable name for results ("posts")'
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
            text: 'Content Processing'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |
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
            text: 'Entry Posts Component'
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
            text: 'Component Properties'
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
                    text: image
                  -
                    type: text
                    text: ': Post preview image asset'
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
                    text: url
                  -
                    type: text
                    text: ': Post permalink URL'
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
                    text: title
                  -
                    type: text
                    text: ': Post title string'
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
                    text: excerpt
                  -
                    type: text
                    text: ': Post excerpt/summary'
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
                    text: date
                  -
                    type: text
                    text: ': Publication date'
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
                    text: categories
                  -
                    type: text
                    text: ': Post category taxonomy'
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
            text: 'Component Structure'
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'The '
          -
            type: text
            marks:
              -
                type: code
            text: '<x-entry-posts>'
          -
            type: text
            text: ' component handles:'
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
                    text: 'Image Display'
                  -
                    type: text
                    text: ': Responsive preview images'
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
                    text: Typography
                  -
                    type: text
                    text: ': Consistent title and excerpt styling'
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
                    text: Metadata
                  -
                    type: text
                    text: ': Date and category information'
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
                    text: Links
                  -
                    type: text
                    text: ': Proper URL handling'
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
                    text: Accessibility
                  -
                    type: text
                    text: ': Semantic markup'
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
            text: 'Content Fields'
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
            text: 'Available Fields'
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
                    text: limit
                  -
                    type: text
                    text: ' (Number): Posts per page (default: 12)'
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
                    text: collection
                  -
                    type: text
                    text: ' (Collection): Target collection (default: "posts")'
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
                    text: sort_by
                  -
                    type: text
                    text: ' (Select): Sorting criteria (future enhancement)'
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
                    text: filter_by
                  -
                    type: text
                    text: ' (Select): Content filtering options (future enhancement)'
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
            text: 'Field Configuration'
      -
        type: codeBlock
        attrs:
          language: yaml
        content:
          -
            type: text
            text: |-
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
            text: |-
              {{ $block->block_settings->block_classes ?? '' }}      // Applied to .blog-paginated-wrapper
              {{ $block->block_settings->container_classes ?? '' }}  // Applied to .blog-paginated-container
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
            text: |-
              {{ $block->block_settings->block_styles ?? '' }}      // Applied to .blog-paginated-block
              {{ $block->block_settings->container_styles ?? '' }}  // Applied to .blog-paginated-container
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
            text: 'Grid Breakpoints'
      -
        type: codeBlock
        attrs:
          language: css
        content:
          -
            type: text
            text: |
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
            text: 'Intermediate Breakpoints'
      -
        type: codeBlock
        attrs:
          language: css
        content:
          -
            type: text
            text: |
              /* Tablet (768px+) */
              @media (min-width: 768px) {
                .posts-grid {
                  grid-template-columns: repeat(2, 1fr);
                }
              }
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
            text: 'Pagination System'
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
            text: 'Pagination Component Features'
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
                    text: Navigation
                  -
                    type: text
                    text: ': Previous/Next links'
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
                    text: 'Page Numbers'
                  -
                    type: text
                    text: ': Numbered pagination'
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
                    text: Context
                  -
                    type: text
                    text: ': Shows current page and total'
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
                    text: Accessibility
                  -
                    type: text
                    text: ': Proper ARIA labels'
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
                    text: Responsive
                  -
                    type: text
                    text: ': Adapts to mobile screens'
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
            text: 'Pagination Variables'
      -
        type: codeBlock
        attrs:
          language: php
        content:
          -
            type: text
            text: |-
              @isset($paginate)
                  // Available pagination data:
                  // $paginate->currentPage
                  // $paginate->totalPages  
                  // $paginate->hasPages
                  // $paginate->links()
              @endisset
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
            text: 'Collection Customization'
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
            text: 'Different Collection'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |-
              <s:collection
                  from="news"
                  paginate="true"
                  :limit="$block->limit"
                  as="articles"
              >
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
            text: 'Custom Sorting'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |-
              <s:collection
                  from="posts"
                  sort="date:desc"
                  paginate="true"
                  :limit="$block->limit"
                  as="posts"
              >
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
            text: 'Filtered Content'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |-
              <s:collection
                  from="posts"
                  where="featured:true"
                  paginate="true"
                  :limit="$block->limit"
                  as="posts"
              >
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
            text: 'Collection Caching'
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
                    text: 'Statamic Caching'
                  -
                    type: text
                    text: ': Collections are cached automatically'
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
                    text: 'Image Optimization'
                  -
                    type: text
                    text: ': Entry images use lazy loading'
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
                    text: Pagination
                  -
                    type: text
                    text: ': Efficient database queries'
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
                    text: Content
                  -
                    type: text
                    text: ': Excerpts prevent large content loading'
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
            text: 'Loading Optimization'
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
                    text: 'Eager Loading'
                  -
                    type: text
                    text: ': Images loaded with proper dimensions'
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
                    text: 'Progressive Enhancement'
                  -
                    type: text
                    text: ': Works without JavaScript'
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
                    text: 'Critical CSS'
                  -
                    type: text
                    text: ': Above-fold content styled immediately'
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
                    text: 'Lazy Images'
                  -
                    type: text
                    text: ': Below-fold images load on demand'
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
            text: 'SEO Considerations'
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
            text: 'Pagination SEO'
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
                    text: 'Canonical URLs'
                  -
                    type: text
                    text: ': Proper canonical tags for paginated content'
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
                    text: Prev/Next
                  -
                    type: text
                    text: ': Pagination relationship tags'
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
                    text: 'Meta Tags'
                  -
                    type: text
                    text: ': Appropriate meta descriptions'
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
                    text: 'Structured Data'
                  -
                    type: text
                    text: ': Article schema markup'
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
            text: 'Content Structure'
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
                    text: 'Semantic HTML'
                  -
                    type: text
                    text: ': Proper heading hierarchy'
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
                    text: 'Image Alt Text'
                  -
                    type: text
                    text: ': Descriptive alt attributes'
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
                    text: 'URL Structure'
                  -
                    type: text
                    text: ': Clean, descriptive URLs'
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
                    text: 'Content Sampling'
                  -
                    type: text
                    text: ': Proper excerpt handling'
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
            text: 'Entry Posts Component Integration'
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
            text: 'Required Fields'
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'Every entry should have:'
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
                    text: title
                  -
                    type: text
                    text: ': Post title (required)'
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
                    text: url
                  -
                    type: text
                    text: ': Generated permalink (automatic)'
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
                    text: date
                  -
                    type: text
                    text: ': Publication date (required)'
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
                    text: preview_image
                  -
                    type: text
                    text: ': Featured image (recommended)'
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
                    text: excerpt
                  -
                    type: text
                    text: ': Content summary (recommended)'
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
                    text: categories
                  -
                    type: text
                    text: ': Taxonomy relationships (optional)'
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
            text: 'Component Styling'
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'The Entry Posts component includes:'
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
                    text: 'Card Layout'
                  -
                    type: text
                    text: ': Consistent card presentation'
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
                    text: 'Image Handling'
                  -
                    type: text
                    text: ': Responsive image display'
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
                    text: Typography
                  -
                    type: text
                    text: ': Hierarchical text styling'
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
                    text: 'Hover Effects'
                  -
                    type: text
                    text: ': Interactive feedback'
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
                    text: 'Link Areas'
                  -
                    type: text
                    text: ': Proper clickable regions'
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
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
            text: 'Advanced Features'
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
            text: 'Custom Post Types'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |-
              <s:collection
                  from="{{ $block->collection ?? 'posts' }}"
                  paginate="true"
                  :limit="$block->limit"
                  as="entries"
              >
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
            text: 'Dynamic Grid Columns'
      -
        type: codeBlock
        attrs:
          language: php
        content:
          -
            type: text
            text: |-
              @php
              $columns = $block->columns ?? 3;
              $gridClass = "grid-cols-1 lg:grid-cols-{$columns}";
              @endphp

              <div class="grid {{ $gridClass }} gap-y-12 gap-8">
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
            text: 'Conditional Content Display'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |-
              @if(count($posts) > 0)
                  <!-- Display posts grid -->
              @else
                  <div class="text-center py-16">
                      <p class="text-foreground-secondary">No posts found.</p>
                  </div>
              @endif
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
            text: 'Search Integration'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |-
              <s:collection
                  from="posts"
                  :search="request('q')"
                  paginate="true"
                  :limit="$block->limit"
                  as="posts"
              >
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
            text: 'Collection Requirements'
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
            text: 'Post Collection Structure'
      -
        type: codeBlock
        attrs:
          language: yaml
        content:
          -
            type: text
            text: |-
              # collections/posts.yaml
              title: Posts
              route: '/blog/{slug}'
              date: true
              sort_dir: desc
              blueprints:
                - post
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
            text: 'Post Blueprint Fields'
      -
        type: codeBlock
        attrs:
          language: yaml
        content:
          -
            type: text
            text: |-
              # blueprints/collections/posts/post.yaml
              fields:
                - title
                - slug
                - date
                - excerpt
                - preview_image
                - content
                - categories
    type: documentation
    enabled: true
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
updated_by: f9af95ec-86dd-4779-927c-e2e325f894ee
updated_at: 1759314333
---
