<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
require_once __DIR__ . '/Impianto.php';
require_once __DIR__ . '/Rilevatori.php';

class RilevatoreDiUmiditaController 
{

    public function Umidita(Request $request, Response $response, $args)
    {

        $impianto = new Impianto();

        $response->getBody()->write(json_encode($impianto->findUmidita()));
       // var_dump($impianto->findUmidita());
        return $response;


    }

    public function UmiditaIdentificativo(Request $request, Response $response, $args)
    {
        $impianto = new Impianto();

        $result = $impianto->findUmiditaIdentificativo($args);
        $response->getBody()->write(json_encode($result));
        return $response;

    }

    public function MisurazioniIdentificativo(Request $request, Response $response, $args)
    {

        $impianto = new Impianto();
        $result = $impianto->findUmiditaIdentificativo($args);
        var_dump($result);
        

        $response->getBody()->write(json_encode($result));



    }


}