<?php

function keer_om($input) {
  return strrev($input);
}

echo keer_om("Invoer string"); // Output: "gnirts reovnI"
echo keer_om("Een lange tekst"); // Output: "tsekt egnal neE"

?>