<?php
	$mysql= new mysqli('localhost','root','usbw','db_mcsujos');

	if(!$mysql== true){
		echo $mysqli->error;
	}
?>