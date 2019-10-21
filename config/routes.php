<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin(
    'CaptchaDemo',
    ['path' => '/captcha-demo'],
    function (RouteBuilder $routes) {
		$routes->redirect('/', ['controller' => 'Demo', 'action'=>'image']);
		$routes->get('/recaptcha', ['controller' => 'Demo', 'action'=>'recaptcha']);
		$routes->get('/image', ['controller' => 'Demo', 'action'=>'image']);
		$routes->get('/math', ['controller' => 'Demo', 'action'=>'math']);
		$routes->post('/recaptcha', ['controller' => 'Demo', 'action'=>'recaptcha']);
		$routes->post('/image', ['controller' => 'Demo', 'action'=>'image']);
		$routes->post('/math', ['controller' => 'Demo', 'action'=>'math']);
        $routes->fallbacks(DashedRoute::class);
    }
);
