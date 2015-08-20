<?php
return array(
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
 );
