<?php
class NamenLijst {
  private $namen;

  public function __construct($namen) {
    $this->namen = $namen;
  }

  public function zoekNaam($naam) {
    foreach($this->namen as $index => $voornaam) {
      if (strtolower($voornaam) === strtolower($naam)) {
        return $index;
      }
    }
    return -1;
  }
}
$namenLijst = new NamenLijst(array("Anna", "Bob", "Carla", "David", "Emma", "Frank", "Gina", "Hans", "Ingrid", "Jeroen", "Uday"));
echo $namenLijst->zoekNaam("Uday"); // Output: 10
echo $namenLijst->zoekNaam("Karel"); // Output: -1
echo $namenLijst->zoekNaam("Anna"); // Output: 0
echo $namenLijst->zoekNaam("DAVID"); // Output: 3
echo $namenLijst->zoekNaam("Frank"); // Output: 5

?>
