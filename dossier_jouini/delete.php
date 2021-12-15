<?php
session_start() ; 
if(isset($_POST['delete_btn']))
{
 $id=$_POST['delete_id'] ; 
 
 $bdd = new PDO('mysql:host=localhost;dbname=forum;charset=utf8;', 'root', '');
 $deleteThisQuestion = $bdd->prepare('DELETE FROM questions WHERE id = ?');
            $deleteThisQuestion->execute(array($id));


  $_SESSION['success']="your data is well deleted" ; 
  header('Location: tables.php') ; 


}



?>