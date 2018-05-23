<?php
if(isset($_GET['page'])){
  $page = $_GET['page'];
  switch($page){
    case 1:
      include "page1.php";
      break;
    case 2:
      include "page2.php";
      break;
    default:
      echo "No page selected";
  }
} else {
  // Show the select screen
  include "select.php";
}
?>