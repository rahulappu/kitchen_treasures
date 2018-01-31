<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>staffhome</title>
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
  <div class="bg-color">
    <header id="header">
        <div class="container">
            <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="staffhome.php"> Home </a>

                <a href="logout.php">Logout</a>
            </div>
            <!-- Use any element to open the sidenav -->
            <span onclick="openNav()" class="pull-right menu-icon">☰</span>
        </div>
    </header>
  <div class="container">
    <div class="inner text-center">
      <h1 class="logo-name">KITCHEN TREASURES</h1>
      <h2></h2>
<form action="#" name="myform" method="POST" class="form-inline">
 <div class="span12" style="border-radius: 5px; border-style: solid; border-width: 1px; margin-left: 20px;" >
   <h1 style="margin-left: 10px; "> <b> View Transactions Search By Date</b></h1>
   Select By Date
   <input type="date" name="mydate" id="mydate" class="input-medium" />
   &nbsp;
   <td>Payment Method</td>

   <td><select name="type">

     <option value="online">online     </option>
     <option value="offline">offline        </option>


   </select></td>
   &nbsp;
   <input type="submit" class="btn-primary  " name="myday" value="Search" id='myday' />
   <br/> <br/>
   <table border="2" width="300" cellspacing="2" cellpadding="1" class="table table-striped" style=" border-radius: 5px; border-style: solid; border-width: 1px; ">
     <head>
     <tr>

       <th>Transaction ID</th>
       <th>Bank Name</th>
       <th>Card Type</th>
       <th>login ID</th>
       <th>Total Amount</th>
       <th>Date Of Transaction</th>
     </tr>
     </head>
     <tbody>
     <?php
     include 'dbcon.php';
     session_start();

     if(isset($_POST['submit']))
     {
     }
     if(isset($_POST['myday']))
      {
        $mydate=$_POST["mydate"];
        $type=$_POST["type"];
        $result=mysqli_query($con,"select * from transaction where `tdate`='$mydate' and `type`='$type'");



        while($row=mysqli_fetch_array($result))

        {

      ?>
      <form name="form" action="#" method="POST" id="form">


    <tr>
    <td><?php echo $row['t_id'];?></td>
    <td><?php echo $row['bankname'];?></td>
    <td><?php echo $row['cardtype'];?></td>
    <td><?php echo $row['login_id'];?></td>
    <td><?php echo $row['total'];?></td>
    <td><?php echo $row['tdate'];?></td>

    </tr>

    <?php
    }
  }
    ?>
    </table>

               <?php

               if(!isset($_SESSION["login_id"]))

               {

                 header('location:./');
               }

            echo   $id=$_SESSION['login_id'];





function fetch_data()
{

  include 'dbcon.php';
if(!isset($_SESSION["login_id"]))

{

  header('location:./');
}

$id=$_SESSION['login_id'];


 $rr1=mysqli_query($con,"select * from transaction where login_id='$id'");

  while($r1=mysqli_fetch_array($rr1))
  {

  $output .= '<tr>

                      <td>'.$r1["total"].'</td>
                      <td>'.$r1["tdate"].'</td>
                 </tr>
                      ';
  }
  return $output;
}
if(isset($_POST["create_pdf"]))
{
  require_once('../tcpdf/tcpdf_include.php');
  $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
  $obj_pdf->SetCreator(PDF_CREATOR);
  $obj_pdf->SetTitle("Statement");
  $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
  $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
  $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
  $obj_pdf->SetDefaultMonospacedFont('helvetica');
  $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
  $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
  $obj_pdf->setPrintHeader(false);
  $obj_pdf->setPrintFooter(false);
  $obj_pdf->SetAutoPageBreak(TRUE, 10);
  $obj_pdf->SetFont('helvetica', '', 12);
  $obj_pdf->AddPage();
  $content = '';
  $content .= '
  <h3 align="center">Statement</h3><br /><br />
  <table border="1" cellspacing="0" cellpadding="5">
       <tr>

            <th >AMOUNT</th>
    <th >DATE</th>
       </tr>
  ';
  $content .= fetch_data();
  $content .= '</table>';
  $obj_pdf->writeHTML($content);
ob_end_clean();
  $obj_pdf->Output('sample.pdf', 'I');
}
?>


<form method="post">
                      <input type="submit" name="create_pdf" class="btn btn-danger" value="Get statement" />
                 </form>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>

    </body>
    </html>
