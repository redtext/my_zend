<?php
return array(
    'controllers' => array(
         'invokables' => array(
             'Purchase\Controller\Purchase' => 'Purchase\Controller\PurchaseController',
         ),
     ),

     'router' => array(
         'routes' => array(
             'purchase' => array(
                 'type'    => 'segment',
                 'options' => array(
                     'route'    => '/purchase[/:action][/:id]',
                     'constraints' => array(
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                         'id'     => '[0-9]+',
                     ),
                     'defaults' => array(
                         'controller' => 'Purchase\Controller\Purchase',
                         'action'     => 'index',
                     ),
                 ),
             ),
         ),
     ),

     'view_manager' => array(
         'template_path_stack' => array(
             'purchase' => __DIR__ . '/../view',
         ),
     ),
 );
