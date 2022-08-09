<div class="container my-5">
      <form method="post">
         <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
               <button
                  class="navbar-toggler"
                  type="button"
                  data-mdb-toggle="collapse"
                  data-mdb-target="#navbarTogglerDemo01"
                  aria-controls="navbarTogglerDemo01"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                  >
               <i class="fas fa-bars"></i>
               </button>
               <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                  <a class="navbar-brand" href="#">Crop Year</a>
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item ps-2 my-2">
                        <select class="form-select" name="fromYear" id="fromYear">
                           <option disabled selected>From</option>
                           <?php
                              for ($year=2015; $year <= date('Y'); $year++) { 
                                 echo "<option value='$year'>" . $year . "</option>";
                              }
                              ?>
                        </select>
                     </li>
                     <li class="nav-item ps-2 my-2">
                        <select disabled class="form-select"  name="toYear" id="toYear">
                           <option disabled selected>To</option>
                           <?php
                              for ($year=2015; $year <= date('Y'); $year++) { 
                                echo "<option id='to$year' value='$year'>" . $year . "</option>";
                              }
                              ?>
                        </select>
                     </li>
                     <li class="nav-item ps-2 my-2">
                        <select disabled class="form-select" name="munSelect"     id="munSelect">
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
                     </li>
                  </ul>
                  <div class="d-flex input-group w-auto">
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
                     <button
                        class="btn  btn-color-primary btn-lg"
                        type="submit"
                        name="search"
                        data-mdb-ripple-color="dark"
                        >
                     Search
                     </button>
                  </div>
               </div>
            </div>
         </nav>
      </form>
      <script type="text/javascript">
         document.getElementById("fromYear").onchange = function () {
         document.getElementById("toYear").setAttribute("disabled", "disabled");
         <?php for ($year=2015; $year <= date('Y'); $year++):?>
              if (this.value > '<?php echo $year; ?>'){
                 document.getElementById("toYear").removeAttribute("disabled");
                 document.getElementById("to<?php echo $year; ?>").disabled = true;
              }
              else{
                 document.getElementById("toYear").removeAttribute("disabled");
                 document.getElementById("to<?php echo $year; ?>").disabled = false; 
              }
         <?php endfor ?>
         };
      </script>
      <script type="text/javascript">
         document.getElementById("toYear").onchange = function () {
           document.getElementById("munSelect").setAttribute("disabled", "disabled");
             if (this.value !== null){
               document.getElementById("munSelect").removeAttribute("disabled");
             }
           };
      </script>
      <script type="text/javascript">
         document.getElementById("munSelect").onchange = function () {
           document.getElementById("cropNameSelect").setAttribute("disabled", "disabled");
           if (this.value !== null){
             document.getElementById("cropNameSelect").removeAttribute("disabled");
           }
         };
      </script>
   </div>
   <div class="container my-5">
      <div class="container-fluid">
         <table id="example" class="table align-middle mb-0 bg-white">
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