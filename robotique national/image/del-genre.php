<?php
$server= "localhost";
$username ="root";
$password="";
$dbname ="evenement";


$conn= mysqli_connect($server,$username,$password, $dbname );
if(isset($_GET['deleteid1'])){
    $id = $_GET['deleteid1'];
    $sql="delete from `genre` where id=$id";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        echo'<script type="text/javascript">alert("data deleted")</script>';
        header('location:afficher-genre.php');
        
    }
    else{
        echo'<script type="text/javascript">alert("data not deleted")</script>';
    }
}

    

?>