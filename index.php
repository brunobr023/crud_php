<?php
	require_once("dbconection.php");
	$con = new Database();
	$link = $con->getConexao();
?>

<form  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
	<label for="Nome">Nota 1:</label>
	<input type="text" name="nome_Cliente" required><br>
	
	<label for="Telefone">Nota 2:</label>
	<input type="number" name="telefone_cliente" required><br>
	
	<label for="Email">Nota 3:</label>
	<input type="email" name="email_cliente" required><br>
	
	<label for="Compra">Nota 4:</label>
	<input type="text" name="compra_cliente" required><br>
	
	<input type="submit" value="Enviar Dados">
</form>
<?php
	

?>