<?php

$database_server = mysql_connect('198.58.84.196','ppraveen_aurum','aurum') or die('Database server not connected');
$database = mysql_selectdb('ppraveen_aurum',$database_server)  or die('Database not connected');
$usertype = array('0'=>'admin','1'=>'assocation','2'=>'members');