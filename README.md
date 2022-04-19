
# Ecf Eco It 2022

Rendu ECF Studi juin 2022

## Pour le déployer en local
````
git clone https://github.com/Chasmyr/ecf2.git
````
````
cd ecf2
````
````
composer install
````
````
php bin/console doctrine:database:create
````
````
php bin/console doctrine:migrations:migrate
````
````
php bin/console doctrine:fixtures:load
````
````
php -S localhost:8000 -t public
````
