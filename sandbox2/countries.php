<?php

function getCountries($db){
  $sql = "SELECT * FROM countries;";
  $statement = $db->prepare($sql);
  $statement->execute();
  return $statement->fetchAll();
}

$countries = getCountries($db);
/*
echo "<pre>";
print_r($countries);
echo "</pre>";
*/