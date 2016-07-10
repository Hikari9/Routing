<?php 

// Load library
require_once 'lib/autoload.php';

// url routing
$routes = [
	'/'		=> 'app/index.php',
	'/home'	=> 'app/home.php'
];

// configurations
$config = \Base::instance();
foreach ($routes as $route => $template) {
	$config->route("GET $route", function($config, $params) {
		global $routes;
		require $routes[$params[0]];
	});
}
$config->run();
