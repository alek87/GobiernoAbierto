<?php

namespace RegistroVehiculosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SecretariaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('organismo')
            ->add('nombre')
            ->add('direccion')
            ->add('celular')
            ->add('telefono')
            ->add('email')
            ->add('servicios')
            ->add('observaciones')
            ->add('fechaAlta')
            ->add('fechaBaja')
            ->add('fechaModif')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RegistroVehiculosBundle\Entity\Secretaria'
        ));
    }
}
