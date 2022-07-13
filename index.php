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
<?php require "../../config/connection.php"; ?>
<?php include '../../template/header.php'; ?>
<?php include '../../template/sidebar.php'; ?>
<!--Main layout-->
<main style="margin-top: 58px;">
  <div class="container pt-4">
  <section>
  <div class="container my-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <img class="img-fluid" src="images/Homepage-HeroImage-DataEcosystem1.png" />
        </div>
        <div class="col">
          <div class="container my-5">
            <p class="h1">Agricultural Data </p>
            <p class="lead">This website is meant as a prototype</p>

            <a class="btn btn-color-primary" href="homePage.php?id=">Home</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!--******SORTING TABLE STARTS HERE-->

    <!--END SORTING TABLE STARTS HERE-->

    <!--Navigation-->
    <div class="container my-5">
      <nav
        id="main-navbar"
        class="navbar navbar-expand-lg navbar-light bg-white"
      >
        <!-- Container wrapper -->
        <div class="container-fluid">
          <h6>Crop Year</h6>
        

          <div class="row ps-5">
            <div class="col">
              <form class="d-none d-md-flex input-group w-auto my-auto" method="post">
              <select class="form-select" name="fromYear" id="fromYear">
                <option disabled selected>From</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
              </select>
            </div>

            <div class="col">
              <select disabled class="form-select"  name="toYear" id="toYear">
                <option disabled selected>To</option>
                <option id="to2015" value="2015">2015</option>
                <option id="to2016" value="2016">2016</option>
                <option id="to2017" value="2017">2017</option>
                <option id="to2018" value="2018">2018</option>
                <option id="to2019" value="2019">2019</option>
              </select>

              <script type="text/javascript">
                document.getElementById("fromYear").onchange = function () {
                  document.getElementById("toYear").setAttribute("disabled", "disabled");
                  if (this.value == '2015'){
                    document.getElementById("toYear").removeAttribute("disabled");
                    document.getElementById("to2015").disabled = false; 
                    document.getElementById("to2016").disabled = false; 
                    document.getElementById("to2017").disabled = false; 
                    document.getElementById("to2018").disabled = false;
                    document.getElementById("to2019").disabled = false;

                  }
                  else if (this.value == '2016'){
                    document.getElementById("toYear").removeAttribute("disabled");
                    document.getElementById("to2015").disabled = true; 
                    document.getElementById("to2016").disabled = false; 
                    document.getElementById("to2017").disabled = false; 
                    document.getElementById("to2018").disabled = false;
                    document.getElementById("to2019").disabled = false; 


                  } 
                  else if (this.value == '2017'){
                    document.getElementById("toYear").removeAttribute("disabled");
                    document.getElementById("to2015").disabled = true;
                    document.getElementById("to2016").disabled = true;
                    document.getElementById("to2017").disabled = false; 
                    document.getElementById("to2018").disabled = false;
                    document.getElementById("to2019").disabled = false; 
                  }
                  else if (this.value == '2018'){
                    document.getElementById("toYear").removeAttribute("disabled");
                    document.getElementById("to2015").disabled = true;
                    document.getElementById("to2016").disabled = true;
                    document.getElementById("to2017").disabled = true;
                    document.getElementById("to2018").disabled = false;
                    document.getElementById("to2019").disabled = false; 
                  }
                  else if (this.value == '2019'){
                    document.getElementById("toYear").removeAttribute("disabled");
                    document.getElementById("to2015").disabled = true;
                    document.getElementById("to2016").disabled = true;
                    document.getElementById("to2017").disabled = true;    
                    document.getElementById("to2018").disabled = true;
                    document.getElementById("to2019").disabled = false;               
                  }
                };
              </script>


            </div>
          </div>
          <div>

          <select disabled class="form-select" name="munSelect" id="munSelect">
            <option disabled selected>Choose Municipality</option>
            <option value="allMun">All Municipalities</option>
            <option value="Atok">Atok</option>
            <option value="Bakun">Bakun</option>
            <option value="Bokod">Bokod</option>
            <option value="Buguias">Buguias</option>
            <option value="Itogon">Itogon</option>
            <option value="Kabayan">Kabayan</option>
            <option value="Kapangan">Kapangan</option>
            <option value="Kibungan">Kibungan</option>
            <option value="La Trinidad">La Trinidad</option>
            <option value="Mankayan">Mankayan</option>
            <option value="Sablan">Sablan</option>
            <option value="Tuba">Tuba</option>
            <option value="Tublay">Tublay</option>
          </select>
          </div>

          <script type="text/javascript">
            document.getElementById("toYear").onchange = function () {
              document.getElementById("munSelect").setAttribute("disabled", "disabled");
                if (this.value !== null){
                  document.getElementById("munSelect").removeAttribute("disabled");
                }
              };
          </script>



          <!-- Right links -->
          <ul class="navbar-nav ms-auto d-flex flex-row">
            <!-- Search form -->
        
              
              <select disabled 
                class="form-select"
                name="cropNameSelect"
                id="cropNameSelect"
                onchange="yesnoCheck(this)"
              >

                <option disabled selected>Crops</option>
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

              <script type="text/javascript">
                document.getElementById("munSelect").onchange = function () {
                  document.getElementById("cropNameSelect").setAttribute("disabled", "disabled");
                  if (this.value !== null){
                    document.getElementById("cropNameSelect").removeAttribute("disabled");
                  }
                };
              </script>

              <input
                autocomplete="off"
                type="search"
                class="form-control rounded"
                placeholder="Search"
                style="min-width: 225px"
                style="display: none"
                id="ifYes"
              />
              <button type="submit" name="search" class="btn  btn-color-primary btn-block btn-lg"
                data-mdb-ripple-color="dark">Search
              </button>

            </form>
          </ul>
        </div>
        <!-- Container wrapper -->
      </nav>
    </div>

    <div class="container my-5">
      <div class="container-fluid">

              <table class="table align-middle mb-0 bg-white">
                  <tbody>
                    <?php
                    if(isset($_POST['search'])){

                       if(isset($_POST['fromYear']) && isset($_POST['toYear']) && isset($_POST['munSelect']) && isset($_POST['cropNameSelect'])){
                        $yearSearchedFrom = $_POST['fromYear'];
                        $yearSearchedTo = $_POST['toYear'];
                        $munSelect = $_POST['munSelect'];
                        $cropSelected = $_POST['cropNameSelect'];

                        if ($munSelect == "allMun") {

                          ?>

                          <thead class="bg-light">
                            <tr>
                              <th>Year</th>
                              <th>Municipality</th>
                              <th>Area Harvested (ha)</th>
                              <th>Production (mt)</th>
                              <th>Productivity (mt/ha)</th>
                            </tr>
                          </thead>

                        <?php
                          
                        echo "<p class='container text-center blockquote pb-2'><i class='far fa-lightbulb pe-2'></i> " . $cropSelected." production from ".$yearSearchedFrom." to ".$yearSearchedTo. " in all Municipalities". "</p>";

                        $query= "SELECT MAX( prodRate ) AS 'topCrop' FROM `historicaldataset` WHERE cropName = '$cropSelected' and harvestYear between '$yearSearchedFrom' and '$yearSearchedTo'";
                        $topCropResult=mysqli_query($link, $query);
                        $topCropData = mysqli_fetch_array( $topCropResult);

                        $topCropDataRes = $topCropData['topCrop'];

                        $topProdRateResult=mysqli_query($link,"SELECT * FROM historicaldataset WHERE prodRate = '$topCropDataRes' and cropName = '$cropSelected' and harvestYear between '$yearSearchedFrom' and '$yearSearchedTo'");

                        $prodRateRow=mysqli_fetch_array($topProdRateResult);

                      
                        $res=mysqli_query($link,"SELECT * FROM historicaldataset WHERE cropName = '$cropSelected' and harvestYear between '$yearSearchedFrom' and '$yearSearchedTo'");
                        
                        while($row=mysqli_fetch_array($res)):?>
                          <tr>
                            <td>
                            <p class="fw-normal mb-1"><?php echo $row["harvestYear"]; ?></p>
                            </td>
                           <td>
                              <p class="fw-normal mb-1"><?php echo $row["munName"]; ?></p>
                            </td>
                            <td>
                              <p class="fw-normal mb-1"><?php echo $row["prodArea"]; ?></p>
                            </td>
                            <td>
                              <p class="fw-normal mb-1"><?php echo $row["cropProd"]; ?></p>
                           </td>
                           <td>
                             <p class="fw-normal mb-1 fw-bold"><?php echo $row["prodRate"]; ?></p>
                           </td>
                          </tr>
                      <?php endwhile?>
                      <?php }


                      elseif ($munSelect != null and $munSelect != "allMun") {

                        ?>

                          <thead class="bg-light">
                            <tr>
                              <th>Year</th>
                              <th>Area Harvested (ha)</th>
                              <th>Production (mt)</th>
                              <th>Productivity (mt/ha)</th>
                            </tr>
                          </thead>

                        <?php

                        echo "<p class='container text-center blockquote pb-2'><i class='far fa-lightbulb pe-2'></i> " . $cropSelected." production from ".$yearSearchedFrom." to ".$yearSearchedTo. " in ".$munSelect . "</p>";

                        $query= "SELECT MAX( prodRate ) AS 'topCrop' FROM `historicaldataset` WHERE cropName = '$cropSelected' and munName = '$munSelect' and harvestYear between '$yearSearchedFrom' and '$yearSearchedTo'";
                        $topCropResult=mysqli_query($link, $query);
                        $topCropData = mysqli_fetch_array( $topCropResult);

                        $topCropDataRes = $topCropData['topCrop'];

                        $topProdRateResult=mysqli_query($link,"SELECT * FROM historicaldataset WHERE prodRate = '$topCropDataRes' and cropName = '$cropSelected' and harvestYear between '$yearSearchedFrom' and '$yearSearchedTo'");

                        $prodRateRow=mysqli_fetch_array($topProdRateResult);

                      
                        $res=mysqli_query($link,"SELECT * FROM historicaldataset WHERE munName = '$munSelect' and cropName = '$cropSelected' and harvestYear between '$yearSearchedFrom' and '$yearSearchedTo'");
                        
                        while($row=mysqli_fetch_array($res)):?>
                          <tr>
                            <td>
                            <p class="fw-normal mb-1"><?php echo $row["harvestYear"]; ?></p>
                            </td>
                            <td>
                              <p class="fw-normal mb-1"><?php echo $row["prodArea"]; ?></p>
                            </td>
                            <td>
                              <p class="fw-normal mb-1"><?php echo $row["cropProd"]; ?></p>
                           </td>
                           <td>
                             <p class="fw-normal mb-1 fw-bold"><?php echo $row["prodRate"]; ?></p>
                           </td>
                          </tr>
                      <?php endwhile?>
                      <?php }
                      
                    }}?>
                  </tbody>

               </table>
            </div>
          </div>
        </div>
      </div>
      <!--End Side Tabbed Sample-->

      <!--Top Crop Production-->
      <?php echo "Top Crop Producers" ?>

      <form class="d-none d-md-flex input-group w-auto my-auto" method="post">
      <select  class="form-select" name="topCropSelect" id="topCropSelect">
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

      
        <select class="form-select" name="fromYearTopCrop" id="fromYearTopCrop">
          <option disabled selected>From</option>
          <option value="2015">2015</option>
          <option value="2016">2016</option>
          <option value="2017">2017</option>
          <option value="2018">2018</option>
          <option value="2019">2019</option>
        </select>

      
          <select disabled class="form-select"  name="toYearTopCrop" id="toYearTopCrop">
            <option disabled selected>To</option>
            <option id="to2015TopCrop" value="2015">2015</option>
            <option id="to2016TopCrop" value="2016">2016</option>
            <option id="to2017TopCrop" value="2017">2017</option>
            <option id="to2018TopCrop" value="2018">2018</option>
            <option id="to2019TopCrop" value="2019">2019</option>
          </select>

      <button type="submit" name="topCropSubmitBtn" class="btn  btn-color-primary btn-block btn-lg"
        data-mdb-ripple-color="dark">Search
      </button>
    </form>

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

              $prodRateRow=mysqli_fetch_array($topProdRateResult);


              echo $prodRateRow["munName"]." is the Top Producer of ". $cropSelectedTop. " During " .$yearSearchedFromTop." to ".$yearSearchedToTop;

          }else{
          echo "yaaa";
          }
        }
       ?>



      <script type="text/javascript">
                document.getElementById("fromYearTopCrop").onchange = function () {
                  document.getElementById("toYearTopCrop").setAttribute("disabled", "disabled");
                  if (this.value == '2015'){
                    document.getElementById("toYearTopCrop").removeAttribute("disabled");
                    document.getElementById("to2015TopCrop").disabled = false; 
                    document.getElementById("to2016TopCrop").disabled = false; 
                    document.getElementById("to2017TopCrop").disabled = false; 
                    document.getElementById("to2018TopCrop").disabled = false;
                    document.getElementById("to2019TopCrop").disabled = false;

                  }
                  else if (this.value == '2016'){
                    document.getElementById("toYearTopCrop").removeAttribute("disabled");
                    document.getElementById("to2015TopCrop").disabled = true; 
                    document.getElementById("to2016TopCrop").disabled = false; 
                    document.getElementById("to2017TopCrop").disabled = false; 
                    document.getElementById("to2018TopCrop").disabled = false;
                    document.getElementById("to2019TopCrop").disabled = false; 


                  } 
                  else if (this.value == '2017'){
                    document.getElementById("toYearTopCrop").removeAttribute("disabled");
                    document.getElementById("to2015TopCrop").disabled = true;
                    document.getElementById("to2016TopCrop").disabled = true;
                    document.getElementById("to2017TopCrop").disabled = false; 
                    document.getElementById("to2018TopCrop").disabled = false;
                    document.getElementById("to2019TopCrop").disabled = false; 
                  }
                  else if (this.value == '2018'){
                    document.getElementById("toYearTopCrop").removeAttribute("disabled");
                    document.getElementById("to2015TopCrop").disabled = true;
                    document.getElementById("to2016TopCrop").disabled = true;
                    document.getElementById("to2017TopCrop").disabled = true;
                    document.getElementById("to2018TopCrop").disabled = false;
                    document.getElementById("to2019TopCrop").disabled = false; 
                  }
                  else if (this.value == '2019'){
                    document.getElementById("toYearTopCrop").removeAttribute("disabled");
                    document.getElementById("to2015TopCrop").disabled = true;
                    document.getElementById("to2016TopCrop").disabled = true;
                    document.getElementById("to2017TopCrop").disabled = true;    
                    document.getElementById("to2018TopCrop").disabled = true;
                    document.getElementById("to2019TopCrop").disabled = false;               
                  }
                };
              </script>


      <!--End of Top Crop Production-->


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




    
</div>
  </div>
</main>
<!--Main layout-->
<?php include '../../template/footer.php'; ?>