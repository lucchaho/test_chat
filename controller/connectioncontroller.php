<?php
include_once("../model/db_connect.php");
session_start();

if (isset($_POST["email"])){
	inscription();
}
else{
	connection();
}


function connection(){
	$bdd = db_connect();
	$user_mdp = crypt_mdp($_POST['password']);
	$user_pseudo = htmlspecialchars($_POST['pseudo']);
	$reponse_mdp = $bdd->query('SELECT account_pass FROM chat_accountsa WHERE account_login = ' . $bdd->quote($_POST['pseudo']));
	$mdp = $reponse_mdp->fetchColumn();

	//check password is the same
	if (isset($_POST['password']) && $user_mdp == $mdp) {
		$_SESSION['pseudo'] = $_POST['pseudo'];
		header('Location: ../view/chatmessageview.php');
	}
	else {
		echo ('Mot de passe incorrect !');
	}
}


function inscription() {
	$bdd = db_connect();
	
	// check if login exist
	$query = $bdd->prepare("SELECT * FROM chat_accountsa WHERE account_login = :login");
	$query->execute(array(
		'login' => htmlspecialchars($_POST['pseudo'])
		));
	$count=$query->rowCount();

	// Insert all in DB chat_accountsa
	if($count == 0){	
		$insert = $bdd->prepare('
			INSERT INTO chat_accountsa (account_login, account_pass, mail, prenom, nom)
			VALUES(:account_login, :account_pass, :mail, :prenom, :nom)
			');
		$insert->execute(array(
			'account_login' => htmlspecialchars($_POST['pseudo']),
			'account_pass' => crypt_mdp(htmlspecialchars($_POST['password'])),
			'mail' => htmlspecialchars($_POST['email']),
			'prenom' => htmlspecialchars($_POST['prenom']),
			'nom' => htmlspecialchars($_POST['nom']),
			));
		echo "Inscription terminée !";
		echo "<br><a href='../view/connectionview.php'>RETOUR</a>";
	}
	else {
		echo 'Ce pseudo existe déjà !';
		echo "<br><a href='../view/connectionview.php'>RETOUR</a>";
	}
}

function crypt_mdp ($mdp_crypt) {
	//Crypt password
	$mdp = $mdp_crypt;
	for ($i=0;$i<65535;$i++) { 
		$mdp = sha1($mdp);
		$mdp = md5($mdp);
	}
	return $mdp;
}