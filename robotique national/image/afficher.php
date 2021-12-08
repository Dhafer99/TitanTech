<?php  
$server= "localhost";
$username ="root";
$password="";
$dbname ="evenement";


$conn= mysqli_connect($server,$username,$password, $dbname );
if(isset($_POST['show']))
{
    $nom=$_POST['nom'];
    $query="SELECT * FROM test where nom='$nom' ";
    $query_run= mysqli_query($conn,$query);
    while($row= mysqli_fetch_array($query_run))
    {
      echo "<tr><td> " . $row["nom"] . "</td><td> " . $row["type"] . "</td><td> " . $row["date"]  . "</td></tr>" ;
    }
    
    }
    else {
        echo "No Resuls" ;
    }
    
    $conn->close();      
    

?>

<html>
    <head>
<style  type="text/css" >

body{
    

}
table{


    /* border-collapse: collapse; */
    width: 100%;
    font-size: 25px;
  font-family: monospace;
  text-align: left;
  border: 5px;



}
th{
background-color: indianred;
color: white;


}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.button1 {
  background-color: 	#ff0000; /* Green */
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;



</style>

</head>


<body>
<div           >
  
<form  method="post" action="afficher.php"  class="es-form es-add-form" >
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label > nom </label>
                                       <input type="text" name="nom"     />
                                    </div>
                                    <div class="col-lg-4 offset-lg-4 col-md-12 text-center">
                                     <button href="afficher.php" class="btn btn-danger btn-block bg-gradient border-0 text-white" type="submit" name="show">Show </button>




</div>
<table border=5  >
<tr>
        <th>ID</th>
        <th>Nom </th>
        <th> Type</th>
        
        <th>Date</th>
        <th>Lieu</th>
        <th>université</th>
        <th>récompense</th>
        <th>images</th>
        <th>operation</th>


</tr>   


<?php

$conn = mysqli_connect("localhost","root","","evenement" );
$sql = "SELECT * FROM test ";

$result = $conn->query($sql);
if($result->num_rows >0){
while($row=$result->fetch_assoc()){
    // echo "<tr><td> " . $row["id"] . "</td><td> " . $row["nom"] . "</td><td> "   . $row["type"] . "</td><td> "  . $row["date"] . "</td><td> " . $row["lieu"]. "</td><td> " . $row["université"]. "</td><td> " . $row["récompense"]. "</td><td> " ."</td></tr>" ;

    ?>
    
 <tr>
 <td> <?php echo $row['id']; ?> </td>
<td> <?php echo $row['nom']; ?></td>
<td> <?php echo $row['type']; ?> </td>
<td> <?php echo $row['date']; ?> </td>
<td> <?php echo $row['lieu']; ?> </td>
<td> <?php echo $row['université']; ?> </td>
<td> <?php echo $row['récompense']; ?> </td>
<td> <img src="<?php echo $row['img'];?>"></td>

<td>
  <button class="button "><a href="update.php?updateid=<?php echo $row['id']; ?>" class="button " > update</a></button>
  <button class="button1 "><a href="del.php?deleteid=<?php echo $row['id']; ?>" class="button1 "> delete</a></button>
 </td>
</tr>



 
<?php





}

}
else {
    echo "No Resuls" ;
}

$conn->close();

// supprimer 
if(isset($_POST['delete']))
{
    $id=$_POST['id'];
    $query="DELETE FROM `test` WHERE id='$id'  ";
    $query_run= mysqli_query($conn,$query);
    if($query_run)
    {
        echo'<script type="text/javascript">alert("data deleted")</script>';
        
    }
    else{
        echo'<script type="text/javascript">alert("data not deleted")</script>';
    }
}

 //update

 
 if(isset($_POST['update'])){
  $id=$_POST['id'];
  $query="UPDATE `test`SET nom='$_POST[nom]', type='$_POST[type]' ,  genre='$_POST[genre]', date='$_POST[date]' , lieu='$_POST[lieu]' , université='$_POST[université]', récompense='$_POST[récompense]' where id='$_POST[id]'" ;
  $query_run= mysqli_query($conn,$query);
  if($query_run){
      echo'<script type="text/javascript">alert("data updated")</script>';
  }
  else{
      echo'<script type="text/javascript">alert("data not updated")</script>';
  }
}





?>
</table> 

</body>

</html>