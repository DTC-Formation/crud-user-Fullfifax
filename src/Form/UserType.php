<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $inputStyle = 'w-full mb-4 bg-gray-50 border border-gray-300 text-darkBlue text-sm rounded-lg focus:text-darkBlue block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-darkBlue dark:focus:darkBlue dark:focus:darkBlue';
        $labelStyle = 'block mb-2 text-white';

        $builder
            ->add('name', TextType::class, [
                'attr' => ['class' => $inputStyle],
                'label_attr' => ['class' => $labelStyle],
            ])
            ->add('firstname', TextType::class, [
                'attr' => ['class' => $inputStyle],
                'label_attr' => ['class' => $labelStyle],
            ])
            ->add('age', NumberType::class, [
                'attr' => ['class' => $inputStyle],
                'label_attr' => ['class' => $labelStyle],
            ])
            ->add('cin', TextType::class, [
                'attr' => ['class' => $inputStyle],
                'label_attr' => ['class' => $labelStyle],
            ])
            ->add('address', TextType::class, [
                'attr' => ['class' => $inputStyle],
                'label_attr' => ['class' => $labelStyle],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]); 
    }
}
