<?php

namespace Couture\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClientBisType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text', array(
                'attr' => array(
                    'placeholder' => 'minimum 2 caracteres',
                    'pattern'     => '.{2,}' //minlength
                )
            ))
            ->add('prenom','text', array(
                'attr' => array(
                    'placeholder' => 'minimum 10 caracteres',
                    'pattern'     => '.{10,}' //minlength
                )
            ))
            ->add('sexe','choice', array('choices' => array('F'=>'Féminin','M'=>'Masculin')))
            ->add('telephone', 'number', array(
                'attr' => array(
                    'placeholder' => 'Eg. 771112233 ',
                    'pattern'     => '\d{9}'
                )
            ))
            ->add('email', 'email', array(
                'attr' => array(
                    'placeholder' => 'someone@example.com'
                )
            ))
            ->add('adresse')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Couture\GestionBundle\Entity\Client'
        ));
    }


}