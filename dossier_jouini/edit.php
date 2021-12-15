<?php
session_start() ; 




$connection = mysqli_connect("localhost","root","","forum");
if(isset($_POST['update']))
{
    $id=$_POST['edit_id'] ; 
    $titre=$_POST['edit_titre'] ; 
    $description=$_POST['edit_description'] ; 
    $contenu=$_POST['edit_contenu'] ; 
    $id_auteur=$_POST['edit_id_auteur'] ; 
    $pseudo_auteur=$_POST['edit_pseudo_auteur'] ; 
    $query="UPDATE questions SET id='$id' titre='$titre' description='$description' contenu='$contenu' id_auteur='$id_auteur' pseudo_auteur='pseudo_auteur' where id='$id'     " ; 
    $query_run=mysqli_query($connection,$query) ; 
    if($query_run)
    {
     echo"your data is updated" ; 
     header("Location : tables.php") ; 
    }
    else 
    {
        echo"your data is not updated" ; 
        header("Location : tables.php") ; 
    }

}


?>