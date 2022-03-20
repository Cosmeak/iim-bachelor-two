<?php

namespace App\Controller\Admin;

use App\Entity\ProductCategory;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProductCategoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProductCategory::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->setDisabled(),
            TextField::new('name'),
            ImageField::new('image')
                ->setBasePath('uploads/productCategory')
                ->setUploadDir('public/uploads/productCategory')
                ->setUploadedFileNamePattern('[uuid].[extension]')
                ->setFormTypeOptions([
                    'attr' => [
                        'accept' => 'image/',
                    ]
                ]),
        ];
    }
}
