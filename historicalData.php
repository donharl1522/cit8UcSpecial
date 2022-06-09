<?php
  require "config/connection.php";
?>


<?php include 'template/header.php'; ?>

<section>
  <div class="container my-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <img class="img-fluid" src="images/Homepage-HeroImage-DataEcosystem1.png" />
        </div>
        <div class="col">
          <div class="container my-5">
            <p class="h1">Historical Data </p>
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
          <h6>Table Name</h6>
        

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
                document.getElementById("toYear").onchange = function () {
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
    <!---End Navigation-->
    <div class="container my-5">
      <div class="container-fluid">
      </div>
    </div>

    <div class="container my-5">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <!-- Tabs navs -->
            <ul class="nav nav-tabs mb-3" id="ex1" role="tablist" method ="post">
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link"
                  id="all-tab-1"
                  data-mdb-toggle="tab"
                  href="#all-tabs-1"
                  role="tab"
                  aria-controls="ex2-tabs-1"
                  aria-selected="true"
                  >All</a
                >
              </li>
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link active"
                  id="atok-tab-1"
                  data-mdb-toggle="tab"
                  href="#atok-tabs-1"
                  role="tab"
                  aria-controls="ex2-tabs-1"
                  aria-selected="false"
                  >ATOK</a
                >
              </li>
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link"
                  id="bakun-tab-2"
                  data-mdb-toggle="tab"
                  href="#bakun-tabs-2"
                  role="tab"
                  aria-controls="ex2-tabs-2"
                  aria-selected="false"
                  >BAKUN</a
                >
              </li>
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link"
                  id="bokod-tab-3"
                  data-mdb-toggle="tab"
                  href="#bokod-tabs-3"
                  role="tab"
                  aria-controls="bokod-tabs-3"
                  aria-selected="false"
                  >BOKOD</a
                >
              </li>
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link"
                  id="buguias-tab-4"
                  data-mdb-toggle="tab"
                  href="#buguias-tabs-4"
                  role="tab"
                  aria-controls="buguias-tabs-4"
                  aria-selected="false"
                  >BUGUIAS</a
                >
              </li>
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link"
                  id="itogon-tab-5"
                  data-mdb-toggle="tab"
                  href="#itogon-tabs-5"
                  role="tab"
                  aria-controls="itogon-tabs-5"
                  aria-selected="false"
                  >ITOGON</a
                >
              </li>
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link"
                  id="kabayan-tab-6"
                  data-mdb-toggle="tab"
                  href="#kabayan-tabs-6"
                  role="tab"
                  aria-controls="kabayan-tabs-6"
                  aria-selected="false"
                  >KABAYAN</a
                >
              </li>
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link"
                  id="kapangan-tab-7"
                  data-mdb-toggle="tab"
                  href="#kapangan-tabs-7"
                  role="tab"
                  aria-controls="kapangan-tabs-7"
                  aria-selected="false"
                  >KAPANGAN</a
                >
              </li>
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link"
                  id="kibungan-tab-8"
                  data-mdb-toggle="tab"
                  href="#kibungan-tabs-8"
                  role="tab"
                  aria-controls="kibungan-tabs-8"
                  aria-selected="false"
                  >KIBUNGAN</a
                >
              </li>
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link"
                  id="trinidad-tab-8"
                  data-mdb-toggle="tab"
                  href="#trinidad-tabs-8"
                  role="tab"
                  aria-controls="trinidad-tabs-8"
                  aria-selected="false"
                  >LA TRINIDAD</a
                >
              </li>
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link"
                  id="mankayan-tab-9"
                  data-mdb-toggle="tab"
                  href="#mankayan-tabs-9"
                  role="tab"
                  aria-controls="mankayan-tabs-9"
                  aria-selected="false"
                  >MANKAYAN</a
                >
              </li>
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link"
                  id="sablan-tab-10"
                  data-mdb-toggle="tab"
                  href="#sablan-tabs-10"
                  role="tab"
                  aria-controls="sablan-tabs-10"
                  aria-selected="false"
                  >SABLAN</a
                >
              </li>
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link"
                  id="tuba-tab-11"
                  data-mdb-toggle="tab"
                  href="#tuba-tabs-11"
                  role="tab"
                  aria-controls="tuba-tabs-11"
                  aria-selected="false"
                  >TUBA</a
                >
              </li>
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link"
                  id="tublay-tab-12"
                  data-mdb-toggle="tab"
                  href="#tublay-tabs-12"
                  role="tab"
                  aria-controls="tublay-tabs-12"
                  aria-selected="false"
                  >TUBLAY</a
                >
              </li>
            </ul>
            
            <!-- Tabs navs -->

            <!-- Tabs content -->


            <?php
            function callLabel($callMun){
              $yearSearchedFrom = $_POST['fromYear'];
              $yearSearchedTo = $_POST['toYear'];
              $cropSelected = $_POST['cropNameSelect'];
              echo "<p class='container text-center blockquote pb-2'><i class='far fa-lightbulb pe-2'></i> " . $cropSelected." production from ".$yearSearchedFrom." to ".$yearSearchedTo. " in ".$callMun . "</p>";
            }
            
            ?>

            <div class="tab-content" id="ex2-content" method="post">
              <div
                class="tab-pane fade show active"
                id="all-tabs-1"
                role="tabpanel"
                aria-labelledby="all-tab-1"
              >
                    
                <table class="table align-middle mb-0 bg-white">

                  <thead class="bg-light">
                    <tr>
                      <th>Year</th>
                      <th>Crop Name</th>
                      <th>Municipality</th>
                      <th>Area Harvested (ha)</th>
                      <th>Production (mt)</th>
                      <th>Productivity (mt/ha)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if(isset($_POST['search'])){
                      if(isset($_POST['fromYear']) && isset($_POST['toYear']) && isset($_POST['cropNameSelect'])){
                        $yearSearchedFrom = $_POST['fromYear'];
                        $yearSearchedTo = $_POST['toYear'];
                        $cropSelected = $_POST['cropNameSelect'];
                        callLabel("All Municipalities");
                        
                        $res=mysqli_query($link,"SELECT * FROM historicaldataset WHERE cropName = '$cropSelected' and harvestYear between '$yearSearchedFrom' and '$yearSearchedTo'");
                        
                        while($row=mysqli_fetch_array($res)):?>
                          <tr>
                            <td>
                            <p class="fw-normal mb-1"><?php echo $row["harvestYear"]; ?></p>
                            </td>
                           <td>           
                             <p class="fw-normal mb-1"><?php echo $row["cropName"]; ?></p>
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
                             <p class="fw-normal mb-1"><?php echo $row["prodRate"]; ?></p>
                           </td>
                          </tr>
  
                      <?php endwhile?>
                      <?php }else{
                        echo "Please select Crop";
                      }}?>
                  </tbody>
               </table>
              </div>
              <div
                class="tab-pane fade"
                id="atok-tabs-1"
                role="tabpanel"
                aria-labelledby="atok-tab-1"
              >
                <table class="table align-middle mb-0 bg-white">

                  <thead class="bg-light">
                    <tr>
                      <th>Year</th>
                      <th>Area Harvested (ha)</th>
                      <th>Production (mt)</th>
                      <th>Productivity (mt/ha)</th>
                    </tr>
                  </thead>
                  <br>
                  <tbody>
                    <?php
                    if(isset($_POST['search'])){
                      if(isset($_POST['fromYear']) && isset($_POST['toYear']) && isset($_POST['cropNameSelect'])){
                      $yearSearchedFrom = $_POST['fromYear'];
                      $yearSearchedTo = $_POST['toYear'];
                      $cropSelected = $_POST['cropNameSelect'];
                      callLabel("Atok");
        
                      $res=mysqli_query($link,"SELECT * FROM historicaldataset WHERE cropName = '$cropSelected' and munName like '%atok%' and harvestYear between '$yearSearchedFrom' and '$yearSearchedTo'");
                        
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
                           <p class="fw-normal mb-1"><?php echo $row["prodRate"]; ?></p>
                         </td>
                        </tr>

                    <?php endwhile?>
                    <?php }else{
                        echo "Please select Crop";
                      }}?>
                  </tbody>
               </table>
              </div>
              <div
                class="tab-pane fade"
                id="bakun-tabs-2"
                role="tabpanel"
                aria-labelledby="bakun-tab-2"
              >
                <table class="table align-middle mb-0 bg-white">

                  <thead class="bg-light">
                    <br>
                    <tr>
                      <th>Year</th>
                      <th>Area Harvested (ha)</th>
                      <th>Production (mt)</th>
                      <th>Productivity (mt/ha)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if(isset($_POST['search'])){
                      if(isset($_POST['fromYear']) && isset($_POST['toYear']) && isset($_POST['cropNameSelect'])){
                      $yearSearchedFrom = $_POST['fromYear'];
                      $yearSearchedTo = $_POST['toYear'];
                      $cropSelected = $_POST['cropNameSelect'];
                      callLabel("Bakun");
        
                      $res=mysqli_query($link,"SELECT * FROM historicaldataset WHERE cropName = '$cropSelected' and munName like '%bakun%' and harvestYear between '$yearSearchedFrom' and '$yearSearchedTo'");
                        
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
                           <p class="fw-normal mb-1"><?php echo $row["prodRate"]; ?></p>
                         </td>
                        </tr>

                    <?php endwhile?>
                    <?php }else{
                        echo "Please select Crop";
                      }}?>
                  </tbody>
               </table>
              </div>
              <div
                class="tab-pane fade"
                id="bokod-tabs-3"
                role="tabpanel"
                aria-labelledby="bokod-tab-3"
              >
                <table class="table align-middle mb-0 bg-white">

                  <thead class="bg-light">
                    <br>
                    <tr>
                      <th>Year</th>
                      <th>Area Harvested (ha)</th>
                      <th>Production (mt)</th>
                      <th>Productivity (mt/ha)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if(isset($_POST['search'])){
                      if(isset($_POST['fromYear']) && isset($_POST['toYear']) && isset($_POST['cropNameSelect'])){
                      $yearSearchedFrom = $_POST['fromYear'];
                      $yearSearchedTo = $_POST['toYear'];
                      $cropSelected = $_POST['cropNameSelect'];
                      callLabel("Bokod");
                 
        
                      $res=mysqli_query($link,"SELECT * FROM historicaldataset WHERE cropName = '$cropSelected' and munName like '%bokod%' and harvestYear between '$yearSearchedFrom' and '$yearSearchedTo'");
                        
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
                           <p class="fw-normal mb-1"><?php echo $row["prodRate"]; ?></p>
                         </td>
                        </tr>

                    <?php endwhile?>
                    <?php }else{
                        echo "Please select Crop";
                      }}?>
                  </tbody>
               </table>
              </div>
              <div
                class="tab-pane fade"
                id="buguias-tabs-4"
                role="tabpanel"
                aria-labelledby="buguias-tab-4"
              >
                <table class="table align-middle mb-0 bg-white">

                  <thead class="bg-light">
                    <br>
                    <tr>
                      <th>Year</th>
                      <th>Area Harvested (ha)</th>
                      <th>Production (mt)</th>
                      <th>Productivity (mt/ha)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if(isset($_POST['search'])){
                      if(isset($_POST['fromYear']) && isset($_POST['toYear']) && isset($_POST['cropNameSelect'])){
                      $yearSearchedFrom = $_POST['fromYear'];
                      $yearSearchedTo = $_POST['toYear'];
                      $cropSelected = $_POST['cropNameSelect'];
                      callLabel("Buguias");
        
                      $res=mysqli_query($link,"SELECT * FROM historicaldataset WHERE cropName = '$cropSelected' and munName like '%buguias%' and harvestYear between '$yearSearchedFrom' and '$yearSearchedTo'");
                        
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
                           <p class="fw-normal mb-1"><?php echo $row["prodRate"]; ?></p>
                         </td>
                        </tr>

                    <?php endwhile?>
                    <?php }else{
                        echo "Please select Crop";
                      }}?>
                  </tbody>
               </table>
              </div>
              <div
                class="tab-pane fade"
                id="itogon-tabs-5"
                role="tabpanel"
                aria-labelledby="itogon-tab-5"
              >
                <table class="table align-middle mb-0 bg-white">

                  <thead class="bg-light">
                    <br>
                    <tr>
                      <th>Year</th>
                      <th>Area Harvested (ha)</th>
                      <th>Production (mt)</th>
                      <th>Productivity (mt/ha)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if(isset($_POST['search'])){
                      if(isset($_POST['fromYear']) && isset($_POST['toYear']) && isset($_POST['cropNameSelect'])){
                      $yearSearchedFrom = $_POST['fromYear'];
                      $yearSearchedTo = $_POST['toYear'];
                      $cropSelected = $_POST['cropNameSelect'];
                      callLabel("Itogon");
        
                      $res=mysqli_query($link,"SELECT * FROM historicaldataset WHERE cropName = '$cropSelected' and munName like '%itogon%' and harvestYear between '$yearSearchedFrom' and '$yearSearchedTo'");
                        
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
                           <p class="fw-normal mb-1"><?php echo $row["prodRate"]; ?></p>
                         </td>
                        </tr>

                    <?php endwhile?>
                    <?php }else{
                        echo "Please select Crop";
                      }}?>
                  </tbody>
               </table>
              </div>
              <div
                class="tab-pane fade"
                id="kabayan-tabs-6"
                role="tabpanel"
                aria-labelledby="kabayan-tab-6"
              >
                <table class="table align-middle mb-0 bg-white">

                  <thead class="bg-light">
                    <br>
                    <tr>
                      <th>Year</th>
                      <th>Area Harvested (ha)</th>
                      <th>Production (mt)</th>
                      <th>Productivity (mt/ha)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if(isset($_POST['search'])){
                      if(isset($_POST['fromYear']) && isset($_POST['toYear']) && isset($_POST['cropNameSelect'])){
                      $yearSearchedFrom = $_POST['fromYear'];
                      $yearSearchedTo = $_POST['toYear'];
                      $cropSelected = $_POST['cropNameSelect'];
                      callLabel("Kabayan");
        
                      $res=mysqli_query($link,"SELECT * FROM historicaldataset WHERE cropName = '$cropSelected' and munName like '%kabayan%' and harvestYear between '$yearSearchedFrom' and '$yearSearchedTo'");
                        
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
                           <p class="fw-normal mb-1"><?php echo $row["prodRate"]; ?></p>
                         </td>
                        </tr>

                    <?php endwhile?>
                    <?php }else{
                        echo "Please select Crop";
                      }}?>
                  </tbody>
               </table>
              </div>
              <div
                class="tab-pane fade"
                id="kapangan-tabs-7"
                role="tabpanel"
                aria-labelledby="kabayan-tab-7"
              >
                <table class="table align-middle mb-0 bg-white">

                  <thead class="bg-light">
                    <br>
                    <tr>
                      <th>Year</th>
                      <th>Area Harvested (ha)</th>
                      <th>Production (mt)</th>
                      <th>Productivity (mt/ha)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if(isset($_POST['search'])){
                      if(isset($_POST['fromYear']) && isset($_POST['toYear']) && isset($_POST['cropNameSelect'])){
                      $yearSearchedFrom = $_POST['fromYear'];
                      $yearSearchedTo = $_POST['toYear'];
                      $cropSelected = $_POST['cropNameSelect'];
                      callLabel("Kapangan");
        
                      $res=mysqli_query($link,"SELECT * FROM historicaldataset WHERE cropName = '$cropSelected' and munName like '%kapangan%' and harvestYear between '$yearSearchedFrom' and '$yearSearchedTo'");
                        
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
                           <p class="fw-normal mb-1"><?php echo $row["prodRate"]; ?></p>
                         </td>
                        </tr>

                    <?php endwhile?>
                    <?php }else{
                        echo "Please select Crop";
                      }}?>
                  </tbody>
               </table>
              </div>
              <div
                class="tab-pane fade"
                id="kibungan-tabs-8"
                role="tabpanel"
                aria-labelledby="kibungan-tab-8"
              >
                <table class="table align-middle mb-0 bg-white">

                  <thead class="bg-light">
                    <br>
                    <tr>
                      <th>Year</th>
                      <th>Area Harvested (ha)</th>
                      <th>Production (mt)</th>
                      <th>Productivity (mt/ha)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if(isset($_POST['search'])){
                      if(isset($_POST['fromYear']) && isset($_POST['toYear']) && isset($_POST['cropNameSelect'])){
                      $yearSearchedFrom = $_POST['fromYear'];
                      $yearSearchedTo = $_POST['toYear'];
                      $cropSelected = $_POST['cropNameSelect'];
                      callLabel("Kibungan");
        
                      $res=mysqli_query($link,"SELECT * FROM historicaldataset WHERE cropName = '$cropSelected' and munName like '%kibungan%' and harvestYear between '$yearSearchedFrom' and '$yearSearchedTo'");
                        
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
                           <p class="fw-normal mb-1"><?php echo $row["prodRate"]; ?></p>
                         </td>
                        </tr>

                    <?php endwhile?>
                    <?php }else{
                        echo "Please select Crop";
                      }}?>
                  </tbody>
               </table>
              </div>
              <div
                class="tab-pane fade"
                id="trinidad-tabs-8"
                role="tabpanel"
                aria-labelledby="trinidad-tab-8"
              >
                <table class="table align-middle mb-0 bg-white">

                  <thead class="bg-light">
                    <br>
                    <tr>
                      <th>Year</th>
                      <th>Area Harvested (ha)</th>
                      <th>Production (mt)</th>
                      <th>Productivity (mt/ha)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if(isset($_POST['search'])){
                      if(isset($_POST['fromYear']) && isset($_POST['toYear']) && isset($_POST['cropNameSelect'])){
                      $yearSearchedFrom = $_POST['fromYear'];
                      $yearSearchedTo = $_POST['toYear'];
                      $cropSelected = $_POST['cropNameSelect'];
                      callLabel("La Trinidad");
        
                      $res=mysqli_query($link,"SELECT * FROM historicaldataset WHERE cropName = '$cropSelected' and munName like '%la trinidad%' and harvestYear between '$yearSearchedFrom' and '$yearSearchedTo'");
                        
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
                           <p class="fw-normal mb-1"><?php echo $row["prodRate"]; ?></p>
                         </td>
                        </tr>

                    <?php endwhile?>
                    <?php }else{
                        echo "Please select Crop";
                      }}?>
                  </tbody>
               </table>
              </div>
              <div
                class="tab-pane fade"
                id="mankayan-tabs-9"
                role="tabpanel"
                aria-labelledby="mankayan-tab-9"
              >
                <table class="table align-middle mb-0 bg-white">

                  <thead class="bg-light">
                    <br>
                    <tr>
                      <th>Year</th>
                      <th>Area Harvested (ha)</th>
                      <th>Production (mt)</th>
                      <th>Productivity (mt/ha)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if(isset($_POST['search'])){
                      if(isset($_POST['fromYear']) && isset($_POST['toYear']) && isset($_POST['cropNameSelect'])){
                      $yearSearchedFrom = $_POST['fromYear'];
                      $yearSearchedTo = $_POST['toYear'];
                      $cropSelected = $_POST['cropNameSelect'];
                      callLabel("Mankayan");
        
                      $res=mysqli_query($link,"SELECT * FROM historicaldataset WHERE cropName = '$cropSelected' and munName like '%mankayan%' and harvestYear between '$yearSearchedFrom' and '$yearSearchedTo'");
                        
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
                           <p class="fw-normal mb-1"><?php echo $row["prodRate"]; ?></p>
                         </td>
                        </tr>

                    <?php endwhile?>
                    <?php }else{
                        echo "Please select Crop";
                      }}?>
                  </tbody>
               </table>
              </div>
              <div
                class="tab-pane fade"
                id="sablan-tabs-10"
                role="tabpanel"
                aria-labelledby="sablan-tab-10"
              >
                <table class="table align-middle mb-0 bg-white">

                  <thead class="bg-light">
                    <br>
                    <tr>
                      <th>Year</th>
                      <th>Area Harvested (ha)</th>
                      <th>Production (mt)</th>
                      <th>Productivity (mt/ha)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if(isset($_POST['search'])){
                      if(isset($_POST['fromYear']) && isset($_POST['toYear']) && isset($_POST['cropNameSelect'])){
                      $yearSearchedFrom = $_POST['fromYear'];
                      $yearSearchedTo = $_POST['toYear'];
                      $cropSelected = $_POST['cropNameSelect'];
                      callLabel("Sablan");
        
                      $res=mysqli_query($link,"SELECT * FROM historicaldataset WHERE cropName = '$cropSelected' and munName like '%sablan%' and harvestYear between '$yearSearchedFrom' and '$yearSearchedTo'");
                        
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
                           <p class="fw-normal mb-1"><?php echo $row["prodRate"]; ?></p>
                         </td>
                        </tr>

                    <?php endwhile?>
                    <?php }else{
                        echo "Please select Crop";
                      }}?>
                  </tbody>
               </table>
              </div>
              <div
                class="tab-pane fade"
                id="tuba-tabs-11"
                role="tabpanel"
                aria-labelledby="tuba-tab-11"
              >
                <table class="table align-middle mb-0 bg-white">

                  <thead class="bg-light">
                    <br>
                    <tr>
                      <th>Year</th>
                      <th>Area Harvested (ha)</th>
                      <th>Production (mt)</th>
                      <th>Productivity (mt/ha)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if(isset($_POST['search'])){
                      if(isset($_POST['fromYear']) && isset($_POST['toYear']) && isset($_POST['cropNameSelect'])){
                      $yearSearchedFrom = $_POST['fromYear'];
                      $yearSearchedTo = $_POST['toYear'];
                      $cropSelected = $_POST['cropNameSelect'];
                      callLabel("Tuba");
        
                      $res=mysqli_query($link,"SELECT * FROM historicaldataset WHERE cropName = '$cropSelected' and munName like '%tuba%' and harvestYear between '$yearSearchedFrom' and '$yearSearchedTo'");
                        
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
                           <p class="fw-normal mb-1"><?php echo $row["prodRate"]; ?></p>
                         </td>
                        </tr>

                    <?php endwhile?>
                    <?php }else{
                        echo "Please select Crop";
                      }}?>
                  </tbody>
               </table>
              </div>
              <div
                class="tab-pane fade"
                id="tublay-tabs-12"
                role="tabpanel"
                name="tublayTab"
                aria-labelledby="tublay-tab-12"
                >
                <table class="table align-middle mb-0 bg-white">

                  <thead class="bg-light">
                    <br>
                    <tr>
                      <th>Year</th>
                      <th>Area Harvested (ha)</th>
                      <th>Production (mt)</th>
                      <th>Productivity (mt/ha)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if(isset($_POST['search'])){
                      if(isset($_POST['fromYear']) && isset($_POST['toYear']) && isset($_POST['cropNameSelect'])){
                      $yearSearchedFrom = $_POST['fromYear'];
                      $yearSearchedTo = $_POST['toYear'];
                      $cropSelected = $_POST['cropNameSelect'];
                      callLabel("Tublay");
        
                      $res=mysqli_query($link,"SELECT * FROM historicaldataset WHERE cropName = '$cropSelected' and munName like '%tublay%' and harvestYear between '$yearSearchedFrom' and '$yearSearchedTo'");
                        
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
                           <p class="fw-normal mb-1"><?php echo $row["prodRate"]; ?></p>
                         </td>
                        </tr>

                    <?php endwhile?>
                    <?php }else{
                        echo "Please select Crop";
                      }}?>
                  </tbody>
               </table>
              </div>
            </div>
            <!-- Tabs content -->
          </div>
        </div>
      </div>
    </div>
    <!--END NEW DATA SORTING-->

    <!--END SORTING TABLE-->


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
<?php include 'template/footer.php'; ?>