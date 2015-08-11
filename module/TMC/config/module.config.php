<?php
return array(
    'controllers' => array(
         'invokables' => array(
             'TMC\Controller\TMC' => 'TMC\Controller\TMCController',
         ),
     ),

     'router' => array(
         'routes' => array(
             'tmc' => array(
                 'type'    => 'segment',
                 'options' => array(
                     'route'    => '/tmc[/:action][/:id]',
                     'constraints' => array(
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                         'id'     => '[0-9]+',
                     ),
                     'defaults' => array(
                         'controller' => 'TMC\Controller\TMC',
                         'action'     => 'index',
                     ),
                 ),
             ),
         ),
     ),

     'view_manager' => array(
         'template_path_stack' => array(
             'TMC' => __DIR__ . '/../view',
         ),
     ),
 );
