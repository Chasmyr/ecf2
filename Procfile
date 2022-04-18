release: php bin/console cache:clear && php bin/console cache:warmup && php bin/console doctrine:migrations:migrate
web: heroku-php-apache2 public/