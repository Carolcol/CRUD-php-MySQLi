<?php 
if ( isset($_POST['delete'])) {
    $con = startSqlConection();
    $firstname  = $_POST['firstname'];

	$sql = "DELETE FROM users WHERE firstname='$firstname'";

	if ($con->query($sql) === TRUE){
		echo "<div class='alert alert-success'>Sucesso</div>";
	} else {
        echo "<div class='alert alert-danger'>Erro</div>";
    }

    $con->close();
}

