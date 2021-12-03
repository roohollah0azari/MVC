<?php
require "../vendor/autoload.php";
$router = new \Core\Router();
//$router->add('/series', [ 'uses'=>'SeriesController@index' ]);
//$router->add('/series/{slug}', 'SeriesController@seri');
$router->add('/series/{slug}/episode/{id}', 'SeriesController@episode');

$router->dispatch($_SERVER["QUERY_STRING"]);