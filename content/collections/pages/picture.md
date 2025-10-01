---
id: 3de6ff66-2e76-417e-a7fa-8e33da335004
blueprint: page
title: Picture
blocks:
  -
    id: mg7ulbys
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
            text: 'Picture Block Documentation'
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
            text: 'The Picture block is a minimal, flexible image display component designed for straightforward image presentation. It provides a clean container structure while leveraging the comprehensive Image component for optimal performance and responsive behavior.'
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
                    text: 'Standalone images'
                  -
                    type: text
                    text: ' in content flows'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Gallery items'
                  -
                    type: text
                    text: ' with consistent spacing'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Decorative images'
                  -
                    type: text
                    text: ' between content sections'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Product shots'
                  -
                    type: text
                    text: ' with minimal styling'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Featured images'
                  -
                    type: text
                    text: ' in articles'
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
            text: 'The Picture block emphasizes simplicity and performance, delegating complex image handling to the underlying Image component while providing consistent container styling.'
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
              <div class="wrapper picture-wrapper">
                  <section class="block picture-block bg-background">
                      <div class="container picture-container py-8">
                          <x-image 
                              :src="$block->image" 
                              :alt="$block->alt ?? ''" 
                              :lazy="true" 
                          />
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
            text: .picture-wrapper
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
                    text: ': Outermost container for the Picture section'
          -
            type: listItem
            content:
              -
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
            text: .picture-block
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
                      .picture-block {
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
            text: .picture-container
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
                    text: ': Content width and vertical spacing container'
          -
            type: listItem
            content:
              -
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
                      .picture-container {
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
            text: 'Image Component Integration'
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'The Picture block relies entirely on the Image component ('
          -
            type: text
            marks:
              -
                type: code
            text: '<x-image>'
          -
            type: text
            text: ') for:'
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
                    text: 'Responsive sizing'
                  -
                    type: text
                    text: ': Automatic width/height calculations'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Lazy loading'
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
                    text: 'Alt text handling'
                  -
                    type: text
                    text: ': Accessibility compliance'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Format optimization'
                  -
                    type: text
                    text: ': WebP/AVIF support'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Aspect ratio maintenance'
                  -
                    type: text
                    text: ': Prevents layout shift'
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
                    marks:
                      -
                        type: bold
                    text: Container
                  -
                    type: text
                    text: ': Standard responsive container width'
          -
            type: listItem
            content:
              -
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
                    text: ': 2rem top and bottom padding ('
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: py-8
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
                    text: ' CSS variable'
          -
            type: listItem
            content:
              -
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
                    text: ': Full container width with responsive behavior'
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
            text: 'Content Integration'
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'The Picture block integrates seamlessly with content flows:'
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
                    text: 'Inherits text alignment from parent containers'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Maintains consistent vertical rhythm'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Respects container max-widths'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Adapts to theme color schemes'
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
              {{ $block->block_settings->block_classes ?? '' }}      // Applied to .picture-wrapper
              {{ $block->block_settings->container_classes ?? '' }}  // Applied to .picture-container
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
              {{ $block->block_settings->block_styles ?? '' }}      // Applied to .picture-block
              {{ $block->block_settings->container_styles ?? '' }}  // Applied to .picture-container
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
                    text: image
                  -
                    type: text
                    text: ' (Asset): The main image to display'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: alt
                  -
                    type: text
                    text: ' (Text): Alternative text for accessibility'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: lazy
                  -
                    type: text
                    text: ' (Boolean): Enable/disable lazy loading (default: true)'
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
              image:
                type: assets
                container: assets
                max_files: 1
                restrict: images

              alt:
                type: text
                instructions: 'Alternative text for screen readers and SEO'

              lazy:
                type: toggle
                default: true
                instructions: 'Enable lazy loading for performance'
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
            text: 'Container Responsiveness'
      -
        type: codeBlock
        attrs:
          language: css
        content:
          -
            type: text
            text: |-
              /* Mobile-first container sizing */
              .picture-container {
                max-width: 100%;
                padding-left: 1rem;
                padding-right: 1rem;
              }

              /* Tablet and up */
              @media (min-width: 768px) {
                .picture-container {
                  max-width: 768px;
                  margin-left: auto;
                  margin-right: auto;
                }
              }

              /* Desktop and up */
              @media (min-width: 1024px) {
                .picture-container {
                  max-width: 1024px;
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
            text: 'Image Responsiveness'
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'The Image component handles all responsive behavior:'
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
                    text: 'Automatic srcset generation'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Viewport-based sizing'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Device pixel ratio optimization'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Progressive loading'
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
            text: 'Image Component Features'
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
            text: 'Performance Optimizations'
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
                    text: ': Images load when entering viewport'
          -
            type: listItem
            content:
              -
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
                    text: ': Base image loads first, then optimized versions'
          -
            type: listItem
            content:
              -
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
                    text: ': WebP/AVIF served when supported'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Size Optimization'
                  -
                    type: text
                    text: ': Multiple sizes generated automatically'
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
                    text: 'Alt Text'
                  -
                    type: text
                    text: ': Required for screen readers'
          -
            type: listItem
            content:
              -
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
                    text: ': Proper image element structure'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Loading Indicators'
                  -
                    type: text
                    text: ': Visual feedback during loading'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Keyboard Navigation'
                  -
                    type: text
                    text: ': Focus management for interactive images'
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
            text: 'Integration Patterns'
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
            text: 'Within Content Flows'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |-
              <!-- Article with images -->
              <x-blocks.article :block="$articleBlock" />
              <x-blocks.picture :block="$pictureBlock" />
              <x-blocks.article :block="$continueArticle" />
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
            text: 'Gallery Layouts'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |-
              <!-- Grid of pictures -->
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                  @foreach($pictureBlocks as $block)
                      <x-blocks.picture :block="$block" />
                  @endforeach
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
            text: 'Mixed Content Sections'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |-
              <!-- Hero with supporting image -->
              <x-blocks.simple-hero :block="$heroBlock" />
              <x-blocks.picture :block="$supportingImage" />
              <x-blocks.cta :block="$ctaBlock" />
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
            text: 'Loading Strategy'
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
                    text: 'Above-fold images'
                  -
                    type: text
                    text: ': Load immediately'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Below-fold images'
                  -
                    type: text
                    text: ': Lazy load by default'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Critical images'
                  -
                    type: text
                    text: ': Preload in head'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Background images'
                  -
                    type: text
                    text: ': Load on viewport entry'
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
            text: 'Optimization Checklist'
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
                    text: 'Image Sizing'
                  -
                    type: text
                    text: ': Upload appropriately sized source images'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Compression
                  -
                    type: text
                    text: ': Use optimized formats (WebP, AVIF)'
          -
            type: listItem
            content:
              -
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
                    text: ': Always provide meaningful descriptions'
          -
            type: listItem
            content:
              -
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
                    text: ': Enable lazy loading for performance'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Caching
                  -
                    type: text
                    text: ": Leverage Statamic's asset caching"
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
            text: 'Image Component API'
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
            text: Properties
      -
        type: codeBlock
        attrs:
          language: php
        content:
          -
            type: text
            text: |-
              // Required
              :src="$asset"           // Statamic Asset object

              // Optional  
              :alt="string"           // Alternative text
              :lazy="boolean"         // Enable lazy loading (default: true)
              :class="string"         // Additional CSS classes
              :width="integer"        // Fixed width override
              :height="integer"       // Fixed height override
              :quality="integer"      // Image quality (1-100)
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
            text: 'Example Usage'
      -
        type: codeBlock
        attrs:
          language: blade
        content:
          -
            type: text
            text: |-
              <x-image 
                  :src="$block->image" 
                  :alt="$block->alt ?? 'Decorative image'"
                  :lazy="false"
                  class="rounded-lg shadow-lg"
                  quality="85"
              />
    type: documentation
    enabled: true
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
updated_by: f9af95ec-86dd-4779-927c-e2e325f894ee
updated_at: 1759314876
---
