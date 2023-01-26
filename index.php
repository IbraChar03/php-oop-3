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
$stipendio = new Stipendio(1200, 800, 700);
echo $stipendio->getHtml();