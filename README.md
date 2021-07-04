## Laravel Simple Admin Panel

<p>
<!-- <a href="https://packagist.org/packages/aler998/laraveladminpanel"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/aler998/laraveladminpanel"><img src="http://img.shields.io/packagist/v/tymon/jwt-auth.svg?style=flat-square&logo=composer" alt="Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a> -->
[![Issues](https://img.shields.io/github/issues/Aler998/SimpleAdminPanel?style=flat-square&logo=composer)](https://github.com/Aler998/SimpleAdminPanel)
</p>

## About Simple Admin Panel

This is a project based on laravel with authentication system based on breeze and a simple bootstrap admin panel

## Features

- Simple to Manage
- Laravel breeze authentication system
- StartBootstrap Admin panel
- Datatables and Chart

## Installation

Create a project via composer

```sh
composer create-project aler998/laraveladminpanel
```
Then install dependencies
```sh
npm install && npm run dev
```

Set .env file

Run the migrations
```sh
php artisan migrate
```

Generate the key
```sh
php artisan key:generate
```

Finally serve the application
```sh
php artisan serve
```

