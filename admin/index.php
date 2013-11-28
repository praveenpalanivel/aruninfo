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
     <link rel="stylesheet" type="text/css" href="admin.css">
  </head>
  <body>
  <div>
     <h4>Welcome <?=$_SESSION['username']?></h4>
     <span class="logout">
       <a href="logout.php">Logut </a>
     </span>
  </div>
  <div>
    <a href="addassocation.php">Add Assocation</a>
  </div>
  </body>
</html>