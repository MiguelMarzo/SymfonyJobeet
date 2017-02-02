<?php

namespace FrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('name', 'choice', array(
                    'label_render' => false,
                    'choices' => array('1' => 'Desarrollo', '2' => 'Dieseño'),
                    'horizontal_label_class' => 'col-lg-offset-2',
                    'horizontal_input_wrapper_class' => 'col-lg-8',
                    'constraints' => new NotBlank(),
                ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'FrontendBundle\Entity\Category'
        ));
    }

}
