<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
require_once __DIR__ . '/Impianto.php';

class ImpiantoController
{
    public function impianto(Request $request, Response $response, $args) {
        $impianto = new Impianto();
        $response->getBody()->write(json_encode($impianto->jsonSerialize()));
        return $response;
    }
}

