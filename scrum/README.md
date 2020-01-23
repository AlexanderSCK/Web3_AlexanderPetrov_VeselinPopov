<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

##  Setup 
1.Clone this repository  
2Run   
<code>composer install</code>  
<code>npm install</code>  
3.Create a .env file.Copy paste the content from .env.example and change the db name, username and password  
4.Run  
<code>php artisan generate:key</code>  
5.Run  
<code>php artisan storage:link</code> to link storage to public path  
<code>php artisan db:seed</code> to populate database
<code>php artisan serve</code> to see if the app works in the browser

##  Explanation
1.In this website you can create your own projects, add tasks, and complete them  
2.You can also edit your projects and add images to them  
3.On the profile page you can keep count of the amount of tasks and projects you currently have.  
4.We didn't have time to make a dedicated admin page, so we made the export all users as Excel option for all users unfortunately  
5.You can find it in the Profile Page by clicking the button "Show Users"  
6.We also a watermark for all of the images uploaded.




## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
