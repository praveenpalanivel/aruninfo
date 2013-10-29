<?

include_once('./config/config.php');
class login
{
  public function userLogin($username,$passkey)
  {
    $query = 'select usertype,status,id from user where username="'.$username.'" AND passkey="'.$passkey.'"';
    $result = mysql_query($query);
    if($row = mysql_fetch_array($result))
    {
      return array($row['usertype'],$row['status'],$row['id']);
    }
    else
    {
      return array();
    }
  }
}