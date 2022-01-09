# Projet Easy Apply App - le site de recrutement conçu pour les recruteurs !

## Installation des dépendances
- Dépendande php : 
``` 
composer install 
``` 
ou si ça ne marche pas `
`` 
composer install --ignore-platform-req=ext-fileinfo --ignore-platform-req=ext-fileinfo --ignore-platform-req=ext-fileinfo
```
- Dépendance JS: 
``` 
npm install 
```

## Setup de base 
- Créer une base de donnée nommée **easy-apply-db** dans phpMyAdmin
- Dupliquer le .env.example et le nommer .env
- Modifier les informations de base de donnée suivante dans le .env
  - User par votre user
  - password par votre mot de passe si vous en avez un
  - database name par **easy-apply-db** créer précédement

## Creer une clé pour le projet en local. Important
``` 
php artisan key:generate 
```

## Lancer le projet 
- Le serveur: 
``` 
php artisan serve 
```
- Le compileur CSS/JS: 
``` 
npm run watch-poll 
```