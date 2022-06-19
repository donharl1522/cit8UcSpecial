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


      <!--Side Tabbed Sample-->
      <div class="row">
        <div class="col-2">
          <div class="list-group list-group-light" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active px-3 border-0" id="list-all-list"
              data-mdb-toggle="list" href="#list-all" role="tab" aria-controls="list-all">All Municipalities</a>

            <a class="list-group-item list-group-item-action px-3 border-0" id="list-atok-list"
              data-mdb-toggle="list" href="#list-atok" role="tab" aria-controls="list-atok">ATOK</a>

            <a class="list-group-item list-group-item-action px-3 border-0" id="list-bakun-list"
              data-mdb-toggle="list" href="#list-bakun" role="tab" aria-controls="list-bakun">BAKUN</a>

            <a class="list-group-item list-group-item-action px-3 border-0" id="list-bokod-list"
              data-mdb-toggle="list" href="#list-bokod" role="tab" aria-controls="list-bokod">BOKOD</a>

            <a class="list-group-item list-group-item-action px-3 border-0" id="list-buguias-list"
              data-mdb-toggle="list" href="#list-buguias" role="tab" aria-controls="list-buguias">BUGUIAS</a> 

            <a class="list-group-item list-group-item-action px-3 border-0" id="list-itogon-list"
              data-mdb-toggle="list" href="#list-itogon" role="tab" aria-controls="list-itogon">ITOGON</a>

            <a class="list-group-item list-group-item-action px-3 border-0" id="list-kabayan-list"
              data-mdb-toggle="list" href="#list-kabayan" role="tab" aria-controls="list-kabayan">KABAYAN</a>

            <a class="list-group-item list-group-item-action px-3 border-0" id="list-kapangan-list"
              data-mdb-toggle="list" href="#list-kapangan" role="tab" aria-controls="list-kapangan">KAPANGAN</a>

            <a class="list-group-item list-group-item-action px-3 border-0" id="list-kibungan-list"
              data-mdb-toggle="list" href="#list-kibungan" role="tab" aria-controls="list-kibungan">KIBUNGAN</a>

            <a class="list-group-item list-group-item-action px-3 border-0" id="list-latrinidad-list"
              data-mdb-toggle="list" href="#list-latrinidad" role="tab" aria-controls="list-latrinidad">LA TRINIDAD</a>

            <a class="list-group-item list-group-item-action px-3 border-0" id="list-mankayan-list"
              data-mdb-toggle="list" href="#list-mankayan" role="tab" aria-controls="list-mankayan">MANKAYAN</a>

            <a class="list-group-item list-group-item-action px-3 border-0" id="list-sablan-list"
              data-mdb-toggle="list" href="#list-sablan" role="tab" aria-controls="list-sablan">SABLAN</a>

            <a class="list-group-item list-group-item-action px-3 border-0" id="list-tuba-list"
              data-mdb-toggle="list" href="#list-tuba" role="tab" aria-controls="list-tuba">TUBA</a>

            <a class="list-group-item list-group-item-action px-3 border-0" id="list-tublay-list"
              data-mdb-toggle="list" href="#list-tublay" role="tab" aria-controls="list-tublay">TUBLAY</a> 
          </div>
        </div>
        <div class="col-8">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-all" role="tabpanel"
              aria-labelledby="list-all-list">
              <table class="table align-middle mb-0 bg-white">
                  <thead class="bg-light">
                    <tr>
                      <th>Year</th>
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
                      <?php }else{
                        echo "Please select Crop";
                      }}?>
                  </tbody>

               </table>
            </div>
            <div class="tab-pane fade" id="list-atok" role="tabpanel" aria-labelledby="list-atok-list">
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
            <div class="tab-pane fade" id="list-bakun" role="tabpanel" aria-labelledby="list-bakun-list">
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
            <div class="tab-pane fade" id="list-bokod" role="tabpanel" aria-labelledby="list-bokod-list">
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
            <div class="tab-pane fade" id="list-buguias" role="tabpanel" aria-labelledby="list-buguias-list">
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
            <div class="tab-pane fade" id="list-itogon" role="tabpanel" aria-labelledby="list-itogon-list">
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
            <div class="tab-pane fade" id="list-kabayan" role="tabpanel" aria-labelledby="list-kabayan-list">
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
            <div class="tab-pane fade" id="list-kapangan" role="tabpanel" aria-labelledby="list-kapangan-list">
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
            <div class="tab-pane fade" id="list-kibungan" role="tabpanel" aria-labelledby="list-kibungan-list">
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
            <div class="tab-pane fade" id="list-latrinidad" role="tabpanel" aria-labelledby="list-latrinidad-list">
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
            <div class="tab-pane fade" id="list-mankayan" role="tabpanel" aria-labelledby="list-mankayan-list">
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
            <div class="tab-pane fade" id="list-sablan" role="tabpanel" aria-labelledby="list-sablan-list">
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
            <div class="tab-pane fade" id="list-tuba" role="tabpanel" aria-labelledby="list-tuba-list">
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
            <div class="tab-pane fade" id="list-tublay" role="tabpanel" aria-labelledby="list-tublay-list">
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

    <?php
            function callLabel($callMun){
              $yearSearchedFrom = $_POST['fromYear'];
              $yearSearchedTo = $_POST['toYear'];
              $cropSelected = $_POST['cropNameSelect'];
              echo "<p class='container text-center blockquote pb-2'><i class='far fa-lightbulb pe-2'></i> " . $cropSelected." production from ".$yearSearchedFrom." to ".$yearSearchedTo. " in ".$callMun . "</p>";
            }
            
            ?>
    
</div>
<?php include 'template/footer.php'; ?>