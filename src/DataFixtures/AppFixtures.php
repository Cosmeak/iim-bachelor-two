<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categories = ['Junk Food', 'Aperitif', 'Dessert', 'Cocktail', 'Cake', 'Main Dishes', 'Bakery', 'Salad', 'Soup', 'Entree', 'Sauce', 'Jam'];
        for($index = 0; $index < count($categories); $index++)
        {
            $category = new Category();
            $category->setLabel($categories[$index]);
            $manager->persist($category);
        }

        $user = new User();
        $user->setUsername('Admin');
        $user->setEmail('admin@admin.fr');
        $user->setPassword('');
        $user->setRoles(['ROLE_ADMIN']);
        $manager->persist($user);

        $manager->flush();
    }
}
