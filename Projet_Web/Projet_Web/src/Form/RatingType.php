<?php

namespace App\Form;

use App\Entity\Rating;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\VarExporter\Internal\Values;

class RatingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('value')
            ->add('comment')
            ->add('date')
            ->add('user')
            ->add('series')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $values = new Values([
            'min' => 0,
            'max' => 20
        ]);
            
        $resolver->setDefaults([
            'data_class' => Rating::class,
        ]);
    }
}
