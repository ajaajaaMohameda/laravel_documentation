<?php

$this->app->bind('HelpSpot\Api', function ($app) {
    return new HelpSpot\API();
});

$this->app->singleton('HelpSpot\API', function($app) {
    return new HelpSpot\API($app->make('HttpClient'));
});


$this->app->extend(Service:class, function($service) {
    return
})

$api = $this->app->make('HelpSpot\API');

$api = $this->app->makeWith('HelpSpot\API', ['id' => 1]);

$this->app->resolving(function($object, $app) {

})

$this->app->resolving(HelpSpot\API::class, function($api, $app) {

})


use Psr\Container\ContainerInterface;

Route::get('/', function(ContainerInterface $container) {
    $service = $container->get(''''''')
})