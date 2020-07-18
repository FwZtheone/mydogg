<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 */
class Users
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstname;

    public function getFirstname(): ?string {
        return $this->firstname;
    }

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    public function getPassword(): ?string{
        return  $this->password;
    }

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    public function getEmail(): ?string{
        return $this->email;
}


    /*
     *  setter here
     */


    public function setName($name){
        $this->name = $name;
    }

    public function setFirstname($firstname){
        $this->firstname = $firstname;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setPassword($password){
        $this->password = $password;
    }


}
