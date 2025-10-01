---
id: fdb4db30-602c-46a4-9880-40845d39def6
blueprint: page
title: 'Technical Specifications'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
updated_by: f9af95ec-86dd-4779-927c-e2e325f894ee
updated_at: 1759276107
blocks:
  -
    id: mg77ebgf
    navigation: documentation_navigation
    article:
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
        content:
          -
            type: text
            text: '🏗️ Project Architecture'
      -
        type: horizontalRule
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'Core Technologies'
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
                    text: Backend
                  -
                    type: text
                    text: ': Laravel 11.x with Statamic 6'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Frontend
                  -
                    type: text
                    text: ': Tailwind CSS 4 + Alpine.js 3'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Database
                  -
                    type: text
                    text: ': MySQL 8.0 / PostgreSQL 13+ or Flat file'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Build Tool'
                  -
                    type: text
                    text: ': Vite 5 with hot reload'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Package Manager'
                  -
                    type: text
                    text: ': Composer (PHP) + NPM (JS)'
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'Project Structure'
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
            text: text
      -
        type: codeBlock
        attrs:
          language: null
        content:
          -
            type: text
            text: |-
              project/
              ├── app/                    # Laravel application
              ├── resources/
              │   ├── views/              # Blade templates
              │   │   ├── blocks/         # Content blocks
              │   │   ├── components/     # Reusable components
              │   │   └── partials/       # Partial templates
              │   ├── css/                # Styles
              │   └── js/                 # JavaScript
              ├── content/                # Statamic content
              │   ├── collections/        # Collections
              │   ├── globals/            # Global data
              │   └── assets/             # Media files
              └── config/                 # Configurations
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
        content:
          -
            type: text
            text: '📦 Components and Blocks'
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'Pre-built Content Blocks'
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
                    text: 'Simple Hero'
                  -
                    type: text
                    text: ' — Main banner with headline and buttons'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Article
                  -
                    type: text
                    text: ' — Text content with formatting'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Testimonials
                  -
                    type: text
                    text: ' — Client reviews with a slider'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Blog Grid'
                  -
                    type: text
                    text: ' — Grid of blog posts'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Picture
                  -
                    type: text
                    text: ' — Responsive images with optimization'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Feature Block'
                  -
                    type: text
                    text: ' — Responsive multipropose block'
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'Reusable Components'
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
                    text: Button
                  -
                    type: text
                    text: ' — Buttons with various styles and sizes'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Heading
                  -
                    type: text
                    text: ' — Headings with automatic level detection'
          -
            type: listItem
            content:
              -
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
                    text: ' — Text blocks with paragraph processing'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Form
                  -
                    type: text
                    text: ' — Forms with validation and error handling'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Card
                  -
                    type: text
                    text: ' — Cards for content display'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Picture
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'Class System'
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'Each component and block uses semantic CSS classes:'
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
            text: css
      -
        type: codeBlock
        attrs:
          language: null
        content:
          -
            type: text
            text: |-
              .component-name-wrapper     /* Outer container */
              .component-name-container   /* Inner container */
              .component-name-content     /* Main content */
              .component-name-element     /* Individual elements */
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
        content:
          -
            type: text
            text: '🎨 Styling System'
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'CSS Variables (Custom Properties)'
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
            text: css
      -
        type: codeBlock
        attrs:
          language: null
        content:
          -
            type: text
            text: |-
              :root {
                  /* Colors */
                  --primary: #1e293b;
                  --secondary: #64748b;
                  --background: #ffffff;
                  --foreground: #0f172a;
                  
                  /* Typography */
                  --font-sans: 'Inter', system-ui, sans-serif;
                  --font-size-base: 1rem;
                  --line-height-base: 1.6;
                  
                  /* Spacing */
                  --spacing-xs: 0.25rem;
                  --spacing-sm: 0.5rem;
                  --spacing-md: 1rem;
                  --spacing-lg: 2rem;
                  
                  /* Radii */
                  --radius-sm: 0.25rem;
                  --radius-md: 0.5rem;
                  --radius-lg: 1rem;
              }
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'Tailwind CSS Configuration'
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
                    text: 'Full customization'
                  -
                    type: text
                    text: ' of the color palette'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Responsive breakpoints'
                  -
                    type: text
                    text: ' for all devices'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Custom utilities'
                  -
                    type: text
                    text: ' for specific tasks'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Purge CSS'
                  -
                    type: text
                    text: ' for minimal bundle size'
      -
        type: horizontalRule
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
        content:
          -
            type: text
            text: '⚡ Performance'
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'JavaScript Optimization'
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
                    text: 'Tree shaking'
                  -
                    type: text
                    text: ' for unused code'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Code splitting'
                  -
                    type: text
                    text: ' by routes'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Minification
                  -
                    type: text
                    text: ' and compression'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Modern/Legacy
                  -
                    type: text
                    text: ' bundles for older browser support'
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'CSS Optimization'
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
                    text: 'Critical CSS'
                  -
                    type: text
                    text: ' for first paint'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'CSS purging'
                  -
                    type: text
                    text: ' of unused styles'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Autoprefixing
                  -
                    type: text
                    text: ' for cross-browser compatibility'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: PostCSS
                  -
                    type: text
                    text: ' processing and optimization'
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
        content:
          -
            type: text
            text: '🔒 Security'
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'Laravel Security Features'
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
                    text: 'CSRF Protection'
                  -
                    type: text
                    text: ' for all forms'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'XSS Protection'
                  -
                    type: text
                    text: ' with automatic escaping'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'SQL Injection'
                  -
                    type: text
                    text: ' protection via Eloquent ORM'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Rate Limiting'
                  -
                    type: text
                    text: ' for APIs and forms'
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'Statamic Security'
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
                    text: 'Role-based Access Control'
                  -
                    type: text
                    text: ' for the admin panel'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Two-Factor Authentication'
                  -
                    type: text
                    text: ' support'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Asset Security'
                  -
                    type: text
                    text: ' for file access control'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Content Validation'
                  -
                    type: text
                    text: ' for filtering user input'
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
        content:
          -
            type: text
            text: '📱 Responsiveness'
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: Breakpoints
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
            text: css
      -
        type: codeBlock
        attrs:
          language: null
        content:
          -
            type: text
            text: |-
              /* Mobile-first approach */
              sm: 640px    /* Tablets in portrait orientation */
              md: 768px    /* Tablets in landscape orientation */
              lg: 1024px   /* Laptops */
              xl: 1280px   /* Desktops */
              2xl: 1536px  /* Large monitors */
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'Responsive Components'
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
                    text: 'Flexible Grid System'
                  -
                    type: text
                    text: ' for any layout'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Container Queries'
                  -
                    type: text
                    text: ' for components'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Touch-friendly
                  -
                    type: text
                    text: ' interfaces for mobile'
          -
            type: listItem
            content:
              -
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
                    text: ' approach'
      -
        type: horizontalRule
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
        content:
          -
            type: text
            text: '🌐 SEO and Accessibility'
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
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
                    text: 'Semantic HTML5'
                  -
                    type: text
                    text: ' markup'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Open Graph'
                  -
                    type: text
                    text: ' and Twitter Cards'
          -
            type: listItem
            content:
              -
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
                    text: ' with JSON-LD markup'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'XML Sitemap'
                  -
                    type: text
                    text: ' automatic generation'
    type: documentation
    enabled: true
---
