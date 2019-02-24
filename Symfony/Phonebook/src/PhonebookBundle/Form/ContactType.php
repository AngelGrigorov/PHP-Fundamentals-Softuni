<?php

namespace PhonebookBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
     $builder
         ->add('name',TextType::class)
         ->add('number',TextType::class);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
$resolver->setDefaults(array(
    'data_class' => 'PhonebookBundle\Entity\Contact',
));
    }

}
