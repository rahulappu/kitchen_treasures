<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>view descricption</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
<?php

session_start();
include './dbcon.php';
$k="";
$w="";
if(isset($_POST['remove']))
{
$w=$_SESSION['login_id'];
$e=$_POST['orderid'];
$a=$_POST['rq'];

$sql= "DELETE FROM `foodorder` WHERE `login_id`='$w' and `order_id`='$e'";
$result1=mysqli_query($con,$sql);
// $sql3="UPDATE `fooditems` SET `food_quantity`=`food_quantity`+'$a'";
// $result3=mysqli_query($con,$sql3);



echo"<script>alert('Removed From The Cart');</script>";

}
if(isset($_POST['procceed']))
{
  //echo "<script> alert('hai');</script>";
  $dt=$_POST["dt"];
  $n=$_SESSION['login_id'];



  /*$sqll="SELECT `username` FROM `reg` WHERE username='$h'";
  $result=mysqli_query($con,$sqll) or die("Connection Failed!");
  $arr=mysqli_fetch_array($result);
  if($arr)
  {
    echo"<script>alert('Username already exist!!!');</script>)";
  }
  else{*/
  $sql2="select * from `foodorder` where `login_id`=$n";
  $result2=mysqli_query($con,$sql2);
  while($row=mysqli_fetch_array($result2))
  {

    $l=$row["total"];
    $m=$row["f_item_id"];
  }
  $date=date('Y-m-d');
  $sql="INSERT INTO `transaction`(`bankname`, `cardtype`,`cardnumber`, `login_id`,`total`,`tdate`,`f_item_id`,`type`) VALUES ('null','null','null','$n','$l','$date','$m','offline')";
  $result1=mysqli_query($con,$sql);


echo"<script>alert('Thank You,Take Your Dish From Nearest Outlet');</script>";

}



?>

<style>
fieldset {
  background-color: #FFFACD;
  color: black;
}
legend {
  padding: 2px;
  border: 1px solid green;
}
</style>
<body>
  <?php
  $result5=mysqli_query($con,"select * FROM `user_details` where `login_id`='$k'");
  while($row=mysqli_fetch_array($result5))
  {

    ?>

      <fieldset>
        <legend>Personal Details:</legend>
        <table>
          <tr>
            <td>  Name </td>
            <td><input type="text" value="<?php echo $row['u_fname'];?>" readonly></td>
          </tr>
          <tr>
            <td>   House name </td>
            <td><input type="text" value="<?php echo $row['u_housename'];?>" readonly></td>
          </tr>
          <tr>
            <td>   City </td>
            <td><input type="text" value="<?php echo $row['u_city'];?>" readonly></td>
          </tr>
          <tr>
            <td>   District </td>
            <td><input type="text" value="<?php echo $row['u_district'];?>" readonly></td>
          </tr>
          <tr>
            <td>Phone </td>

            <td><input type="text" value="<?php echo $row['u_phone'];?>" readonly></td>
          </tr>
        </table>
      </fieldset>
      <?php
    }
    ?>
    <form name="myform" action="#" method="POST" id="form" enctype="multipart/form-data">

    <table>

<?php
$k=$_SESSION['login_id'];
$result4=mysqli_query($con,"select * FROM `foodorder` ");

while($row=mysqli_fetch_array($result4))

{
  ?>
  <tr>
    <td>  Order ID </td>
    <td><input type="text" name="orderid" value="<?php echo $row['order_id'];?>" readonly></td>

  </tr>
          <tr>
            <td>  Food Item </td>
            <td><input type="text" value="<?php echo $row['name'];?>" readonly></td>

          </tr>
          <tr>
            <td>   Quantiy </td>
            <td><input type="text" name="rq" id="rq" value="<?php echo $row['req_quantity'];?>" readonly></td>
          </tr>
          <tr>
            <td>Total Amount </td>
            <td><input type="text" value="<?php echo $row['total'];?>" readonly></td>
          </tr>
          <tr>
            <td>    <input id="remove" class="btn btn-imfo btn-read-more" type="submit" name="remove" value="Remove From Cart" ></td>
          </tr>

      <?php
    }
    ?>



  </table>

      <fieldset>
        <legend>Terms and Conditions:</legend>
        <p>Your request has been proccessed..You Can Collect the ordered item fron the below given address<br>
          Kudumbashree Kitchen Treasures Office<br>
          PathanamThitta<br>
          Kerala<br>
          Landmark-near to Private bus stand<br>
        </p>
        <input id="checkbox1" type="checkbox" name="confirm1" value="confirm1" onclick="check();">
        <input id="submit" type="submit" name="procceed" value="Procceed To Checkout" disabled="disabled" >
      </fieldset>
    </form>



  <script>
  function check(element) {
    var cb1 = document.getElementById("checkbox1");
    var cb2 = document.getElementById("checkbox2");
    var sub = document.getElementById("submit");
    if (cb1.checked == true)
    sub.disabled = false;
    else
    sub.disabled = true;
  }
  </script>
</body>
</html>
