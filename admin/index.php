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
     <link rel="stylesheet" type="text/css" href="../css/admin.css">
  </head>
  <body>
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
  <div>
  </div>
  </body>
</html>