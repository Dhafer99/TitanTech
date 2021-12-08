

<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.5.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.5.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo5.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Event</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'"> 
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript> 
   <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="features4 cid-sOmWKBqf0n" id="features4-n">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Robotique</strong></h4>
            <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">EVENEMENT INTERNATIONAL</h5>
        </div>
        <div class="row mt-4">
            <div class="item features-image сol-12 col-md-6 col-lg-4 active">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/vex-815x630.png" alt="" title="" data-slide-to="0" data-bs-slide-to="0">
                    </div>
                    <div class="item-content">
                        
<?php

$conn = mysqli_connect("localhost","root","","evenement" );
$sql = "SELECT * FROM test ";

$result = $conn->query($sql);
if($result->num_rows >0){
while($row=$result->fetch_assoc()){
    // echo "<tr><td> " . $row["id"] . "</td><td> " . $row["nom"] . "</td><td> "   . $row["type"] . "</td><td> "  . $row["date"] . "</td><td> " . $row["lieu"]. "</td><td> " . $row["université"]. "</td><td> " . $row["récompense"]. "</td><td> " ."</td></tr>" ;

    ?>

                        <h5 class="item-title mbr-fonts-style display-5"><strong><?php echo $row['nom']; ?></strong></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">  <?php echo $row['lieu']; ?></h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Université :<?php echo $row['université']; ?>	<br>Recompense:<?php echo $row['récompense']; ?><br></p>
                    </div>
                    
}
 ?>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-black display-7" target="_blank">Start Now
                            &gt;</a></div>

                </div>

            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/drone-1180x842.jpg" alt="" title="" data-slide-to="1" data-bs-slide-to="1">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><strong>DRONES</strong></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">France&nbsp;</h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Université :EFREI Paris<br>Recompense:5000$<br> </p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-black display-7" target="_blank">Start Now
                            &gt;</a></div>
                </div>
            </div><div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/ball-215x169.jpg" alt="" title="" data-slide-to="2" data-bs-slide-to="2">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><strong>Bot Ball</strong></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">&nbsp;Londre</h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Université :HULT<br>Recompense : 2000$<br></p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-black display-7" target="_blank">Start Now
                            &gt;</a></div>
                </div>
            </div><div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/gwbs-815x509.jpg" alt="" title="" data-slide-to="3" data-bs-slide-to="3">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><strong>GWBS</strong></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">
                            Washington</h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Greater Washington Bowling Senate<br>Recompense: 9000$<br></p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-black display-7" target="_blank">Start Now
                            &gt;</a></div>
                </div>
            </div><div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/sumo-640x314.jpg" alt="" title="" data-slide-to="4" data-bs-slide-to="5">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><strong>Sumo</strong></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">France&nbsp;</h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Université :INSA Lyon<br>Recompense: 6000$<br> </p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-black display-7" target="_blank">Start Now
                            &gt;</a></div>
                </div>
            </div><div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/vex-815x630.png" alt="" title="" data-slide-to="5" data-bs-slide-to="5">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><strong>VEX</strong><strong><br></strong></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">Canada</h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Université :Faculté d’informatique de l’UBC<br>Recompense: 3000$<br> </p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-black display-7" target="_blank">Start Now
                            &gt;</a></div>
                </div>
            </div><div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/passe-815x406.jpg" alt="" title="" data-slide-to="6" data-bs-slide-to="6">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><strong>Passe Partout</strong><strong><br></strong></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">Canada</h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Université :Faculté de génie et d’informatique de l’Université de Victoria<br>Recompense: 5000$<br> </p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-black display-7" target="_blank">Start Now
                            &gt;</a></div>
                </div>
            </div><div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/vex-815x630.png" alt="" title="" data-slide-to="7" data-bs-slide-to="7">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><strong>VEX</strong></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">Canada</h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Université :École d’informatique David R. Cheriton<br>Recompense: 4000$ <br> </p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-black display-7" target="_blank">Start Now
                            &gt;</a></div>
                </div>
            </div><div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/drone-1180x842.jpg" alt="" title="" data-slide-to="8" data-bs-slide-to="8">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><strong>DRONES</strong></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">France&nbsp;</h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Université :ENSAE Paris<br>Recompense: 2000$<br>  </p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-black display-7" target="_blank">Start Now
                            &gt;</a></div>
                </div>
            </div><div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/sumo-640x314.jpg" alt="" title="" data-slide-to="9" data-bs-slide-to="9">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><strong>Sumo</strong></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">&nbsp;Londre</h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Université :HULT<br>Recompense: 5000$<br></p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-black display-7" target="_blank">Start Now
                            &gt;</a></div>
                </div>
            </div><div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/ball-215x169.jpg" alt="" title="" data-slide-to="10" data-bs-slide-to="10">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><strong>Bot Ball</strong></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">France&nbsp;</h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Université :	ISEP<br>Recompense: 3000$<br> </p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-black display-7" target="_blank">Start Now
                            &gt;</a></div>
                </div>
            </div><div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/passe-815x406.jpg" alt="" title="" data-slide-to="11" data-bs-slide-to="11">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><strong>Passe Partout</strong></h5>
                        <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">&nbsp;Londre</h6>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Université :HULT<br>Recompense: 5000$C<br></p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-black display-7" target="_blank">Start Now
                            &gt;</a></div>
                </div>
            </div>
            

        </div>
    </div>
</section><section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/i" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a><p style="flex: 0 0 auto; margin:0; padding-right:1rem;">Built with Mobirise - <a href="https://mobirise.site/k" style="color:#aaa;">Check it</a></p></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/theme/js/script.js"></script>  
  
  
</body>
</html>