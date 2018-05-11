# Integrating elastic-search with Laravel

## Spin up local dev vm with elastic search server

Reference
* [Laravel Installation](https://laravel.com/docs/5.6/installation) 
* [Laravel Homestead](https://laravel.com/docs/5.6/homestead)
 
## Usage 

1. clone this project and change directory to it
2. run `composer install`
3. generate laravel application key `php artisan key:generate` 
4. run `vagrant up` to spin up dev vm
5. run `vendor/bin/phpunit tests/Feature/ElasticSearchServerTest.php` to ensure 

## License
License: [MIT License](https://en.wikipedia.org/wiki/MIT_License)
