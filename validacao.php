        <?php
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $db = "hotel";
        
        $conn = mysqli_connect($servidor, $usuario, $senha, $db);
        
        if(!$conn){
            die("falha ao conectar com o servidor " . mysqli_conect_error());
        }else{
            echo"conexão efetuada com sucesso! - PROCEDURAL";
        }
            
        echo "<h3>";
        
        $sql = "SELECT * FROM login";
        
        $result = mysqli_query($conn,$sql);
        
        while ($registro = mysqli_fetch_array($result)){
            echo $registro[0] . ':' . $registro[1];
            echo '<br />';
        }
        
        mysqli_free_result($result);
        mysqli_close($conn);
        ?>
