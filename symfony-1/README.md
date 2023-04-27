# CookingSheep Project by Guillaume FINE

## 1 - Installation

First thing you need to do is clone this project with :
```
git clone https://github.com/IIM-Creative-Technology/symfony-partie-1-Cosmeak.git
```
After that we need to install dependencies: 
```
composer install
npm intall
```
Now you need to create the database: 
```
symfony console doctrine:database:create
```
Then add the table:
```
symfony console make:migration
symfony console doctrine:migration:migrate
```
And the last thing load fixtures and build the css:
```
symfony console doctrine:fixtures:load
npm run dev
```


## 2 - Use the project
User in the fixtures: 

| Username | Email             | Role        | Password |
|----------|-------------------|-------------|----------|
| Sheepy   | cooking@sheep.com | Super Admin | yumyum   | 
| Admin    | admin@admin.com   | Admin       | admin    | (this is orignal nope?) 
| User     | user@user.com     | User        | user     | 

## 3 - Presentation
This project is about a website of recipe that know allergy you can have and sort the recipes for you.

First thing, this project is actually done at 60%, then you can't choose allergy BUT it exist inside the database and relations exist.

You have in this website:
- home page with the last recipes add.
- Register and login page for users
- Recipe Index for all the recipes with a filter that redirect to show all recipes from a category
- Add recipes with image (IT WORK!!!)
- Edit a recipe
- Show a recipe
- Comment a recipe 
- And for admin, a dashboard (no complete but have a user list)