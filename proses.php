<?php
if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operator'])) {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operator = $_POST['operator'];

  if($operator == "+") {
    $result = $num1 + $num2;
  } elseif($operator == "-") {
    $result = $num1 - $num2;
  } elseif($operator == "*") {
    $result = $num1 * $num2;
  } elseif($operator == "/") {
    $result = $num1 / $num2;
  } else {
    $result = "Invalid operator";
  }

  echo "Result: " . $result;
}
?>
