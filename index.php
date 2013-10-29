<?php
session_start();
if(isset($_POST))
{
 
  if(isset($_POST['username']) and isset($_POST['password']))
  {
    include_once('include/login.php');
    $login = new login();
    $user = $login->userLogin($_POST['username'],$_POST['password']);
    print_r($user);
    if(isset($user[2]))
    { 
      if($user[1]==1)
      {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['id'] = $user[2];
        $_SESSION['usertype'] = $user[0];
        header('location:'.$usertype[$user[0]]);
        
      }
      else
      {
        $error = 'Account Deactivated';
      }
      
    }
    else
    {
      $error = 'login failed';
    }  
    
  }
}
?>
<html>
  <head>
     <title>Arun Info</title>
  </head>
  <body>
     <form method="post">
       User Name<input type="text" name="username" required />
       Password <input type="Password" name="password" required />
       <input type="submit" value="Login" />
       <?='<br>'.$error ?>
     </form>
  </body>
</html>
