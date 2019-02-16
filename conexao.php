        <?php
		
		function conectar(){
			$servidor = "localhost";
			$usuario = "root";
			$senha = "";
			$db = "hotel";
			
			$conn = mysqli_connect($servidor, $usuario, $senha, $db);
			
			if ($conn->connect_error) {
			die("Falha ao 
			conectar com o servidor: " . $conn->connect_error);
			}
			return $conn;
		}
		
		function desconectar($link){
			mysqli_close($link);
			
		}
?>