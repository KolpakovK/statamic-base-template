---
id: a825c09d-41e3-4861-afa6-8f0361780a8d
blueprint: page
title: 'Simple Hero'
blocks:
  -
    id: mg7owm97
    navigation: documentation_navigation
    type: documentation
    enabled: true
    article:
      -
        type: set
        attrs:
          id: mg7pg3k6
          values:
            type: picture
            image: images/blocks/simplehero.png
            image_scaling: contain
      -
        type: paragraph
        attrs:
          textAlign: null
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            marks:
              -
                type: bold
            text: 'Simple Hero Block Documentation'
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
            text: 'The Simple Hero block is a versatile and powerful component designed for creating impactful landing page headers and hero sections. It combines compelling typography, call-to-action buttons, and optional hero imagery in a clean, responsive layout.'
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
                    text: 'Landing page headers'
                  -
                    type: text
                    text: ' with compelling headlines'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Product announcements'
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
                    text: 'Service introductions'
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
                    text: 'Campaign banners'
                  -
                    type: text
                    text: ' with strong call-to-action buttons'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'About page heroes'
                  -
                    type: text
                    text: ' with brand messaging'
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
            text: 'The Simple Hero follows a center-aligned, mobile-first approach that ensures maximum impact across all devices. The component prioritizes readability and conversion optimization through strategic use of typography hierarchy and button placement.'
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
            text: 'Blade Architecture'
      -
        type: codeBlock
        attrs:
          language: html
        content:
          -
            type: text
            text: |
              <div class="wrapper simple-hero-wrapper">
                  <section class="block simple-hero-block">
                      <div class="container simple-hero-container">
                          <div class="simple-hero-content">
                              <h1 class="simple-hero-heading">...</h1>
                              <p class="simple-hero-text">...</p>
                              <div class="simple-hero-buttons">...</div>
                          </div>
                          <div class="simple-hero-image">...</div>
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
            text: .simple-hero-wrapper
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
                    text: ': Outermost container for the entire hero section'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Styling
                  -
                    type: text
                    text: ': Handles background colors, spacing, and overall layout'
          -
            type: listItem
            content:
              -
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
                    text: ': Add custom background images, gradients, or patterns'
          -
            type: listItem
            content:
              -
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
                    text: ': Apply section-wide styling modifications'
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
            text: .simple-hero-block
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
                    text: ': Main semantic container for the hero content'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Styling
                  -
                    type: text
                    text: ': Default background and semantic structure'
          -
            type: listItem
            content:
              -
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
                    text: ': Override background colors, add shadows or borders'
          -
            type: listItem
            content:
              -
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
            text: .simple-hero-container
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
                    text: Styling
                  -
                    type: text
                    text: ': Responsive max-width, padding, flexbox layout'
          -
            type: listItem
            content:
              -
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
                    text: ': Adjust container width, spacing, and layout direction'
          -
            type: listItem
            content:
              -
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
                    text: ': Control content boundaries and internal spacing'
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
            text: .simple-hero-content
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
                    text: ': Wrapper for all text and button content'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Styling
                  -
                    type: text
                    text: ': Center alignment, max-width constraints, vertical spacing'
          -
            type: listItem
            content:
              -
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
                    text: ': Change alignment, max-width, or layout direction'
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
            text: .simple-hero-heading
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
                    text: ': Main headline styling and typography'
          -
            type: listItem
            content:
              -
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
                    text: ': Uses system font stack with optimized letter spacing'
          -
            type: listItem
            content:
              -
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
                    text: ': Scales from 30px on mobile to 48px on desktop'
          -
            type: listItem
            content:
              -
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
                    text: ': Override font-size, weight, or add text effects'
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
            text: .simple-hero-text
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
                    text: ': Descriptive text below the main heading'
          -
            type: listItem
            content:
              -
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
                    text: ': Secondary color for hierarchy'
          -
            type: listItem
            content:
              -
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
                    text: ': Adds horizontal padding on larger screens'
          -
            type: listItem
            content:
              -
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
                    text: ': Adjust font size, color, or line height'
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
            text: .simple-hero-buttons
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
                    text: Responsive
                  -
                    type: text
                    text: ': Buttons wrap naturally on smaller screens'
          -
            type: listItem
            content:
              -
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
                    text: ': Change alignment, spacing, or layout direction'
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
            text: .simple-hero-image
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
                    text: ': Hero image container with responsive behavior'
          -
            type: listItem
            content:
              -
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
                    text: ': Fixed aspect ratio with object-fit controls'
          -
            type: listItem
            content:
              -
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
                    text: ': Adjust height, add borders, or change border-radius'
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
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: "The Simple Hero block supports additional CSS classes through Statamic's block settings:"
      -
        type: codeBlock
        attrs:
          language: php
        content:
          -
            type: text
            text: |-
              {{ $block->block_settings->block_classes ?? '' }}      // Applied to .simple-hero-wrapper
              {{ $block->block_settings->container_classes ?? '' }}  // Applied to .simple-hero-container
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
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'Custom inline styles can be applied through block settings:'
      -
        type: codeBlock
        attrs:
          language: php
        content:
          -
            type: text
            text: |-
              {{ $block->block_settings->block_styles ?? '' }}      // Applied to .simple-hero-block
              {{ $block->block_settings->container_styles ?? '' }}  // Applied to .simple-hero-container
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
                    text: ' (Rich Text): Main hero headline'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: text
                  -
                    type: text
                    text: ' (Rich Text): Supporting descriptive text'
          -
            type: listItem
            content:
              -
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
                    text: ' (Replicator): Array of button components'
          -
            type: listItem
            content:
              -
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
                    text: ' (Asset): Optional hero image'
          -
            type: listItem
            content:
              -
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
                    text: ' (Select): Cover or contain image scaling'
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
            text: 'Field Validation'
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
                    text: ': Optional but recommended for context'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: text
                  -
                    type: text
                    text: ': Optional but recommended for context'
          -
            type: listItem
            content:
              -
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
                    text: ': Optional, supports multiple buttons'
          -
            type: listItem
            content:
              -
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
                    text: ': Optional, automatically optimized'
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
            text: |-
              /* Mobile (default) */
              .simple-hero-heading { font-size: 1.875rem; }
              .simple-hero-text { padding: 0; }

              /* Desktop (1024px+) */
              @media (min-width: 1024px) {
                .simple-hero-heading { font-size: 3rem; }
                .simple-hero-text { padding: 0 4rem; }
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
            text: 'Layout Adaptations'
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
                    text: ': Single column, stacked content'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Tablet
                  -
                    type: text
                    text: ': Maintains single column with increased spacing'
          -
            type: listItem
            content:
              -
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
                    text: ': Optional side-by-side layout for text and image'
      -
        type: paragraph
        attrs:
          textAlign: null
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
                    text: "Images are automatically processed through Statamic's Glide"
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'WebP/AVIF formats are served when supported'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Lazy loading is enabled by default'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Responsive srcset attributes are generated'
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
            text: 'CSS Loading'
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
                    text: 'Critical CSS is inlined for above-the-fold content'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Non-critical styles are loaded asynchronously'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'CSS custom properties enable theme switching'
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
                    text: 'Semantic HTML5 structure'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Proper heading hierarchy (h1)'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Focus-visible styles for buttons'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Screen reader friendly text balance'
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
            text: 'Best Practices'
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
                    text: Headline
                  -
                    type: text
                    text: ': Keep under 10 words for maximum impact'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Text
                  -
                    type: text
                    text: ': 2-3 sentences explaining value proposition'
          -
            type: listItem
            content:
              -
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
                    text: ': Maximum 2 buttons, primary action first'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Image
                  -
                    type: text
                    text: ': High-quality, relevant to content'
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
                    text: ': Optimize images before upload'
          -
            type: listItem
            content:
              -
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
                    text: ': Always include alt text for images'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: SEO
                  -
                    type: text
                    text: ': Use descriptive, keyword-rich headlines'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Testing
                  -
                    type: text
                    text: ': Test across different screen sizes'
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
                    text: Contrast
                  -
                    type: text
                    text: ': Ensure sufficient color contrast'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Spacing
                  -
                    type: text
                    text: ': Maintain consistent vertical rhythm'
          -
            type: listItem
            content:
              -
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
                    text: ': Limit to 2-3 font sizes maximum'
          -
            type: listItem
            content:
              -
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
                    text: ': Use consistent button styles across site'
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
            text: 'Integration with Other Components'
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
            text: 'Button Component'
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'The Simple Hero seamlessly integrates with the Button component system:'
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
                    text: 'Supports all button variants (primary, secondary, outline, ghost)'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Icon support with left/right positioning'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Consistent styling across the application'
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
            text: 'Picture Component'
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'Hero images utilize the Picture component for optimal delivery:'
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
                    text: 'Automatic format optimization'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Responsive image serving'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Lazy loading implementation'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Focus point support for cropping'
  -
    id: mg7p1hk8
    heading: |-
      Your Trusted Bridge <br/>
      to Payment Solutions
    text: 'Licensed Payment Agent Services in Turkey & UAE – Fast, Secure, Compliant'
    buttons:
      -
        id: mg7p1vnq
        label: 'Explore Services'
        variant: primary
        show_icon: false
        type: button
        enabled: true
      -
        id: mg7p6ynj
        label: 'Contact Us'
        variant: primary
        show_icon: false
        type: button
        enabled: true
    image_scaling: cover
    display_additional_blocks_settings: false
    type: simple_hero
    enabled: false
    image: demo/kir-patowlq3wvs-unsplash.jpg
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
updated_by: f9af95ec-86dd-4779-927c-e2e325f894ee
updated_at: 1759306237
---
