 <!-- Vraag 7 en 8  -->

<?php

class Bankrekening {
  public $banknummer = 'NL05 342342345';
  public $balans = 0;
  public $bedragToevoegen;
  public $nieuwgeld;
  public $bedragontrekken;
  public $nieuwgeldmin;

  public function toevoegen() {
      $this->bedragToevoegen = 100;
      $this->nieuwgeld = $this->balans + $this->bedragToevoegen;
      var_dump($this->nieuwgeld);
  }

  public function onttrekken() {
      if ($this->bedragontrekken === $this->balans) {
          echo "te weinig geld";
      } else {
          $this->bedragontrekken = 100;
          $this->nieuwgeldmin = $this->balans - $this->bedragontrekken;
          var_dump($this->nieuwgeldmin);
      }
  }
}

class BankrekeningPlus extends Bankrekening {
  public $limiet = 1000;
  public $rente;

  public function onttrekken() {
      if ($this->balans === 1000) {
          echo "te weinig geld";
      } else {
          $this->bedragontrekken = 100;
          $this->nieuwgeldmin = $this->balans - $this->bedragontrekken;
          var_dump($this->nieuwgeldmin);
      }
  }

  public function rente() {
      $this->rente = $this->balans * 0.05;
      var_dump($this->rente);
  }

  public function sum() {
      var_dump($this->balans, $this->rente);
      echo date('Y-m-d');
  }
}



?>



   

