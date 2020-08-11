<?php

namespace App\Form;

use App\Entity\Premium;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PremiumType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type')
            ->add('owner', UserType::class)
            ->add('company', CompanyType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'data_class' => Premium::class,
                'label_format' => 'premium_account.labels.%name%',
                'translation_domain' => 'user',
            ]
        );
    }
}
