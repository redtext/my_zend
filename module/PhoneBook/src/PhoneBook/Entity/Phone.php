<?php

namespace PhoneBook\Entity;

use Doctrine\ORM\Mapping as ORM;
use BjyAuthorize\Provider\Role\ProviderInterface;
// use ZfcUser\Entity\UserInterface;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;


    /** @ORM\Entity */

class Phone //implements ProviderInterface
{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $id;
    
    /** @ORM\Column(type="string", length=255, unique=false, nullable=true ) */
    protected $fullName;


    /** @ORM\Column(type="string", length=255, unique=false, nullable=true ) */
    protected $position;
    
    /** @ORM\Column(type="string", length=25, unique=false, nullable=true ) */
    protected $office;
    
    /** @ORM\Column(type="integer") */
    protected $tel_int;
    
    /** @ORM\Column(type="string", length=15) */
    protected $tel_gorod;
    
    /** @ORM\Column(type="string", length=255, unique=false, nullable=true ) */
    protected $sotovyi;
    
    /** @ORM\Column(type="string") */
    protected $email;

    protected $inputFilter;
        
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

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($value)
    {
        $this->position = $value;
    }
    
    
    public function getOffice()
    {
        return $this->office;
    }

    public function setOffice($value)
    {
        $this->office = $value;
    }
    
    public function getTel_Int()
    {
        return $this->tel_int;
    }

    public function setTel_Int($value)
    {
        $this->tel_int = $value;
    }
    
    public function getTel_Gorod()
    {
        return $this->tel_gorod;
    }

    public function setTel_Gorod($value)
    {
        $this->tel_gorod = $value;
    }
    
    public function getSotovyi()
    {
        return $this->sotovyi;
    }

    public function setSotovyi($value)
    {
        $this->sotovyi = $value;
    }
    
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($value)
    {
        $this->email = $value;
    }
	
     /**
    * Set input method
    *
    * @param InputFilterInterface $inputFilter
    */
    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new \Exception("Not used");
    }

    /**
    * Get input filter
    *
    * @return InputFilterInterface
    */
    public function getInputFilter()
    {
        if (!$this->inputFilter) {
            $inputFilter = new InputFilter();
            $factory     = new InputFactory();

            $inputFilter->add($factory->createInput(array(
                'name'     => 'id',
                'required' => true,
                'filters'  => array(
                    array('name' => 'Int'),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'title',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                            'max'      => 255,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'text',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                        ),
                    ),
                ),
            )));

            $this->inputFilter = $inputFilter;
        }

        return $this->inputFilter;
    }

   	 

}
