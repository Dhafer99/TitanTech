<?php
session_start() ; 




if(isset($_POST['update'])){
    
    
        $id= htmlspecialchars($_POST['edit_id']) ; 
    $titre=htmlspecialchars($_POST['edit_titre']) ; 
    $description=htmlspecialchars($_POST['edit_description']) ; 
    $contenu=htmlspecialchars($_POST['edit_contenu']) ; 
    $id_auteur=htmlspecialchars($_POST['edit_id_auteur']) ; 
    $pseudo_auteur=htmlspecialchars($_POST['edit_pseudo_auteur']) ; 
    $bdd = new PDO('mysql:host=localhost;dbname=forum;charset=utf8;', 'root', '');
    
        //Modifier les informations de la question qui possède l'id rentré en paramètre dans l'URL
        $query= $bdd->prepare('UPDATE questions SET titre=? description=? contenu=? id_auteur=? pseudo_auteur=? where id=? ');
        $query->execute(array($titre,$description, $contenu, $id_auteur,$pseudo_auteur,$id));

        //Redirection vers la page d'affichage des questions de l'utilisateur
        header('Location: tables.php');

    }



?>
