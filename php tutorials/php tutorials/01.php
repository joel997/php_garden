<html>
  
<head>
	<title>Learning PHP</title>
</head>
<body>
  
<?php
  /*
  $name ="John";
  
  echo "Hello, " . $name;
  */
  $human = 6;
  $num = 15;
  $num2 = 9;
  $sum = $num + $num2;
  $place = "Australia";
  
  $cash = 30;
  $price = 18;
  $total = $cash - $price;
  $line = "---------------------------------------";
  
  echo "Price for the toy is $" . $price . ".00. <br>
  I paid $" . $cash . ".00 for the toy. <br>";
  echo $line;
  echo "<br> $" . $total . " was the total amount given back to me. <br>";
  echo $line;
  
  echo "<br><br> There are over " . $human . " billion people in the world. <br>"
  . $sum . " million people live in " . $place . ".";
  
  echo "<br><br>";
  
  $numbers = array(13, 56, 2, 99);
  $totalsum = 0;
  
  foreach ($numbers as $n) {
    $totalsum = $totalsum + $n;
  }
  
  echo $totalsum;
?>

</body>
</html>