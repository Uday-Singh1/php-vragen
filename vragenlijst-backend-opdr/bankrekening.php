 <!-- Vraag 7 en 8  -->

<?php
  
  class Bankrekening{

   public $this->banknummer = 'NL05 342342345';
   public $this->balans = 0;


    public function toevoegen() {
        $this->balans = 0;
        $this->bedragToevoegen = 100;
        $this->nieuwgeld = $this->balans + $this->thisbedragToevoegen;
        var_dump($nieuwgeld);
    }

    public function onttrekken() {
        
      if($this->bedragontrekken === $this->balans){
        echo "te weinig geld";
      }
      else{
        $this->bedragontrekken = 100;
        $this->nieuwgeldmin = $this->balans = $this->bedragontrekken;
        var_dump($this->nieuwgeldmin);
      }
    }
 
}
  

class BankrekeningPlus extends Bankrekening {
  public $this->limiet = 1000;
  public function onttrekken(){
  
    if($this->balans === 1000){
      echo "te weinig geld"
    }
    else{
      $this->bedragontrekken = 100;
      $this->nieuwgeldmin = $this->balans - $this->bedragontrekken;
      var_dump(($this->nieuwgeldmin))
    
  
  }
}


  public function rente(){
    $this->balans / 100 * 5 = $this->$rente;
    var_dump($rente);

  }
  public function sum(){
    var_dump($this->balans,$this->rente)
    echo date();
  }


}

?>



   

