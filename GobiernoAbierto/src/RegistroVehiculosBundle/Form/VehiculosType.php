<?php

namespace RegistroVehiculosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VehiculosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nroVehiculo')
            ->add('patente')
            ->add('tipoVehiculo')
            ->add('marca')
            ->add('modelo')
            ->add('color')
            ->add('capacidad')
            ->add('motor')
            ->add('puertas')
            ->add('serieMotor')
            ->add('estado')
            ->add('fechaAlta')
            ->add('fechaBaja')
            ->add('fechaModif')
            ->add('usuario')
            ->add('localidad')
            ->add('observacion')
            ->add('horarioInicioActiv')
            ->add('horarioFinActiv')
            ->add('conductores')
            ->add('secretaria')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RegistroVehiculosBundle\Entity\Vehiculos'
        ));
    }
}
