<?php
class Movie
{
  // Definisco gli attributi della Classe
  public string $title;
  public string $desc;
  public array $genres;
  public int $time_min;

  // Creo il Costruttore che verra' richiamato nel momento in cui verra creata un Instanza della Classe
  // Definisco come Parametro del Costruttore il Titolo che dovro' definire (obbligatoriamente) alla creazione dell'Istanza
  function __construct($_title)
  {
    $this->title = $_title;
    // array_push($this->genre, $_genre);
  }

  public function getTimeHour()
  {
    $num_hour = floor($this->time_min / 60);

    $num_min = $this->time_min - ($num_hour * 60);

    return "$num_hour h e $num_min m";
  }
}
