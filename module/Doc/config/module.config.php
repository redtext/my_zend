<?php
return array(
    'controllers' => array(
         'invokables' => array(
             'Doc\Controller\Doc' => 'Doc\Controller\DocController',
         ),
     ),

     'router' => array(
         'routes' => array(
             'doc' => array(
                 'type'    => 'segment',
                 'options' => array(
                     'route'    => '/doc[/:action][/:id]',
                     'constraints' => array(
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                         'id'     => '[0-9]+',
                     ),
                     'defaults' => array(
                         'controller' => 'Doc\Controller\Doc',
                         'action'     => 'index',
                     ),
                 ),
             ),
         ),
     ),

     'view_manager' => array(
         'template_path_stack' => array(
             'doc' => __DIR__ . '/../view',
         ),
     ),
 );
