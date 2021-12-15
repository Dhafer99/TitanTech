<?php 
session_start() ;
require "head.php" ; 
?>
<?php
     $connection = mysqli_connect("localhost","root","","forum");
     
if(isset($_POST['edit_btn']))
{
    $id=$_POST['edit_id'] ; 
    $query="SELECT * FROM questions where id='$id' " ; 
     $query_run=mysqli_query($connection,$query)  ;
    foreach($query_run as $row) 
    {
 


?>

<form action="editeee.php" method="POST">
<div class="form-group">
    <label> id </label>
    <input type="text" class="form-control" name="edit_id" value="<?php echo $row['id'] ?>">
</div>
<div class="form-group">
    <label >titre</label>
    <input type="text" class="form-control" name="edit_titre" value="<?php echo $row['titre']  ?>">
</div>
<div class="form-group">
    <label >description</label>
    <input type="text" class="form-control" name="edit_description" value="<?php echo $row['description'] ?> ">
</div>
<div class="form-group">
    <label >contenu</label>
    <input type="text" class="form-control" name="edit_contenu" value="<?php echo $row['contenu'] ?> " >
</div>
<div class="form-group">
    <label >id_auteur</label>
    <input type="text" class="form-control" name="edit_id_auteur" value="<?php echo $row['id_auteur'] ?>">
</div>
<div class="form-group">
    <label >pseudo_auteur</label>
    <input type="text" class="form-control" name="edit_pseudo_auteur" value="<?php echo $row['pseudo_auteur'] ?> " >
</div>

<button type="submit" class="btn btn-success" name="update">update</button>
<a href="tables.php" class="btn btn-danger"> CANCEL</a>
<br><br>
<?php
    }
}
?>
</form>