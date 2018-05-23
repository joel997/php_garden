<?php
include 'categories.php';

?>
  <!doctype html>

  <html lang="en">

  <head>
    <meta charset="utf-8">

    <title>Info Web</title>
    <meta name="description" content="Info Web">
    <meta name="author" content="Info Web">


    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" integrity="sha384-u/bQvRA/1bobcXlcEYpsEdFVK/vJs3+T+nXLsBYJthmdBuavHvAW6UsmqO2Gd/F9" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <?php include 'nav.php' ?>
    </nav>

    <div class="container">
      <form method="post" action="submit.php">
        <fieldset>
          <div class="fltBorder">
            <div class="fltSrc">
              <center>Filter Search</center>
            </div>
            <div class="form-group">
              <b>Category:</b>
              <select name="category" class="form-control" id="categories">
          <?php
            foreach ($categories as $c){
              echo '<option>' . $c . '</option>';
            }
          ?>
              </select>
            </div>
            
            <div class="form-group">
              <b>Country:</b>
              <select name="category" class="form-control" id="categories">
          <?php
            foreach ($countries as $co){
              echo '<option>' . $co . '</option>';
            }
          ?>
              </select>
            </div>
            
            
            
            
            
            
          <button class="btn btn-primary" type="submit">Search</button>
          </div>
      </form>
    </div>
  </body>

  </html>