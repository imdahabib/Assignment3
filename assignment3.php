<?php
function EvenOdd($num) {
    if($num % 2 == 0) {
      return "Even";
    } else {
      return "Odd";
    }
  }
  echo EvenOdd(5);
?>
