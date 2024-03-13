<?php

require_once __DIR__ . '/Rilevatori.php';

class RilevatoreDiTemperatura extends Rilevatori
{   
    protected  $tipologia; // acqua o aria
     

    public function __construct($codiceSeriale,$identificativo)
    {
        parent::__construct($codiceSeriale,$identificativo);
        $this->tipologia = '';
    }

    public function jsonSerialize()
    {
        $d = [
                        'Tipologia' => $this->tipologia
        ];
        $d = array_merge(parent::jsonSerialize(),$d);
        return $d;
        
    }


    
}