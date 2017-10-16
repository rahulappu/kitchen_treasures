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
     </thead>
     <tbody>
     <?php
     include 'dbcon.php';
     session_start();
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
    </form>

    <?php
    }
  }
    ?>
    </table>

</body
</html>
