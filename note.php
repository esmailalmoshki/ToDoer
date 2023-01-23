<?php 
include_once "./database.php";
include_once "./add.php"
?>






<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&family=Sevillana&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="notes-style.css" rel="stylesheet"/>
  <title>Tasks</title>
</head>
<body> 
  <h2 class="main-text">Tasks</h2>
  <div class="containor">
  <?php include_once "./body.php" ?>
    <div action="phpsql" class="add-note note">
      <form action="" method="POST"> 
      <span class="task_text">Task: </span><input name="title" type="input" class="title"></input>
    <span>description: </span><input name="text" type="text" class="text"></input>
    <input name="insert" class="btn add-btn" value="ADD"  type="submit" ></input>
      </form>
    </div>

</div>
</body>
</html>