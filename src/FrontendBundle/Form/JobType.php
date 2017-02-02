<?php

namespace FrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JobType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('type', 'choice', array(
                    'label_render' => false,
                    'choices' => array('1' => 'Jornada completa', '2' => 'Jornada
partida', '3' => 'Freelance'),
                    'horizontal_label_class' => 'col-lg-4',
                    'horizontal_input_wrapper_class' => 'col-lg-12',
                    'constraints' => new NotBlank(),
                ))
                ->add('company', 'text', array(
                    'label' => 'Empresa',
                    'horizontal_input_wrapper_class' => 'col-lg-8',
                    'attr' => array(
                        'placeholder' => 'empresa',
                    ),
                    'constraints' => new NotBlank(),
                ))
                ->add('logo', 'text', array(
                    'label' => 'Logo',
                    'horizontal_input_wrapper_class' => 'col-lg-8',
                    'attr' => array(
                        'placeholder' => 'logo',
                    ),
                    'constraints' => new NotBlank(),
                ))
                ->add('url', 'text', array(
                    'label' => 'Url',
                    'horizontal_input_wrapper_class' => 'col-lg-8',
                    'attr' => array(
                        'placeholder' => 'url',
                    ),
                    'constraints' => new NotBlank(),
                ))
                ->add('position', 'text', array(
                    'label' => 'Cargo',
                    'horizontal_input_wrapper_class' => 'col-lg-8',
                    'attr' => array(
                        'placeholder' => 'cargo',
                    ),
                    'constraints' => new NotBlank(),
                ))
                ->add('location', 'text', array(
                    'label' => 'Localizació',
                    'horizontal_input_wrapper_class' => 'col-lg-8',
                    'attr' => array(
                        'placeholder' => 'Ciudad, pueblo, provincia',
                    ),
                    'constraints' => new NotBlank(),
                ))
                ->add('description', 'textarea', array(
                    'label' => "Descripción",
                    'error_type' => "block",
                    'constraints' => new NotBlank(),
                    'attr' => array(
                        'class' => 'input-large',
                        'placeholder' => 'Funciones a realizar',
                    )
                ))
                ->add('howToApply', 'textarea', array(
                    'label' => "Como aplicar",
                    'error_type' => "block",
                    'constraints' => new NotBlank(),
                    'attr' => array(
                        'class' => 'input-large',
                        'placeholder' => 'como aplicar',
                    )
                ))
                ->add('isPublic', 'choice', array(
                    'label' => '¿Es público?',
                    'choices' => array('1' => 'Si', '2' => 'No'),
                    'horizontal_label_class' => 'col-lg-3',
                    'horizontal_input_wrapper_class' => 'col-lg-8',
                    'constraints' => new NotBlank(),
                ))
                ->add('email', 'text', array(
                    'label' => 'Correo Web',
                    'widget_addon_prepend' => array(
                        'text' => '@'
                    ),
                    'horizontal_input_wrapper_class' => 'col-lg-8',
                    'attr' => array(
                        'placeholder' => 'correo',
                    ),
                    'constraints' => new NotBlank(),
                ))
                ->add('expiresAt', 'date', array(
                    'label' => 'Caduca en',
                    'horizontal_input_wrapper_class' => 'col-lg-8',
                    'widget' => 'single_text',
                    'constraints' => new NotBlank(),
                    'datepicker' => true,
                ))
                ->add('category', new CategoryType(), array(
                    'label' => 'Category',
                ))
                ->add('submit', 'submit')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'FrontendBundle\Entity\Job'
        ));
    }

}
