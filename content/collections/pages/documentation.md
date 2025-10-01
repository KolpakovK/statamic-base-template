---
id: 8d8ea975-5b50-4cfd-8622-d53c94a0bf1e
blueprint: page
title: Documentation
blocks:
  -
    id: mg7uh9pq
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
            text: 'Documentation Block Documentation'
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
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
            text: 'The Documentation block is a specialized layout component designed for structured documentation presentation. It features a comprehensive navigation system with nested menu support, content display area, and responsive layout optimized for technical documentation and knowledge bases.'
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
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
          level: 3
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
                    text: 'Technical documentation'
                  -
                    type: text
                    text: ' with hierarchical navigation'
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
                    text: 'Knowledge bases'
                  -
                    type: text
                    text: ' with organized content sections'
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
                    text: 'API documentation'
                  -
                    type: text
                    text: ' with structured references'
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
                    text: 'User guides'
                  -
                    type: text
                    text: ' with step-by-step instructions'
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
                    text: 'Help centers'
                  -
                    type: text
                    text: ' with categorized content'
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
            text: 'Design Philosophy'
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'The Documentation block emphasizes content organization and navigation efficiency, providing a clean sidebar-content layout that helps users find information quickly while maintaining readability and accessibility.'
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
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
          level: 3
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
            text: |-
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
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
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
          level: 3
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
            text: .documentation-wrapper
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
                    text: ': Outermost container for the documentation section'
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
            text: .documentation-block
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
                    text: ': Main semantic container without default background'
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
                    text: |-
                      .documentation-block {
                        display: block;
                      }
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
                    text: ': No background applied for flexible theming'
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
            text: .documentation-container
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
                    text: |-
                      .documentation-container {
                        max-width: responsive; /* container */
                        padding-top: 2rem;     /* py-8 */
                        padding-bottom: 2rem;  /* py-8 */
                      }
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
            text: 'Layout Grid Classes'
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
            text: 'Main Grid Container'
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
                    text: ': Responsive grid layout for sidebar and content'
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
                    text: 'grid grid-cols-1 lg:grid-cols-8 gap-8'
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
                    text: |-
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
            text: 'Navigation Classes'
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
            text: .documentation-navigation
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
                    text: ': Sidebar navigation container'
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
                    text: 'flex flex-col gap-2 col-span-1 lg:col-span-2'
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
                    text: |-
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
            text: .documentation-subnavigation
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
                    text: ': Nested navigation menu container'
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
                    text: 'flex flex-col pl-4 mt-2 gap-2'
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
                    text: |-
                      .documentation-subnavigation {
                        display: flex;           /* flex */
                        flex-direction: column;  /* flex-col */
                        padding-left: 1rem;     /* pl-4 */
                        margin-top: 0.5rem;     /* mt-2 */
                        gap: 0.5rem;            /* gap-2 */
                      }
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
            text: 'Content Classes'
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
            text: .documentation-content
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
                    text: ': Main content area container'
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
                    text: 'flex flex-col gap-8 col-span-1 lg:col-span-4'
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
                    text: |-
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
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Navigation System'
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
            text: 'Statamic Navigation Integration'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |-
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
            text: 'Navigation Features'
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
                    text: 'Hierarchical Structure'
                  -
                    type: text
                    text: ': Supports nested menu items'
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
                    text: 'Active States'
                  -
                    type: text
                    text: ': Highlights current page'
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
                    text: 'Button Integration'
                  -
                    type: text
                    text: ': Uses Button component for styling'
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
                    text: ': Proper semantic markup'
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
            text: 'Navigation Typography'
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
            text: 'Section Headers'
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
                    text: ': Category/section identifiers'
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
                    text: 'text-sm text-foreground-muted uppercase tracking-wider pl-4'
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
                    text: |-
                      .nav-section {
                        font-size: 0.875rem;        /* text-sm */
                        color: var(--foreground-muted); /* text-foreground-muted */
                        text-transform: uppercase;   /* uppercase */
                        letter-spacing: 0.1em;      /* tracking-wider */
                        padding-left: 1rem;         /* pl-4 */
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
            text: 'Navigation Links'
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
                    text: Component
                  -
                    type: text
                    text: ': Uses '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: '<x-button>'
                  -
                    type: text
                    text: ' component'
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
                    text: Variants
                  -
                    type: text
                    text: ': '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: ghost
                  -
                    type: text
                    text: ' (active) or '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: link
                  -
                    type: text
                    text: ' (inactive)'
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
                    text: Classes
                  -
                    type: text
                    text: ': '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: 'justify-start text-left w-full'
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
                    text: 'Active Detection'
                  -
                    type: text
                    text: ': Compares '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: $url
                  -
                    type: text
                    text: ' with '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: $current_uri
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
            text: 'Nested Navigation'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |-
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
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
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
          level: 3
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
                    text: navigation
                  -
                    type: text
                    text: ' (Navigation): Statamic navigation handle'
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
                    text: article
                  -
                    type: text
                    text: ' (Bard): Main documentation content'
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
                    text: sidebar_width
                  -
                    type: text
                    text: ' (Select): Navigation column width (future enhancement)'
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
                    text: show_toc
                  -
                    type: text
                    text: ' (Toggle): Table of contents display (future enhancement)'
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
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
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
          level: 3
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
              {{ $block->block_settings->block_classes ?? '' }}      // Applied to .documentation-wrapper
              {{ $block->block_settings->container_classes ?? '' }}  // Applied to .documentation-container
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
            text: 'Inline Styles'
      -
        type: codeBlock
        attrs:
          language: php
        content:
          -
            type: text
            text: |-
              {{ $block->block_settings->block_styles ?? '' }}      // Applied to .documentation-block
              {{ $block->block_settings->container_styles ?? '' }}  // Applied to .documentation-container
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Grid Layout Breakdown'
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
            text: 'Column Distribution'
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
                    text: ': 2 columns (lg:col-span-2)'
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
                    text: ': 4 columns (lg:col-span-4)'
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
                    text: Available
                  -
                    type: text
                    text: ': 2 columns (unused, future enhancements)'
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
            text: 'Responsive Behavior'
      -
        type: codeBlock
        attrs:
          language: css
        content:
          -
            type: text
            text: |-
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
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Customization Examples'
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
            text: '1. Wider Content Area'
      -
        type: codeBlock
        attrs:
          language: html
        content:
          -
            type: text
            text: |-
              <div class="flex flex-col gap-8 col-span-1 lg:col-span-6 documentation-content">
                  <!-- Expand content to 6 columns -->
              </div>
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
            text: '2. Narrow Navigation'
      -
        type: codeBlock
        attrs:
          language: html
        content:
          -
            type: text
            text: |-
              <div class="flex flex-col gap-2 col-span-1 lg:col-span-1 documentation-navigation">
                  <!-- Reduce navigation to 1 column -->
              </div>
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
            text: '3. Full-Width Content (No Navigation)'
      -
        type: codeBlock
        attrs:
          language: html
        content:
          -
            type: text
            text: |-
              <div class="flex flex-col gap-8 col-span-1 lg:col-span-8 documentation-content">
                  <!-- Content spans all 8 columns -->
              </div>
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
            text: '4. Three-Column Layout'
      -
        type: codeBlock
        attrs:
          language: html
        content:
          -
            type: text
            text: |-
              <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                  <div class="col-span-3"><!-- Navigation --></div>
                  <div class="col-span-6"><!-- Content --></div>
                  <div class="col-span-3"><!-- Table of Contents --></div>
              </div>
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
            text: '5. Compact Navigation Spacing'
      -
        type: codeBlock
        attrs:
          language: html
        content:
          -
            type: text
            text: |-
              <div class="flex flex-col gap-1 col-span-1 lg:col-span-2 documentation-navigation">
                  <!-- Reduced gap from 0.5rem to 0.25rem -->
              </div>
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Navigation Setup'
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
            text: 'Creating Navigation Structure'
      -
        type: codeBlock
        attrs:
          language: yaml
        content:
          -
            type: text
            text: |-
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
            text: 'Navigation Builder'
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: "Use Statamic's Navigation builder in the Control Panel:"
      -
        type: orderedList
        attrs:
          start: 1
          type: null
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
                    text: 'Navigate to Navigation section'
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
                    text: 'Create new navigation tree'
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
                    text: 'Add entries and organize hierarchy'
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
                    text: 'Reference navigation handle in block'
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Article Component Integration'
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
            text: 'Content Rendering'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |-
              @if($block->article)
                  <x-article :article="$block->article" />
              @endif
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
            text: 'Supported Content Types'
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
                    text: 'Rich Text'
                  -
                    type: text
                    text: ': Standard paragraph content'
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
                    text: 'Code Blocks'
                  -
                    type: text
                    text: ': Syntax-highlighted code samples'
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
                    text: Images
                  -
                    type: text
                    text: ': Inline images with captions'
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
                    text: Lists
                  -
                    type: text
                    text: ': Ordered and unordered lists'
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
                    text: Tables
                  -
                    type: text
                    text: ': Data tables with proper styling'
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
                    text: Headings
                  -
                    type: text
                    text: ': Hierarchical content structure'
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
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
          level: 3
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Navigation Caching'
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
                    text: ': Navigation structures are cached'
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
                    text: 'Button Components'
                  -
                    type: text
                    text: ': Reusable button components'
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
                    text: 'Static Navigation'
                  -
                    type: text
                    text: ': No JavaScript required'
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
                    text: 'Efficient Queries'
                  -
                    type: text
                    text: ': Navigation data loaded once'
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
            text: 'Content Loading'
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
                    text: 'Image Optimization'
                  -
                    type: text
                    text: ': Article images use lazy loading'
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
                    text: 'Code Highlighting'
                  -
                    type: text
                    text: ': Server-side syntax highlighting'
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
                    text: 'Clean Markup'
                  -
                    type: text
                    text: ': Semantic HTML structure'
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Accessibility Features'
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
            text: 'Navigation Accessibility'
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
                    text: 'Semantic Markup'
                  -
                    type: text
                    text: ': Proper navigation structure'
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
                    text: 'Focus Management'
                  -
                    type: text
                    text: ': Keyboard navigation support'
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
                    text: 'Active States'
                  -
                    type: text
                    text: ': Clear current page indication'
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
                    text: 'Screen Readers'
                  -
                    type: text
                    text: ': Descriptive link text'
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
            text: 'Content Accessibility'
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
                    text: 'Heading Hierarchy'
                  -
                    type: text
                    text: ': Logical heading structure'
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
                    text: 'Alt Text'
                  -
                    type: text
                    text: ': Images include descriptive alt text'
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
                    text: 'Color Contrast'
                  -
                    type: text
                    text: ': Sufficient contrast ratios'
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
                    text: 'Keyboard Access'
                  -
                    type: text
                    text: ': All interactive elements accessible'
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
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
          level: 3
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Dynamic Navigation Width'
      -
        type: codeBlock
        attrs:
          language: php
        content:
          -
            type: text
            text: |-
              @php
              $navColumns = $block->nav_width ?? 2;
              $contentColumns = 8 - $navColumns;
              @endphp

              <div class="col-span-1 lg:col-span-{{ $navColumns }}">
              <div class="col-span-1 lg:col-span-{{ $contentColumns }}">
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
            text: 'Table of Contents Generation'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |-
              @if($block->show_toc)
                  <div class="col-span-1 lg:col-span-2">
                      <x-table-of-contents :content="$block->article" />
                  </div>
              @endif
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
            text: 'Search Integration'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |-
              @if($block->enable_search)
                  <div class="mb-4">
                      <x-search-box placeholder="Search documentation..." />
                  </div>
              @endif
    type: documentation
    enabled: true
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
updated_by: f9af95ec-86dd-4779-927c-e2e325f894ee
updated_at: 1759314651
---
