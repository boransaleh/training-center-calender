<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 30/08/2017
 * Time: 08:19
 */

namespace AppBundle\Entity;

use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\StandOrt;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */

class User implements UserInterface
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */

    private $id;

    /**
     * @ORM\Column(type="string",unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string")
     */
    private $password;

    private $plainPassword;

    /**
     * @ORM\ManyToOne(targetEntity="StandOrt")
     * @ORM\JoinColumn(nullable=false)
     */

    private $StandOrt;

    /**
     * @ORM\Column(type="string")
     */

    private $passwordKey;

    /**
     * @ORM\Column(type="boolean")
     */

    private $Aktiv;

    /**
     * @ORM\Column(type="json_array")
     */


    private $roles;


    /**
     * @return mixed
     */
    public function getPasswordKey()
    {
        return $this->passwordKey;
    }

    /**
     * @param mixed $passwordKey
     */
    public function setPasswordKey()
    {
        $this->passwordKey = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
    }


    public function getUsername()
    {
        return $this->email;
    }

    public function getRoles()
    {
        $roles=$this->roles;
        if(!in_array('ROLE_USER',$roles)){

            $roles[]='ROLE_USER';
        }
        return $roles;

    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }


    public function eraseCredentials()
    {
        $this->plainPassword=null;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * @param mixed $plainPassword
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
        $this->password=null;
    }

    /**
     * @return mixed
     */
    public function getStandOrt()
    {
        return $this->StandOrt;
    }

    /**
     * @param mixed $StandOrt
     */
    public function setStandOrt(StandOrt $StandOrt)
    {
        $this->StandOrt = $StandOrt;
    }

    /**
     * @return mixed
     */
    public function getAktiv()
    {
        return $this->Aktiv;
    }

    /**
     * @param mixed $Aktiv
     */
    public function setAktiv($Aktiv)
    {
        $this->Aktiv = $Aktiv;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }




    


}