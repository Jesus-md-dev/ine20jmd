# Laravel Online Shop

Online shop built with **Laravel 8** and **Jetstream** for a web development course: product catalogue, product detail and editing, shopping cart and user accounts with teams.

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat-square&logo=laravel&logoColor=white) ![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white) ![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-06B6D4?style=flat-square&logo=tailwindcss&logoColor=white)

## Features

- Product catalogue, detail pages and an edit form for products
- Shopping cart per user
- Authentication, profile management, two-factor authentication and teams (Laravel Jetstream)
- Blade layouts with a shared header and footer

## Running locally

```bash
composer install
npm install && npm run dev
cp .env.example .env && php artisan key:generate
php artisan migrate
php artisan serve
```

Coursework from my Computer Engineering degree at the University of Cádiz (Escuela Superior de Ingeniería).
