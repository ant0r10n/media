<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_mini = "192.168.1.100:8889";
$database_mini = "mymedia";
$username_mini = "jotform";
$password_mini = "xp98jk";
$mini = mysql_pconnect($hostname_mini, $username_mini, $password_mini) or trigger_error(mysql_error(),E_USER_ERROR); 
?>