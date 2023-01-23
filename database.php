<?php
$pdo= new PDO("mysql:host=localhost;port=3306;dbname=notes","root","");
  $statment=$pdo->prepare("Select * from notes order by create_time");
  $statment->execute();
  $products=$statment->fetchAll(PDO::FETCH_ASSOC);
?>