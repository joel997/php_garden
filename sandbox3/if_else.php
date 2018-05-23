<?php
$var1 = 50;
$var2 = 50;


echo $var1 . "<br>";
echo $var2 . "<br>";

// If Else
if($var1 > $var2){
  echo $var1 . " is greater than " . $var2;
} else {
  echo $var2 . " is greater than " . $var1;
}
echo "<br>";

// If EliseIf Else
if($var1 == $var2){
  echo $var1 . " is the same as " . $var2;
} else if($var1 > $var2){
  echo $var1 . " is greater than " . $var2;
} else {
  echo $var2 . " is greater than " . $var1;
}

?>