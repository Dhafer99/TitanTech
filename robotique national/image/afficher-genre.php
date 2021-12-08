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
<table border=5  >
<tr>
        <th>ID</th>
        <th>Genre </th>
       
</tr>   


<?php

$conn = mysqli_connect("localhost","root","","evenement" );
$sql = "SELECT * FROM genre ";

$result = $conn->query($sql);
if($result->num_rows >0){
while($row=$result->fetch_assoc()){
    // echo "<tr><td> " . $row["id"] . "</td><td> " . $row["nom"] . "</td><td> "   . $row["type"] . "</td><td> "  . $row["date"] . "</td><td> " . $row["lieu"]. "</td><td> " . $row["université"]. "</td><td> " . $row["récompense"]. "</td><td> " ."</td></tr>" ;

    ?>
 <tr>
 <td> <?php echo $row['id']; ?> </td>
<td> <?php echo $row['genre']; ?></td>

<td>
  <button class="button "><a href="update-genre.php?updateid=<?php echo $row['id']; ?>" class="button " > update</a></button>
  <button class="button1 "><a href="del-genre.php?deleteid1=<?php echo $row['id']; ?>" class="button1 "> delete</a></button>
 </td>
</tr>
<?php





}

}
else {
    echo "No Resuls" ;
}


// supprimer 


 //update

 
 





?>
</table> 

</body>

</html>