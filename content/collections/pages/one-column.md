---
id: 2d34b1ac-28dd-47a1-81f9-31f48c95a627
blueprint: page
title: 'One Column'
blocks:
  -
    id: mg7ujcui
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
            text: 'One Column Block Documentation'
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
            text: 'The One Column block is a foundational content layout component designed for single-column text presentation. It provides flexible width control, optional center alignment, and comprehensive typography support through the Article component integration.'
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
                    text: 'Article content'
                  -
                    type: text
                    text: ' with optimal reading width'
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
                    text: 'Landing page copy'
                  -
                    type: text
                    text: ' with centered presentation'
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
                    text: 'Documentation sections'
                  -
                    type: text
                    text: ' with consistent formatting'
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
                    text: 'Blog posts'
                  -
                    type: text
                    text: ' with readable line lengths'
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
                    text: 'Marketing copy'
                  -
                    type: text
                    text: ' with focused messaging'
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
            text: 'The One Column block prioritizes readability through optimal line lengths, consistent vertical rhythm, and flexible width controls that adapt to various content types and presentation needs.'
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
            text: .one-column-wrapper
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
                    text: ': Outermost container for the One Column section'
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
            text: .one-column-block
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
                    text: ': Main semantic container with default background'
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
                    text: 'block bg-background'
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
                      .one-column-block {
                        display: block;
                        background-color: var(--background);
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
                    text: ': Override background colors, add borders or shadows'
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
            text: .one-column-container
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
                      .one-column-container {
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
            text: 'Layout Classes'
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
            text: 'Main Content Container'
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
                    text: ': Primary layout container with max-width control'
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
                    text: 'flex flex-col gap-12 w-full mx-auto max-w-5xl'
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
                      .one-column-content {
                        display: flex;           /* flex */
                        flex-direction: column;  /* flex-col */
                        gap: 3rem;              /* gap-12 */
                        width: 100%;            /* w-full */
                        margin-left: auto;      /* mx-auto */
                        margin-right: auto;     /* mx-auto */
                        max-width: 64rem;       /* max-w-5xl (1024px) */
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
            text: 'Article Container (Conditional)'
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
                    text: ': Article content wrapper with center alignment option'
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
                    text: 'Base Classes'
                  -
                    type: text
                    text: ': '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: mx-auto
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
                    text: 'Conditional Classes'
                  -
                    type: text
                    text: ':'
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
                                type: code
                            text: 'text-center max-w-3xl'
                          -
                            type: text
                            text: ' (when '
                          -
                            type: text
                            marks:
                              -
                                type: code
                            text: $block->center
                          -
                            type: text
                            text: ' is true)'
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
                                type: code
                            text: w-full
                          -
                            type: text
                            text: ' (when '
                          -
                            type: text
                            marks:
                              -
                                type: code
                            text: $block->center
                          -
                            type: text
                            text: ' is false/null)'
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
            text: 'Typography Classes'
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
            text: 'One Column Heading'
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
                    text: 'Tailwind Classes'
                  -
                    type: text
                    text: ': '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: 'text-3xl lg:text-5xl font-medium tracking-tighter text-foreground text-balance'
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
            text: 'Content Width Control'
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
            text: 'Max-Width Options'
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
            text: 'Standard Layout (max-w-5xl)'
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
                    text: Width
                  -
                    type: text
                    text: ': 64rem (1024px)'
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
                    text: 'Use Case'
                  -
                    type: text
                    text: ': General content, articles, documentation'
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
                    text: 'Line Length'
                  -
                    type: text
                    text: ': Optimal for mixed content types'
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
            text: 'Centered Layout (max-w-3xl)'
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
                    text: Width
                  -
                    type: text
                    text: ': 48rem (768px) when centered'
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
                    text: 'Use Case'
                  -
                    type: text
                    text: ': Marketing copy, focused messaging'
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
                    text: 'Line Length'
                  -
                    type: text
                    text: ': Optimal for reading comprehension'
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
                    text: heading
                  -
                    type: text
                    text: ' (Text): Optional section heading'
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
                    text: ' (Bard): Main content with rich text support'
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
                    text: center
                  -
                    type: text
                    text: ' (Toggle): Enable center text alignment'
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
                    text: width
                  -
                    type: text
                    text: ' (Select): Content width options (future enhancement)'
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
              {{ $block->block_settings->block_classes ?? '' }}      // Applied to .one-column-wrapper
              {{ $block->block_settings->container_classes ?? '' }}  // Applied to .one-column-container
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
              {{ $block->block_settings->block_styles ?? '' }}      // Applied to .one-column-block
              {{ $block->block_settings->container_styles ?? '' }}  // Applied to .one-column-container
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
            text: '1. Narrow Content Width'
      -
        type: codeBlock
        attrs:
          language: html
        content:
          -
            type: text
            text: |-
              <div class="flex flex-col gap-12 w-full mx-auto max-w-2xl">
                  <!-- Content limited to 42rem (672px) -->
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
            text: '2. Full Container Width'
      -
        type: codeBlock
        attrs:
          language: html
        content:
          -
            type: text
            text: |-
              <div class="flex flex-col gap-12 w-full">
                  <!-- No max-width restriction -->
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
            text: '3. Compact Spacing'
      -
        type: codeBlock
        attrs:
          language: html
        content:
          -
            type: text
            text: |-
              <div class="flex flex-col gap-8 w-full mx-auto max-w-5xl">
                  <!-- Reduced gap from 3rem to 2rem -->
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
            text: '4. Extended Spacing'
      -
        type: codeBlock
        attrs:
          language: html
        content:
          -
            type: text
            text: |-
              <div class="flex flex-col gap-16 w-full mx-auto max-w-5xl">
                  <!-- Increased gap from 3rem to 4rem -->
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
            text: '5. Custom Background Section'
      -
        type: codeBlock
        attrs:
          language: html
        content:
          -
            type: text
            text: |-
              <section class="block one-column-block bg-card border border-border rounded-panel-lg">
                  <div class="container one-column-container p-12">
                      <!-- Enhanced container styling -->
                  </div>
              </section>
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
            text: 'Typography Integration'
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
            text: 'Heading Component Features'
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
                    text: ': Uses proper heading levels (h2 default)'
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
                    text: 'Responsive Sizing'
                  -
                    type: text
                    text: ': Scales from mobile to desktop'
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
                    text: 'Typography Scale'
                  -
                    type: text
                    text: ': Consistent with design system'
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
                    text: 'Text Balance'
                  -
                    type: text
                    text: ': Prevents orphaned words'
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
            text: 'Article Component Features'
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
                    text: 'Rich Text Support'
                  -
                    type: text
                    text: ': Full Bard editor integration'
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
                    text: 'Nested Components'
                  -
                    type: text
                    text: ': Supports buttons, images, etc.'
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
                    text: 'List Formatting'
                  -
                    type: text
                    text: ': Styled lists and typography'
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
                    text: 'Link Styling'
                  -
                    type: text
                    text: ': Consistent link presentation'
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
            text: 'Layout Variations'
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
            text: 'Standard Article Layout'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |-
              <!-- Optimal reading width, left-aligned -->
              <div class="mx-auto w-full">
                  <x-article :content="$block->article" />
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
            text: 'Centered Marketing Copy'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |-
              <!-- Narrower width, center-aligned -->
              <div class="mx-auto text-center max-w-3xl">
                  <x-article :content="$block->article" />
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
            text: 'Full-Width Content'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |-
              <!-- Container-wide content -->
              <div class="w-full">
                  <x-article :content="$block->article" />
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
                    text: 'Lazy Components'
                  -
                    type: text
                    text: ': Article component loads efficiently'
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
                    text: ': Embedded images use lazy loading'
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
                    text: 'Text Rendering'
                  -
                    type: text
                    text: ': Optimal font loading and display'
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
            text: 'SEO Optimization'
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
                    text: 'Semantic Structure'
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
                    text: 'Content Organization'
                  -
                    type: text
                    text: ': Clear content structure'
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
                    text: 'Reading Experience'
                  -
                    type: text
                    text: ': Optimal line lengths for engagement'
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
            text: 'Bard Editor Sets'
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'The Article component supports various content sets:'
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
                    text: 'Text Blocks'
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
                    text: 'Button Groups'
                  -
                    type: text
                    text: ': Call-to-action buttons'
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
                    text: 'Image Blocks'
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
                    text: 'Quote Blocks'
                  -
                    type: text
                    text: ': Pull quotes and testimonials'
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
            text: 'Content Styling'
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'All article content inherits the one-column styling:'
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
                    text: 'Proper spacing between elements'
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
                    text: 'Consistent typography scale'
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
                    text: 'Responsive behavior'
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
                    text: 'Theme color integration'
    type: documentation
    enabled: true
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
updated_by: f9af95ec-86dd-4779-927c-e2e325f894ee
updated_at: 1759314727
---
