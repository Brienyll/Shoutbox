<?php include 'database.php' ; ?>
<?php
  //Create Query
  $query = "SELECT * FROM shouts";
  $shouts = mysqli_query($con, $query);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Shout Box</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
  </head>
  <body>
    <div id="container">
      <header>
        <h1>Shout Box</h1>
      </header>
      <div id="shouts">
        <ul>
          <?php  while($row = mysqli_fetch_assoc($shouts)) :  ?>
            <li class="shout"><span><?php echo $row['time'].' ' ?></span><strong><?php echo $row['user'].': '?></strong><?php echo $row['message'] ?></li>
          <?php endwhile; ?>
        </ul>
      </div>
      <div id="input">
        <form method="post" action="process.php">
          <input type="text" name="user" placeholder="Enter Your Name" />
          <input type="text" name="message" placeholder="Enter Your Message" />
          <br/>
          <input class="shout-btn" type="submit" name="submit" value="Shout it out" />
        </form>
      </div>
    </div>
  </body>
</html>
