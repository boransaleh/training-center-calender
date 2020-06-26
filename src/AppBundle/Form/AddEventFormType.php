<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 20/08/2017
 * Time: 14:34
 */

namespace AppBundle\Form;

use AppBundle\Entity\CompanyEvents;
use AppBundle\Entity\SchuleGroup;
use AppBundle\Entity\StandOrt;
use AppBundle\Repository\GetGroupStandOrt;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddEventFormType extends AbstractType
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em=$em;
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $id=$options['id'];
        $standortObj=$this->em->getRepository('AppBundle:StandOrt')->findOneBy(array('id'=>$id));
        $builder->add('EinzelFach',null,['placeholder'=>'-Wählen Sie bitte ein Einzehlfach-','translation_domain'=>false,'label'=>false,'attr'=>['id'=>'einfach','class'=>'form-control']])
        ->add('Dozent',EntityType::class,[
            'placeholder'=>'-Wählen Sie bitte einen Dozenten-',
            'translation_domain'=>false,
            'label'=>false,
            'attr'=>['class'=>'form-control'],
            'class' => 'AppBundle:Dozent',
            'query_builder' => function(EntityRepository $er)use ($standortObj) {
                return $er->createQueryBuilder('Dozent')
                    ->select('Dozent')
                    ->where('Dozent.Dozent_StandOrt = :standort')
                    ->andWhere('Dozent.Gultig = :gultig')
                    ->setParameter('standort',$standortObj )
                    ->setParameter('gultig',true)
                    ->orderBy('Dozent.Dozent_Name', 'ASC');
            }

        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults(['data_class'=>CompanyEvents::class,
            'id'=>1

        ]);



         // TODO: Change the autogenerated stub
    }

}