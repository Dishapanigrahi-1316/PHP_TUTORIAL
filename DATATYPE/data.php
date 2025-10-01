
<!-- 
 //gettype($var)-> return type as string.
 //var_dump($var)-> shows type +value.
-->
 <!-- integer -->
<?php
$age=25;
var_dump($age);
echo "<br>";
echo gettype($age);
?>


<!-- use line break -->
<?php
echo "<br>";
?>
<!-- use line break -->


<!-- float -->
 <?php
$Number=99.9;
var_dump($Number);
echo "<br>";
echo gettype($Number);
?>

<!-- use line break -->
<?php
echo "<br>";
?>
<!-- use line break -->
 <!-- string -->
 <?php 
 $name="Swagatika";
  var_dump($name);
  echo "<br>";
  echo gettype($name);
  ?>
  <!-- use line break -->
<?php
echo "<br>";
?>
<!-- use line break -->
<?php
$isStudent=true;
var_dump($isStudent);
echo "<br>";
echo gettype($isStudent);
 ?>
<!-- use line break -->
<?php
echo "<br>";
?>
<!-- use line break -->
<?php
$Student=["ram","hari","mama","puja"];
var_dump($Student);
echo "<br>";
echo gettype($Student);
?>
<!-- use line break -->
<?php
echo "<br>";
?>
<!-- use line break -->
<?php 
$var=null;
var_dump($var);
echo "<br>";
echo gettype($var);
?>
<!-- use line break -->
<?php
echo "<br>";
?>
<!-- use line break -->
<?php
class Person {
    public $name;
}

$p = new Person();
$p->name = "Disha"; // assign name to object property

var_dump($p);       // shows object details
echo gettype($p);   // outputs 'object'
?>
