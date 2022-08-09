<?php
   // We need to use sessions, so you should always start sessions using the below code.
   session_start();
   // If the user is not logged in redirect to the login page...
   if (!isset($_SESSION['loggedin'])) {
   	header('Location: ../../');
   	exit;
   	//blah blah blah
   }
   ?>
<?php require "../../../config/connection.php"; ?>
<?php include '../../../template/header.php'; ?>
<?php include '../../../template/sidebar.php'; ?>
<!--Main layout-->
<main style="margin-top: 58px;">
   <div class="container pt-4">
      <section>
         <div class="container">
            <div class="container-fluid">
               <p class="h1">Agricultural Data </p>
               <!--PopUp for top Crop-->
   
               <!--End Side Tabbed Sample-->
               <?php 
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
               <!--End of Top Crop Production-->
            </div>
         </div>
   </div>
   </section>
   <!--******SORTING TABLE STARTS HERE-->
   <!--END SORTING TABLE STARTS HERE-->
   <!--Navigation-->
   
   </div>
   </div>
   <!--End Side Tabbed Sample-->
   <script>
      document.getElementById("ifYes").style.display = "none";
        function yesnoCheck(that) {
          if (that.value == "other") {
            //alert("check");
            document.getElementById("ifYes").style.display = "block";
          } else {
            document.getElementById("ifYes").style.display = "none";
          }
        }
   </script>
   <?php include 'gethistdata.php'; ?>
   </div>
</main>
<!--Main layout-->
<?php include '../../../template/footer.php'; ?>