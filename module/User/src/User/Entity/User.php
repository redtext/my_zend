<?php

namespace User\Entity;

use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity */
class User {
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $id;

    /** @ORM\Column(type="string") */
    protected $fullName;
    
    /** @ORM\Column(type="string") */
    protected $email;

    public function getId()
    {
        return $this->id;
    }

    public function getFullName()
    {
        return $this->fullName;
    }

    public function setFullName($value)
    {
        $this->fullName = $value;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($value)
    {
        $this->email = $value;
    }
}

