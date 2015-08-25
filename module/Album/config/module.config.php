<?php
return array(
    'controllers' => array(
         'invokables' => array(
             'Album\Controller\Album' => 'Album\Controller\AlbumController',
         ),
     ),
     'service_manager' => array(
         'factories' => array(
                 'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory', // <-- add this
         ),
    ),
    'navigation' => array(
    'default' => array(
        array(
            'label' => 'Home',
            'route' => 'home',
        ),
        array(
            'label' => 'Album',
            'route' => 'album',
            'pages' => array(
                array(
                    'label' => 'Add',
                    'route' => 'album',
                    'action' => 'add',
                ),
                array(
                    'label' => 'Edit',
                    'route' => 'album',
                    'action' => 'edit',
                ),
                array(
                    'label' => 'Delete',
                    'route' => 'album',
                    'action' => 'delete',
            	    ),
        	),
    	    ),
	),
     ),
	                    
                     	
     'router' => array(
         'routes' => array(
             'album' => array(
                 'type'    => 'segment',
                 'options' => array(
                     'route'    => '/album[/:action][/:id]',
                     'constraints' => array(
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                         'id'     => '[0-9]+',
                     ),
                     'defaults' => array(
                         'controller' => 'Album\Controller\Album',
                         'action'     => 'index',
                     ),
                 ),
             ),
         ),
     ),

     'view_manager' => array(
         'template_path_stack' => array(
             'album' => __DIR__ . '/../view',
         ),
     ),
 );
