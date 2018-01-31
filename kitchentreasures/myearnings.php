<?php
include 'dbcon.php';

session_start();
if(!isset($_SESSION['email']))
{
	header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>viewstaff</title>
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
    <!--banner-->
    <section id="viewst">
      <div class="bg-colorr">
        <header id="header">
            <div class="container">
                <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="staffhome.php">Staff Home</a>
									<a href="logout.php">Logout</a>


                </div>
                <!-- Use any element to open the sidenav -->
                <span onclick="openNav()" class="pull-right menu-icon">☰</span>
            </div>
        </header>
        <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h2 class="logo-name">View Your Report</h2>
  <!--banner-->
  <form action="#" method="POST" id="form" name="form" enctype="multipart/form-data">

    <div style="margin-left:320px;">
      <table>
        <td>Enter Date</td>
      <td>  <input type="date" name="mydate" id="mydate" class="input-medium" /></td>
        &nbsp;
      <td>  <input type="submit" class="btn-primary  " name="myday" value="Search" id='myday' /></td>
          <td>FOOD ID</td>

          <td><select id="fid"  name="fid" value="fid" required>
					<option value="-1">select</option>
					<?php
          $w=$_SESSION['login_id'];
          $fid=$_POST['fid'];
          if(isset($_POST['myday']))
           {
          $mydate=$_POST["mydate"];
          echo $mydate;
        }
					$q = mysqli_query($con, "SELECT `f_item_id` FROM `fooditems` where `fdate`='$mydate'");

            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['f_item_id'] . '>' . $row['f_item_id'] . ' </option>';

          }
            ?>



				</select></td>
        <td>  <input type="submit" class="btn-primary  " name="myear" value="find" id='myear' /></td>


        </tr>


</table>
</div>
<?php
if(isset($_POST['myear']))
{
  $w=$_SESSION['login_id'];
  $fid=$_POST['fid'];
  $z = mysqli_query($con, "SELECT * FROM `foodorder` where `f_item_id`='$fid'");

  while($row=mysqli_fetch_array($z))
  {


?>


<tr>
  <h3><b>SOLD <td><?php echo $row['req_quantity'];?></td>

<td><?php echo $row['name'];?></td>'s'
FOR RS.<td><?php echo $row['total'];?></td>
 ON <td><?php echo $row['date'];?></td></b></h3>

</tr>
</form>

<?php
}
}
?>


</form>
</div>
</section>
<!-- / banner -->
<!--about-->


<!-- / footer -->

<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/custom.js"></script>
<script src="contactform/contactform.js"></script>

</body>
</html>
