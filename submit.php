<?php 
include("config.php");


//

if(isset($_POST['submit'])) {

$sql = "INSERT INTO ordertable (order_id, productid, price,Items_bought,status,username)
VALUES ('{$_POST['username']}','{$_POST['productid']}','{$_POST['cost']}','{$_POST['text']}','Pending','{$_POST['orderid']}')";
if ($con->query($sql)) {
	header("Location: sucesscustomer.php");
       die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
  
       <?php include 'style.php';?>
    
  </head>
  <body>
  <center>
 <?php include("header.php") ?>

<h1>  Before we proceed and submit your order to be processed </h1>

<h2> This is really annoying, but </h2>

<h3>  Please  type in the following, so you can eventually get your order. </h3>

<h1> <kbd>1.</kbd> Your user id </h1>

<h1> <kbd> 2.  </kbd> The product id number. (If you forgot it refer back to the menu, its there) </h1>

<h1> <kbd> 3.</kbd> The total cost of your order </h1>

<h1> <kbd> 4. </kbd> And type in the following items, you purchased </h1>



<h1> <kbd> 5. </kbd> Also type the order id number, it  is <?php $n1 = rand (1, 99); echo  "<mark>". $n1 ."</mark>"; ?> <p></p> So Please type it in the provided boxes to make our life way easier CAUSE WE ARE LAZYYYYY</h1>

<div class="form-group">
<form action="submit.php" method="post">


<label> Username </label>


<input type="text" name="username"> </br>
</div>

<div class="form-group">

<label> Order Id </label>

<input type="text" name="orderid"> </br>
</div>


<div class="form-group"

<label> Product Identification Number(s) </label>

<input type="text" name="productid"></br>
</div>


<div class="form-group">



<label> Total Cost from Shopping Cart </label>

<input type="text" name="cost"></br>
</div>

<div class="form-group">


<label> List of Item(s) that were purchased </label>
<textarea type="text" name="text"></textarea>

<input type="submit"  class="btn btn-primary btn-lg" name="submit" value="SUBMIT ORDER">  </br>

</div>



</div>
</form>
</center>


					



</body>
</html>
