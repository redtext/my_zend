<?php

 // Filename: /module/Blog/config/module.config.php
return array(

/**    'db' => array(
         'driver'         => 'Pdo',
         'username'       => 'zend',  //edit this
         'password'       => 'sggutdcchjy',  //edit this
         'dsn'            => 'mysql:dbname=zend;host=localhost',
         'driver_options' => array(
             \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
                )
        ),*/
    'service_manager' => array(
         'factories' => array(
             'Blog\Mapper\PostMapperInterface'   => 'Blog\Factory\ZendDbSqlMapperFactory',
             'Blog\Service\PostServiceInterface' => 'Blog\Factory\PostServiceFactory',
            // 'Zend\Db\Adapter\Adapter'           => 'Zend\Db\Adapter\AdapterServiceFactory'
         )
     ),
    'controllers' => array(
         'factories' => array(
             'Blog\Controller\List' => 'Blog\Factory\ListControllerFactory'
            )
        ),

    // This lines opens the configuration for the RouteManager
    'router' => array(
         'routes' => array(
             'post' => array(
                 'type' => 'literal',
                 'options' => array(
                     'route'    => '/blog',
                     'defaults' => array(
                         'controller' => 'Blog\Controller\List',
                         'action'     => 'index',
                     ),
                 ),
                 'may_terminate' => true,
                 'child_routes'  => array(
                     'detail' => array(
                         'type' => 'segment',
                         'options' => array(
                             'route'    => '/:id',
                             'defaults' => array(
                                 'action' => 'detail'
                             ),
                             'constraints' => array(
                                 'id' => '[1-9]\d*'
                             )
                         )
                     )
                 )
             )
         )
     ),

     /* 'router' => array(
         // Open configuration for all possible routes
         'routes' => array(
             // Define a new route called "post"
             'post' => array(
                 // Define the routes type to be "Zend\Mvc\Router\Http\Literal", which is basically just a string
                 'type' => 'literal',
                 // Configure the route itself
                 'options' => array(
                     // Listen to "/blog" as uri
                     'route'    => '/blog',
                     // Define default controller and action to be called when this route is matched
                     'defaults' => array(
                         'controller' => 'Blog\Controller\List',
                         'action'     => 'index',
                     )
                 )
             )
         )
     ), */
     
     'view_manager' => array(
              'template_path_stack' => array(
                     'blog' =>  __DIR__ . '/../view',
        ),
     ),
 
);
