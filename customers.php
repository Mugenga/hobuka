<?php
include("includes/head.php");
// Check whether the action is to add a new customer or to list customers
// If ADD new customer
if(isset($_GET['method']) && $_GET['method'] =='new'){
?>
  <!-- Page content -->
  <div class="main">
    ... new customer form goes here

  </div>
<?php
// endif ADD new customer
}

// else List customers
else{
?>
   <!-- Page content -->
   <div class="main">
     ... Customers list goes here
     <br><br>
     <table style="width:100%">
        <tr>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Username</th>
          <th>age<th>
        </tr>
       <tr>
         <td>Jill</td>
         <td>Smith</td>
         <td>50</td>
       </tr>
       <tr>
         <td>Eve</td>
         <td>Jackson</td>
         <td>Eve</td>
         <td>25</td>
       </tr>
       <tr>
         <td>Jill</td>
         <td>Smith</td>
         <td>50</td>
       </tr>
       <tr>
         <td>Eve</td>
         <td>Jackson</td>
         <td>Eve</td>
         <td>25</td>
       </tr>
    </table>
   </div>
<?php
// end else
 }
include "footer.php" ?>
