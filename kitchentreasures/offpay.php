<!DOCTYPE html>
<html lang="en">
  <head>

    <div class="container">
      <div class="inner text-center">
      <center>  <h1 class="logo-name">KITCHEN TREASURES</h1></center>
      <center>   <td><a href="listfood.php"><input type="button" class="btn btn-imfo btn-read-more" name="listfood" value="Add Another Item"</a></td>
     <td><a href="userhome.php"><input type="button" class="btn btn-imfo btn-read-more" name="index" value="GoTo HOME"></a></td>
     <td><a href="mycart.php"><input type="button" class="btn btn-imfo btn-read-more" name="index" value="View My Cart"></a></td></center>
        <h2></h2>
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
  $n=$_SESSION['login_id'];



  /*$sqll="SELECT `username` FROM `reg` WHERE username='$h'";
  $result=mysqli_query($con,$sqll) or die("Connection Failed!");
  $arr=mysqli_fetch_array($result);
  if($arr)
  {
    echo"<script>alert('Username already exist!!!');</script>)";
  }
  else{*/

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
  $w=$_SESSION['login_id'];

  $result5=mysqli_query($con,"select * FROM `user_details` where `login_id`='$w'");
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
