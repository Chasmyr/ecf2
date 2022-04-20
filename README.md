# Ecf Eco It 2022

ECF Studi june 2022

## Versions that i used
- php 8.0.9
- MySQL 8.0
- Composer 
- Symfony 6.0.6

## To deploy it on ur computer
```bash

# clone the repository
git clone https://github.com/Chasmyr/ecf2.git

# go in the folder
cd ecf2

# install dependencies
composer install

# create database
php bin/console doctrine:database:create

# run migrations
php bin/console doctrine:migrations:migrate

# load fixtures
php bin/console doctrine:fixtures:load

# run the server
php -S localhost:8000 -t public

```

## To deploy it with Heroku

[Install Heroku](https://devcenter.heroku.com/articles/heroku-cli#install-the-heroku-cli) 
on your computer, then do:

```bash
# make sure to be in ecf2/ folder

# login to your Heroku account
heroku login

# Create the app on Heroku
heroku create

# add the databse, you can change version by setting --version= 
# but the project is running with MySQL 8.0 which is the default version of JawsDB
heroku addons:create jawsdb

# get the datbase url : mysql://username:password@hostname:port/default_schema
# use it for the next command
heroku config:get JAWSDB_URL

# set the databse url with the jawsDB one
heroku config:set DATABASE_URL=JAWSDB_URL

# set the env to prod
heroku config:set APP_ENV=prod

# deploy to Heroku
git push heroku main

# The Procfile is already in the project and it'll automatically run the migrations
```

[Documentation Heroku](https://devcenter.heroku.com/articles/deploying-symfony4)

[Documentation JawsDB](https://devcenter.heroku.com/articles/jawsdb)

## Current issue
I am working on an issue which is my ajax dont works properly on server

When an user progress through a formation i want to get :

![alt text](https://github.com/Chasmyr/ecf2/blob/main/screenshot/sc1.png "Screenshot 1")

But i have :

![alt text](https://github.com/Chasmyr/ecf2/blob/main/screenshot/sc2.png "Screenshot 2")

So if you want to test the application with all the features, please install it on your computer

## Author
[Twitter](https://twitter.com/Chasmyr__)

lestratgabin5886@gmail.com
