<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Utilisateurs</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <a href="ajouter.php" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>


        <?php

// Récupération de l'identifiant de l'utilisateur à récupérer
$partiel = $_GET['partielphp'];

// Préparation de la requête SQL de sélection
$query = "SELECT * FROM users WHERE
 id = $partielphp";

// Exécution de la requête
$result = mysqli_query($db, $query);

// Stockage des informations de l'utilisateur dans un tableau
$user = mysqli_fetch_assoc($result);

// Fermeture de la connexion à la base de données
mysqli_close($db);
?>

    </div>
</body>

</html>