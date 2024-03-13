<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


class Rilevatori implements JsonSerializable
{
    protected  $id; // umidita, temperatura
    protected $misurazioni = array("02/12/2022"=>"34","04/05/2023"=>"12","06/07/2024"=>"56","08/09/2025"=>"78","10/11/2026"=>"90");
    protected $codiceSeriale;
    protected $unitaDiMisura = "%";

    public function __construct($id, $codiceSeriale)
    {
        $this->id = $id;
        $this->codiceSeriale = $codiceSeriale;

    }
    
    

    public function getId()
    {
        return $this->id;
    }
    public function getMisurazioni()
    {
        return $this->misurazioni;
    }
    public function getCodiceSeriale()
    {
        return $this->codiceSeriale;
    }
    public function getUnitaDiMisura()
    {
        return $this->unitaDiMisura;
    }

    public function jsonSerialize()
    {
        return 
        [
            'Codice Seriale' => $this->codiceSeriale,
            'Id' => $this->id
        ];
    }

    
    

    
}
