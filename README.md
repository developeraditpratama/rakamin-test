<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Rakamin-test With Laravel

Installation Requirtments : 

- Laravel 8x
- MYSQL
- PHP 7.4 or Upper
- XAMPP

Package Use :

- JWT

Step Installation

- [clone this GitHub Link](https://github.com/developeraditpratama/rakamin-test.git)
- [download composer](https://getcomposer.org/)
- Run composer install on base dir project 
```bash
  composer install
```
- Run php artisan serve
```bash
  php artisan serve
```
- Create Database MYSQL name 'rakamin-test'
- Run php artisan migrate
```bash
  php artisan migrate
```
- Run php artisan db:seed
```bash
  php artisan db:seed
```
- enjoy the result of rakamin-test

## Sample Route API :8000 Port

- [Post - Users can send a message to another user](http://127.0.0.1:8000/api/message/store)
- [Get - Users can list all messages in a conversation between them and another](http://127.0.0.1:8000/api/message/show/1/6)
- [Post - Users can reply to a conversation they are involved with](http://127.0.0.1:8000/api/message/store/reply)
- [Get - User can list all their conversations with bonus A & B](http://127.0.0.1:8000/api/message/allMessage/1)

