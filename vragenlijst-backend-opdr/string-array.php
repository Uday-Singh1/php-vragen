<?php

class ReverseInput {
    public function isStringOrArray($input) {
      if (is_array($input)) {
        return 'array';
      } else if (is_string($input)) {
        return 'string';
      } else {
        throw new Exception('Input must be a string or an array.');
      }
    }
  
    public function reverseArray($arr) {
      return array_reverse($arr);
    }
  
    public function reverseInput($input) {
      $type = $this->isStringOrArray($input);
  
      if ($type == 'array') {
        return $this->reverseArray($input);
      } else {
        return strrev($input);
      }
    }
  }

  $reverser = new ReverseInput();
$input1 = 'Hello world!';
$input2 = array('apple', 'banana', 'orange');
$input3 = true;

try {
  echo $reverser->isStringOrArray($input1); // string
  echo $reverser->isStringOrArray($input2); // array
  echo $reverser->isStringOrArray($input3); // uitzondering
} catch (Exception $e) {
  echo 'Error: ' . $e->getMessage(); // Error: Input must be a string or an array.
}

echo $reverser->reverseInput($input1); // !dlrow olleH
print_r($reverser->reverseInput($input2)); // Array ( [0] => orange [1] => banana [2] => apple )
?>


