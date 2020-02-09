<?php


$firstname = $_POST['firstname']; 
$lastname = $_POST['lastname']; 
$address = $_POST['address']; 
$birthdate = $_POST['birthdate']; 
$email = $_POST['email']; 
$identity = $_POST['identity']; 
$drivinglicense = $_POST['drivinglicense']; 
$addressproof = $_POST['addressproof']; 


try {
	$bdd = new PDO('mysql:host=localhost;dbname=reservation;charset=utf8', 'root', 'root');
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$req = $bdd->prepare('INSERT INTO reservation (firstname, lastname, birthdate, email,address, identity, drivinglicense, addressproof) 
VALUES(:firstname, :lastname, :birthdate, :email, :address, :identity, :drivinglicense, :addressproof)');
$req->execute(array(
	'firstname' => $firstname,
	'lastname' => $lastname,
	'birthdate' => $birthdate,
	'email' => $email,
	'address' => $address,
	'identity' => $identity,
    'drivinglicense' => $drivinglicense,
    'addressproof' => $addressproof
	));

} catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}
header("Location: passeport2.html");



   /* $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("SELECT * FROM reservation");
    $stmt->execute();*/

    // set the resulting array to associative
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
   


	//include('passeport2.phtml'); 

?>