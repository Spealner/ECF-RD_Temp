<?php

namespace App\Form;

use App\Entity\ChambreFroide;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddSondesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('subtitle')
            ->add('temperatures')
            ->add('hygrometries')
            ->add('date')
            ->add('temprelever')
            ->add('hygrorelever')
            ->add('envoyer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'addSondesForm' => ChambreFroide::class,
        ]);
    }
}
