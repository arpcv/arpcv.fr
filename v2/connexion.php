<?
	$hostname_arpcv = "localhost";
	$database_arpcv = "arpcv";
	$username_arpcv = "arpcv";
	$password_arpcv = "dchknohh";	
	$conn = mysql_pconnect($hostname_arpcv, $username_arpcv, $password_arpcv) or trigger_error(mysql_error(),E_USER_ERROR);
	mysql_select_db($database_arpcv);
?>