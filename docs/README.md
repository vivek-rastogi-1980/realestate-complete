# LuxEstate Platform

LuxEstate is a PHP 8.3 MVC luxury real estate platform scaffold with glassmorphism UI, immersive Three.js hero rendering, GSAP scroll reveals, Lenis smooth scrolling, Swiper testimonials, Chart.js analytics, SEO metadata, role-aware architecture, and a normalized MySQL schema.

## Installation
1. `composer install`
2. `cp .env.example .env`
3. Create a MySQL 8 database and import `database/schema.sql`.
4. `composer serve`

## Architecture
- `public/` front controller and compiled assets.
- `app/Core` MVC kernel.
- `app/Controllers` web controllers.
- `app/Repositories` data access boundary for repository pattern.
- `app/Services` reusable business and security services.
- `app/Views` reusable PHP views and partials.

## Deployment
Use PHP-FPM 8.3, HTTPS, OPcache, gzip or Brotli compression, immutable asset caching, environment secrets outside the repository, scheduled backups, and least-privilege MySQL credentials.
