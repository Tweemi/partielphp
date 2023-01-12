<?php
  //connexion a la base de données
 $db = mysqli_connect("localhost", "username", "password", "database_name");

 // Récupération de tous les utilisateurs
 $query = "SELECT * FROM users";
 $result = mysqli_query($db, $query);

 // Boucle pour afficher tous les utilisateurs
 while ($user = mysqli_fetch_assoc($result)) {
   echo "<tr>";
   echo "<td>" . $user['id'] . "</td>";
   echo "<td>" . $user['prenom'] . "</td>";
   echo "<td>" . $user['nom'] . "</td>";
   echo "<td>" . $user['age'] . "</td>";
   echo "<td>";
   echo "<a href='edit_form.php?user_id=" . $user['id'] . "'>Modifier</a>";
   echo " ";
   echo "<a href='delete_user.php?user_id=" . $user['id'] . "'>Supprimer</a>";
   echo "</td>";
   echo "</tr>";
 }
 ?>
</table>

<?php
// Connexion à la base de données
$db = mysqli_connect("localhost", "root", "root", "partielphp");

// Récupération de l'identifiant de l'utilisateur à supprimer
$user_id = $_GET['user_id'];

// Préparation de la requête SQL de suppression
$query = "DELETE FROM users WHERE id = $user_id";

// Exécution de la requête
mysqli_query($db, $query);

// Fermeture de la connexion à la base de données
mysqli_close($db);

// Redirection vers la page index.php
header("Location: index.php");
?>