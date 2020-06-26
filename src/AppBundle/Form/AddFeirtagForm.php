<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 04/11/2017
 * Time: 08:39
 */

namespace AppBundle\Form;


use AppBundle\Entity\Freitag;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddFeirtagForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){

        $builder->add('Freitag_Name',TextType::class,['label'=>false,'translation_domain'=>false,'attr'=>['class'=>'form-control','placeholder'=>'Feiertagsname ']])
            ->add('Freitag_Datum', DateType::class, [
                'widget' => 'single_text',
                'format' => 'dd.MM.yyyy',
                'attr' => ['placeholder' => 'Feiertagsdatum','class' => 'form-control js-datepicker-Feiertagsdat'],
                'translation_domain'=>false,
                'html5' => false,
                'label' => false

            ]);


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class'=>Freitag::class]);
    }

}