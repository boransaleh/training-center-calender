<?php

/**
 * Created by PhpStorm.
 * User: boran
 * Date: 30/08/2017
 * Time: 11:17
 */
namespace AppBundle\Doctrine;


use AppBundle\Entity\User;
use Doctrine\Common\EventSubscriber;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class HashPasswordListener implements EventSubscriber
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder= $passwordEncoder;
    }

    public function getSubscribedEvents()
    {
        return ['prePersist','preUpdate'];
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity=$args->getObject();
        if(!$entity instanceof User){
            return;
        }
        $encoded=$this->passwordEncoder->encodePassword(
            $entity,
            $entity->getPlainPassword()
        );
        $entity->setPassword($encoded);
        $entity->eraseCredentials();


    }

    public function preUpdate(LifecycleEventArgs $args){

        $entity=$args->getEntity();
        if(!$entity instanceof User){
            return;
        }
        $encoded=$this->passwordEncoder->encodePassword(
            $entity,
            $entity->getPlainPassword()
        );
        $entity->setPassword($encoded);

        $em = $args->getEntityManager();
        $meta = $em->getClassMetadata(get_class($entity));
        $em->getUnitOfWork()->recomputeSingleEntityChangeSet($meta, $entity);

    }

}