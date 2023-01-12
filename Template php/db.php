<?php
// Connexion à la base de données
$host = "localhost";
$username = "root";
$password = "root";
$dbname = "partiel";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Vérification de la connexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Création de la base de données
$sql = "CREATE DATABASE $dbname";
if (mysqli_query($conn, $sql)) {
    echo "La base de données a été créée avec succès.";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// Sélection de la base de données
mysqli_select_db($conn, $dbname);

// Création de la table
$table = "CREATE TABLE information (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nom VARCHAR(30) NOT NULL,
prenom VARCHAR(30) NOT NULL,
age VARCHAR(50) NOT NULL
)";

if (mysqli_query($conn, $table)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
