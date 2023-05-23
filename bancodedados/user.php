
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moveit";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha ao tentar se conectar ao banco de dados: " . $conn->connect_error);
}

?>
