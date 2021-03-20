<?php 
    if (isset($_POST['update'])) {
        $con = startSqlConection();

        if ( empty($_POST['firstname']) || empty($_POST['email']) || 
                empty($_POST['city']) || empty($_POST['state']) )
        {
                echo "Por favor, preencha todos os campos"; 
        } else{		
            $firstname  = $_POST['firstname'];
            $email 	= $_POST['email'];
            $city 	= $_POST['city'];
            $state  	= $_POST['state'];
            $sql = "UPDATE users SET firstname='{$firstname}', email = '{$email}',
                        city = '{$city}', state = '{$state}' 
                        WHERE firstname='$firstname'";
    
            if ( $con->query($sql) === TRUE) {
                echo "<div class='alert alert-success'>Sucesso</div>";
            } else {
                echo "<div class='alert alert-danger'>Erro</div>";
            }
        }

        $con->close();
    }

?>