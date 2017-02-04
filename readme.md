# Laravel setup with Wordpress as CMS

> Note: This project is just a default Laravel 5.4 setup added with some scaffoling to get wordpress as your project setup.

This project has two main goals

1. Get Wordpress as a depency within your Laravel App.
2. Access the Wordpress data on a Eloquent like approach.

To achieve this we combined two great libraries from Github. For Wordpress as a dependency we use John P. Bloch's [composer added Wordpress] (https://github.com/johnpbloch/wordpress). 

To access the data with an Eloquent Approad we use the outstanding library from Junio Grossi; [Corcel] (https://github.com/corcel/corcel)

## Installation

Create a new composer project

```
composer create-project laravel-admin/wordpress my-project-name
```

Fill in your .env file. Notice 2 things:

* Add the unique Wordpress salts to the .env from [https://api.wordpress.org/secret-key/1.1/salt/]
* Change the APP_URL to your actual host name. This is important for running Wordpress

Run the following artisan command to create a symbolic link for the public storage. Wordpress attachments will be stored in the default public Laravel storage.

```
php artisan storage:link
```

Now you can run the Wordpress admin from your host with the path /wp/wp-admin. The first time you have to setup your site.

## Usage

...


