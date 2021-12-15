<?php  include('inc/db.php'); ?>
<?php 

$sql = "SELECT * FROM `post` ORDER BY `Salary` DESC";
$result = mysqli_query($conn,$sql);

?>
                    





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Candidates listing page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.9.95/css/materialdesignicons.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-12">
            <div class="show-results mt-5">
                <div class="float-left">
                    <h5 class="text-dark mb-0 pt-2">FILTER :  
                    <button type="submit" class="btn btn-primary btn-sm float-end">Search</button>
                    </h5>
                </div>
                <div class="sort-button float-right">
                    <ul class="list-inline mb-0">
                    <a href="post.php" class="btn btn-outline btn-sm">Default</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="left-sidebar">
                <div class="accordion" id="accordionExample">
                    <div class="card mt-4">
                        <a data-toggle="collapse" href="#collapseOne" class="job-list" aria-expanded="true" aria-controls="collapseOne">
                            <div class="card-header" id="headingOne">
                                <h6 class="mb-0 mennu f-18">Job Type</h6>
                            </div>
                        </a>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                            <div class="card-body p-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input all-select" id="customCheckAll">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customCheckAll">All Type</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input all-select" id="customCheck22">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customCheck22">Freelancer</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input all-select" id="customCheck23">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customCheck23">Full Time</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input all-select" id="customCheck3">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customCheck3">Part Time</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input all-select" id="customCheck4">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customCheck4">Internship</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <a data-toggle="collapse" href="#collapsetwo" class="job-list" aria-expanded="true" aria-controls="collapsetwo">
                            <div class="card-header" id="headingtwo">
                                <h6 class="mb-0 mennu f-18">Designation</h6>
                            </div>
                        </a>
                        <div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo">
                            <div class="card-body p-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customCheck5">Project Manager</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customCheck6">Web Designer</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customCheck7">Banking</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck8">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customCheck8">Digital &amp; Creative</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck9">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customCheck9">IT Contractor</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck10">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customCheck10">Java Developer</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck11">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customCheck11">Civil Engineert</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck12">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customCheck12">SEO</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <a data-toggle="collapse" href="#collapsethree" class="job-list" aria-expanded="true" aria-controls="collapsethree">
                            <div class="card-header" id="headingthree">
                                <h6 class="mb-0 mennu f-18">Skills</h6>
                            </div>
                        </a>
                        <div id="collapsethree" class="collapse show" aria-labelledby="headingthree">
                            <div class="card-body p-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck13">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customCheck13">HTML</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck14">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customCheck14">CSS</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck15">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customCheck15">JavaScript</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck16">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customCheck16">PHP</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck17">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customCheck17">Wordpress</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck18">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customCheck18">Photoshop</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <a data-toggle="collapse" href="#collapsefour" class="job-list" aria-expanded="true" aria-controls="collapsefour">
                            <div class="card-header" id="headingfour">
                                <h6 class="mb-0 mennu f-18">Experince</h6>
                            </div>
                        </a>
                        <div id="collapsefour" class="collapse show" aria-labelledby="headingfour">
                            <div class="card-body p-0">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customRadio1">1Year to 2Year</label>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customRadio2">2Year to 3Year</label>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customRadio3">3Year to 4Year</label>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customRadio4">4Year to 5Year</label>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customRadio5">5Year +</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- collapse one end -->

                    <!-- collapse one end -->

                    <div class="card mt-4">
                        <a data-toggle="collapse" href="#collapsesix" class="job-list collapsed" aria-expanded="false" aria-controls="collapsesix">
                            <div class="card-header" id="headingsix">
                                <h6 class="mb-0 mennu f-18">Offerd Salary</h6>
                            </div>
                        </a>
                        <div id="collapsesix" class="collapse" aria-labelledby="headingsix">
                            <div class="card-body p-0">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio9" name="customRadio2" class="custom-control-input">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customRadio9">$10k - $200k</label>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio10" name="customRadio2" class="custom-control-input">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customRadio10">$210k - $30k</label>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio11" name="customRadio2" class="custom-control-input">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customRadio11">$310k - $400k</label>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio12" name="customRadio2" class="custom-control-input">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customRadio12">$410k - $500k</label>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio13" name="customRadio2" class="custom-control-input">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customRadio13">$510k - $600k</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- collapse one end -->

                    <div class="card mt-4">
                        <a data-toggle="collapse" href="#collapsesevan" class="job-list collapsed" aria-expanded="false" aria-controls="collapsesevan">
                            <div class="card-header" id="headingsevan">
                                <h6 class="mb-0 mennu f-18">Qualification</h6>
                            </div>
                        </a>
                        <div id="collapsesevan" class="collapse" aria-labelledby="headingsevan">
                            <div class="card-body p-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck19">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customCheck19">Higher Secondary</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck20">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customCheck20">Bachelor Degree</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck21">
                                    <label class="custom-control-label ml-1 text-muted f-15" for="customCheck21">Master Degree</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        
        <div class="col-lg-9">
     
            <div class="candidates-listing-item">
            <?php  if(mysqli_num_rows($result) > 0): ?>
                    <?php  while($row = mysqli_fetch_assoc($result)): ?> 
                 <div class="list-grid-item mt-4 p-2">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="candidates-img float-left mr-4">
                                <img src="2.jpg" alt="" class="img-fluid d-block rounded">
                            </div>
                            <div class="candidates-list-desc job-single-meta  pt-2">
                                <h5 class="mb-2 f-19"><a href="#" class="text-dark">Mary Mainor</a></h5>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item mr-4">
                                    

                                    <?php echo"  <p class='text-muted f-15 mb-0'><i class='mdi mdi-account mr-1'></i>". $row['Designation']."</p>";?>
                                        
                                
                                    </li>

                                    <li class="list-inline-item mr-4">
                                     
                                    <?php echo" <p class='f-15 mb-0'><a href='' class='text-muted'><i class='mdi mdi-map-marker mr-1'></i>". $row['Pays']."</a></p>";?>
                    
                                    </li>
                                    
                                     
                                    <li class="list-inline-item">
                                   
                                    <?php echo " <p class='text-muted f-15 mb-0'><i class='mdi mdi-currency-usd mr-1'></i>". $row['Salary']."</p>";?>
                                    
        
                                     
                                      </li>

                                </ul>

                    
                        
                                <?php  echo" <h class='text-muted mt-1 mb-0'>Skills: </h> <p class='text-muted mt-1 mb-0'>". $row['Skills']."</p>"; ?>
                                    
                                    
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="candidates-list-fav-btn text-right">
                                <div class="fav-icon">
                                    <i class="mdi mdi-heart f-20"></i>
                                </div>
                                <div class="candidates-listing-btn mt-4">
                                    <a href="profile.html" class="btn btn-outline btn-sm">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-11 offset-lg-1">
                            <div class="candidates-item-desc">
                                <hr>
                                
                                <?php  echo " <p class='text-muted mb-2 f-14'>". $row['Description']."</p>";?>
                                    
                            </div>
                        </div>
                    </div>
                </div> 
                <?php endwhile; ?>
                <?php endif; ?>             
                                    <!-- separation freelancer -->
                

                

                
            </div>
        </div>     
    </div>

    <div class="row">
        
        <div class="col-lg-12">
            <nav aria-label="Page navigation example">
                <ul class="pagination job-pagination justify-content-center mt-5 mb-5">
                    <li class="page-item disabled">
                        
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <a href="https://circumventive-ordna.000webhostapp.com" class="btn btn-outline btn-sm">Report</a>
                        
                    </li>
                </ul>
                
            </nav>
        </div>
    </div>
</div>

<style type="text/css">
body{
    margin-top:20px;
    background:#f4ffff;
}
.candidates-listing-bg {
  padding: 210px 0px 60px 0px;
  background-image: url("../images/candidates-listing-bg.jpg");
  background-size: cover;
  position: relative;
  background-position: center center;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label:before {
  background-color: #007bff;
  border-color: #007bff;
}

.custom-checkbox .custom-control-input:focus ~ .custom-control-label:before {
  -webkit-box-shadow: none;
          box-shadow: none;
}

.candidates-img img {
  max-width: 90px;
}

.fav-icon i {
  -webkit-text-stroke: 2px #007bff;
  -webkit-text-fill-color: transparent;
}

.fav-icon i:hover {
  -webkit-text-stroke: 0px #007bff;
  -webkit-text-fill-color: #007bff;
}

.candidates-list-desc {
  overflow: hidden;
}

.candidates-right-details {
  position: absolute;
  top: 0;
  right: 20px;
}

.candidates-item-desc {
  margin-left: 45px;
}

.list-grid-item {
  border: 1px solid #ececec;
  border-radius: 6px;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}

.list-grid-item:hover {
  -webkit-box-shadow: 0 0 20px 0px rgba(47, 47, 47, 0.09);
          box-shadow: 0 0 20px 0px rgba(47, 47, 47, 0.09);
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
  border-color: transparent;
}

.left-sidebar .card-body {
    border-bottom: 1px solid #ececec;
}

.custom-control {
    margin: 11px 20px;
}

.card-header {
    background-color:#007bff;
    margin-bottom: 0 !important;
}

.pagination.job-pagination .page-link {
  border-radius: 50% !important;
  margin: 0 4px;
  height: 46px;
  width: 45px;
  line-height: 29px;
  text-align: center;
  color: #777777;
}

.page-item.active .page-link {
  background-color: #007bff;
  border-color: #007bff;
  color: #ffffff !important;
}

.f-14 {
    font-size: 14px;
}

.btn-outline {
    color: #007bff;
    border-color: #007bff;
}
.btn-sm {
    padding: 8px 22px;
}
.mennu{color :white;}
</style>

<script type="text/javascript">
(function ($) {


    // Nice Select
    $('.nice-select').niceSelect();


})(jQuery) 
</script>
</body>

</html>                    