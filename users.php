<div class='container'>
<?php 

$con = startSqlConection();
$sql 	= "SELECT * FROM users";
$result = $con->query($sql);


if( $result->num_rows > 0)
{ 
	?>
	<table class="table table-bordered table-striped">
		<thead class="thead-dark">
			<tr>
				<td>ID</td>
				<td>Nome</td>
				<td>E-mail</td>
				<td>Cidade</td>
				<td>Estado</td>
			</tr>
		</thead>
		<tbody>
		<?php
	while ( $row = $result->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$row['user_id'] . "</td>";
		echo "<td>".$row['firstname'] . "</td>";
		echo "<td>".$row['email'] . "</td>";
		echo "<td>".$row['city'] . "</td>";
		echo "<td>".$row['state'] . "</td>";
		echo "</tr>";
		echo "</form>";
	}
	?>
	</tbody>
	</table>
<?php 
}
else
{
	echo "<br><br>Nenhum registro";
}
$con->close();
?>

</div>
