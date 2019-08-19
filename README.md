# mymovies
Movie Database and laravel API


Backend Software Development Exercise 
 
Objective Build an API service with a database backend for storing and editing a movie collection. Please use a technology stack of your choosing to deliver the application, though use of AWS infrastructure is recommended.  
 
1. Start by briefly documenting the technology stack of your choosing. Let us know what component you've chosen for each layer and why. 2. Setup a source code repository where we can watch your progress. GitHub or Bitbucket are fine. 3. You'll need to deploy your application to a hosting service of your choosing (AWS, DigitalOcean, Azure, etc). Free tiers should be sufficient. 
 
Requirements 
1. The service must be accessible over http using a command line interface (curl, node, etc.); a GUI is not necessary. 
2. Add an authentication method to restrict access to the repository. Only users that need access to the service should be able to access it. 
3. The service must create, read, update, delete, and list movies in the collection. 
4. Each movie in the collection needs the following attributes: 
* a. Title [text; length between 1 and 50 characters] 
* b. Format [text; allowable values "VHS", "DVD", "Streaming"] 
* c. Length [time; value between 0 and 500 minutes] 
* d. Release Year [integer; value between 1800 and 2100] 
* e. Rating [integer; value between 1 and 5] 


5. On the collection list request, the items in the list must be sortable by movie attributes. 6. Integrate a third-party web service relevant to the project. 
 
Extra Credit (none, any, or all) 
1. Implement a build tool of your choosing (CloudFormation in AWS, etc) 
2. Integrate a testing suite of some sort 
 
Keep In Mind 
1. We want to see your progress, not just a finished product. Email us your source code repository and a link to your application instance as soon as you have them setup. 
2. Stay in communication with us (ask questions, give status updates). This is part of the challenge

Application Developer Notes

Proposed Platform
I chose Laravel to build the API mostly because of my familiarity with the framework but also the attributes that make Laravel a good fit for API development. 
Although the full Laravel framework is not required for this project I chose to use it because of the features it brings to the application if fully implemented. Like additional security , encryption, 
List Reasons why Laravel is appropriate for API development
Laravel
Eloquent
Migrations
Guzzle

Application bootstrap
Create Laravel folder (mymovies)
composer create-project --prefer-dist laravel/laravel mymovies
Check installation
php artisan serve
 This command will start a development server at http://localhost:8000:
Check to make sure Laravel installed correctly

Include Database libraries we need for migrations
composer require doctrine/dbal
Create movie table migration
php artisan make:migration create_movies_table --create=movies
Modify Migration file 

Schema::create('movies', function (Blueprint $table) {
    $table->bigIncrements('id');
    $table->string('title',50)->index();
    $table->enum('format', ['DVD', 'VHS', 'Streaming'])->index()->nullable();
    $table->time('length')->index()->nullable();
    $table->integer('release_year')->unsigned()->index()->nullable();
    $table->smallInteger('rating')->unsigned()->index()->nullable();
    $table->timestamps();
});


Create Users Data Migration
Create Movie Data Migration


If you get string too long error on running migrations
As outlined in the Migrations guide to fix this all you have to do is edit your AppServiceProvider.php file and inside the bootmethod set a default string length:
use Illuminate\Support\Facades\Schema;

public function boot()
{
    Schema::defaultStringLength(191);
}


- Create model, request and resource controller for movies. Follow suggested Laravel naming convention.

- Create seeder for movies table to feed it with several rows.

- Create Resource and ResourceCollection classes for Movie model to standardize the information returned to client.

- Develop resource functions for MoviesController to return paginated list of movies (index function, 10 items per request by default) and movie details (show function).

- Set up repository on GitHub.

Application allows only registered users. A user is logged in using basic authentication. (Laravel's middleware auth.basic)

All registered users can request a list of movies and a movie details.

The other possible actions (add, update and delete a movie) are only allowed to admin users. (created middleware admin)

All request's responses are in json format and have a  "status" field with possible values "error" or "success.

A request that return info (movie list, movie details) also return a "data" field with the information requested. A collection of 10 movies or a single movie details".

Requests that don't return data (add movie, update movie and delete movie) also return a related message.

All request must set a header value Accept application/json. Otherwise the request will not be allowed (created middleware api.request)

List and detail requests must be done using GET method.

Add new movie must be requested using  POST method.

Any delete request must be done using  DELETE method.

All the inputs on add and update requests are validated based on rules provided.

Each handler for validation and unauthorized exceptions have been modified to return the corresponding formatted error response.

Resource classes are used when "list" or "details" are requested to modified/format the returned json object as needed to standardized it and avoid returning unneeded info and exposing table field names.


Deployment
Setup EC2 Resource
Create Instance
Create Security Group
Create User
mtmind / 3408EKwq#*1

Prepare ubuntu for web server
sudo apt-get update
sudo apt install apache2
sudo apt install mysql-server
sudo mysql_secure_installation (

first item NO)

password for root
mysqlroot

mysql --version
sudo add-apt-repository ppa:ondrej/php
sudo apt update

sudo apt install php7.3 php7.3-common php7.3-cli php-pear php7.3-curl php7.3-dev php7.3-gd php7.3-mbstring php7.3-zip php7.3-mysql php7.3-xml php7.3-fpm libapache2-mod-php7.3 php7.3-imagick php7.3-recode php7.3-tidy php7.3-xmlrpc php7.3-intl php7.3-bcmath php7.3-bz2 php7.3-json php7.3-readline php7.3-imap 

sudo a2enmod rewrite
php -v


