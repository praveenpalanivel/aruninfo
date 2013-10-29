<?php

$database_server = mysql_connect('sql3.freesqldatabase.com','sql321152','bX8%zZ8%') or die('Database server not connected');
$database = mysql_selectdb('sql321152',$database_server)  or die('Database not connected');
$usertype = array('0'=>'admin','1'=>'assocation','2'=>'members');