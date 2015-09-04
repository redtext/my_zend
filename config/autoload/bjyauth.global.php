<?php

return array(
    'bjyauthorize' => array(

        'default_role' => 'guest',

        'identity_provider' => 'BjyAuthorize\Provider\Identity\AuthenticationIdentityProvider',

        'authenticated_role' => 'user',

        'role_providers'        => array(
            // using an object repository (entity repository) to load all roles into our ACL
            'BjyAuthorize\Provider\Role\ObjectRepositoryProvider' => array(
                'object_manager'    => 'doctrine.entity_manager.orm_default',
                'role_entity_class' => 'MyUser\Entity\Role',
            ),
        ),

        'guards' => array(
            /* If this guard is specified here (i.e. it is enabled), it will block
             * access to all controllers and actions unless they are specified here.
             * You may omit the 'action' index to allow access to the entire controller
             */
            'BjyAuthorize\Guard\Controller' => array(
                array(
                    'controller' => 'zfcuser',
                    'action' => array('index'),
                    'roles' => array('guest', 'user'),
                ),
                array(
                    'controller' => 'zfcuser',
                    'action' => array('login', 'authenticate', 'register'),
                    'roles' => array('guest'),
                ),
                array(
                    'controller' => 'zfcuser',
                    'action' => array('logout'),
                    'roles' => array('user'),
                ),

                array('controller' => 'Application\Controller\Index', 'roles' => array()),

                array(
                    'controller' => 'Album\Controller\Album',
                    'action' => array('index', 'view'),
                    'roles' => array('guest', 'user'),
                ),
                array(
                    'controller' => 'Album\Controller\Album',
                    'action' => array('add', 'edit'),
                    'roles' => array('admin', 'user'),
                ),
                                
                array(
                    'controller' => 'PhoneBook\Controller\List',
                    'action' => array('index', 'view'),
                    'roles' => array('guest', 'user', 'admin'),
                ),
                
                array(
                    'controller' => 'PhoneBook\Controller\PhoneBook',
                    'action' => array('index'),
                    'roles' => array('guest', 'user'),
                ),
                
                array(
                    'controller' => 'PhoneBook\Controller\PhoneBook',
                    'action' => array('edit', 'delete', 'add'),
                    'roles' => array('user', 'admin'),
                ),

                array(
                    'controller' => 'Blog\Controller\List',
                    'action' => array('index', 'detail'),
                    'roles' => array('guest', 'user'),
                ),
		
			
		array(
                    'controller' => 'Blog\Controller\Write',
                    'action' => array('edit', 'add'),
                    'roles' => array('admin'),
                ),
                
                array(
                    'controller' => 'Blog\Controller\Delete',
                    'action' => array('delete'),
                    'roles' => array('admin'),
                ),
            
        	array(
                    'controller' => 'Checklist\Controller\Task',
                    'action' => array('index'),
                    'roles' => array('admin'),
                ),
    	    ),
        ),
    ),
);

