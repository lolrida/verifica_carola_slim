<?php


//require __DIR__ . '/vendor/autoload.php';
require_once __DIR__.'/RilevatoreDiUmidita.php';
require_once __DIR__.'/RilevatoreDiTemperatura.php';

class Impianto
{
    protected String $nome = "Newport";
    protected String $latitudine = "44.12856";
    protected String $longitudine = "-124.64963";
    protected $rilevatori = array();

    public function __construct()
    {
        $rilevatori1 = new RilevatoreDiUmidita("umidita","289434", "terra");
        $rilevatori2 = new RilevatoreDiTemperatura("temperatura","289435");
        $rilevatori3 = new RilevatoreDiUmidita("umidita","289436", "aria");
        $rilevatori4 = new Rilevatori("temperatura","289437");
        $rilevatori5 = new RilevatoreDiUmidita("umidita","289438", "aria");
        $rilevatori6 = new Rilevatori("temperatura","289439");
        $this->rilevatori = array($rilevatori1,$rilevatori2,$rilevatori3,$rilevatori4,$rilevatori5,$rilevatori6);
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getLatitudine()
    {
        return $this->latitudine;
    }
    public function getLongitudine()
    {
        return $this->longitudine;
    }
    public function getRilevatori()
    {
        return $this->rilevatori;
    }

    public function jsonSerialize()
    {
        return 
        [
            'nome' => $this->nome,
            'Latitudine' => $this->latitudine,
            'Longitudine' => $this->longitudine
        ];
    }

    public function findUmidita()
    {
        $umidita = array();
        foreach($this->rilevatori as $ril)
        {
            if($ril->getId() == "umidita")
            {
                array_push($umidita,$ril);
            }
        }

        return $umidita;
    }
    
    public function findUmiditaIdentificativo($codice)
    {

        var_dump($codice);
        foreach($this->rilevatori as $ril)
        { 
            if($ril->getCodiceSeriale() == $codice)
            {
                return $ril;
            }
        }
        return 1;
    }


}