<?php


$car = "Nissan";

switch ($car) {
  case "BMW":
    echo "You can drive the BMW today";
    break;
  case "Range Rover":
    echo "You can drive the Range Rover today";
    break;
  case "Toyota":
    echo "You can drive the Toyota today";
    break;
  default:
    echo "You cannot drive the $car today";
}
?>