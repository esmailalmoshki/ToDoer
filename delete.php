<?php
if (isset($_POST["remove"])){
  $title=$_POST["remove"];
  echo $title;
  
    $mysqli = new mysqli('localhost', 'root', '', 'notes'); 
    $mysqli->query("DELETE FROM `notes` WHERE title ='".$title."'");
  header("Location:./note.php");
}
?>