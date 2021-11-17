 <?php
 
 var_dump($_GET);
 $txt=$_GET['editor1'];
 print $txt;

 $connection = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($connection,'portfoliopost');

    $query="UPDATE `portfolioedit` SET `portfolio6`='$txt' WHERE 1 " ;
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Data Updated")</script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data not Updated")</script>';
    }


   




 ?>