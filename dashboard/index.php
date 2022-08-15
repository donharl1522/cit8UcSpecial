<?php
   // We need to use sessions, so you should always start sessions using the below code.
   session_start();
   // If the user is not logged in redirect to the login page...
   if (!isset($_SESSION['loggedin'])) {
   	header('Location: ../index.php');
   	exit;
   	//blah blah blah
   }
   ?>
<?php include '../template/header.php'; ?>
<?php include '../template/sidebar.php'; ?>
<!--Main layout-->
<main style="margin-top: 58px;">
   <div class="container pt-4">
      <div class="container">
         <h1 class="display-1">Dashboard</h1>
         <!--<iframe class="mb-3" title="TemporaryMultiLinear" style="width:100%;height:612px" src="https://app.powerbi.com/view?r=eyJrIjoiNTZjZGZhMzAtNzhlNS00NmJhLWJkYWYtNGU4NmQxM2I3ZTUwIiwidCI6ImE1MTVlN2M0LThjZjctNGY5Ny1iMjNiLTk2NDkxNjQ1ZjdmMCIsImMiOjEwfQ%3D%3D&pageName=ReportSection258e4a3870979cc2ae80" frameborder="0" allowFullScreen="true"></iframe>-->
         <iframe class="mb-3" title="Dashboard1Sample - Page 1" style="width:100%;height:612px" src="https://app.powerbi.com/view?r=eyJrIjoiZGE0NDkwNzQtMzNiZS00YTA1LTk2NzMtYzE0MzRhOGEyODlmIiwidCI6ImE1MTVlN2M0LThjZjctNGY5Ny1iMjNiLTk2NDkxNjQ1ZjdmMCIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>
         <div class="separator my-5">
            <h3>Latest Updates</h3>
         </div>
         <!--Latest Updates-->
         <div class="row">
            <div class="col-sm-6 mb-3">
               <div class="card">
                  <div class="card-header background-color-primary"></div>
                  <div class="card-body">
                     <h5 class="card-title">Content</h5>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 mb-3">
               <div class="card">
                  <div class="card-header background-color-secondary"></div>
                  <div class="card-body">
                     <h5 class="card-title">Content</h5>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 mb-3">
               <div class="card">
                  <div class="card-header background-color-accent"></div>
                  <div class="card-body">
                     <h5 class="card-title">Content</h5>
                  </div>
               </div>
            </div>
         </div>
         <!--Main Content-->
         <div class="col-md-8 mb-2">
            <!--<div class="row">
               <div class="col-md-6 mb-3">
                   <div class="card background-color-accent">
               <div class="card-body">
               <div class="row">
               <div class="col-sm-6">
                                   <img class="img-fluid" src="../images/icons/plant.png">
               </div>
               <div class="col-sm-5 float-right my-auto text-white">
                                   <h4 class="card-title">Crop data</h4>
               <a class="btn btn-light btn-rounded btn-lg" href="management/crop/">Proceed</a>
               </div>
               </div>
               </div>
               </div>
               </div>
               
               <div class="col-md-6 mb-3">
                   <div class="card background-color-accent">
               <div class="card-body">
               <div class="row">
               <div class="col-sm-6">
                                   <img class="img-fluid" src="../images/icons/farmer.png">
               </div>
               <div class="col-sm-5 float-right my-auto text-white">
                                   <h4 class="card-title">Farmer's data</h4>
               <a class="btn btn-light btn-rounded btn-lg" href="management/farmer/">Proceed</a>
               </div>
               </div>
               </div>
               </div>
               </div>
               
               <div class="col-md-6 mb-3">
                   <div class="card background-color-accent">
               <div class="card-body">
               <div class="row">
               <div class="col-sm-6">
                                   <img class="img-fluid" src="../images/icons/statistics.png">
               </div>
               <div class="col-sm-5 float-right my-auto text-white">
                                   <h5 class="card-title">Crop Production</h4>
               <a class="btn btn-light btn-rounded btn-lg" href="management/crop-production/">Proceed</a>
               </div>
               </div>
               </div>
               </div>
               </div>
               </div>-->
            <!--Historical Data-->
            <!--<div class="card">
               <div class="card-body w-100">
               <iframe title="Dashboard1Sample" style="width:100%;height:900px;" src="https://app.powerbi.com/view?r=eyJrIjoiZDJmOTlmNzUtMzM1NS00YzkzLThiZmMtMTFhYTNmNWNiNjQxIiwidCI6ImE1MTVlN2M0LThjZjctNGY5Ny1iMjNiLTk2NDkxNjQ1ZjdmMCIsImMiOjEwfQ%3D%3D&pageName=ReportSection" frameborder="0" allowFullScreen="true"></iframe>
               </div>
               </div>-->
         </div>
         <!--Side bar right-->
         <div class="row">
            <div class="col-md-6 mb-2">
               <div class="container mb-3">
                  <div class="card">
                     <div class="card-header background-color-alt">
                        <h1 class="display-1"><strong>OCT</strong> <span class="display-6">22</span> <br></h1>
                        <span class="display-5">2021</span>
                     </div>
                     <div class="card-body">
                        <img src="https://gardenerspath.com/wp-content/uploads/2021/08/How-to-Grow-Cauliflower-Cover-5.jpg" class="img-fluid" />
                        <p class="card-text py-4">
                           Cauliflower Benefits this season
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6 mb-2">
               <!--<div class="container mb-3">
                  <div class="card">
                     <div class="card-header background-color-secondary"></div>
                     <div class="card-body">
                        <h5 class="card-title">
                           either list of users or preview of the latest forum here
                        </h5>
                     </div>
                  </div>
               </div>-->
               <div id="topCropShowHide">
                  <!--Top Crop Production-->
                  <div class="alert alert-success" role="alert" data-mdb-color="success">
                     <span class="alert-link">Show Top Crop Producer</span>
                     <form method="post">
                        <select  class="form-select mb-4" name="topCropSelect" id="topCropSelect">
                           <option disabled selected>Choose Crop</option>
                           <option value="Cabbage">Cabbage</option>
                           <option value="Chinese Cabbage">Chinese Cabbage</option>
                           <option value="Lettuce">Lettuce</option>
                           <option value="Cauliflower">Cauliflower</option>
                           <option value="Snap Beans">Snap Beans</option>
                           <option value="Garden Peas">Garden Peas</option>
                           <option value="Sweet Pepper">Sweet Pepper</option>
                           <option value="White Potato">White Potato</option>
                           <option value="Carrots">Carrots</option>
                           <option value="other">Others</option>
                        </select>
                        <select class="form-select mb-4" name="fromYearTopCrop" id="fromYearTopCrop">
                           <option disabled selected>From</option>
                           <?php
                              for ($year=2015; $year <= date('Y'); $year++) { 
                                echo "<option value='$year'>" . $year . "</option>";
                              }
                              ?>
                        </select>
                        <select disabled class="form-select mb-4"  name="toYearTopCrop" id="toYearTopCrop">
                           <option disabled selected>To</option>
                           <?php
                              for ($year=2015; $year <= date('Y'); $year++) { 
                                echo "<option id='TopCropto$year' value='$year'>" . $year . "</option>";
                              }
                              ?>
                        </select>
                        <button type="submit" name="topCropSubmitBtn" class="btn  btn-color-primary btn-block btn-lg"
                           data-mdb-ripple-color="dark">Search
                        </button>
                     </form>
                  </div>
               </div>

               <!--End Side Tabbed Sample-->
               <?php 
                  require "../config/connection.php"; 
                  if(isset($_POST['topCropSubmitBtn'])){
                  
                    if(isset($_POST['fromYearTopCrop']) && isset($_POST['toYearTopCrop']) && isset($_POST['topCropSelect'])){
                      $yearSearchedFromTop = $_POST['fromYearTopCrop'];
                      $yearSearchedToTop = $_POST['toYearTopCrop'];
                      $cropSelectedTop = $_POST['topCropSelect'];
                  
                      $query= "SELECT MAX( prodRate ) AS 'topCrop' FROM `historicaldataset` WHERE cropName = '$cropSelectedTop' and harvestYear between '$yearSearchedFromTop' and '$yearSearchedToTop'";
                      $topCropResult=mysqli_query($link, $query);
                      $topCropData = mysqli_fetch_array( $topCropResult);
                  
                      $topCropDataRes = $topCropData['topCrop'];
                  
                      $topProdRateResult=mysqli_query($link,"SELECT * FROM historicaldataset WHERE prodRate = '$topCropDataRes' and cropName = '$cropSelectedTop' and harvestYear between '$yearSearchedFromTop' and '$yearSearchedToTop'");
                  
                      $prodRateRow=mysqli_fetch_array($topProdRateResult);?>
               <script>
                  Swal.fire({
                  icon: 'success',
                  title: 'Says',
                  confirmButtonColor: '#0e2f36',
                  text: '<?php echo $prodRateRow["munName"]." is the Top Producer of ". $cropSelectedTop. " During " .$yearSearchedFromTop." to ".$yearSearchedToTop; ?>'
                  })
               </script>
               <?php  }else{
                  echo "yaaa";
                  }
                  }
                  ?>
               <script type="text/javascript">
                  document.getElementById("fromYearTopCrop").onchange = function () {
                         document.getElementById("toYearTopCrop").setAttribute("disabled", "disabled");
                         <?php for ($year=2015; $year <= date('Y'); $year++):?>
                              if (this.value > '<?php echo $year; ?>'){
                                 document.getElementById("toYearTopCrop").removeAttribute("disabled");
                                 document.getElementById("TopCropto<?php echo $year; ?>").disabled = true;
                              }
                              else{
                                 document.getElementById("toYearTopCrop").removeAttribute("disabled");
                                 document.getElementById("TopCropto<?php echo $year; ?>").disabled = false; 
                              }
                         <?php endfor ?>
                  };   
               </script>
            </div>
         </div>
      </div>
   </div>
</main>
<!--Main layout-->
<?php include '../template/footer.php'; ?>