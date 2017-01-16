<?php

namespace Couture\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MesureHommeBisType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('client', new ClientBisType())
            ->add('epaule', 'number', array(
                'attr' => array(
                    'placeholder' => 'Eg. 70  ',
                )
            ))
            ->add('cou', 'number', array(
                'attr' => array(
                    'placeholder' => 'Eg. 50  ',
                )
            ))
            ->add('mancheLongue', 'number', array(
                'attr' => array(
                    'placeholder' => 'Eg. 90  ',
                )
            ))
            ->add('mancheCourte', 'number', array(
                'attr' => array(
                    'placeholder' => 'Eg. 40  ',
                )
            ))
            ->add('longueurBoubou', 'number', array(
                'attr' => array(
                    'placeholder' => 'Eg. 170  ',
                )
            ))
            ->add('ceinture', 'number', array(
                'attr' => array(
                    'placeholder' => 'Eg. 60  ',
                )
            ))
            ->add('longueurPantalon', 'number', array(
                'attr' => array(
                    'placeholder' => 'Eg. 100  ',
                )
            ))
            ->add('cuisse', 'number', array(
                'attr' => array(
                    'placeholder' => 'Eg. 60  ',
                )
            ))
            ->add('poignet', 'number', array(
                'attr' => array(
                    'placeholder' => 'Eg. 20  ',
                )
            ))

            ->add('Validation', 'submit')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Couture\GestionBundle\Entity\Mesure'
        ));
    }


}