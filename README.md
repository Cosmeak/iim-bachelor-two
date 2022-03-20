# TopAchat revisted by Guillaume FINE

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

## 2 - Presentation
This project is a revisit of Top Achat website who is very old and too ugly.

You have in this website:
- Register and login
- Category of product in on page
- A category page show all product of this category
- A page that show all product
- A page for one product
  - you can add this product to your cart if your are login
  - It show similar product for you
  - Comment section
- All crud for an admin that can be used to administrate the website

For the page that show all the product and the page that show all the product of a category:
- It show you if the product is new (add in the last 7 days)
- Show if it's the last in stock 
- Show how many product we have in stock