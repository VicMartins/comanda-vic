
<?php 
		$mysql= new mysqli('localhost','root','usbw','db_mcsujos');

	if(!$mysql== true){
		echo $mysqli->error;
	}
		if(isset($_POST['categoria'])) {
		$categoria= $_POST['categoria'];
		
		//mysql insert//
		$catinsert= "INSERT INTO tb_categoria VALUES (NULL,'$categoria')";
		if ($mysql->query($catinsert) === TRUE) {
		} else {
    		echo "Error: " . $userinsert . "<br>" . $mysqli->error;
		}
	}
?>