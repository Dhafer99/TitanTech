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



</style>

</head>


<body>
<table border=5  >
<tr>
        <th>ID</th>
        <th>Nom </th>
        <th> Type</th>
        <th> genre </th>
</tr>   


<?php

$conn = mysqli_connect("localhost","root","","evenement" );
$sql = "SELECT * FROM test ";

$result = $conn->query($sql);
if($result->num_rows >0){
while($row=$result->fetch_assoc()){
    echo "<tr><td> " . $row["id"] . "</td><td> " . $row["nom"] . "</td><td> " . $row["type"] . "</td><td> " . $row["genre"] . "</td></tr>" ;
}

}
else {
    echo "No Resuls" ;
}

$conn->close();

?>
</table> 

</body>

</html>