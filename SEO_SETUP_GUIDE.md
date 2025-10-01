# 🚀 Настройка SEO системы для Statamic

## ✅ Что уже создано

### 📁 Blade партиалы:
- `partials/seo.blade.php` - основные SEO теги
- `partials/browser-appearance.blade.php` - настройки браузера
- `partials/fallback-description.blade.php` - fallback описания
- `partials/cookie-dialog.blade.php` - диалог согласия на куки
- `partials/seo-body.blade.php` - скрипты для body

### 📋 Blueprints:
- `globals/seo.yaml` - глобальные SEO настройки
- `globals/browser_appearance.yaml` - настройки браузера
- `collections/pages/page.yaml` - обновлен с SEO полями

### 📄 Global Sets данные:
- `content/globals/seo.yaml` - базовые данные SEO
- `content/globals/browser_appearance.yaml` - базовые данные браузера

### 🎨 Layout:
- `layout.blade.php` - интегрирован с SEO системой

## 🔧 Что нужно настроить

### 1. **Создать Global Sets в админке**
Зайдите в админку Statamic и создайте:
- Global Set с handle `seo` 
- Global Set с handle `browser_appearance`

### 2. **Настроить Favicon**
- Перейдите на https://realfavicongenerator.net
- Загрузите ваш логотип
- Скачайте сгенерированные файлы
- Поместите их в `public/favicon/`

### 3. **Добавить SEO поля в другие коллекции**
Для каждой коллекции (posts, products, etc.) добавьте SEO поля из файла `SEO_FIELDS_FOR_COLLECTIONS.yaml`

### 4. **Настроить переменные в Global Sets**

#### SEO Settings:
```yaml
site_name: 'Ваш сайт'
title_separator: ' | '
tracker_type: 'gtag'  # или 'gtm'
google_analytics: 'G-XXXXXXXXXX'
organization_name: 'Ваша компания'
twitter_handle: '@yourhandle'
```

#### Browser Appearance:
```yaml
theme_color: '#1e293b'  # Ваш основной цвет
```

## 🎯 Как использовать

### В шаблонах страниц:
```antlers
{{# layout.antlers #}}
{{# Все SEO теги автоматически включены #}}

<main>
    <h1>{{ title }}</h1>
    {{ content }}
</main>
```

### В Collection Pages:
SEO поля будут автоматически доступны в админке:
- SEO Title
- Meta Description  
- Open Graph Image
- Twitter Image
- JSON-LD Schema
- Canonical URLs
- No-index/No-follow

## 📊 Функции

### ✅ Автоматически работает:
- **Title теги** - `SEO Title | Site Name`
- **Meta descriptions** - из полей или fallback
- **Open Graph** - для Facebook, LinkedIn
- **Twitter Cards** - для Twitter
- **JSON-LD Schema** - структурированные данные
- **Canonical URLs** - дублированный контент
- **Robots meta** - индексация по окружениям
- **Breadcrumbs** - хлебные крошки в JSON-LD
- **Cookie consent** - GDPR совместимость
- **Analytics** - Google Analytics/GTM
- **Favicons** - все размеры и форматы

### 🌍 Multi-environment:
- **Local** - без индексации, без аналитики
- **Staging** - noindex, без аналитики  
- **Production** - полная индексация и аналитика

### 🍪 Cookie Consent:
- Автоматическое управление согласием
- Google Consent API интеграция
- Кастомизируемые типы куки
- Отзыв согласия по дате

## 🛠️ Дополнительные настройки

### Для Fathom Analytics:
```yaml
use_fathom: true
fathom: 'YOURCODE'
```

### Для Cloudflare Analytics:
```yaml
use_cloudflare_web_analytics: true
cloudflare_web_analytics: 'your-token'
```

### Для Google Site Verification:
```yaml
use_google_site_verification: true
google_site_verification: 'your-code'
```

## 🎨 Стилизация Cookie Dialog

Cookie диалог использует ваши CSS переменные:
- `bg-card` / `text-card-foreground`
- `bg-primary` / `text-primary-foreground`  
- `rounded-panel-md`
- `shadow-custom-lg`

## 🚨 Важные моменты

1. **Environment Variables**: Убедитесь, что `APP_ENV` настроен правильно
2. **Assets Container**: Создайте assets container для изображений
3. **Collections**: Добавьте коллекции в sitemap настройки
4. **Permissions**: Проверьте права на запись в storage для кэша

## 🔍 Проверка работы

1. Откройте исходный код страницы
2. Проверьте наличие meta тегов
3. Используйте инструменты:
   - Google Search Console
   - Facebook Sharing Debugger  
   - Twitter Card Validator
   - Rich Results Test

Ваша SEO система готова к работе! 🎉