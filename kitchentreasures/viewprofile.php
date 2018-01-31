<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Staff Registration</title>
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
  <style>
  .container {
    position: relative;
    width: 60%;
  }

  .image {
    display: block;
    width: 50%;
    height: auto;
  }

  .overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: .5s ease;
    background-color: 	#C0C0C0;
  }

  .container:hover .overlay {
    opacity: 1;
  }

  .text {
    color: black;
    font-size: 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
  }
</style>
<center><h2>View Your Profile</h2>
<p>Hover Over the image to see the Profile.</p></center>
<body>

<?php
include 'dbcon.php';
session_start();
if(!isset($_SESSION['email']))
{
	header("location:login.php");
}

?>
<?php
$n=$_SESSION['login_id'];
$result4=mysqli_query($con,"select * FROM `staffregistration` WHERE `login_id`='$n'");
while($row=mysqli_fetch_array($result4))
{

  ?>
  <div style="background-color:red;">

  </div>
</table>
<div class="container">
  <center><img src="<?php echo $row['staff_image']?>" alt="Avatar" class="image"></center>

  <div class="overlay">
    <div class="text">
      <div class="desc" >
        <table>
          <tr>
            <td>NAME:</td>
            <td><?php echo $row['staff_firstname'];?></td>
          </tr>
          <tr>
            <td>UNIT:</td>
            <td><?php echo $row['staff_unit'];?></td>
          </tr>
          <tr>
            <td>PHONE:</td>
            <td><?php echo $row['staff_phone'];?></td>
          </tr>
          <tr>
            <td>HOUSE:</td>
            <td><?php echo $row['staff_housename'];?></td>
          </tr>
          <tr>
            <td>CITY:</td>
            <td><?php echo $row['staff_city'];?></td>
          </tr>
          <tr>
            <td>DISTRICT:</td>
            <td><?php echo $row['staff_district'];?></td>
          </tr>
          <center>   <td><a href="staffhome.php"><input type="button" class="btn btn-imfo btn-read-more" name="sh" value="Go To Staff Home"</a></td></center>

        </table>
    </div>
  </div>
</div>
<?php
}
?>
<br><br>

</body>
</html>
