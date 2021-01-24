<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Inscription Admin</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div align="center">
            <h2>Inscription Admin</h2>
            <form action="" method="POST">
                <input type="text" id="pseudoadmin" Placeholder="Pseudo" name="pseudoadmin">
                <br/>
                <input type="text" id="nomadmin" Placeholder="Nom" name="nomadmin">
				<br/>
				<input type="text" id="prenomadmin" Placeholder="Prénom" name="prenomadmin">
				<br/>
				<input type="email" id="mailadmin" Placeholder="E-mail" name="mailadmin">
				<br/>
				<input type="text" id="adresseadmin" Placeholder="Adresse" name="adresseadmin">
				<br/>
				<input type="text" id="teladmin" Placeholder="Téléphone" name="teladmin">
				<br/>
                <input type="password" id="mdpadmin" Placeholder="Mot de passe" name="mdpadmin">
                <br/>
                <br/>
                <button type="submit" name="forminscriptionadmin"> S'inscrire </button>
            </form>
        </div>
    </body>
</html>
<?php
$login = "root";
$dbname = "maxigames";
$password= "";
$dns="localhost";
$bdd = new PDO("mysql:host=$dns;dbname=$dbname", $login, $password); 

if(isset($_POST['forminscriptionadmin'])){
    if(!empty($_POST['pseudoadmin']) AND !empty($_POST['nomadmin']) AND !empty($_POST['prenomadmin']) AND !empty($_POST['mdpadmin']) AND !empty($_POST['mailadmin']) AND !empty($_POST['adresseadmin']) AND !empty($_POST['teladmin'])){
        $pseudo = htmlspecialchars($_POST['pseudoadmin']);
        $mdp = hash('sha256', $_POST['mdpadmin']);
        $nom = htmlspecialchars($_POST['nomadmin']);
        $prenom = htmlspecialchars($_POST['prenomadmin']);
        $mailo = htmlspecialchars($_POST['mailadmin']);
        $tel = htmlspecialchars($_POST['teladmin']);
        $adresse = htmlspecialchars($_POST['adresseadmin']);

        $sql = 'INSERT INTO client (IdClient, NomClient, PrenomClient, Email, Adresse, Telephone, Username, Mdp, Admin) VALUES (default, :nom, :prenom, :maila, :adresse, :tel, :login, :mdp, true)';
        $req = $bdd -> prepare($sql);
        $req -> bindParam(':nom', $nom);
        $req -> bindParam(':prenom', $prenom);
        $req -> bindParam(':adresse', $adresse);
        $req -> bindParam(':tel', $tel);
        $req -> bindParam(':login', $pseudo);
        $req -> bindParam(':mdp', $mdp);
        $req -> bindParam(':maila',$mailo);
        $req -> execute();
    }    
}
$fichier = 'install.php';
if( file_exists ( $fichier)){
    unlink( $fichier ) ;
}
?>