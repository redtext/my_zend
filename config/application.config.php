<?php
$env = getenv('APP_ENV') ?: 'production';    

$modules = array(
    'Application',
        'ZfcBase', 
        'ZfcUser',
        'DoctrineModule',
        'DoctrineORMModule',
        'BjyAuthorize',
        'ZfcUserDoctrineORM',
        'ZfcTwitterBootstrap',
        'Album',
        'Report',
        'Partner',
        'Purchase',
        'Budget',
        'TMC',
        'Doc',
        'Software',
        'Admin',
        'Blog',
        'PhoneBook',
        'Checklist',
        'DoctrineModule',
        'DoctrineORMModule',
        'MyUser'
           
    );

if ($env == 'development') {
    $modules[] = 'ZendDeveloperTools';
}

/**
 * Configuration file generated by ZFTool
 * The previous configuration file is stored in application.config.old
 *
 * @see https://github.com/zendframework/ZFTool
 */
return array(
    'modules' => $modules
    ,
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor'
            ),

        'config_glob_paths' => array('config/autoload/{,*.}{global,local}.php'
        ),
        
        
        // Use the $env value to determine the state of the flag
        'config_cache_enabled' => ($env == 'production'),
        'config_cache_key' => 'app_config',
        
        // Use the $env value to determine the state of the flag
        'module_map_cache_enabled' => ($env == 'production'),
                
        'module_map_cache_key' => 'module_map',              
        'cache_dir' => 'data/config/',
                                
        // Use the $env value to determine the state of the flag
        'check_dependencies' => ($env != 'production'),
    ),
                                                                    
        
);
