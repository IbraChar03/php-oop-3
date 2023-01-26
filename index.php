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

    public function __construct($nome, $cognome, $dataNascita, $luogoNascita, $codFiscale)
    {
        $this->setNome($nome);
        $this->setCognome($cognome);
        $this->setDataNascita($dataNascita);
        $this->setLuogoNascita($luogoNascita);
        $this->setCodFiscale($codFiscale);


    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;
    }
    public function getCognome()
    {
        return $this->cognome;
    }
    public function setDataNascita($dataNascita)
    {
        $this->dataNascita = $dataNascita;
    }
    public function getDataNascita()
    {
        return $this->dataNascita;
    }
    public function setLuogoNascita($luogoNascita)
    {
        $this->luogoNascita = $luogoNascita;
    }
    public function getLuogoNascita()
    {
        return $this->luogoNascita;
    }
    public function setCodFiscale($codFiscale)
    {
        $this->codFiscale = $codFiscale;
    }
    public function getCodFiscale()
    {
        return $this->codFiscale;
    }

}
class Impiegato extends Persona
{
    private Stipendio $stipendio;
    private $dataAssunzione;
    public function __construct($nome, $cognome, $dataNascita, $luogoNascita, $codFiscale, Stipendio $stipendio, $dataAssunzione)
    {
        parent::__construct($nome, $cognome, $dataNascita, $luogoNascita, $codFiscale);
        $this->setStipendio($stipendio);
        $this->setDataAssunzione($dataAssunzione);
    }
    public function setStipendio($stipendio)
    {
        $this->stipendio = $stipendio;
    }
    public function getStipendio()
    {
        return $this->stipendio->stipendioAnnuale();
    }
    public function setDataAssunzione($dataAssunzione)
    {
        $this->dataAssunzione = $dataAssunzione;
    }
    public function getDataAssunzione()
    {
        return $this->dataAssunzione;
    }
    public function getHtml()
    {
        return "</h1>" . "Nome :" . $this->getNome() . "<br>" . "Cognome :" . $this->getCognome() . "<br>" . "Codice Fiscale :" . $this->getCodFiscale() . "<br>" . "Stipendio Annuale" . $this->getStipendio();
    }


}
$stipendio1 = new Stipendio(1200, 800, 700);
$impiegato1 = new Impiegato("Luca", "Rossi", "1990-10-10", "Milano", "AD21DSM28F", $stipendio1, "2022-01-01");
// echo $stipendio1->getHtml();
echo $impiegato1->getHtml();