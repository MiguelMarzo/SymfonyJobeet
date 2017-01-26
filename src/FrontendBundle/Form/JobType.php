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
                ->add('jobId')
                ->add('type')
                ->add('company')
                ->add('logo')
                ->add('url')
                ->add('position')
                ->add('location')
                ->add('description')
                ->add('howToApply')
                ->add('token')
                ->add('isPublic')
                ->add('isActivated')
                ->add('email')
                ->add('expiresAt')
                ->add('createdAt')
                ->add('updatedAt')
                ->add('category', new CategoryType(), array(
                    'label' => 'Category',));
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
