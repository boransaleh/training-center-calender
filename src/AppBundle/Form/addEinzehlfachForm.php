<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 18/09/2017
 * Time: 20:47
 */

namespace AppBundle\Form;

use AppBundle\Entity\EinzelFach;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class addEinzehlfachForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('GesamtFach',null,['label'=>false,'placeholder'=>'-Wählen Sie bitte ein Gesamtfach-','translation_domain'=>false,'attr'=>['id'=>'gesamtfach','class'=>'form-control']])
            ->add('EinzelFach_Name',TextType::class,['label'=>false,'translation_domain'=>false,'attr'=>['class'=>'form-control','placeholder'=>'Einzehlfach']]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class'=>EinzelFach::class]);
    }


}