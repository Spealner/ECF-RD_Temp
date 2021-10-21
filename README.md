# Nom du Project : RD-Temp ECF
***
Projet ECF sur les témpératures.
***

# Lien Github :

https://github.com/Spealner/ECF-RD_Temp.git

# Lien du site par Heroku :

https://boiling-savannah-06007.herokuapp.com/
# Lien Trello :

https://trello.com/b/PwFeyFS7/ecf-rd-temp
***

# Environnement de développement :

### Pré-requis :

* PHP 7.4
* Javascript
* HTML
* CSS
* Bootstrap
* Composer
* Symfony CLI
* Nodejs et npm
* Chart.js

Vous pouvez vérifier les pré-requis avec la commande suivante (de la CLI Symfony) :

```npm
symfony check:requirements
```

### Lancer l'environnement de développement :

```npm
composer install
npm install
npm run build
symfony serve -d
```

### Ajouter des données de tests

```npm
symfony console doctrine:fixtures:load
```

## Lancer des tests :

```npm
php bin/phpunit --testdox
```
***
## Mise en production avec Heroku

# Démarche à suivre :

- Télécharger / installé Heroku CLI

- Commandes sur le terminal
```npm
heroku create
echo 'web: heroku-php-apache2 public/' > Procfile
heroku addons:create heroku-postgresql:hobby-dev
heroku config:set APP_ENV=prod
```
- Ajouter dans le fichier composer.json cette ligne dans les scripts :
```npm
"compile": [
            "php bin/console doctrine:migrations:migrate"
        ]
```
- Suite
```npm
composer require symfony/apache-pack
```