<?php foreach($products as $i => $product){?>
  <div class="note">
    <span>Task: </span><p class="title"><?php echo $product["title"]?></p>
    
    <span>description: </span><p class="text"><?php echo $product["text"]?></p>
    <?php 

    ?>
    <form method="POST" action="delete.php">
    <button name="remove" type="submit" class="btn" value=<?php echo $product["title"] ?>>Task Completed</button> 
  </form>
  </div>
    <?php }?>