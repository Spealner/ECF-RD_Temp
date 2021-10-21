# Nom du Project : RD-Temp ECF
***
Projet ECF sur les témpératures.
***

# Lien Github :

https://github.com/Spealner/ECF-RD_Temp.git
***

# Environnement de développement :

### Pré-requis :

* PHP 7.4
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
