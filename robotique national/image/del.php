<?php
$server= "localhost";
$username ="root";
$password="";
$dbname ="evenement";


$conn= mysqli_connect($server,$username,$password, $dbname );
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql="delete from `test` where id=$id";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        echo'<script type="text/javascript">alert("data deleted")</script>';
        header('location:afficher.php');
        
    }
    else{
        echo'<script type="text/javascript">alert("data not deleted")</script>';
    }
}

    

?>