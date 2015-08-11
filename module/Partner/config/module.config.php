<?php
return array(
    'controllers' => array(
         'invokables' => array(
             'Partner\Controller\Partner' => 'Partner\Controller\PartnerController',
         ),
     ),

     'router' => array(
         'routes' => array(
             'partner' => array(
                 'type'    => 'segment',
                 'options' => array(
                     'route'    => '/partner[/:action][/:id]',
                     'constraints' => array(
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                         'id'     => '[0-9]+',
                     ),
                     'defaults' => array(
                         'controller' => 'Partner\Controller\Partner',
                         'action'     => 'index',
                     ),
                 ),
             ),
         ),
     ),

     'view_manager' => array(
         'template_path_stack' => array(
             'partner' => __DIR__ . '/../view',
         ),
     ),
 );
