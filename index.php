<?php
	include dbcontecion.php;
	include header.php;

	require_once("dbconection.php");
	$con = new Database();
	$link = $con->getConexao();
?>
	<form  method="post" action="dbcontecion.php">
		<label for="Nome">Nota 1:</label>
		<input type="text" name="nome_Cliente" required><br>
	
		<label for="Telefone">Nota 2:</label>
		<input type="number" name="telefone_Cliente" required><br>
	
		<label for="Email">Nota 3:</label>
		<input type="email" name="email_Cliente" required><br>
	
		<label for="Compra">Nota 4:</label>
		<input type="text" name="compra_Cliente" required><br>
	
		<input type="submit" value="Enviar Dados">
	</form>
svkljbjkl grfklanafdbklnadfbnkl