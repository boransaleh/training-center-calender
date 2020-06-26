<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 18/09/2017
 * Time: 13:12
 */

namespace AppBundle\Form;

use AppBundle\Entity\GesamtFach;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class addGesamtFacher extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('GesamtFach_Name',TextType::class,['label'=>false,'translation_domain'=>false,'attr'=>['class'=>'form-control','placeholder'=>'GesamtFach']]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class'=>GesamtFach::class]);
    }

}