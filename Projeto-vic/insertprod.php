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


<body>
	<div class="container">
	<div class="categoria">
		<form method="post" enctype="multipart/form-data">
				<label for="produto">Produto</label>
				<input type="text" class="form-control" name="produto" id="produto" placeholder="Insira o nome do produtos">
	            <label for="valor">Valor</label>
	            <input type="text" class="form-control" name="valor" id="valorprod" placeholder="R$">	

				<div class="input-field col s12" id="select">	   	
    				<select class="browser-default" id="batatinhas" name="categoria">
      					<option value="" disabled selected>Selecione a categoria</option>
      					<?php
							$categoryselect = $mysql->query('SELECT * FROM tb_categoria');
							while($cat = mysqli_fetch_array($categoryselect))
							{
						?>
						<option value="<?php echo $cat['cd_categoria'];?>"><?php echo $cat['nm_categoria'];?></option>
						<?php
							};
						?>
					    </select>
  				</div>
	        <button class="btn btn-dark " type="submit" id="submit">Salvar  <i class="far fa-save"></i></button>
	   	</form>	
	</div>
	</div>
</body>
</html>
<?php 
		$mysql= new mysqli('localhost','root','usbw','db_mcsujos');

	if(!$mysql== true){
		echo $mysqli->error;
	}
		if(isset($_POST['produto'])) {
		$produto= $_POST['produto'];
		$valor= $_POST['valor'];
		$categoria= $_POST['categoria'];
		
		//mysql insert//
		$catinsert= "INSERT INTO tb_produto  VALUES (NULL, '".$produto."', '".$valor."', '".$categoria."')";
		if ($mysql->query($catinsert)) {
			header("location:index.html");
		} else {
    		echo "Error: " . $catinsert . "<br>" .$mysqli->error;
		}
	}
?>
<style type="text/css">
	#select{
		width: 30%;
		height: 25px;
	}
</style>
<script type="text/javascript">
	$(document).ready(function() {
    $('select').material_select();
});
</script>
