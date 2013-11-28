<?php

$database_server = mysql_connect('223.30.82.222','root','') or die('Database server not connected');
$database = mysql_selectdb('devp',$database_server)  or die('Database not connected');
$usertype = array('0'=>'admin','1'=>'assocation','2'=>'members');