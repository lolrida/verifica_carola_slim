<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
require_once __DIR__ . '/Impianto.php';
require_once __DIR__ . '/Rilevatori.php';


class ImpiantoDiTemperaturaController
{
    public function Temperatura(Request $request, Response $response, $args)
    {
        $impianto = new Impianto();
        $response->getBody()->write(json_encode($impianto->findTemperatura()));
        return $response;
    }

    public function TemperaturaIdentificativo(Request $request, Response $response, $args)
    {
        $impianto = new Impianto();
        $result = $impianto->findTemperaturaIdentificativo($args);
        $response->getBody()->write(json_encode($result));
        return $response;
    }

    public function MisurazioniIdentificativo(Request $request, Response $response, $args)
    {
        $impianto = new Impianto();
        $result = $impianto->findTemperaturaIdentificativo($args[1]);
        var_dump($result);
        $response->getBody()->write(json_encode($result));
    }
}
