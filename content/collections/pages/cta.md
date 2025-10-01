---
id: 358e2409-98e5-4ec1-924c-a149bc97e6e2
blueprint: page
title: CTA
blocks:
  -
    id: mg7ucpt3
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
            text: 'CTA (Call to Action) Block Documentation'
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
            text: 'The CTA block is a versatile conversion-focused component designed to drive user actions. It features multiple layout options, background styling, and flexible content arrangement in a responsive two-column grid system.'
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
                    text: 'Newsletter signups'
                  -
                    type: text
                    text: ' with compelling copy'
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
                    text: 'Product promotions'
                  -
                    type: text
                    text: ' with featured imagery'
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
                    text: 'Service offerings'
                  -
                    type: text
                    text: ' with clear value propositions'
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
                    text: 'Contact forms'
                  -
                    type: text
                    text: ' with persuasive messaging'
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
                    text: 'Download prompts'
                  -
                    type: text
                    text: ' for resources and guides'
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
            text: 'Design Philosophy'
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'The CTA block prioritizes conversion optimization through strategic layout options, compelling typography, and clear visual hierarchy that guides users toward the desired action.'
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
            text: |-
              <div class="wrapper cta-wrapper">
                  <section class="block cta-block bg-background">
                      <div class="container cta-container flex flex-col gap-12 py-8">
                          <div class="cta-content-column grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center">
                              <div class="flex flex-col gap-12">
                                  <div class="flex flex-col gap-4 cta-content">
                                      <!-- Content here -->
                                  </div>
                              </div>
                              <!-- Optional image/form column -->
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
            text: .cta-wrapper
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
                    text: ': Outermost container for the CTA section'
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
                    text: ': Add full-width backgrounds, gradients, or section styling'
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
            text: .cta-block
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
                      .cta-block {
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
            text: .cta-container
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
                    text: ': Content width and layout container'
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
                    text: 'container flex flex-col gap-12 py-8'
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
                    text: ': '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: dark
                  -
                    type: text
                    text: ' (when '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: "block_layout == 'main'"
                  -
                    type: text
                    text: )
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
                      .cta-container {
                        max-width: responsive; /* container */
                        display: flex;         /* flex */
                        flex-direction: column; /* flex-col */
                        gap: 3rem;             /* gap-12 */
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
                type: code
            text: .cta-content-column
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
                    text: ': Main grid container for content layout'
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
                    text: 'w-full grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center'
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
                            text: 'p-8 lg:py-12 lg:px-24 bg-background rounded-panel-md'
                          -
                            type: text
                            text: ' (main layout)'
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
                            text: 'p-8 lg:py-12 lg:px-24 bg-background rounded-panel-md'
                          -
                            type: text
                            text: ' (image layout)'
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
                    text: 'Background Image'
                  -
                    type: text
                    text: ': Applied when '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: "block_layout == 'image'"
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
                      .cta-content-column {
                        width: 100%;
                        display: grid;
                        grid-template-columns: 1fr; /* grid-cols-1 */
                        gap: 3rem; /* gap-12 */
                        align-items: center; /* items-center */
                      }

                      @media (min-width: 1024px) {
                        .cta-content-column {
                          grid-template-columns: repeat(2, 1fr); /* lg:grid-cols-2 */
                          gap: 2rem; /* lg:gap-8 */
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
            text: .cta-content
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
                    text: ': Container for text content and buttons'
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
                    text: 'flex flex-col gap-4'
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
                      .cta-content {
                        display: flex;
                        flex-direction: column;
                        gap: 1rem; /* gap-4 */
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
            text: 'Typography Classes'
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
            text: 'CTA Heading'
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
                      .cta-heading {
                        font-size: 1.875rem;      /* text-3xl */
                        font-weight: 500;         /* font-medium */
                        letter-spacing: -0.025em; /* tracking-tighter */
                        color: var(--foreground); /* text-foreground */
                        text-wrap: balance;       /* text-balance */
                      }

                      @media (min-width: 1024px) {
                        .cta-heading {
                          font-size: 3rem; /* lg:text-5xl */
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
            text: 'Button Container'
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
                    text: 'flex flex-wrap gap-4'
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
                      .cta-buttons {
                        display: flex;
                        flex-wrap: wrap;
                        gap: 1rem; /* gap-4 */
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
            text: 'Block Layout Options'
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
            text: 'Main Layout ('
          -
            type: text
            marks:
              -
                type: code
            text: "block_layout == 'main'"
          -
            type: text
            marks:
              -
                type: bold
            text: )
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
                    text: 'Adds '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: dark
                  -
                    type: text
                    text: ' class to container'
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
                    text: 'Applies padding and background: '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: 'p-8 lg:py-12 lg:px-24 bg-background rounded-panel-md'
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
                    text: 'Desktop Padding'
                  -
                    type: text
                    text: ': 3rem top/bottom, 6rem left/right'
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
                    text: 'Mobile Padding'
                  -
                    type: text
                    text: ': 2rem all sides'
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
                    text: Background
                  -
                    type: text
                    text: ': Uses '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: '--background'
                  -
                    type: text
                    text: ' color with rounded corners'
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
            text: 'Image Layout ('
          -
            type: text
            marks:
              -
                type: code
            text: "block_layout == 'image'"
          -
            type: text
            marks:
              -
                type: bold
            text: )
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
                    text: 'Applies same padding as main layout'
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
                    text: 'Adds background image: '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: "background-image: url('...')"
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
                    text: 'Background Properties'
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
                      background-size: cover;
                      background-position: center;
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
                    text: 'Creates overlay effect with content'
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
            text: 'Standard Layout (default)'
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
                    text: 'No additional padding beyond container'
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
                    text: 'Clean minimal presentation'
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
                    text: 'Content flows naturally in grid'
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
              {{ $block->block_settings->block_classes ?? '' }}      // Applied to .cta-wrapper
              {{ $block->block_settings->container_classes ?? '' }}  // Applied to .cta-container
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
              {{ $block->block_settings->block_styles ?? '' }}      // Applied to .cta-block
              {{ $block->block_settings->container_styles ?? '' }}  // Applied to .cta-container
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
                    text: heading
                  -
                    type: text
                    text: ' (Text): Main CTA headline'
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
                    text: ' (Bard): Supporting content and description'
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
                    text: buttons
                  -
                    type: text
                    text: ' (Replicator): Call-to-action buttons'
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
                    text: ' (Asset): Background or featured image'
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
                    text: block_layout
                  -
                    type: text
                    text: ' (Select): Main, Image, or Standard layout'
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
                    text: form
                  -
                    type: text
                    text: ' (Form): Optional form integration'
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
            text: 'Grid System'
      -
        type: codeBlock
        attrs:
          language: css
        content:
          -
            type: text
            text: |-
              /* Mobile (default) */
              .cta-content-column {
                grid-template-columns: 1fr;
                gap: 3rem;
              }

              /* Desktop (1024px+) */
              @media (min-width: 1024px) {
                .cta-content-column {
                  grid-template-columns: repeat(2, 1fr);
                  gap: 2rem;
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
            text: 'Padding Adjustments'
      -
        type: codeBlock
        attrs:
          language: css
        content:
          -
            type: text
            text: |-
              /* Mobile Padding (Layout: Main/Image) */
              .cta-content-column {
                padding: 2rem; /* p-8 */
              }

              /* Desktop Padding (Layout: Main/Image) */
              @media (min-width: 1024px) {
                .cta-content-column {
                  padding: 3rem 6rem; /* lg:py-12 lg:px-24 */
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
            text: 'Form Integration'
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
            text: 'Form Column'
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'When a form is included:'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |-
              @if($block->form)
                  <div class="cta-form-column">
                      <x-form :form="$block->form" />
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
            text: 'Form Styling'
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
                    text: 'Inherits container styling based on layout'
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
                    text: 'Responsive grid behavior'
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
                    text: 'Proper spacing and alignment'
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
            text: 'Background Images'
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
                    text: "Images processed through Statamic's Glide"
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
                    text: 'Optimized for different screen sizes'
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
                    text: 'Lazy loading applied when appropriate'
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
            text: 'Layout Shifts'
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
                    text: 'Fixed aspect ratios prevent layout shifts'
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
                    text: 'Proper sizing for responsive images'
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
                    text: 'Consistent spacing across layouts'
    type: documentation
    enabled: true
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
updated_by: f9af95ec-86dd-4779-927c-e2e325f894ee
updated_at: 1759314495
---
