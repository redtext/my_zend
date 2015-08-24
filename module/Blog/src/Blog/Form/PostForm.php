<?php
 // Filename: /module/Blog/src/Blog/Form/PostForm.php
namespace Blog\Form;

use Zend\Form\Form;
use Zend\Stdlib\Hydrator\ClassMethods;


class PostForm extends Form
 {
     public function __construct($name = null, $options = array())
     {
         parent::__construct($name, $options);

         //$this->setAttribute('method', 'post');
         $this->setHydrator(new ClassMethods());
         
         $this->add(array(
             'name' => 'post-fieldset',
             'type' => 'Blog\Form\PostFieldset',
             'options' => array(
                 'use_as_base_fieldset' => true
             )
         ));

         $this->add(array(
             'type' => 'submit',
             'name' => 'submit',
             'attributes' => array(
                 'value' => 'Insert new Post',
                 'class' => 'btn btn-primary'
             ),
         ));
     }
 }

