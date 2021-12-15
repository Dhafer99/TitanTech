<?php  include('inc/header.php'); ?>

<?php  include('inc/validation.php'); ?>

<?php

$id=$_GET['id'];

        if(isset($_POST['submit']))
        {
            
            $Pays=$_POST['Pays'];
            $Description=$_POST['Description'];
            $Type=$_POST['Type'];
            $Salary=$_POST['Salary'];
            $Experince=$_POST['Experince'];
            $Designation=$_POST['Designation'];
            $Skills=$_POST['Skills'];
            $Qualification=$_POST['Qualification'];

           
                        // $id = $_POST['id'];
                            $sql = "UPDATE `post` SET  Pays='$Pays' ,Description='$Description', Type='$Type' ,Salary='$Salary', Experince='$Experince' , Designation='$Designation', Skills='$Skills' , Qualification='$Qualification'
                            WHERE id='$id' ";


                        $result = mysqli_query($conn,$sql);

                        if($result)
                        {
                            $success = "Updated Successfully ";
                            
                            header("refresh:3;url=index.php");
                        }
                    
               
                
           
           
        }



?>




    <h1 class="text-center col-12 bg-info py-3 text-white my-2">Update Info About User</h1>
  
    <?php if($error): ?>
        <h5 class="alert alert-danger text-center"><?php echo $error; ?></h5>
        <a href="javascript:history.go(-1)" class="btn btn-primary"><< Go Back</a>
    <?php endif;  ?>

    <?php if($success): ?>
        <h5 class="alert alert-success text-center"><?php echo $success; ?></h5>
    <?php endif;  ?>

<?php  include('inc/footer.php'); ?>

 
  