<?php
	include('conexao.php');
?>
<!DOCTYPE html>
<html>
    <title>MC Sujo's</title>

    <!-- Compiled and minified CSS -->
      <meta charset="utf-8">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta http-equiv="Content-Security-Policy" content="default-src * data: gap: https://ssl.gstatic.com; style-src * 'unsafe-inline'; script-src * 'unsafe-inline' 'unsafe-eval'">
      <script src="https://kit.fontawesome.com/bc58fc4108.js" crossorigin="anonymous"></script>
  <script src="jquery-3.4.1.min.js"></script>


<body>
	<div class="categoria">
		<form method="post">
	            <label for="categoria">Categoria:</label>
	         	<input type="text" class="form-control" placeholder="" id="categoria" name="categoria">
	        <button class="btn btn-dark " type="submit" id="submit">Salvar  <i class="far fa-save"></i></button>
		</form>
	</div>
</body>
</html>
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
			header("location:index.php");
		} else {
    		echo "Error: " . $userinsert . "<br>" . $mysqli->error;
		}
	}
?>
