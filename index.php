<form  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
	<label for="nota1">Nota 1:</label>
	<input type="number" name="nota1" required><br>
	
	<label for="nota2">Nota 2:</label>
	<input type="number" name="nota2" required><br>
	
	<label for="nota3">Nota 3:</label>
	<input type="number" name="nota3" required><br>
	
	<label for="nota4">Nota 4:</label>
	<input type="number" name="nota4" required><br>
	
	<input type="submit" value="Calcular Média">
</form>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "clientes";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // Define o modo de erro do PDO para exceção
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexão realizada com sucesso!";
} catch(PDOException $e) {
  echo "Conexão falhou: " . $e->getMessage();
}


?>