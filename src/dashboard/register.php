<?php 
require_once "../DAO.php";

if(!empty($_POST)){

    $nom_prenom = htmlspecialchars($_POST["nom_prenom"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_ARGON2I);

    $stmt = $pdo->prepare("INSERT INTO utilisateur (nom_prenom, email, password) VALUES (:nom_prenom, :email, :password)");
    $stmt->bindParam(":nom_prenom", $nom_prenom);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();

    echo "Insertion réussi";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form method="post">  
        <div class="mb-3">
            <label for="nom_prenom">Nom Prénom</label>
            <input type="text" name="nom_prenom" id="nom_prenom" placeholder="Nom prénom" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>