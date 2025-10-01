---
id: c182d79d-6d87-4cd5-af12-e641d6b70f41
blueprint: page
title: 'Two Columns'
blocks:
  -
    id: mg7usj1m
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
            text: 'Two Columns Block Documentation'
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
            text: 'The Two Columns block is a versatile layout component designed for content presentation with image support. It features flexible column arrangements, responsive grid behavior, integrated card systems, and comprehensive content organization with optional image positioning.'
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
                    text: 'Feature sections'
                  -
                    type: text
                    text: ' with supporting imagery'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Product showcases'
                  -
                    type: text
                    text: ' with detailed descriptions'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Service descriptions'
                  -
                    type: text
                    text: ' with visual elements'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'About sections'
                  -
                    type: text
                    text: ' with team photos or graphics'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Process explanations'
                  -
                    type: text
                    text: ' with step-by-step cards'
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
            text: 'The Two Columns block balances visual impact with information density, providing flexible layouts that work across all device sizes while maintaining clear content hierarchy and engaging presentation.'
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
              <div class="wrapper two-columns-wrapper">
                  <section class="block bg-background two-columns-block">
                      <div class="container py-8 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center two-columns-container">
                          
                          <!-- Left Image (when block_layout == "left") -->
                          <x-picture class="w-full h-[450px] two-columns-image" />
                          
                          <!-- Content Column -->
                          <div class="flex flex-col gap-12 two-columns-content">
                              <div class="flex flex-col gap-4">
                                  <h2 class="text-3xl lg:text-5xl font-medium tracking-tighter text-foreground text-balance two-columns-heading">
                                      <!-- Heading -->
                                  </h2>
                                  <x-article class="two-columns-description" />
                                  <div class="flex flex-wrap gap-4 two-columns-buttons">
                                      <!-- Buttons -->
                                  </div>
                              </div>
                              
                              <!-- Optional Cards Grid -->
                              <div class="w-full flex flex-col lg:grid gap-4 two-columns-cards">
                                  <!-- Cards -->
                              </div>
                          </div>
                          
                          <!-- Right Image (when block_layout == "right") -->
                          <x-picture class="w-full h-[450px] two-columns-image" />
                          
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
            text: .two-columns-wrapper
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
                    text: ': Outermost container for the Two Columns section'
          -
            type: listItem
            content:
              -
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
            text: .two-columns-block
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
                      .two-columns-block {
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
            text: .two-columns-container
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
                    text: ': Main grid container with responsive layout'
          -
            type: listItem
            content:
              -
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
                    text: 'container py-8 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center'
          -
            type: listItem
            content:
              -
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
                      .two-columns-container {
                        max-width: responsive;    /* container */
                        padding-top: 2rem;       /* py-8 */
                        padding-bottom: 2rem;    /* py-8 */
                        display: grid;           /* grid */
                        grid-template-columns: 1fr; /* grid-cols-1 */
                        gap: 2rem;              /* gap-8 */
                        align-items: center;    /* items-center */
                      }

                      @media (min-width: 1024px) {
                        .two-columns-container {
                          grid-template-columns: repeat(2, 1fr); /* lg:grid-cols-2 */
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
            text: 'Content Layout Classes'
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
            text: .two-columns-content
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
                    text: ': Main content column container'
          -
            type: listItem
            content:
              -
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
                    text: 'flex flex-col gap-12'
          -
            type: listItem
            content:
              -
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
                      .two-columns-content {
                        display: flex;
                        flex-direction: column;
                        gap: 3rem; /* gap-12 */
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
            text: 'Content Inner Container'
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
                    text: ': Groups primary content elements'
          -
            type: listItem
            content:
              -
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
                    text: |-
                      .content-inner {
                        display: flex;
                        flex-direction: column;
                        gap: 1rem; /* gap-4 */
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
                type: code
            text: .two-columns-heading
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
                    text: ': Main section heading'
          -
            type: listItem
            content:
              -
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
                      .two-columns-heading {
                        font-size: 1.875rem;      /* text-3xl */
                        font-weight: 500;         /* font-medium */
                        letter-spacing: -0.025em; /* tracking-tighter */
                        color: var(--foreground); /* text-foreground */
                        text-wrap: balance;       /* text-balance */
                      }

                      @media (min-width: 1024px) {
                        .two-columns-heading {
                          font-size: 3rem; /* lg:text-5xl */
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
            text: .two-columns-description
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
                    text: ': Article content styling'
          -
            type: listItem
            content:
              -
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
                    text: '<x-article>'
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
                    text: Inheritance
                  -
                    type: text
                    text: ': Inherits all article typography styles'
          -
            type: listItem
            content:
              -
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
                    text: ': Can be styled through article component CSS'
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
            text: 'Interactive Classes'
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
            text: .two-columns-buttons
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
                    text: ': Button group container'
          -
            type: listItem
            content:
              -
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
                      .two-columns-buttons {
                        display: flex;
                        flex-wrap: wrap;
                        gap: 1rem; /* gap-4 */
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
            text: 'Image Classes'
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
            text: .two-columns-image
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
                    text: ': Image container with fixed dimensions'
          -
            type: listItem
            content:
              -
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
                    text: 'w-full h-[450px]'
          -
            type: listItem
            content:
              -
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
                      .two-columns-image {
                        width: 100%;     /* w-full */
                        height: 450px;   /* h-[450px] */
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
                    text: Features
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
                            text: 'Supports '
                          -
                            type: text
                            marks:
                              -
                                type: code
                            text: cover
                          -
                            type: text
                            text: ' and '
                          -
                            type: text
                            marks:
                              -
                                type: code
                            text: contain
                          -
                            type: text
                            text: ' scaling options'
                  -
                    type: listItem
                    content:
                      -
                        type: paragraph
                        attrs:
                          textAlign: null
                        content:
                          -
                            type: text
                            text: 'Responsive width and height controls'
                  -
                    type: listItem
                    content:
                      -
                        type: paragraph
                        attrs:
                          textAlign: null
                        content:
                          -
                            type: text
                            text: 'Integration with Picture component'
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
            text: 'Cards System Classes'
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
            text: .two-columns-cards
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
                    text: ': Dynamic grid for card components'
          -
            type: listItem
            content:
              -
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
                    text: 'w-full flex flex-col lg:grid gap-4'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Dynamic Grid'
                  -
                    type: text
                    text: ': Uses inline CSS for column control'
          -
            type: listItem
            content:
              -
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
                      .two-columns-cards {
                        width: 100%;              /* w-full */
                        display: flex;            /* flex */
                        flex-direction: column;   /* flex-col */
                        gap: 1rem;               /* gap-4 */
                      }

                      @media (min-width: 1024px) {
                        .two-columns-cards {
                          display: grid;           /* lg:grid */
                          grid-template-columns: repeat(var(--cards-columns, 2), minmax(0, 1fr));
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
            text: 'Block Layout Options'
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
            text: 'Left Image Layout ('
          -
            type: text
            marks:
              -
                type: code
            text: 'block_layout == "left"'
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
                    marks:
                      -
                        type: bold
                    text: 'Image Position'
                  -
                    type: text
                    text: ': Left column, content right'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Image Scaling'
                  -
                    type: text
                    text: ': Uses '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: cover
                  -
                    type: text
                    text: ' attribute by default'
          -
            type: listItem
            content:
              -
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
                    text: ': Image stacks above content on mobile'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |-
              @if($block->block_layout == "left")
                  <x-picture :image="$block->image" class="w-full h-[450px] two-columns-image" cover="true" />
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
            text: 'Right Image Layout ('
          -
            type: text
            marks:
              -
                type: code
            text: 'block_layout == "right"'
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
                    marks:
                      -
                        type: bold
                    text: 'Image Position'
                  -
                    type: text
                    text: ': Right column, content left'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Image Scaling'
                  -
                    type: text
                    text: ': Respects '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: image_scaling
                  -
                    type: text
                    text: ' setting'
          -
            type: listItem
            content:
              -
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
                    text: ': Image appears below content on mobile'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |-
              @if($block->block_layout == "right")
                  <x-picture 
                      :image="$block->image" 
                      class="w-full h-[450px] two-columns-image" 
                      :cover="$block->image_scaling=='cover'" 
                      :contain="$block->image_scaling=='contain'"
                  />
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
            text: 'Content-Only Layout (no image)'
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
                    text: 'Full Width'
                  -
                    type: text
                    text: ': Content spans full container width'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Centered
                  -
                    type: text
                    text: ': Content remains in original column'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Cards
                  -
                    type: text
                    text: ': Still supports card grid system'
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
                    text: ' (Text): Main section heading'
          -
            type: listItem
            content:
              -
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
                    text: ' (Bard): Rich text content'
          -
            type: listItem
            content:
              -
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
                    text: ' (Asset): Featured image'
          -
            type: listItem
            content:
              -
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
                    text: ' (Select): "left", "right", or none'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: image_scaling
                  -
                    type: text
                    text: ' (Select): "cover" or "contain"'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: image_width
                  -
                    type: text
                    text: ' (Number): Custom image width'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: image_height
                  -
                    type: text
                    text: ' (Number): Custom image height'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: cards
                  -
                    type: text
                    text: ' (Replicator): Card components'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: cards_columns
                  -
                    type: text
                    text: ' (Number): Cards grid columns (default: 2)'
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
                instructions: 'Main heading for the section'

              article:
                type: bard
                instructions: 'Rich text content'

              buttons:
                type: replicator
                sets:
                  button:
                    fields:
                      - label
                      - link
                      - variant
                      - show_icon
                      - icon

              image:
                type: assets
                container: assets
                max_files: 1
                restrict: images

              block_layout:
                type: select
                options:
                  left: 'Image Left'
                  right: 'Image Right'
                default: 'left'

              cards_columns:
                type: number
                default: 2
                min: 1
                max: 4
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
            text: 'Cards Integration'
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
            text: 'Dynamic Grid System'
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'The cards system uses dynamic CSS grid with configurable columns:'
      -
        type: codeBlock
        attrs:
          language: php
        content:
          -
            type: text
            text: 'style="grid-template-columns: repeat({{ $block->cards_columns ?? 2 }}, minmax(0, 1fr));"'
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
            text: 'Card Component Integration'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |-
              @foreach($block->cards as $card)
                  <x-card 
                      :icon="$card->icon ?? null"
                      :image="$card->image ?? null"
                      :heading="$card->heading ?? null"
                      :article="$card->article ?? null"
                      :buttons="$card->buttons ?? null"
                  />
              @endforeach
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
            text: 'Responsive Cards Behavior'
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
                    text: ': Single column stack (flex flex-col)'
          -
            type: listItem
            content:
              -
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
                    text: ': Grid layout with specified columns (lg:grid)'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Gap
                  -
                    type: text
                    text: ': Consistent 1rem spacing (gap-4)'
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
            text: 'Responsive Behavior'
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
            text: 'Grid Breakpoints'
      -
        type: codeBlock
        attrs:
          language: css
        content:
          -
            type: text
            text: |-
              /* Mobile (default) */
              .two-columns-container {
                grid-template-columns: 1fr;
                gap: 2rem;
              }

              /* Desktop (1024px+) */
              @media (min-width: 1024px) {
                .two-columns-container {
                  grid-template-columns: repeat(2, 1fr);
                  gap: 2rem;
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
            text: 'Content Stacking'
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
                    text: ': Image above content (natural document flow)'
          -
            type: listItem
            content:
              -
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
                    text: ': Side-by-side layout based on '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: block_layout
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Alignment
                  -
                    type: text
                    text: ': Centered alignment maintains visual balance'
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
            text: 'Image Responsiveness'
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
                    text: ': Full container width (w-full)'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Height
                  -
                    type: text
                    text: ': Fixed 450px height maintains aspect ratio'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Scaling
                  -
                    type: text
                    text: ': Configurable cover/contain behavior'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Quality
                  -
                    type: text
                    text: ': Picture component handles optimization'
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
            text: 'Image Configuration'
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
            text: 'Scaling Options'
      -
        type: codeBlock
        attrs:
          language: php
        content:
          -
            type: text
            text: |-
              // Cover scaling (default)
              :cover="$block->image_scaling=='cover'"

              // Contain scaling  
              :contain="$block->image_scaling=='contain'"
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
            text: 'Custom Dimensions'
      -
        type: codeBlock
        attrs:
          language: php
        content:
          -
            type: text
            text: |-
              :w="$block->image_width"   // Custom width
              :h="$block->image_height"  // Custom height
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
            text: 'Picture Component Features'
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
                    text: 'Responsive Images'
                  -
                    type: text
                    text: ': Automatic srcset generation'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Lazy Loading'
                  -
                    type: text
                    text: ': Performance optimization'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Format Support'
                  -
                    type: text
                    text: ': WebP/AVIF when available'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Aspect Ratio'
                  -
                    type: text
                    text: ': Maintains proportions with scaling options'
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
            text: 'Image Optimization'
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
                    text: 'Lazy Loading'
                  -
                    type: text
                    text: ': Picture component includes lazy loading'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Format Negotiation'
                  -
                    type: text
                    text: ': Modern formats served when supported'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Size Control'
                  -
                    type: text
                    text: ': Custom width/height prevent oversized images'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Aspect Ratio'
                  -
                    type: text
                    text: ': Fixed heights prevent layout shift'
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
                    text: ': Cards load independently'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Component Caching'
                  -
                    type: text
                    text: ': Reusable card components'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Minimal JavaScript'
                  -
                    type: text
                    text: ': No client-side dependencies'
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
            text: 'Best Practices'
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
            text: 'Content Guidelines'
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
                    marks:
                      -
                        type: bold
                    text: Balance
                  -
                    type: text
                    text: ': Maintain visual balance between image and content'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Hierarchy
                  -
                    type: text
                    text: ': Use heading levels appropriately'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Cards
                  -
                    type: text
                    text: ': Limit to 2-4 cards for optimal readability'
          -
            type: listItem
            content:
              -
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
                    text: ': Use high-quality, relevant imagery'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Buttons
                  -
                    type: text
                    text: ': Limit to 2-3 primary actions'
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
            text: 'Technical Guidelines'
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
                    marks:
                      -
                        type: bold
                    text: Performance
                  -
                    type: text
                    text: ': Optimize images for web delivery'
          -
            type: listItem
            content:
              -
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
                    text: ': Provide alt text for all images'
          -
            type: listItem
            content:
              -
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
                    text: ': Test layouts on various screen sizes'
          -
            type: listItem
            content:
              -
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
                    text: ': Keep card content concise and scannable'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Loading
                  -
                    type: text
                    text: ': Consider image lazy loading for performance'
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
            text: 'Design Guidelines'
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
                    marks:
                      -
                        type: bold
                    text: Consistency
                  -
                    type: text
                    text: ': Maintain consistent spacing and typography'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Alignment
                  -
                    type: text
                    text: ': Use items-center for balanced layouts'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Contrast
                  -
                    type: text
                    text: ': Ensure proper contrast for text readability'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Whitespace
                  -
                    type: text
                    text: ': Leverage gap classes for clean spacing'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Flow
                  -
                    type: text
                    text: ': Consider content reading order on mobile'
    type: documentation
    enabled: true
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
updated_by: f9af95ec-86dd-4779-927c-e2e325f894ee
updated_at: 1759315166
---
