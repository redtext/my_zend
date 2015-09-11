<?php
return array(
    
    'doctrine' => array(
            'driver' => array(
                    'application_entities' => array(
                            'class' =>'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                            'cache' => 'array',
                            'paths' => array(__DIR__ . '/../src/PhoneBook/Entity')
                            ),
            'orm_default' => array(
                    'drivers' => array(
                        'PhoneBook\Entity' => 'application_entities'
                        )
        	    )
            )
    ),
    'controllers' => array(
         'invokables' => array(
             'PhoneBook\Controller\PhoneBook' => 'PhoneBook\Controller\ListController',
         ),
     ),

     'router' => array(
         'routes' => array(
             'phone' => array(
                 'type'    => 'segment',
                 'options' => array(
                     'route'    => '/phone[/:action][/:id]',
                     'constraints' => array(
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                         'id'     => '[0-9]+',
                     ),
                     'defaults' => array(
                         'controller' => 'PhoneBook\Controller\PhoneBook',
                         'action'     => 'index',
                     ),
                 ),
             ),
         ),
     ),

     'view_manager' => array(
         'template_path_stack' => array(
             'phonebook' => __DIR__ . '/../view',
         ),
     ),
     'translator' => array(
            'locale' => 'ru_RU',
            'translation_file_patterns' => array(
                    array(
                        'type'     => 'gettext',
                        'base_dir' => __DIR__ . '/../language',
                        'pattern'  => '%s.mo',
                        ),
            ),
    )

 );
