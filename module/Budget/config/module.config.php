<?php
return array(
    'controllers' => array(
         'invokables' => array(
             'Budget\Controller\Budget' => 'Budget\Controller\BDDSController',
         ),
     ),

     'router' => array(
         'routes' => array(
             'budget' => array(
                 'type'    => 'segment',
                 'options' => array(
                     'route'    => '/budget[/:action][/:id]',
                     'constraints' => array(
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                         'id'     => '[0-9]+',
                     ),
                     'defaults' => array(
                         'controller' => 'Budget\Controller\Budget',
                         'action'     => 'index',
                     ),
                 ),
             ),
         ),
     ),

     'view_manager' => array(
         'template_path_stack' => array(
             'budget' => __DIR__ . '/../view',
         ),
     ),
 );
