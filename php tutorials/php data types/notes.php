<pre>
<?php
/*
print_r($data);
?>
</pre>

<?php
foreach($data as $d)
{
  echo "<tr>";
  echo "<td>" . $d["TITLE"] . "</td>";
  echo "<td>" . $d["DEVELOPER"] . "</td>";
  echo "<td>" . $d["PUBLISHER"] . "</td>";
  echo "<td>" . $d["PRICE"] . "</td>";
  echo "<td>" . $d["PLATFORM"] . "</td>";
  echo "</tr>";
}
?>

<?php
$search = $_GET["title"];
?>

<?php
action: is where you want to sent that data to.
method Get: visible in the URL for eveyone to see.
method Post: invisible to everyone and should be used for login systems.
*/
?>