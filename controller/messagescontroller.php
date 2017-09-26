<?php
include_once("../model/db_connect.php");
session_start();
if (isset($_POST['messages'])) {
	send_message();
}
if (isset($_GET['deco'])) {
	session_destroy();
	header('Location: ../index.php');
}




function get_message() {
	$bdd = db_connect();
	$reponse = $bdd->query('SELECT pseudo, message_text FROM chat_messagesa ORDER BY message_id DESC LIMIT 0, 50');


	while ($donnees = $reponse->fetch())
	{
		$pseudo = $donnees['pseudo'];
		$texte = htmlspecialchars($donnees['message_text']);
		if ($pseudo != $_SESSION['pseudo']){
			echo '<p><strong>' . $pseudo . '</strong> : ' . $texte . '</p>';
		}
		else{
			echo '<p><strong> ME </strong> : ' . $texte . '</p>';
		}
	}

	$reponse->closeCursor();
}

function send_message(){
	if (isset($_POST['messages'])) {
		$bdd = db_connect();
		$req = $bdd->prepare('INSERT INTO chat_messagesa (pseudo, message_text, timestamp) VALUES(:pseudo, :message_text, :timestamp)');
		$req->execute(array(
		  'pseudo' => $_SESSION['pseudo'],
		  'message_text' => $_POST['messages'],
		  'timestamp' => time(),
		  ));
    	header('Location: ../view/chatmessageview.php');
	}
	else{
		echo "<p>Veuillez remplir le champ text pour envoyer votre message !</p>";
		echo "<br><a href='../view/chatmessageview.php'>RETOUR</a>";
	}
}
