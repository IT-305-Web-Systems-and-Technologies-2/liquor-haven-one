<?php
	$db =new mysql('localhost','root','','student')
	if( $db -> connect_error){
		die('connection failed:'. $db -> connect_error)
	}
	else {
		echo connceted
	}
?>