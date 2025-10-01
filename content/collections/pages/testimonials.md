---
id: 3e96c940-da61-484e-830c-d6226a175703
blueprint: page
title: Testimonials
blocks:
  -
    id: mg7uraxy
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
            text: 'Testimonials Block Documentation'
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
            text: 'The Testimonials block is an interactive showcase component featuring customer testimonials with a built-in slider functionality powered by Alpine.js. It combines compelling social proof with smooth animations and responsive design.'
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
                    text: 'Customer testimonials'
                  -
                    type: text
                    text: ' on landing pages'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Client reviews'
                  -
                    type: text
                    text: ' for service businesses'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'User feedback'
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
                    text: 'Social proof'
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
                    text: 'Case study highlights'
                  -
                    type: text
                    text: ' with customer quotes'
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
            text: 'The Testimonials block prioritizes credibility and user engagement through clean typography, smooth interactions, and professional presentation of social proof content.'
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
            text: |
              <div class="wrapper testimonials-wrapper">
                  <section class="block overflow-hidden testimonials-block">
                      <div class="container py-8 flex flex-col gap-8 overflow-visible testimonials-container">
                          <div class="flex flex-col gap-12 testimonials-content">
                              <div class="flex flex-col gap-4 testimonials-header">
                                  <h2 class="testimonials-heading">...</h2>
                                  <div class="testimonials-description">...</div>
                                  <div class="testimonials-buttons">...</div>
                              </div>
                          </div>
                          <div class="testimonials-slider" x-data="testimonialsSlider(...)">
                              <!-- Slider content and controls -->
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
            text: .testimonials-wrapper
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
                    text: ': Outermost container for the testimonials section'
          -
            type: listItem
            content:
              -
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
                    text: ': Add background colors, gradients, or full-width layouts'
          -
            type: listItem
            content:
              -
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
            text: .testimonials-block
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
                    text: ': Main semantic container with overflow control'
          -
            type: listItem
            content:
              -
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
                    text: 'block overflow-hidden'
          -
            type: listItem
            content:
              -
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
                      .testimonials-block {
                        display: block;
                        overflow: hidden; /* Prevents slider overflow issues */
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
                    text: ': Add backgrounds, borders, or shadows'
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
            text: .testimonials-container
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
                    text: ': Content width, padding, and layout container'
          -
            type: listItem
            content:
              -
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
                    text: 'container py-8 flex flex-col gap-8 overflow-visible'
          -
            type: listItem
            content:
              -
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
                      .testimonials-container {
                        max-width: responsive; /* Tailwind container */
                        padding-top: 2rem;     /* py-8 */
                        padding-bottom: 2rem;  /* py-8 */
                        display: flex;         /* flex */
                        flex-direction: column; /* flex-col */
                        gap: 2rem;             /* gap-8 */
                        overflow: visible;     /* overflow-visible for controls */
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
            text: 'Header Classes'
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
            text: .testimonials-content
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
                    text: ': Wrapper for header content above slider'
          -
            type: listItem
            content:
              -
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
                    text: |
                      .testimonials-content {
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
                type: code
            text: .testimonials-header
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
                    text: ': Container for heading, description, and buttons'
          -
            type: listItem
            content:
              -
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
                      .testimonials-header {
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
                type: code
            text: .testimonials-heading
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
                    text: |
                      .testimonials-heading {
                        font-size: 1.875rem;      /* text-3xl */
                        font-weight: 500;         /* font-medium */
                        letter-spacing: -0.025em; /* tracking-tighter */
                        color: var(--foreground); /* text-foreground */
                        text-wrap: balance;       /* text-balance */
                      }

                      @media (min-width: 1024px) {
                        .testimonials-heading {
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
            text: .testimonials-description
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
                    text: ': Container for description content using Article component'
          -
            type: listItem
            content:
              -
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
                    text: ': Contains rich text content via Article component'
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
            text: .testimonials-buttons
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
                    text: ': Container for call-to-action buttons'
          -
            type: listItem
            content:
              -
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
                    text: |
                      .testimonials-buttons {
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
            text: 'Slider Classes'
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
            text: .testimonials-slider
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
                    text: ': Interactive slider container with Alpine.js functionality'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Alpine.js Data'
                  -
                    type: text
                    text: ': '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: testimonialsSlider(totalSlides)
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Mouse Events'
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
                            text: '@mouseenter="stopAutoPlay()"'
                          -
                            type: text
                            text: ' - Pause on hover'
                  -
                    type: listItem
                    content:
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
                            text: '@mouseleave="startAutoPlay()"'
                          -
                            type: text
                            text: ' - Resume on leave'
          -
            type: listItem
            content:
              -
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
                    text: ': Contains all slider logic and animations'
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
            text: |
              {{ $block->block_settings->block_classes ?? '' }}      // Applied to .testimonials-wrapper
              {{ $block->block_settings->container_classes ?? '' }}  // Applied to .testimonials-container
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
            text: |
              {{ $block->block_settings->block_styles ?? '' }}      // Applied to .testimonials-block
              {{ $block->block_settings->container_styles ?? '' }}  // Applied to .testimonials-container
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
                    text: ' (Bard): Rich description content'
          -
            type: listItem
            content:
              -
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
                    text: testimonials
                  -
                    type: text
                    text: ' (Replicator): Array of testimonial items'
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
            text: 'Testimonial Item Fields'
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
                    text: article
                  -
                    type: text
                    text: ' (Bard): Testimonial content/quote'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: author
                  -
                    type: text
                    text: ' (Text): Customer name'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: position
                  -
                    type: text
                    text: ' (Text): Job title'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: company
                  -
                    type: text
                    text: ' (Text): Company name'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: avatar
                  -
                    type: text
                    text: ' (Asset): Customer photo'
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
            text: 'Alpine.js Slider Functionality'
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
            text: 'Data Properties'
      -
        type: codeBlock
        attrs:
          language: javascript
        content:
          -
            type: text
            text: |
              {
                  currentSlide: 0,        // Current active slide
                  totalSlides: count,     // Total number of testimonials
                  autoPlay: true,         // Auto-advance slides
                  interval: null          // Interval reference
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
            text: Methods
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
                    text: nextSlide()
                  -
                    type: text
                    text: ': Advance to next testimonial'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: prevSlide()
                  -
                    type: text
                    text: ': Go to previous testimonial'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: goToSlide(index)
                  -
                    type: text
                    text: ': Jump to specific slide'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: startAutoPlay()
                  -
                    type: text
                    text: ': Begin automatic advancement'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: stopAutoPlay()
                  -
                    type: text
                    text: ': Pause automatic advancement'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: toggleAutoPlay()
                  -
                    type: text
                    text: ': Toggle auto-advance on/off'
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
            text: 'Slider Controls'
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
                    text: 'Navigation arrows'
                  -
                    type: text
                    text: ': Previous/next buttons'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Dot indicators'
                  -
                    type: text
                    text: ': Direct slide navigation'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Auto-play toggle'
                  -
                    type: text
                    text: ': Pause/play control'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Mouse interaction'
                  -
                    type: text
                    text: ': Hover to pause, leave to resume'
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
            text: 'Heading Scaling'
      -
        type: codeBlock
        attrs:
          language: css
        content:
          -
            type: text
            text: |
              /* Mobile */
              .testimonials-heading {
                font-size: 1.875rem; /* text-3xl */
              }

              /* Desktop (1024px+) */
              @media (min-width: 1024px) {
                .testimonials-heading {
                  font-size: 3rem; /* lg:text-5xl */
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
            text: 'Layout Adaptation'
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
                    text: ': Single column layout with stacked elements'
          -
            type: listItem
            content:
              -
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
                    text: ': Maintains single column but with larger typography'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Slider
                  -
                    type: text
                    text: ': Adapts controls for touch vs. mouse interaction'
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
            text: 'Alpine.js Integration Details'
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
            text: Initialization
      -
        type: codeBlock
        attrs:
          language: javascript
        content:
          -
            type: text
            text: |
              Alpine.data('testimonialsSlider', (totalSlides) => ({
                  // Component data and methods
              }))
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
            text: 'Auto-play Configuration'
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
                    text: Interval
                  -
                    type: text
                    text: ': 5 seconds between slides'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Pause on hover'
                  -
                    type: text
                    text: ': Automatic when mouse enters slider'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Resume on leave'
                  -
                    type: text
                    text: ': Automatic when mouse leaves slider'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Manual control'
                  -
                    type: text
                    text: ': Users can toggle auto-play'
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
            text: 'Accessibility Features'
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
                    text: 'ARIA labels'
                  -
                    type: text
                    text: ': Navigation buttons include descriptive labels'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Keyboard navigation'
                  -
                    type: text
                    text: ': Supports arrow key navigation'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Screen readers'
                  -
                    type: text
                    text: ': Proper announcements for slide changes'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Focus management'
                  -
                    type: text
                    text: ': Maintains focus states for controls'
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
                    text: 'Avatar images optimized through Picture component'
          -
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
                    text: 'Lazy loading for non-visible testimonials'
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
            text: 'JavaScript Performance'
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
                    text: 'Alpine.js provides minimal overhead'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Event listeners cleaned up automatically'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Smooth animations using CSS transforms'
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
                    text: 'Testimonials loaded synchronously for smooth transitions'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Images preloaded for better user experience'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Minimal DOM manipulation for performance'
    type: documentation
    enabled: true
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
updated_by: f9af95ec-86dd-4779-927c-e2e325f894ee
updated_at: 1759315076
---
