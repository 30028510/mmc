<?php 
  include("config.php");

 $test= $_GET['test'];
 $CONNECT	= mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  
	$table	= "socity_userss";

  $id	= isset($_SESSION["id"])? $_SESSION["id"]: 0;

$data	= array("where"=>"id='$id'");   


$result	= select($table, $data);
//print_r($result);
if(isset($result['result'])){

		$row	= $result['result'][0];

 $userid= $row['id'];
  $username= $row['firstname']; 

?>
<?php $success='success'; ?>
<?php
$table	= "orders";
 
  $id	= isset($_SESSION["id"])? $_SESSION["id"]: 0;

 
$data	= array("where"=>"socity_id='$id' and status='$success' and Transactiondate='$test'"); 

$result	= select($table, $data);
//print_r($result);
?>
  
<div class="fffff ddd">
<form name="export-orders" action="http://payurmmc.com/socity-admin/excelsheet-socity-order.php" method="post">
<input type="hidden" name="user_id" value="<?php echo $userid ?>"><input type="submit" name="submit" value="Download Order" class="export-orders">
</form>

         <form name="orderss" action="http://payurmmc.com/socity-admin/excelsheet-socity-order.php" method="post"> 
		   <table class="table table-stripped table-bordered">
      <thead>
        <tr>
          <th>Order id</th>
          <th>User id</th>
		  <th>User Name</th>
		  <th>Socity id</th>
		  <th>Socity Name</th>
		  <th>Phone</th>
          <th>Paid Amount</th>
		  
		  <th>Transaction Date</th>
         <th>Transaction time</th>
         
          <th>Status</th>
		  
		  <th>Txn id</th>
        
          <!--<th>Internet Chg</th>
          <th>Service Tax</th>
		  
		  <th>Swachh</th>
            <th>Payment</th>-->
			<th>Receipt</th>
        </tr>
      </thead>
  <tbody>
<?php
 
if(isset($result['result']))
 {
foreach($result['result'] as $row)
{?>

<tr><td><input type="hidden" name="orderid" value="<?php echo $orderid= $row['orderid']; ?>"readonly></td>
<td><?php echo $row['userid']; ?><input type="hidden" name="userid" value="<?php echo $row['userid']; ?>"readonly></td>
<td><?php echo $row['username']; ?><input type="hidden" name="username" value="<?php echo $row['username']; ?>"readonly></td>
<td><?php echo $row['socity_id'];?><input type="hidden" name="socity_id" value="<?php echo $row['socity_id'];?>"readonly></td>
<td><?php echo $username; ?><input type="hidden" name="username" value="<?php echo $username; ?>"readonly></td>
<td><?php echo $row['phone'];?><input type="hidden" name="phone" value="<?php echo $row['phone'];?>"readonly></td>
<td><?php echo $row['amount'];?><input type="hidden" name="amount" value="<?php echo $row['amount'];?>"readonly></td>
<td><?php 	echo $row['Transactiondate'];?><input type="hidden" name="Transactiondate" value="<?php 	echo $row['Transactiondate'];?>"readonly></td>
<td><?php 	echo $row['Transactiontime'];?><input type="hidden" name="Transactiontime" value="<?php 	echo $row['Transactiontime'];?>"readonly></td>
<td><?php echo $row['status'];?><input type="hidden" name="status" value="<?php echo $row['status'];?>"readonly></td>
<td><?php echo $row['txn_id'];?><input type="hidden" name="txn_id" value="<?php echo $row['txn_id'];?>"readonly></td>

<!--<td><?php 	//echo $row['internet_chg'];?></td>
<td><?php 	//echo $row['servicetax'];?></td>
<td><?php 	//echo $row['Swachh'].'</br>';?></td>
<td><?php 	//echo $row['paymentss'];?></td>

<td><form name="export-orders" action="http://payurmmc.com/excelsheet.php" method="post">
<input type="hidden" name="user_id" value="<?php //echo $orderid; ?>"><input type="submit" name="submit" value="Payment Recipt"></form></td>>
<input type="submit" name="submit" class="submit" value="<?php //echo $orderid; ?>"-->
<td><input type="image"  name="submit" value="<?php echo $orderid; ?>" src="Images/download.png"  alt="submit Button" ></td>
<style>
input[type="image"] {
    width: 19%;
    height: 17%;
}
</style>
</tr><?php

}  } else { ?><h4 class="checkorder">No Result Found</h4><?php }  ?>
<!--<form name="export-orders" action="http://payurmmc.com/excelsheet.php" method="post">
<input type="hidden" name="user_id" value="<?php //echo $userid ?>"><input type="submit" name="submit" value="Download Order History">
</form>-->

</tbody></table></form></div></div></div>
<?php 
	// while($row = $result->fetch_assoc()) {
        // echo "id: " . $row["orderid"]. " - Name: " . $row["userid"]. " " . $row["amount"]. "<br>";
    // }
 
	
  
?>
<?php }
?>