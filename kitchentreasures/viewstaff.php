<?php
include 'dbcon.php';
session_start();
if(isset($_POST['remove']))
{


	$mem_id=$_POST["id"];

  $sql2="update `staffregistration` set `status`=0 where `staff_id`=$mem_id";
  $result2=mysqli_query($con,$sql2);

echo"<script>alert('Removed Successfully');</script>)";

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
                  <a href="admin.php">Home</a>

                  <a href="logout.php">Logout</a>
                </div>
                <!-- Use any element to open the sidenav -->
                <span onclick="openNav()" class="pull-right menu-icon">☰</span>
            </div>
        </header>
        <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h2 class="logo-name">STAFF DETAILS</h2>
              <center>
              <br><br>
              <table border='2' align='center'  height="70" width="800" >
                <tr>
                  <td><B><i>ID</td>

                  <td><B><i>NAME</td>
                  <td><B><i>STAFF UNIT</td>
                <td><B><i>HOUSENAME</td>
                  <td><B><i>CITY</td>
                      <td><B><i>PHONE</td>
                  <td><B><i>PHOTO</td>
                  <td><B><i>REMOVE STAFF</td>
                </tr>
              <?php
              include 'dbcon.php';

              $result=mysqli_query($con,"select * from staffregistration where `status`=1");



              while($row=mysqli_fetch_array($result))
              {

            ?>
            <form name="form" action="#" method="POST" id="form">


<tr>
  <td><?php echo $row['staff_id'];?></td>
<td><?php echo $row['staff_firstname'];?></td>
<td><?php echo $row['staff_unit'];?></td>
<td><?php echo $row['staff_housename'];?></td>


<td><?php echo $row['staff_city'];?></td>

<td><?php echo $row['staff_phone'];?></td>

<td><img src="<?php echo $row['staff_image']?>" height="120px" width="140px"/></td>
<input type="hidden" name="id" value="<?php echo $row["staff_id"]; ?>"/>
<td><input type="submit" name="remove" id="remove" style="width: 80px; height: 40px; padding:0"></td>
</tr>
</form>

<?php
}
?>
</table>


</center>

	 </div>


        </div>

        </center>

          </div>
          </form>

        </div>



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
