<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

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
        $user->setEmail('admin@admin.com');
        $password = $this->hasher->hashPassword($user, 'admin');
        $user->setPassword($password);
        $user->setRoles(['ROLE_ADMIN']);
        $manager->persist($user);

        $user = new User();
        $user->setUsername('Sheepy');
        $user->setEmail('cooking@sheep.com');
        $password = $this->hasher->hashPassword($user, 'yumyum');
        $user->setPassword($password);
        $user->setRoles(['ROLE_SUPER_ADMIN']);
        $manager->persist($user);

        $user = new User();
        $user->setUsername('User');
        $user->setEmail('user@user.com');
        $password = $this->hasher->hashPassword($user, 'user');
        $user->setPassword($password);
        $manager->persist($user);

        $manager->flush();
    }
}
