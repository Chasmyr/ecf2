<h2> Rendu pour l'ecf de juin 2022 chez Studi </h2>

<h3>Pour l'installer en local faites ceci dans votre invité de commande: (assurez vous d'avoir les bonnes versions, vous pouvez trouver la liste dans la documentation technique)</h3>
<ul>
  <li>git clone https://github.com/Chasmyr/ecf2.git</li>
  <li>cd ecf2</li>
  <li>composer install</li>
  <li>php bin/console doctrine:database:create</li>
  <li>php bin/console doctrine:migrations:migrate</li>
  <li>php bin/console doctrine:fixtures:load</li>
  <li>php -S localhost:8000 -t public</li>
</ul>
