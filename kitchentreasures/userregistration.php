<?php




function send($sms, $to) {

    $sms = urlencode($sms);
    $token = "16450f1d72300a5c5eec8a8e135c9d8c";
    $sendercode="KTFOOD";
    $url = "http://sms.safechaser.com/httpapi/httpapi?token=".$token."&sender=".$sendercode."&number=".$to.'&route=2&type=1&sms='.$sms;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 50);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 50);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $datares = curl_exec($ch);
    curl_close($ch);
    return $datares;
}
include 'dbcon.php';
session_start();


if(isset($_POST['submit']))
{
  $a=$_POST["fname"];
  //echo "<script> alert('hai');</script>";
  $b=$_POST["sname"];
  $c=$_POST["gender"];
  $m=$_POST["phone"];

  $d=$_POST["hname"];
  $e=$_POST["cname"];
  $f=$_POST["district"];
  $g=$_POST["uadhar"];
  $h="photo/".time()."".htmlspecialchars($_FILES['photo']['name']);
  move_uploaded_file($_FILES['photo']['tmp_name'], $h);



  $k=$_POST["email"];
  $l=$_POST["pass"];

  /*$sqll="SELECT `username` FROM `reg` WHERE username='$h'";
  $result=mysqli_query($con,$sqll) or die("Connection Failed!");
  $arr=mysqli_fetch_array($result);
  if($arr)
  {
  echo"<script>alert('Username already exist!!!');</script>)";
}
else{*/
function encryptIt($q){
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}

$encrypted = encryptIt($l);

$sql1="INSERT INTO `login`(`type_id`, `password`, `email`) VALUES ('3','$encrypted','$k')";
$logid="SELECT `login_id` FROM `login` WHERE `email`='$k'";
$result2=mysqli_query($con,$logid);
$q="";
while($row=mysqli_fetch_array($result2))
{

  $q=$row["login_id"];
}

$sql="INSERT INTO `user_details`(`login_id`,`u_fname`, `u_sname`, `u_gender`, `u_phone`, `u_housename`, `u_city`, `u_district`, `adhar`, `u_image`) VALUES ($q,'$a','$b','$c','$m','$d','$e','$f','$g','$h')";
$result1=mysqli_query($con,$sql1);

$result=mysqli_query($con,$sql);

echo"<script>alert('Data Entered Successfully');</script>)";
$mess="Hai , Your registration for KITCHEN TREASURES FOOD ORDERING(kudumbasree) has been Successfully completed.Your user name=$k and password=$l";
send($mess,$m);


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <script src="js/validate.js"></script>
  <script type="text/javascript">
   function fileCheck(obj) {
           var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
           if ($.inArray($(obj).val().split('.').pop().toLowerCase(), fileExtension) == -1){
               alert("Only '.jpeg','.jpg', '.png', '.gif', '.bmp' formats are allowed.");
    }
   }
   </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Registration</title>
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

  <section id="userreg">
    <div class="bg-color" class="section-padding">
      <header id="header">
        <div class="container">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#about">About</a>
            <a href="#event">Event</a>
            <a href="#menu-list">Menu</a>
            <a href="#contact">Feedback </a>
          </div>
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()" class="pull-right menu-icon">☰</span>
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center" style="padding:60px;">
            <h1 class="header-h">KITCHEN TREASURES</h1>
            <p class="header-p">Enjoy the taste of homely prepared food items</p>
          </div>
          <div class="col-md-12" style="padding-bottom:60px;">
            <div class="item active left">
              <div class="col-md-6 col-sm-6 left-images">
                <img src="img/samosa.jpg" class="img-responsive">
              </div>
              <div class="col-md-6 col-sm-6 details-text">
                <div class="content-holder">
                  <h2 style="color:red;">ARE YOU NEW,REGITER HERE!!!</h2>
                  <p>AFTER REGISTRATION YOU WILL GET A PASSWORD TO LOGIN</p>
                  <form name="myform" id="myform"  action="#" method="POST"  enctype="multipart/form-data">


                    <table allign="center">
                      <tr>
                        <td>FIRST NAME</td>
                        <td><input type="text" name="fname" id="fname" onchange="f()"  required></td>
                      </div>
                    </tr>
                    <tr>
                      <td>SECOND NAME</td>
                      <td><input type="text" name="sname" id="sname" onchange="s()"  required></td>
                    </tr>
                    <tr>
                      <td>GENDER</td>
                      <td><input type="radio" name="gender" id="male" value="male">male
                        <input type="radio" name="gender" id="female" value="female" >female</td>
                      </tr>
                      <tr>
                        <td>E-MAIL ID</td>
                        <td><input type="email" name="email" id="email"  required></td>
                      </tr>
                      <tr>
                        <td>PHONE NUMBER</td>
                        <td><input type="phone" name="phone" id="phone" onchange="p()"  required></td>
                      </tr>
                      <tr>
                        <td>HOUSE NAME</td>
                        <td><input type="text" name="hname" id="hname" onchange="h()"  required></td>
                      </tr>
                      <tr>
                        <td>CITY NAME</td>
                        <td><input type="text" name="cname" id="cname" onchange="c()" required></td>
                      </tr>
                      <tr>
                        <td>DISTRICT</td>
                        <td><input type="text" name="district" id="district" onchange="d()"  required></td>
                      </tr>
                      <tr>
                        <td>PASSWORD</td>
                        <td><input type="password" name="pass" id="pass"onchange="a()"  required></td>
                      </tr>
                      <tr>
                        <td>ADHAR NO</td>
                        <td><input type="text" name="uadhar" id="uadhar" onchange="u()"  required></td>
                      </tr>
                      <tr>
                        <td>USER IMAGE</td>
                        <td><input type="file" name="photo" id="photo" onchange="fileCheck(this)" required></td>
                      </tr>



                    </table>

                    <div class="validation"></div>



                    <button class="btn btn-imfo btn-read-more" value="submit" name="submit">Add Details</button>
                    <a class="btn btn-imfo btn-read-more" href="login.php">Login </a>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ event -->
  <!-- menu -->

  <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <h4 class="widget-title">Kitchen Treasures</h4>
            <address>Pathanamthitta<br>Kerala, kL 110013</address>
            <div class="social-list">
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
            <p class="copyright clear-float">
              © Kudumbasree org kerala government
              <div class="credits">
                <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Delicious
              -->
              Designed by <a href="https://bootstrapmade.com/">Rahul</a>
            </div>
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- / footer -->

<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/custom.js"></script>
<script src="contactform/contactform.js"></script>


<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ml', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



</body>
</html>
