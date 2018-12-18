<?php

namespace App;
use Phore\MicroApp\App;
use Phore\MicroApp\Handler\JsonExceptionHandler;
use Phore\MicroApp\Handler\JsonResponseHandler;


require __DIR__ . "/../vendor/autoload.php";

$app = new App();
$app->activateExceptionErrorHandlers();
$app->setOnExceptionHandler(new JsonExceptionHandler());
$app->setResponseHandler(new JsonResponseHandler());

$app->assets()->addAssetSearchPath(__DIR__ . "/assets/");

$app->addModule(new AppServices());
$app->addModule(new AppAcls());
$app->addModule(new AppRoutes());

/**
 ** Run the application
 **/
$app->serve();
