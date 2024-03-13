<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/siteController/Rilevatori.php';
require_once __DIR__ . '/siteController/Impianto.php';
require_once __DIR__ . '/siteController/SiteController.php';
require_once __DIR__ . '/siteController/ImpiantoController.php';
require_once __DIR__ . '/siteController/RilevatoreDiUmiditaController.php';


$app = AppFactory::create();

$app->get('/', 'SiteController:index');
$app->get('/impianto', 'ImpiantoController:impianto');
$app->get('/rilevatori_di_umidita', 'RilevatoreDiUmiditaController:Umidita');
$app->get('/rilevatori_di_umidita/{identificativo}', 'RilevatoreDiUmiditaController:UmiditaIdentificativo'); // da chiedere
$app->get('/rilevatori_di_umidita/{identificativo}/misurazioni', 'RilevatoreDiUmiditaController:MisurazioniIdentificativo');

$app->run();