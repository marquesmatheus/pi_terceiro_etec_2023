<html>
<head>
	<title>Adicionar Dados</title>
</head>

<body>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$name = mysqli_real_escape_string($mysqli, $_POST['nome']);
	$age = mysqli_real_escape_string($mysqli, $_POST['idade']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		
	// Check for empty fields
	if (empty($name) || empty($age) || empty($email)) {
		if (empty($name)) {
			echo "<font color='red'>Nome está vazio.</font><br/>";
		}
		
		if (empty($age)) {
			echo "<font color='red'>Idade está vazia.</font><br/>";
		}
		
		if (empty($email)) {
			echo "<font color='red'>E-mail está vazio.</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO users (nomes, idades, email) VALUES ('$name', '$age', '$email')");
		
		// Display success message
		echo "<p><font color='green'>Dados adicionados com sucesso!</p>";
		echo "<a href='index.php'>Veja Resultado</a>";
	}
}
?>
</body>
</html>
