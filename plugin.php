<?php

use Illuminate\Foundation\Application;
use FPP\Plugins\PluginInterface;

return [
	
	/*
	|--------------------------------------------------------------------------
	| Name
	|--------------------------------------------------------------------------
	|
	| Plugin name (it's only required for presentational purposes).
	|
	*/
	'name' => 'Falcon Player Menu System',

	/*
	|--------------------------------------------------------------------------
	| Slug
	|--------------------------------------------------------------------------
	|
	| Your plugin unique identifier and should not be changed as
	| it will be recognized as a whole new plugin.
	|
	| Ideally, this should match the folder structure within the plugin
	| folder, but this is completely optional.
	|
	*/

    'slug' => 'fpp/menus',

    /*
	|--------------------------------------------------------------------------
	| Author
	|--------------------------------------------------------------------------
	|
	| Because everybody deserves credit for their work, right?
	|
	*/
	'author' => 'Falcon Player Team',

	/*
	|--------------------------------------------------------------------------
	| Description
	|--------------------------------------------------------------------------
	|
	| One or two sentences describing what the plugin do for
	| users to view when they are installing the plugin.
	|
	*/
	'description' => 'Adds a dynamic menu system to the FPP Interface',

	/*
	|--------------------------------------------------------------------------
	| Version
	|--------------------------------------------------------------------------
	|
	| Version should be a string that can be used with version_compare().
	|
	*/
	
    'version' => '1.0.0',

    /*
	|--------------------------------------------------------------------------
	| Requirements
	|--------------------------------------------------------------------------
	|
	| List here all the plugins that this plugin requires to work.
	|
	| This is used in conjunction with composer, so you should put the
	| same plugin dependencies on your main composer.json require
	| key, so that they get resolved using composer, however you
	| can use without composer, at which point you'll have to
	| ensure that the required plugins are available.
	|
	*/

    'require' => [
       // 'bar/baz',
    ],

    /*
	|--------------------------------------------------------------------------
	| Autoload Logic
	|--------------------------------------------------------------------------
	|
	| You can define here your plugin autoloading logic, it may either
	| be 'composer' or a 'Closure'.
	|
	| If composer is defined, your composer.json file specifies the autoloading
	| logic.
	|
	|
	| If a Closure is defined, it should take two parameters as defined
	| bellow:
	|
	|	object \Composer\Autoload\ClassLoader      $loader
	|	object \Illuminate\Foundation\Application  $app
	|
	| Supported: "composer", "Closure"
	|
	*/

	'autoload' => 'composer',

	/*
	|--------------------------------------------------------------------------
	| Service Providers
	|--------------------------------------------------------------------------
	|
	| Define your plugin service providers here. They will be dynamically
	| registered without having to include them in app/config/app.php.
	|
	*/

    'providers' => [
        'FPP\Menu\ServiceProvider',
    ],

    /*
	|--------------------------------------------------------------------------
	| Routes
	|--------------------------------------------------------------------------
	|
	| Closure that is called when the plugin is started. You can register
	| any custom routing logic here.
	|
	| The closure parameters are:
	|
	|	object \FPP\Plugins\PluginInterface  $plugin
	|	object \Illuminate\Foundation\Application        $app
	|
	*/

    'routes' => function() {
      // 
    },

];