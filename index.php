<?php
	require_once("dbconection.php");
	$con = new Database();
	$link = $con->getConexao();
?>

<form  method="post" action="<?php echo ;?>">
	<label for="Nome">Nota 1:</label>
	<input type="number" name="nota1" required><br>
	
	<label for="Telefone">Nota 2:</label>
	<input type="number" name="nota2" required><br>
	
	<label for="">Nota 3:</label>
	<input type="number" name="nota3" required><br>
	
	<label for="nota4">Nota 4:</label>
	<input type="number" name="nota4" required><br>
	
	<input type="submit" value="Calcular Média">
</form>
<?php
	

?>