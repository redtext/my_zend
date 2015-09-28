<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
     'db' => array(
         'driver'         => 'Pdo',
         'dsn'            => 'mysql:dbname=zend;host=localhost',
         'driver_options' => array(
             PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
         ),
     ),
     'navigation' => array(
        'default' => array(
	    array(
    	        'label' => 'Home',
        	'route' => 'home',
    		),
            array(
	        'label' => 'Phonebook',
    	        'route' => 'phone',
    	        'pages' => array(
            	    array(
                	'label' => 'Add',
        	        'route' => 'user',
            	        'action' => 'add',
            	    ),
            	    array(
                	'label' => 'Edit',
                	'route' => 'user',
                	'action' => 'edit',
                    ),
	            array(
    	                'label' => 'Delete',
        	        'route' => 'user',
            	        'action' => 'delete',
            	    )	    
        	)
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
    	    array(
	        'label' => 'Task',
    	        'route' => 'task',
    	        'pages' => array(
            	    array(
                	'label' => 'Добавить задачу',
        	        'route' => 'task',
            	        'action' => 'add',
            	    ),
            	    array(
                	'label' => 'Edit',
                	'route' => 'task',
                	'action' => 'edit',
                    ),
	            array(
    	                'label' => 'Delete',
        	        'route' => 'task',
            	        'action' => 'delete',
            	    ),
        	)
        	),
	    /*array(
	        'label' => 'Admin',
    	        'route' => 'admin',
    	        'pages' => array(
            	    array(
                	'label' => 'Add',
        	        'route' => 'admin',
            	        'action' => 'add',
            	    ),
            	    array(
                	'label' => 'Edit',
                	'route' => 'admin',
                	'action' => 'edit',
                    ),
	            array(
    	                'label' => 'Delete',
        	        'route' => 'adumin',
            	        'action' => 'delete',
            	    ),
        	)
        	), */        	
    	    array(
	        'label' => 'Blog',
    	        'route' => 'post',
    	        'pages' => array(
            	    array(
                	'label' => 'Add',
        	        'route' => 'post',
            	        'action' => 'add',
            	    ),
            	    array(
                	'label' => 'Edit',
                	'route' => 'post',
                	'action' => 'edit',
                    ),
	            array(
    	                'label' => 'Delete',
        	        'route' => 'post',
            	        'action' => 'delete',
            	    ),
        	)
        	),
    	    array(
	        'label' => 'zfcuser',
    	        'route' => 'zfcuser',
    	        'pages' => array(
            	    array(
                	'label' => 'Add',
        	        'route' => 'user',
            	        'action' => 'add',
            	    ),
            	    array(
                	'label' => 'Edit',
                	'route' => 'user',
                	'action' => 'edit',
                    ),
	            array(
    	                'label' => 'Delete',
        	        'route' => 'user',
            	        'action' => 'delete',
            	    ),
            ),
            ),
            
    	    )
    ),
     'service_manager' => array(
         'factories' => array(
             'Zend\Db\Adapter\Adapter'
                     => 'Zend\Db\Adapter\AdapterServiceFactory',
             'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
         ),
     ),
);
