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
php artisan migrate --seed   # example products
php artisan serve
```

## Images

The product photos in `public/img` are public domain (CC0) images found through [Openverse](https://openverse.org/):

| File | Source (CC0) |
|---|---|
| `mandos.jpg` | [Game Controllers](https://www.flickr.com/photos/49243838@N00/11241518385) |
| `auriculares.jpg` | [Koss headphones](https://www.flickr.com/photos/57866029@N00/52459692877) |
| `teclado.jpg` | [computer-keyboard-backlit-1869236](https://www.flickr.com/photos/151198978@N08/32264785022) |
| `raton.jpg` | [Usb cable connected apple](https://www.rawpixel.com/image/431887/free-photo-image-internet-computer-mouse) |
| `disco-externo.jpg` | [For the Most Basic USB Cable](https://www.flickr.com/photos/37996646802@N01/24644853077) |
| `cable-usb.jpg` | [Free USB cable electronic accessory](https://www.rawpixel.com/image/5912780/image-public-domain-technology-free) |
| `microfonos.jpg` | [Interact: duelling microphones](https://www.flickr.com/photos/35034347371@N01/14686131) |

Coursework from my Computer Engineering degree at the University of Cádiz (Escuela Superior de Ingeniería).
