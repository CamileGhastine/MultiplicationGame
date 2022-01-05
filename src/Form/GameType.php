<?php

namespace App\Form;

use App\Entity\Game;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GameType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('answer1', NumberType::class, [
                'label' => false,
                'required' =>false,
                'attr' => ['type' => 'number'],
            ])
            ->add('answer2', NumberType::class, [
                'label' => false,
                'required' =>false,
                'attr' => ['type' => 'number'],
            ])
            ->add('answer3', NumberType::class, [
                'label' => false,
                'required' =>false,
                'attr' => ['type' => 'number'],
            ])
            ->add('answer4', NumberType::class, [
                'label' => false,
                'required' =>false,
                'attr' => ['type' => 'number'],
            ])
            ->add('answer5', NumberType::class, [
                'label' => false,
                'required' =>false,
                'attr' => ['type' => 'number'],
            ])
            ->add('answer6', NumberType::class, [
                'label' => false,
                'required' =>false,
                'attr' => ['type' => 'number'],
            ])
            ->add('answer7', NumberType::class, [
                'label' => false,
                'required' =>false,
                'attr' => ['type' => 'number'],
            ])
            ->add('answer8', NumberType::class, [
                'label' => false,
                'required' =>false,
                'attr' => ['type' => 'number'],
            ])
            ->add('answer9', NumberType::class, [
                'label' => false,
                'required' =>false,
                'attr' => ['type' => 'number'],
            ])
            ->add('answer10', NumberType::class, [
                'label' => false,
                'required' =>false,
                'attr' => ['type' => 'number'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Game::class,
        ]);
    }
}
