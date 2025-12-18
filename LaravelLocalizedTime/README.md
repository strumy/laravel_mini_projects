# LaravelLocalizedTime

This is the code base for LaravelLocalizedTime project.

It is small laravel app with Laravel 12, Laravel UI, Bootstrap and Laravel LangCountry Package to show localized time based user's time zone saved in an SQLite database.


## Features
+ User Login/Logout
+ User Register
+ View User's creation date according to user's Language and Time preference.
+ View Current Time and Date according to user's Language and Time preference and application Time zone, Europe/Berlin.

## Installation
+ Pre-requisites:
    - PHP >= PHP 8
    - Composer
    - SQlite

+ Clone the repository, or download the zip file and extract it.

```
git clone https://github.com/strumy/laravel_mini_projects.git && cd laravel_mini_projects/LaravelLocalizedTime/
```
+ Copy the .env.example file to .env:
```cp .env.example .env```
+ Install the dependencies.
```composer install```
```npm install && npm run dev```
+ Build npm packages.
```npm run build```
+ Generate the application key.
```php artisan key:generate```
+ Refresh the application cache.
```php artisan optimize```
+ Run the migrations
```php artisan migrate```
+ Start the development server using below command or configure a virtual host.
```php artisan serve```
+ Open the application in a browser at http://127.0.0.1:8000.

## License

The LaravelLocalizedTime is using license under the [MIT license](https://opensource.org/licenses/MIT).
