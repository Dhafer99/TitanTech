<?php  include('inc/header.php'); ?>
<?php 

    if(!isset($_GET['id']) or !is_numeric($_GET['id']))
    {
        header("Location:index.php");
    }
    
    $id = $_GET['id'];
    $sql = "SELECT * FROM `post`  WHERE `id`='$id' LIMIT 1 ";
    $result = mysqli_query($conn,$sql);
    $check = mysqli_num_rows($result);
    if(!$check)
    {
        header("Location:index.php");
    }
    $row = mysqli_fetch_assoc($result);

?>




















    <h1 class="text-center col-12 bg-primary py-3 text-white my-2">Edit Info About Project</h1>
    <div class="col-md-6 offset-md-3">
        <form class="my-2 p-3 border" method="POST" action="update.php?id=<?php echo $row['id']; ?>">

       


    
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
                <input type="text" value="<?php echo $row ['Pays']; ?>" id="Pays"name="Pays"  class="form-control">
              </div>
              <div class="form-group">
                <label for="Description">Description</label>
                <textarea id="Description" value="<?php echo $row['Description']; ?>"name="Description" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="Type">Job Type</label>
                <select id="Type"name="Type" value="<?php echo $row['Type']; ?>" class="form-control custom-select">
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
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="Salary">Offerd Salary</label>
                <input type="number" name="Salary"id="Salary" value="<?php echo $row['Salary']; ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="Experince">Experince</label>
                <select id="Experince" name="Experince"class="form-control custom-select">
                  <option value="false"  selected="">chose ...</option>
												<option value="1Year to 2Year">1Year to 2Year</option>
												<option value="2Year to 3Year">2Year to 3Year</option>
												<option value="3Year to 4Year">3Year to 4Year</option>
												<option value="5Year +">5Year +</option>
                </select>
              </div>
              <div class="form-group">
                <label for="Designation">Designation</label>
                <select id="Designation"name="Designation" class="form-control custom-select">
                  <option value="false"  selected="">Chose ...</option>
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
                <select id="Skills" name="Skills" class="form-control custom-select">
                  <option value="HTML" selected="">HTML</option>
												<option value="CSS">CSS</option>
												<option value="JavaScript">JavaScript</option>
												<option value="PHP">PHP</option>
												<option value="Wordpress">Wordpress</option>
                                                <option value="Photoshop">Photoshop</option>
                </select>
              </div>
              <div class="form-group">
                <label for="Qualification">Qualification</label>
                <select id="Qualification"name="Qualification" class="form-control custom-select">
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
          
          <button type="submit" class="btn btn-success float-right" name="submit">Edit </button>
        </div>
      </div>
    </section>


        </form>
    </div>
   
<?php  include('inc/footer.php'); ?>

 
  