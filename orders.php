<?php
include("includes/head.php");
// Check whether the action is to place a new customer or to list orders
// If ADD new customer
if(isset($_GET['method']) && $_GET['method'] =='new'){
?>
  <!-- Page content -->
  <div class="main">
    ... new order form goes here
    <form class="" action="#" method="POST">
      <h1>Customer Registration</h1>
      <label id="customerId">Enter Customer ID: <input type="text" name="username"></label>
      <label id="quantity">Quantity: <input type="text" name="username"></label>
      <label id="amountPaid">Amount Paid <input type="text" name="username"></label>
      <label id="submitButton"> <input type="submit" name="submit" value="Register"></label>
    </form>

  </div>
<?php
// endif ADD new orders
}

// else List orders
else{
?>
   <!-- Page content -->
   <div class="main">
     ... Order list goes here
     <br><br>
     <table style="width:100%";>
        <tr>
          <th>Order ID</th>
          <th>Customer ID</th>
          <th>Quantity</th>
          <th>Amount Paid</th>
          <th>USP</th>
          <th>Balance</th>
          <th>Date</th>

        </tr>
        <tr>
          <td>821u192</td>
          <td>9248109</td>
          <td>50</td>
          <td>5000</td>
          <td>54</td>
          <td>4000</td>
          <td>23rd, jun 2018</td>
       </tr>
       <tr>
         <td>821u192</td>
         <td>9248109</td>
         <td>50</td>
         <td>5000</td>
         <td>54</td>
         <td>4000</td>
         <td>23rd, jun 2018</td>
       </tr>
    </table>
   </div>
<?php
// end else
 }
include "footer.php" ?>
