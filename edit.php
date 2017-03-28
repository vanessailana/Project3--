<?php

session_start();

include("config.php");

$sql = "UPDATE ordertable SET status='Order is Complete' WHERE order_id='$_POST[orderid]'";

if (mysqli_query($con, $sql)) {
    

} else {
    echo "Error updating record: " . mysqli_error($con);
}

session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
  <head>

<?php include("style.php"); ?>
   
  </head>

    <form id = "form" action = "success.php">
      Input: <input type="text" id="Input"><br>
      <input type="submit" value="Submit">
    </form>
  
 
 <?php include("adminheader.php"); ?>
 <ul id="messages"></ul>

<form action="success.php" method="post">

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3">IN ORDER TO <kbd>COMPLETE</kbd> THE TRANSACTION, YOU MUST</h1>
    <p class="lead">Type the Order Id (In the box provided) to complete the order want to Complete </p>
  </div>
</div>

<p></p>

<div class="form-group">

<input type="text" name="orderid" style="height:50px; width:800px"> </br>
</div>

<p></p>
      <input id="m" type="submit" autocomplete="off">
</form>




<?php include("scripts.php");?>

</body>
</html>

