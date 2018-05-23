<html>
  
<head>
	<title>Learning PHP</title>
</head>
<body>
  
 <?php
  /* ARRAYS *//*
  $names = array("Tony", "Mike", "Sean");
  echo $names[0];
  echo "<br><br>";
  $ages = array("Tony"=>18, "Mike"=>20, "Sean"=>16);
  echo "Mike is " . $ages["Mike"] . " years old.";
  */
  
  /* WHILE LOOPS *//*
  $num = 0;
  while ($num <= 10) {
    echo "The number is " . $num . "<br>";
    $num++;
  }
  */
  
  /* FOREACH LOOPS *//*
  $names = array("Tony", "John", "Mike", "Sean");
  
  foreach ($names as $n) {
    echo "The name is " . $n . ". <br>";
  }
  */
  
  /* 'GET' VARIABLE *//*
  $name = $_GET["name"];
  echo "Welcome to the website " . $name . ".";
  */  
  
  $name = $_POST["name"];
  $password = $_POST["password"];
  
  if ($name == "Chris" and $password == "password")
  {
    echo "Welcome to the website, you are in!";
  }
  else
  {
    echo "Wrong username or password";
  }
  
  ?>

</body>
</html>