<?php
  //connexion a la base de données

  //récupération de l'id dans le lien

  //requête de suppression

  //redirection vers la page index.php
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
  
  // Récupération de l'ID de l'utilisateur à supprimer
  $id = $_GET["id"];
  
  // Préparation de la requête de suppression
  $query = "DELETE FROM users WHERE id = $id";
  
  // Exécution de la requête
  if (mysqli_query($conn, $query)) {
      echo "Utilisateur supprimé avec succès.";
  } else {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }
  
  // Fermeture de la connexion
  mysqli_close($conn);
  
  // Redirection vers la page index.php
  header("Location: index.php");
  exit;
  ?>
  