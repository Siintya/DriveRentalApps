<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Project Overview
Project ini adalah aplikasi sederhana persewaan mobil menggunakan bahasa pemrograman. 

## Technologies Used
- Laravel version 9 framework Backend
- PHP vesion 8
- Bootstrap version 5 framework Frontend
- Database MySQL
- Git for version control

##  Installation Environment Variables
1. Cloning repository project atau download berupa file zip <br>
2. Buka direktori project lalu buka command line.<br>
3. Update composer <br>
 **$ composer update** <br>
4. Copy file .env.example menjadi .env <br>
 **$ cp .env.example .env** <br>
5. Buat database baru dengan nama **db_driverentals** <br>
6. Setup database yang telah dibuat pada file .env <br>
&nbsp;**DB_CONNECTION=mysql** <br>
&nbsp;**DB_H&nbsp;OST=127.0.0.1**<br>
&nbsp;**DB_PORT=3306**<br>
&nbsp;**DB_DATABASE=db_driverentals**<br>
&nbsp;**DB_USERNAME=root**<br>
&nbsp;**DB_PASSWORD=**<br>
7. Lakukan generate key <br>
 **$ php artisan key:generate**<br>
8. Jalankan migrate & seeder <br>
 **$ php artisan migrate --seed** <br>
9. Ubah tipe data kolom photo_profile pada tabel users dan photo pada tabel photos menjadi **LONGBLOB** <br>
10. Jalankan serve<br>
 **$ php artisan serve**<br>

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
