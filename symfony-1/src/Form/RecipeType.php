<?php

namespace App\Form;

use App\Entity\Recipe;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class RecipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description', CKEditorType::class)
            ->add('image', FileType::class, [
                'label' => 'Your image for this recipe!',
                'mapped' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '5120k',
                        'maxSizeMessage' => 'Please upload a file thad didn\'t exceed 5Mo!',
                    ])
                ]
            ])
            ->add('user')
            ->add('category')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Recipe::class,
        ]);
    }
}
