<?php
include 'dbcon.php';
session_start();
if(!isset($_SESSION['email']))
{
	header("location:login.php");
}
if(isset($_POST['remove']))
{


	$mem_id=$_POST["id"];

  $sql2="delete  from `foodorder` where `order_id`=$mem_id";
  $result2=mysqli_query($con,$sql2);

echo"<script>alert('Removed Successfully');</script>)";

}
if(isset($_POST['submit']))
{
  $pay=$_POST["pay"];
  //echo "<script> alert('hai');</script>";
  if($pay=='opay')
  {
  header('location:offpay.php');
  }
  if($pay=='epay')
  {
  header('location:onpay.php');
  }

}



?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>my cart</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
  Theme Name: Delicious
  Theme URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  Author: BootstrapMade.com
  Author URL: https://bootstrapmade.com
  ======================================================= -->

</head>

<body>
	  <div class="container">
			<div class="row">
					<div class="col-xs-12 text-center" style="padding:60px;">
					</div>
  <!--banner-->




    <center>  <h5 class="logo-name">My CART</h5><center>
      <center>   <td><a href="listfood.php"><input type="button" class="btn btn-imfo btn-read-more" name="listfood" value="Add Another Item"</a></td>
     <td><a href="userhome.php"><input type="button" class="btn btn-imfo btn-read-more" name="index" value="GoTo HOME"></a></td></center>

        <center>
        <br><br>
        <table border='1' align='center'  height="70" width="800" >
          <tr>
            <td><B><i>ID</td>
           <td><B><i>FOOD NAME</td>
          <td><B><i>TOTAL</td>

            <td><B><i>REMOVE FROM CART</td>
          </tr>
        <?php
        include 'dbcon.php';

        $n=$_SESSION['login_id'];
        $result=mysqli_query($con,"select * from foodorder where `login_id`='$n' and `status`='1'");



        while($row=mysqli_fetch_array($result))
        {

      ?>
      <form name="form" action="#" method="POST" id="form">


<tr>
<td><?php echo $row['order_id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['total'];?></td>

<input type="hidden" name="id" value="<?php echo $row["order_id"]; ?>"/>
<td><input type="submit" name="remove" id="remove" value="remove" style="width: 80px; height: 40px; padding:0"></td>
</tr>


<?php
}
?>
</table>
<fieldset>
                    <legend>Payment Methods</legend>
                    <table>
                    <tr>
                    <td>PAYMENT</td>

                    <td><input type="radio" name="pay" id="epay" value="epay">Online Payment<br>
                    <input type="radio" name="pay" id="opay" value="opay" >Offline Payment</td>
                    </tr>
                    <tr>

                    <td>PROCCEED TO TRANSACTION:</td>
                    <td><input type="submit" class="btn btn-imfo btn-read-more" name="submit" id="submit" ></td></td>
                    </tr>
                  </table>
                  </fieldset>
</form>
