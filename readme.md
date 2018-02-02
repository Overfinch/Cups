
## About Laravel

- composer update
- заполнить .env 
- добавть Schema::defaultStringLength(191); в метод boot() в AppServiceProvider
(и закомментировать всё остальное в методе boot())
- php artisan key:generate
- php artisan vendor:publish
- php artisan voyager:install
- расскомментировать всё в методе boot()
