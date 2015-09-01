<?php
return array(
     'doctrine' => array(
        'driver' => array(
            'application_entities' => array(
                'class' =>'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/User/Entity')
            ),

            'orm_default' => array(
                'drivers' => array(
                    'User\Entity' => 'application_entities'
                )
            )
        )
    ),

    'controllers' => array(
         'invokables' => array(
             'User\Controller\Index' => 'User\Controller\IndexController',
         ),
     ),

     'router' => array(
         'routes' => array(
             'user' => array(
                 'type'    => 'segment',
                 'options' => array(
                     'route'    => '/user[/:action][/:id]',
                     'constraints' => array(
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                         'id'     => '[0-9]+',
                     ),
                     'defaults' => array(
                         'controller' => 'User\Controller\Index',
                         'action'     => 'index',
                     ),
                 ),
             ),
         ),
     ),

     'view_manager' => array(
         'template_path_stack' => array(
             'user' => __DIR__ . '/../view',
         ),
     ),
 );
