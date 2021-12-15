<?php  include('inc/header.php'); ?>
<?php  include('inc/validation.php'); ?>

<?php


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

           

            if(requiredInput($Pays) &&  requiredInput($Description) )
            {
                if(minInput($Pays,3))
                {
                        
                        $sql = "INSERT INTO `post` ( `Pays`, `Description`, `Type`, `Salary`, `Experince`, `Designation`, `Skills`, `Qualification`)
                        VALUES ('$Pays', '$Description','$Type','$Salary','$Experince','$Designation','$Skills','$Qualification')  ";
                        
                        $result = mysqli_query($conn,$sql);

                        if($result)
                        {
                            $success = "Added Successfully ";
                        }
                    
                }
                else 
                {
                    $error = "Pays Must Be Grater Than 3 Chars";
                }
            }
            else 
            {
                $error =  "Please Fill All  Fields !";
            }
        }



?>


    <h1 class="text-center col-12 bg-info py-3 text-white my-2">Add New Project</h1>
    <?php if($error): ?>
        <h5 class="alert alert-danger text-center"><?php echo $error; ?></h5>
    <?php endif;  ?>

    <?php if($success): ?>
        <h5 class="alert alert-success text-center"><?php echo $success; ?></h5>
    <?php endif;  ?>


    <div class="col-md-6 offset-md-3">
        <form class="my-2 p-3 border" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="Pays">Pays</label>
                <input type="text" id="Pays" name="Pays" class="form-control">
              </div>
              <div class="form-group">
                <label for="Description">Description</label>
                <textarea id="Description"name="Description" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="Type">Job Type</label>
                <select id="Type" name="Type" class="form-control custom-select">
                  <option value="false" selected="">All Type</option>
												<option value="Freelancer">Freelancer</option>
												<option value="Full Time">Full Time</option>
												<option value="Part">Part</option>
												<option value="Intership">Intership</option>
                </select>
              </div>
              
              
   
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Others</h3>

              <div class="card-tools">
              </div>
            </div>
            <div class="card-body">
              
              <div class="form-group">
                <label for="Salary">Offerd Salary</label>
                <input type="number" id="Salary" name="Salary" class="form-control">
              </div>
              <div class="form-group">
                <label for="Experince">Experince</label>
                <select id="Experince" name="Experince" class="form-control custom-select">
                  <option value="false" selected="">chose ...</option>
												<option value="1Year to 2Year">1Year to 2Year</option>
												<option value="2Year to 3Year">2Year to 3Year</option>
												<option value="3Year to 4Year">3Year to 4Year</option>
												<option value="5Year +">5Year +</option>
                </select>
              </div>
              <div class="form-group">
                <label for="Designation">Designation</label>
                <select id="Designation"name="Designation" class="form-control custom-select">
                  <option value="false" selected="">Chose ...</option>
												<option value="Project Manage">Project Manager</option>
												<option value="Web Designe">Web Designer</option>
												<option value="Banking">Banking</option>
												<option value="Digital & Creative">Digital & Creative</option>
                        <option value="IT Contractor">IT Contractor</option>
                        <option value="Java Developer">Java Developer</option>
                        <option value="Civil Engineert">Civil Engineert</option>
                        <option value="SEO">SEO</option>
                </select>
              </div>
              <div class="form-group">
                <label for="Skills">Skills</label>
                <select id="Skills"name="Skills" class="form-control custom-select">
                  <option value="false" selected="">HTML</option>
												<option value="CSS">CSS</option>
												<option value="JavaScript">JavaScript</option>
												<option value="PHP">PHP</option>
												<option value="Wordpress">Wordpress</option>
                                                <option value="Photoshop">Photoshop</option>
                </select>
              </div>
              <div class="form-group">
                <label for="Qualification">Qualification</label>
                <select id="Qualification" name="Qualification" class="form-control custom-select">
                  <option value="false" selected="">Chose ...</option>
												<option value="Higher Secondary">Higher Secondary</option>
												<option value="Bachelor Degree">Bachelor Degree</option>
												<option value="Master Degree">Master Degree</option>												
                </select>
              </div>
             
            </div>
            
          </div>
          
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <input type="reset" value="Cancel" class="btn btn-secondary">
          
          <button type="submit" class="btn btn-success float-right" name="submit">ADD Project</button>
        </div>
      </div>
    </section>
         
    
        </form>
    </div>
   
<?php  include('inc/footer.php'); ?>

 
  