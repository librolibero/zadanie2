<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body style="background-color: blue; color: white">
<?php

$servername = "localhost";
$username = "root";
$password = "vertrigo";
$dbname = "cw";

// Zdefiniowanie polaczenia
$conn = new mysqli($servername, $username, $password, $dbname);
// Utwrzeie polaczenia
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql= "CREATE TABLE tabela_kontakty (id int(6) NOT NULL auto_increment, nazwisko varchar(50) NOT NULL, imie varchar(15) NOT NULL, miasto varchar(20) NOT NULL, telefon varchar(20) NOT NULL, PRIMARY KEY (id))";

$result = $conn->query($sql);


if($conn->query($sql) === TRUE) {
    echo "Nie dodano do bazy";
}
else {
    echo "Dodano do bazy";
  
}
$conn->close();
?>

</body>
</html>
