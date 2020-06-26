<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 03/11/2017
 * Time: 10:28
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class AddGroupForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder,array $options){

        $builder->add('Group_Name',TextType::class,['label'=>false,'translation_domain'=>false,'attr'=>['class'=>'form-control','placeholder'=>'Gruppe Name ']])
            ->add('Eintritt_Date', DateType::class, [
                'widget' => 'single_text',
                'format' => 'dd.MM.yyyy',
                'attr' => ['placeholder' => 'Eintritt_Date','class' => 'form-control js-datepicker-ein'],
                'translation_domain'=>false,
                'html5' => false,
                'label' => false

            ])
            ->add('Austritt_Date', DateType::class, [
                'widget' => 'single_text',
                'format' => 'dd.MM.yyyy',
                'attr' => ['placeholder' => 'Austritt_Date','class' => 'form-control js-datepicker-aus'],
                'translation_domain'=>false,
                'html5' => false,
                'label' => false
            ]);
    }

}