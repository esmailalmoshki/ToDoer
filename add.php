<?php
if(isset($_POST['insert'])){
  if($_POST['text'] && $_POST['title']){
    $title=$_POST["title"];
    $text=$_POST["text"];
    $mysqli = new mysqli('localhost', 'root', '', 'notes'); 
  
  $mysqli->query("INSERT INTO `notes` (`title`,`text`) VALUES('$title','$text')");
  header("Location:./note.php");
  }
}


?>