<?php
return array(
    'controllers' => array(
         'invokables' => array(
              'Reports\Controller\Reports' => 'Reports\Controller\IndexController',
           ),
    ),
    
    'router' => array(
             'routes' => array(
                          'reports' => array(
                        	'type'    => 'segment',
                    		'options' => array(
                            		'route'    => '/report[/:action][/:id]',
                            		'constraints' => array(
                            		    'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            		    'id'     => '[0-9]+',
                                	    ),
                	        'defaults' => array(
            	    		    'controller' => 'Reports\Controller\Reports',
                		    'action'     => 'index',
				    ),
	    			),
        		    ),
	    ),
    ),
                                                                                                                                                                                                                                                                                                                     
    
    'view_manager' => array(
          'template_path_stack' => array(
	       'reports' => __DIR__ . '/../view',
        ),
    ),
);