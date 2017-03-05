# EASY ACCESS

## Requirements ##

* PHP >=5.5.9
* [Composer](http://getcomposer.org/)

## Installation ##

* `git clone https://github.com/dev-tea-party/dev-access.git`
* `cd dev-access`
* `composer install`
* `php artisan key:generate`

## Database Set-up

* Create a database in mysql. Import the sql dump file `./database/sql/access.sql`
* Update the database environment file `.env.example` with your database connection values and rename the file to `.env`.

## CRUD Generator Set-up ##

* Install laravelcollective/html helper package if you haven't installed it already. `composer require laravelcollective/html`
* Run `composer dump-autoload`
* Publish vendor files of this package. `php artisan vendor:publish --provider="Appzcoder\CrudGenerator\CrudGeneratorServiceProvider"`

Note: You should have configured database for this operation.

## Running ##

To run the application, open command line inside your directory and type `php artisan serve` to start the app on `http://localhost:8000/`

