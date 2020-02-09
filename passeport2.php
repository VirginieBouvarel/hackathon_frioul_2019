<?php


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=reservation;charset=utf8', 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    var_dump($_POST);
    
    //$rtm= $_POST['rtm']; 
    

    $stmt = $bdd->prepare( "INSERT INTO abonnement (type) VALUES (:type)" );
    $stmt->bindParam("type", $rtm);
    $stmt->execute();

    
    
} catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}

header("Location: paiment.html");
/*$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $bdd->prepare("SELECT * FROM reservation");
$stmt->execute();

var_dump($stmt);
// set the resulting array to associative
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


*/

?>