<?php

function check_login($con)
{

    if(isset($_SESSION['id_t']))
     {

       $id=$_SESSION['id_t'];
       $query="select * from users where id_t ='$id' limit 1";

       $result=mysqli_query($con,$query);
       if($result && mysqli_num_rows($result) > 0)
       {
          $user_data= mysqli_fetch_assoc($result);
          return $user_data;
       }
     }
    
     //redirect to login
     header("location:index.php");
     die;
}
function random_num($length)
{
  $text="";
  if($length<5)
  {
    $length=5;
  }
  $len=rand(4,$length);
  for ($i=0; $i <$len ; $i++) 
  { 
    $text .= rand(0,9);
  }
   return $text ;

}


  function editportfolio()
  {

    $connection = mysqli_connect("localhost","root","","portfoliopost");
    $query = "SELECT `portfolio6` FROM `portfolioedit` WHERE 1";
    $result=mysqli_query($connection,$query);
    retunr $result ;
  }


?>