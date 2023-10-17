<?php
// Include the database connection file
require_once("conn.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM usuarios ORDER BY id DESC");
?>

<html>
<head>	
	<title>Home</title>
</head>

<body>
	<h2>Home</h2>
	<p>
		<a href="add.php">Adicionar Dado</a>
	</p>
	<table width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
			<td><strong>Nome</strong></td>
			<td><strong>Idade</strong></td>
			<td><strong>E-mail</strong></td>
			<td><strong>Action</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['age']."</td>";
			echo "<td>".$res['email']."</td>";	
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | 
			<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Tem certeza que quer apagar?')\">Delete</a></td>";
		}
		?>
	</table>
</body>
</html>
