<?php
    class Database {
        private $driver;
        private $host;
        private $dbname;
        private $username;

        private $con;
// conectando com o banco e criando uma função
        function __construct() {
            $this-> driver = "mysql";
            $this-> host = "localhost";
            $this->dbname = "test";
            $this->username = "root";
        }
        function getConexao(){
            try{
                $this->con = new PDO(
                    "$this->driver: host=$this->host; dbname=$this->dbname",
                    $this-> username
                );

                $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                return $this->con;
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
    }
    $nome = $_POST["nome_Cliente"];
    $telefone = $_POST["telefone_Cliente"];
    $email = $_POST["email_Cliente"];
    $compra_caliente = $_POST["compra_Cliente"];
  
    $insert = "INSERT INTO clientes(nome_Cliente, telefone_Cliente, email_Cliente, compra_Cliente) 
      VALUES('$nome','$telefone','$email','$compra_cliente')";
      
      $insert_execucao = mysqli_query($conexao, $insert);

?>