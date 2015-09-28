<?php
namespace PhoneBook\Form;

use Doctrine\ORM\EntityManager;
use Zend\Form\Form;

class PhoneForm extends Form
{
    public function __construct(EntityManager $em)
    {
        parent::__construct('phone');

        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'fullName',
            'type'  => 'text',
            'options' => array(
        	    'label' => 'FullName'),
            'attributes' => array(
                'class' => 'input-xxlarge'
            )
        ));

        $this->add(array(
            'name' => 'position',
            'type'  => 'text',
            'options' => array(
        	    'label' => 'Position',),
        ));
        
        $this->add(array(
            'name' => 'office',
            'type'  => 'text',
            'options' => array(
                'label' => 'office'),
            'attributes' => array(
                'class' => 'input-xxlarge'
            )
        ));
        
        $this->add(array(
            'name' => 'tel_int',
            'type'  => 'text',
            'options' => array(
                'label' => 'tel_int'),
            'attributes' => array(
                'class' => 'input-xxlarge'
            )
        ));
        
        $this->add(array(
            'name' => 'tel_gorod',
            'type'  => 'text',
            'options' => array(
                'label' => 'tel_gorod'),
            'attributes' => array(
                'class' => 'input-xxlarge'
            )
        ));
        
        $this->add(array(
            'name' => 'sotovyi',
            'type'  => 'text',
            'options' => array(
                'label' => 'sotovyi'),
            'attributes' => array(
                'class' => 'input-xxlarge'
            )
        ));
        
        $this->add(array(
            'name' => 'email',
            'type'  => 'text',
            'options' => array(
                'label' => 'email'),
            'attributes' => array(
                'class' => 'input-xxlarge'
            )
        ));

       /* $this->add(array(
            'name' => 'category',
            'type' => 'DoctrineModule\Form\Element\ObjectSelect',
            'options' => array(
                'label' => 'Category',
                'object_manager' => $em,
                'target_class' => 'Blog\Entity\Category',
                'property' => 'name'
            ),
            'attributes' => array(
                'required' => true
            )
        )); */

        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Save',
                'id' => 'submitbutton',
            ),
        ));
    }
}
