<?php

namespace App\DataFixtures;

use App\Entity\Product;
use App\Entity\ProductCategory;
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
        $productCategorylist = ['Motherboard', 'Graphic Card', 'RAM', 'SDD', 'HDD', 'WIFI Card', 'Sound Card', 'Processor', 'Watercooling', 'Air Cooling', 'Power Supply'];
        foreach ($productCategorylist as $item) {
            $productCategory = new ProductCategory();
            $productCategory->setName($item);
            $manager->persist($productCategory);
            for ($index=1; $index <= 10; $index++) {
                $product = new Product();
                $product->setName($item . $index);
                $product->setCategory($productCategory);
                $product->setPrice(random_int(10, 1000));
                $product->setStock(random_int(0,100));
                $product->setDescription('Voici une description');
                $manager->persist($product);
            }
        }
        $manager->flush();
        for ($index=1; $index <= 10; $index++) {
            $user = new User();
            $user->setEmail('user'.$index.'@mail.com');
            $user->setUsername('User N°'.$index);
            $user->setRoles(['ROLE_ADMIN', 'ROLE_USER']);
            $user->setPassword($this->hasher->hashPassword($user, 'password'));
            $manager->persist($user);
        }
        $manager->flush();
    }
}
