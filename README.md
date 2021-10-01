

## Install

Clone repository with git clone
For local testing, you need to install Laravel. See [documentation](https://laravel.com/docs)

Local test at: [http://localhost:8000/api/recipes](http://localhost:8000/api/recipes)

For API testing, you can use [Postman](https://www.postman.com/) or any other API testing program.

Laravel REST API with Sanctum (I followed Traversy Media tutorial : [https://www.youtube.com/watch?v=MT-GJQIY3EU&ab_channel=TraversyMedia](https://www.youtube.com/watch?v=MT-GJQIY3EU&ab_channel=TraversyMedia))


## This is a recipes REST API using auth tokens with Laravel Sanctum

## Usage
Change the .env.example to .env and add your database info

For Mysql :

DB_CONNECTION=mysql 

DB_HOST=127.0.0.1  

DB_PORT=3306 (8889 for MAMP)  

DB_DATABASE=recipe_api 

DB_USERNAME=root 

DB_PASSWORD=<your_root_password>  


# Create the recipe_api database in Mysql

# Run the webserver on port 8000
php artisan serve

# Routes
### Public

GET   /api/recipes  

GET   /api/recipes/:id  


POST   /api/login  

@body: email, password  


POST   /api/register  

@body: name, email, password password_confirmation


# Protected

POST   /api/recipes  

@body: name, slug, description, price  


PUT   /api/recipes/:id  

@body: ?title, ?ingredients, ?body  


DELETE  /api/recipes/:id  


POST    /api/logout  
