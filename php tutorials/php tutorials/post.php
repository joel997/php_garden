<html>
  
<head>
	<title>Learning PHP</title>
</head>
<body>
  
 <?php
  
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  if ($username == "Chris" and $password == "password")
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