<?php
class Stipendio
{
    private $mensile;
    private $tredicesima;
    private $quattordicesima;
    public function __construct($mensile, $tredicesima, $quattordicesima)
    {
        $this->setMensile($mensile);
        $this->setTredicesima($tredicesima);
        $this->setQuattordicesima($quattordicesima);
    }
    public function setMensile($mensile)
    {
        $this->mensile = $mensile;

    }
    public function getMensile()
    {
        return $this->mensile;

    }
    public function setTredicesima($tredicesima)
    {
        $this->tredicesima = $tredicesima;

    }
    public function getTredicesima()
    {
        return $this->tredicesima;

    }
    public function setQuattordicesima($quattordicesima)
    {
        $this->quattordicesima = $quattordicesima;

    }
    public function getQuattordicesima()
    {
        return $this->quattordicesima;

    }
    public function stipendioAnnuale()
    {
        return ($this->getMensile() * 12) + $this->getTredicesima() + $this->getQuattordicesima();
    }
    public function getHtml()
    {
        return "</h1>" . "Mensile : " . $this->getMensile() . "<br>" . "Tredicesima :" . $this->getTredicesima() . "<br>" . "Quattordicesima :" . $this->getQuattordicesima() . "<br>" . "Stipendio annuale :" . $this->stipendioAnnuale();
    }
}
class Persona
{
    private $nome;
    private $cognome;
    private $dataNascita;
    private $luogoNascita;
    private $codFiscale;
    private Stipendio $stipendio;
    private $dataAssunzione;

    public function __construct($nome, $cognome, $dataNascita, $codFiscale, Stipendio $stipendio, $dataAssunzione)
    {
        $this->setNome($nome);
        $this->setCognome($cognome);
        $this->setDataNascita($dataNascita);
        $this->setCodFiscale($codFiscale);
        $this->setStipendio($stipendio);
        $this->setDataAssunzione($dataAssunzione);

    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        $this->nome;
    }
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;
    }
    public function getCognome()
    {
        $this->cognome;
    }
    public function setDataNascita($dataNascita)
    {
        $this->dataNascita = $dataNascita;
    }
    public function getDataNascita()
    {
        $this->dataNascita;
    }
    public function setCodFiscale($codFiscale)
    {
        $this->codFiscale = $codFiscale;
    }
    public function getCodFiscale()
    {
        $this->codFiscale;
    }
    public function setStipendio($stipendio)
    {
        $this->stipendio = $stipendio;
    }
    public function getStipendio()
    {
        $this->stipendio->stipendioAnnuale();
    }
    public function setDataAssunzione($dataAssunzione)
    {
        $this->dataAssunzione = $dataAssunzione;
    }
    public function getDataAssunzione()
    {
        $this->dataAssunzione;
    }


}

$stipendio1 = new Stipendio(1200, 800, 700);
echo $stipendio1->getHtml();