<?php 

if (isset($_POST['addnew'])) {
    $con = startSqlConection();

    if ( empty($_POST['firstname']) || empty($_POST['email']) || empty($_POST['city']) || empty($_POST['state']) ) {
        echo "Please fillout all required fields"; 
    } else {		
        $firstname  = $_POST['firstname'];
        $email 	= $_POST['email'];
        $city 	= $_POST['city'];
        $state  	= $_POST['state'];

        $sql = "INSERT INTO users(firstname,email,city,state) 
        VALUES('$firstname', '$email', '$city', '$state');";
        
        if ( $con->query($sql) === TRUE) {
            echo "<div class='alert alert-success'>Sucesso</div>";
        } else {
            echo "<div class='alert alert-danger'>Erro</div>";
        }
    }

    $con->close();
}
