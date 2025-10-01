---
id: e066a071-0add-499d-916d-1b137f36d110
blueprint: page
title: 'Setting Up the SEO System for Statamic'
blocks:
  -
    id: mg77limf
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
            text: '✅ What’s Already Set Up'
      -
        type: horizontalRule
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            text: '📁 Blade Partials:'
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
                    text: 'partials/seo.blade.php - Main SEO tags'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'partials/browser-appearance.blade.php - Browser settings'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'partials/fallback-description.blade.php - Fallback description'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'partials/cookie-dialog.blade.php - Cookie consent dialog'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'partials/seo-body.blade.php - Scripts for the body'
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            text: '📋 Blueprints:'
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
                    text: 'globals/seo.yaml - Global SEO settings'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'globals/browser_appearance.yaml - Browser appearance settings'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'collections/pages/page.yaml - Updated with SEO fields'
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            text: '📄 Global Sets Data:'
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
                    text: 'content/globals/seo.yaml - Base SEO data'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'content/globals/browser_appearance.yaml - Base browser data'
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            text: '🎨 Layout:'
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
                    text: 'layout.blade.php - Integrated with the SEO system'
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
            text: '🔧 What Needs to Be Configured'
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            text: '1. '
          -
            type: text
            marks:
              -
                type: bold
            text: 'Create Global Sets in the Admin Panel'
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'Log into the Statamic admin panel and create:'
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
                    text: 'Global Set with handle seo'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Global Set with handle browser_appearance'
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            text: '2. '
          -
            type: text
            marks:
              -
                type: bold
            text: 'Set Up Favicon'
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
                    text: 'Visit '
                  -
                    type: text
                    marks:
                      -
                        type: link
                        attrs:
                          href: 'https://realfavicongenerator.net'
                          rel: null
                          target: null
                          title: null
                    text: 'https://realfavicongenerator.net'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Upload your logo'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Download the generated files'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Place them in '
                  -
                    type: text
                    marks:
                      -
                        type: code
                    text: public/favicons/
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            text: '3. '
          -
            type: text
            marks:
              -
                type: bold
            text: 'Add SEO Fields to Other Collections'
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'For each collection (posts, products, etc.), add SEO fields.'
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            text: '4. '
          -
            type: text
            marks:
              -
                type: bold
            text: 'Configure Variables in Global Sets'
      -
        type: heading
        attrs:
          textAlign: null
          level: 4
        content:
          -
            type: text
            text: 'SEO Settings:'
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
            text: yaml
      -
        type: codeBlock
        attrs:
          language: null
        content:
          -
            type: text
            text: |-
              site_name: 'Your Site'
              title_separator: ' | '
              tracker_type: 'gtag'  # or 'gtm'
              google_analytics: 'G-XXXXXXXXXX'
              organization_name: 'Your Company'
              twitter_handle: '@yourhandle'
      -
        type: heading
        attrs:
          textAlign: null
          level: 4
        content:
          -
            type: text
            text: 'Browser Appearance:'
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
            text: yaml
      -
        type: codeBlock
        attrs:
          language: null
        content:
          -
            type: text
            text: "theme_color: '#1e293b'  # Your primary color"
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
            text: '🎯 How to Use'
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            text: 'In Page Templates: (already implemented)'
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
            text: antlers
      -
        type: codeBlock
        attrs:
          language: null
        content:
          -
            type: text
            text: '{{# layout.antlers #}} {{# All SEO tags are automatically included #}}  <main>     <h1>{{ title }}</h1>     {{ content }} </main>'
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            text: 'In Collection Pages:'
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'SEO fields will be automatically available in the admin panel:'
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
                    text: 'SEO Title'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Meta Description'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Open Graph Image'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Twitter Image'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'JSON-LD Schema'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Canonical URLs'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: No-index/No-follow
      -
        type: horizontalRule
      -
        type: heading
        attrs:
          textAlign: null
          level: 4
        content:
          -
            type: text
            text: '📊 Features'
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            text: '✅ Automatically Handled:'
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
                    text: 'Title Tags'
                  -
                    type: text
                    text: ' - SEO Title | Site Name'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Meta Descriptions'
                  -
                    type: text
                    text: ' - From fields or fallback'
          -
            type: listItem
            content:
              -
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
                    text: ' - For Facebook, LinkedIn'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Twitter Cards'
                  -
                    type: text
                    text: ' - For Twitter'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'JSON-LD Schema'
                  -
                    type: text
                    text: ' - Structured data'
          -
            type: listItem
            content:
              -
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
                    text: ' - Duplicate content handling'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Robots Meta'
                  -
                    type: text
                    text: ' - Indexing based on environment'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Breadcrumbs
                  -
                    type: text
                    text: ' - JSON-LD breadcrumbs'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Cookie Consent'
                  -
                    type: text
                    text: ' - GDPR compliance'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Analytics
                  -
                    type: text
                    text: ' - Google Analytics/GTM'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Favicons
                  -
                    type: text
                    text: ' - All sizes and formats'
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            text: '🌍 Multi-environment:'
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
                    text: Local
                  -
                    type: text
                    text: ' - No indexing, no analytics'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Staging
                  -
                    type: text
                    text: ' - Noindex, no analytics'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Production
                  -
                    type: text
                    text: ' - Full indexing and analytics'
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            text: '🍪 Cookie Consent:'
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
                    text: 'Automatic consent management'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Google Consent API integration'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Customizable cookie types'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Consent revocation by date'
      -
        type: heading
        attrs:
          textAlign: null
          level: 5
        content:
          -
            type: text
            text: '🛠️ Additional Configurations'
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'For Fathom Analytics:'
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
            text: yaml
      -
        type: codeBlock
        attrs:
          language: null
        content:
          -
            type: text
            text: |-
              use_fathom: true
              fathom: 'YOURCODE'
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'For Cloudflare Analytics:'
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
            text: yaml
      -
        type: codeBlock
        attrs:
          language: null
        content:
          -
            type: text
            text: |-
              use_cloudflare_web_analytics: true
              cloudflare_web_analytics: 'your-token'
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'For Google Site Verification:'
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
            text: yaml
      -
        type: codeBlock
        attrs:
          language: null
        content:
          -
            type: text
            text: |-
              use_google_site_verification: true
              google_site_verification: 'your-code'
      -
        type: horizontalRule
      -
        type: heading
        attrs:
          textAlign: null
          level: 4
        content:
          -
            type: text
            text: '🎨 Styling the Cookie Dialog'
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'The cookie dialog uses your CSS variables:'
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
                    text: 'bg-card / text-card-foreground'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'bg-primary / text-primary-foreground'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: rounded-panel-md
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: shadow-custom-lg
      -
        type: heading
        attrs:
          textAlign: null
          level: 4
        content:
          -
            type: text
            text: '🚨 Important Notes'
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
                    text: 'Environment Variables'
                  -
                    type: text
                    text: ': Ensure APP_ENV is set correctly'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: 'Assets Container'
                  -
                    type: text
                    text: ': Create an assets container for images'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Collections
                  -
                    type: text
                    text: ': Add collections to sitemap settings'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    marks:
                      -
                        type: bold
                    text: Permissions
                  -
                    type: text
                    text: ': Verify write permissions for the storage directory for caching'
      -
        type: heading
        attrs:
          textAlign: null
          level: 4
        content:
          -
            type: text
            text: '🔍 Verifying Functionality'
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
                    text: 'Open the page source code'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Check for the presence of meta tags'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Use tools:'
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
                            text: 'Google Search Console'
                  -
                    type: listItem
                    content:
                      -
                        type: paragraph
                        attrs:
                          textAlign: null
                        content:
                          -
                            type: text
                            text: 'Facebook Sharing Debugger'
                  -
                    type: listItem
                    content:
                      -
                        type: paragraph
                        attrs:
                          textAlign: null
                        content:
                          -
                            type: text
                            text: 'Twitter Card Validator'
                  -
                    type: listItem
                    content:
                      -
                        type: paragraph
                        attrs:
                          textAlign: null
                        content:
                          -
                            type: text
                            text: 'Rich Results Test'
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'Your SEO system is ready to go! 🎉'
    type: documentation
    enabled: true
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
updated_by: f9af95ec-86dd-4779-927c-e2e325f894ee
updated_at: 1759276497
---
