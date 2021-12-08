<?php  
$server= "localhost";
$username ="root";
$password="";
$dbname ="evenement";


$conn= mysqli_connect($server,$username,$password, $dbname );
if(isset($_POST['submit'])){
if(!empty($_POST['Username'])&&!empty($_POST['Email']) ){
    $Username=$_POST['Username'];
    $Email=$_POST['Email'];
  


    $query =" insert into register  (Username,Email ) values('$Username', '$Email')";
    $run = mysqli_query($conn,$query) or die(mysqli_error($conn));
    if ($run){
        echo'<script type="text/javascript">alert("data add")</script>';
     
         header('location:afficher.php');

    }
    
}  
else{
    echo" all fields required" ;
}
}

//suprimer 


// if(isset($_POST['delete']))
// {
//     $id = $_POST['id'];
//     $query="DELETE FROM `test`  WHERE id='$id'  " ;
//     $query_run= mysqli_query($conn,$query);
//  if($query_run)
//  {
//     echo'<script type"text/javascript"> alert("date delete") </script>   ';

//  }
//  else{
//     echo'<script type"text/javascript"> alert("date  not delete") </script>   ';
//  }

// }

// // supprimer 
// if(isset($_POST['delete']))
// {
//     $id=$_POST['id'];
//     $query="DELETE FROM `test` WHERE id='$id'  ";
//     $query_run= mysqli_query($conn,$query);
//     if($query_run)
//     {
//         echo'<script type="text/javascript">alert("data deleted")</script>';
        
//     }
//     else{
//         echo'<script type="text/javascript">alert("data not deleted")</script>';
//     }
// }

//  //update

 
//  if(isset($_POST['update'])){
//   $id=$_POST['id'];
//   $query="UPDATE `test`SET nom='$_POST[nom]', type='$_POST[type]' ,  genre='$_POST[genre]'   where id='$_POST[id]'";
//   $query_run= mysqli_query($conn,$query);
//   if($query_run){
//       echo'<script type="text/javascript">alert("data updated")</script>';
//   }
//   else{
//       echo'<script type="text/javascript">alert("data not updated")</script>';
//   }
// }


?>






<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Sign up page!!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
  <a href="#" class="menu-toggle">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
  </a>
  
  <div class="quote-wrapper">
    <blockquote>
      <p>
         <b>  Are You Ready </b> <br>
        For The New Challenge
      </p>
      <!-- <p class="author">- L. Boyer</p> -->
    </blockquote>
  </div> <!-- end quote-wrapper -->

  <div class="form-wrapper">
    <h1 class="form-title">Register To Join The Event</h1>

    <form action="">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="w-100" autofocus value="titantech" title="Must be longer than 4 characters">
        <span class="check-icon"></span>
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" class="w-100" value="titantech@esprit.com">
        <span class="check-icon"></span>
      </div>
<!-- 
      <div class="form-group mb-1">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="w-100" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" value="WeloveChino2">
        <span class="check-icon"></span>
      </div> -->

      <!-- <div class="form-group text-left mb-2">
        <input type="checkbox" checked>
        <label for="" class="terms">
          I agree to the <a href="#">Terms &amp; Contitions</a>
        </label>
      </div> -->

      <!-- <div class="form-group mb-0">
        <input type="submit" value="register " class="w-100" id="submit">
      </div> -->
      <a href="#">
                <button  href="#" name="submit" type="submit" class="w-100"   id="submit"  >register </button>

                </a>


    </form>

    <!-- <small>Have an account? <a href="#">Click here</a></small> -->
  </div> <!-- end form-wrapper -->
</div> <!-- end wrapper -->
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
