<?php

$x = "red";

/*
if($x == "red" || $x == "green"){
  // If x is red OR x is green
  // Do something
} else {
  // X is neither RED nor GREEN
}
if($x == "red" && $y == "green"){
  // both x is red and y is green
}

if($x == "red" && $y != "green"){
  // x is red and y is NOT green
}
*/

if($x == "red") {
  echo "Yes";
} elseif ($x == "green") {
  echo "No";
} else {
  echo "Maybe";
}
?>
,
<?php
$color1 = "red";

if($color1 == "red") {
    echo "True";
} else {
    echo "False";
}
?>