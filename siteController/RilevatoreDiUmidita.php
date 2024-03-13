<?php

require_once __DIR__ . '/Rilevatori.php';

class RilevatoreDiUmidita extends Rilevatori 
{
    
    protected $posizione; //terra o in aria 

    public function __construct($codiceSeriale,$identificativo, $posizione)
    {
        parent::__construct($codiceSeriale,$identificativo);
        $this->posizione = $posizione;
    }

    public function jsonSerialize()
    {
        $d = [
            'Posizione' => $this->posizione
        ];
        $d = array_merge(parent::jsonSerialize(),$d);
        return $d;
        
    }

    

}