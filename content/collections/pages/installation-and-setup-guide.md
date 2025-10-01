---
id: b92ec423-844f-441b-b318-67bb15fce82a
blueprint: page
title: 'Installation and Setup Guide'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
updated_by: f9af95ec-86dd-4779-927c-e2e325f894ee
updated_at: 1759275789
blocks:
  -
    id: mg776ix0
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
            text: '🚀 Quick Start'
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
            text: 'System Requirements'
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
                    text: 'PHP 8.2+ with extensions: mbstring, xml, curl, zip, gd'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Composer for PHP dependency management'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Node.js 18+ and npm for frontend build'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'MySQL 8.0+ or PostgreSQL 13+'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Web server: Apache, Nginx, or built-in PHP server'
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'Installation in 3 Steps'
      -
        type: heading
        attrs:
          textAlign: null
          level: 4
        content:
          -
            type: text
            text: '1. Clone and Install Dependencies'
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
            text: bash
      -
        type: codeBlock
        attrs:
          language: null
        content:
          -
            type: text
            text: |-
              git clone https://github.com/KolpakovK/statamic-base-template.git
              cd statamic-base-template
              composer install
              npm install
      -
        type: heading
        attrs:
          textAlign: null
          level: 4
        content:
          -
            type: text
            text: '2. Environment Setup'
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
            text: bash
      -
        type: codeBlock
        attrs:
          language: null
        content:
          -
            type: text
            text: |-
              cp .env.example .env
              php artisan key:generate
              php artisan statamic:install
      -
        type: heading
        attrs:
          textAlign: null
          level: 4
        content:
          -
            type: text
            text: '3. Run the Project'
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
            text: bash
      -
        type: codeBlock
        attrs:
          language: null
        content:
          -
            type: text
            text: |-
              npm run dev     # Start development build
              php artisan serve   # Start local server
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'Done! Your site is available at '
          -
            type: text
            marks:
              -
                type: link
                attrs:
                  href: 'http://localhost:8000'
                  rel: 'noopener noreferrer nofollow'
                  target: _blank
                  title: null
            text: 'http://localhost:8000'
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
            text: '⚙️ Detailed Configuration'
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'Statamic Configuration'
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
            text: env
      -
        type: codeBlock
        attrs:
          language: null
        content:
          -
            type: text
            text: |-
              STATAMIC_LICENSE_KEY=your-license-key 
              STATAMIC_STACHE_WATCHER=true 
              STATAMIC_STATIC_CACHING_STRATEGY=full
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
        content:
          -
            type: text
            text: '🎨 Theme Customization'
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'Via Admin Panel'
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
                    text: 'Log in to the admin panel at /cp'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Navigate to Globals → Theme Settings'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Adjust colors, fonts, and spacing'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Save changes'
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'Via Code'
      -
        type: paragraph
        attrs:
          textAlign: null
        content:
          -
            type: text
            text: 'Edit the resources/css/site.css file:'
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
                  --primary: #your-color;
                  --secondary: #your-color;
                  /* other variables */
              }
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
        content:
          -
            type: text
            text: '🔧 Development'
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'Development Commands'
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
            text: bash
      -
        type: codeBlock
        attrs:
          language: null
        content:
          -
            type: text
            text: |-
              npm run dev         # Development mode with hot reload
              npm run build       # Production build
              npm run preview     # Preview production build
              composer test       # Run tests
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'Adding a New Block'
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
                    text: 'Create a blueprint: resources/blueprints/blocks/new-block.yaml'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Create a template: resources/views/blocks/new-block.blade.php'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Add to the block list in resources/blueprints/collections/pages.yaml'
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'Creating a Component'
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
            text: bash
      -
        type: codeBlock
        attrs:
          language: null
        content:
          -
            type: text
            text: 'php artisan make:component YourComponent'
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
        content:
          -
            type: text
            text: '🚀 Production Deployment'
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'Deployment Preparation'
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
            text: bash
      -
        type: codeBlock
        attrs:
          language: null
        content:
          -
            type: text
            text: |-
              composer install --optimize-autoloader --no-dev
              npm run build
              php artisan config:cache
              php artisan route:cache
              php artisan view:cache
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'Web Server Configuration'
      -
        type: heading
        attrs:
          textAlign: null
          level: 4
        content:
          -
            type: text
            text: Nginx
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
            text: nginx
      -
        type: codeBlock
        attrs:
          language: null
        content:
          -
            type: text
            text: |-
              server {
                  listen 80;
                  server_name your-domain.com;
                  root /path/to/your/project/public;

                  location / {
                      try_files $uri $uri/ /index.php?$query_string;
                  }

                  location ~ \.php$ {
                      fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
                      fastcgi_index index.php;
                      include fastcgi_params;
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
            text: Apache
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
            text: apache
      -
        type: codeBlock
        attrs:
          language: null
        content:
          -
            type: text
            text: |-
              <VirtualHost *:80>
                  ServerName your-domain.com
                  DocumentRoot /path/to/your/project/public

                  <Directory /path/to/your/project/public>
                      AllowOverride All
                      Require all granted
                  </Directory>
              </VirtualHost>
      -
        type: heading
        attrs:
          textAlign: null
          level: 2
        content:
          -
            type: text
            text: '🛠️ Maintenance and Updates'
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'Regular Maintenance'
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
                    text: 'Update dependencies monthly'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Back up the database and files'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Monitor logs for errors'
          -
            type: listItem
            content:
              -
                type: paragraph
                attrs:
                  textAlign: null
                content:
                  -
                    type: text
                    text: 'Test performance'
      -
        type: heading
        attrs:
          textAlign: null
          level: 3
        content:
          -
            type: text
            text: 'Getting Updates'
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
            text: bash
      -
        type: codeBlock
        attrs:
          language: null
        content:
          -
            type: text
            text: |-
              git pull origin main
              composer update
              npm update
              npm run build
    type: documentation
    enabled: true
---
