<?php

namespace App\Form;

use App\Entity\Project;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'attr' => [
                    'class' => 'input-text'
                ]
            ])
            ->add('description', TextareaType::class, [
                'attr' => [
                    'class' => 'input-text',
                    'rows' => '20'
                ],
                'label' => 'Description (markdown)',
                'required' => false
            ])
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'idea' => 'IDEA',
                    'in progress' => 'IN_PROGRESS',
                    'finished' => 'FINISHED'
                ],
                'attr' => [
                    'class' => 'input-select input-select_project'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }
}
