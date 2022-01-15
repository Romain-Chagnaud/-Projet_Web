<?php

namespace App\Form;

use App\Entity\Series;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Series1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('plot')
            ->add('imdb')
            ->add('poster')
            ->add('director')
            ->add('youtubeTrailer')
            ->add('awards')
            ->add('yearStart')
            ->add('yearEnd')
            ->add('actor')
            ->add('country')
            ->add('genre')
            ->add('user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Series::class,
        ]);
    }
}
