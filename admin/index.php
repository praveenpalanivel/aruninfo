<?php
session_start();
if(!(isset($_SESSION['id']) && isset($_SESSION['usertype'])))
{
    header('location:../index.php');
}
if(! $_SESSION['usertype'] == 0)
{
    header('location:../index.php');    
}
?>
<html>
  <head>
     <title>Admin Home</title>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <script type="text/javascript" src="../js/jquery.min.js"></script>
     <script type="text/javascript" src="../js/adminscript.js"></script>
     <script type="text/javascript" src="../js/jquery.colorbox-min.js"></script>
     <link rel="stylesheet" type="text/css" href="../css/admin.css">
     <link rel="stylesheet" type="text/css" href="../css/colorbox.css">
  </head>
  <body>
<div class="body-container">
 <div class="header">
     <span class="welcome">Welcome <?=$_SESSION['username']?></span>
     <span class="logout"><a href="logout.php">Logut </a></span>
  </div>
  <div class="menu-panel">
    <ul>
      <li>
        <a href="addassocation.php">Add Assocation</a>
      </li>
      <li>
        <a href="changepassword.php">Add Assocation</a>
      </li>
    </ul>
    
  </div>
  <div class="customer-list" align="center">
  <table border="1" align="center" class="association-information">
  <thead>
    <tr><th rowspan="2">Id</th><th rowspan="2">Association Name</th><th rowspan="2">Region</th><th colspan="2">Subcribtion period</th><th rowspan="2">Daily<br>SMS Count</th><th rowspan="2">Status</th></tr>
    <tr><th>From</th><th>To</th></tr>
  </thead>
  <tbody>
  <?php
      for($i=0;$i<10;$i++)
      {
      echo "<tr id='".$i."' class='association-information-rows'>";
      echo "<td>".$i."<td><td></td><td></td><td></td><td></td><td></td><td></td>";
      echo "</tr>";
      }
    ?>  
  </tbody>
  </table>
  </div>
</div>  
  </body>
</html>