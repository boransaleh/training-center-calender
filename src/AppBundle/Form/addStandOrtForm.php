<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 03/11/2017
 * Time: 07:57
 */

namespace AppBundle\Form;


use AppBundle\Entity\StandOrt;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class addStandOrtForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options){

        $builder->add('StandOrt_Name',TextType::class,['label'=>false,'translation_domain'=>false,'attr'=>['class'=>'form-control','placeholder'=>'Standort Name ']]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class'=>StandOrt::class]);
    }


}