# CookingSheep Project by Guillaume FINE

## Installation

First thing you need to do is clone this project with :
```
git clone https://github.com/IIM-Creative-Technology/symfony-partie-1-Cosmeak.git
```
After that you need to create the database: 
```
symfony console doctrine:database:create
```
Then add the table:
```
symfony console make:migration
symfony console doctrine:migration:migrate
```
And the last thing load fixtures:
```
symfony console doctrine:fixtures:load
```
