# Ecf Eco It 2022

Rendu ECF Studi juin 2022

## Versions utilisées
- php 8.0.9
- MySQL 8.0
- Composer 
- Symfony 6.0.6

## Pour le déployer en local
```bash
git clone https://github.com/Chasmyr/ecf2.git
```
```bash
cd ecf2
```
```bash
composer install
```
```bash
php bin/console doctrine:database:create
```
```bash
php bin/console doctrine:migrations:migrate
```
```bash
php bin/console doctrine:fixtures:load
```
```bash
php -S localhost:8000 -t public
```
## Pour le déployer en ligne
[Documentation Heroku](https://devcenter.heroku.com/articles/deploying-symfony4)

## Auteur
[Twitter](https://twitter.com/Chasmyr__)

lestratgabin5886@gmail.com
