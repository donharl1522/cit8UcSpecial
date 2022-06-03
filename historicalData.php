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
              <select class="form-select" name="munName" id="munName">
                <option disabled selected>From</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
              </select>
            </div>

            <div class="col">
              <select class="form-select" name="munName" id="munName">
                <option disabled selected>To</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
              </select>
            </div>
          </div>
          <!-- Right links -->
          <ul class="navbar-nav ms-auto d-flex flex-row">
            <!-- Search form -->
            <form class="d-none d-md-flex input-group w-auto my-auto">
              <select
                class="form-select"
                name="munName"
                id="munName"
                onchange="yesnoCheck(this)"
              >
                <option disabled selected>Crops</option>
                <option value="VEGETABLES">VEGETABLES</option>
                <option value="VEGETABLES">VEGETABLES</option>
                <option value="other">Others</option>
              </select>

              <input
                autocomplete="off"
                type="search"
                class="form-control rounded"
                placeholder="Search"
                style="min-width: 225px"
                style="display: none"
                id="ifYes"
              />
              <span class="input-group-text border-0"
                ><i class="fas fa-search"></i
              ></span>
            </form>
          </ul>
        </div>
        <!-- Container wrapper -->
      </nav>
    </div>
    <!---End Navigation-->
    <div class="container my-5">
      <div class="container-fluid">
        <h1>Search Result for Atok</h1>
      </div>
    </div>

    <div class="container my-5">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <!-- Tabs navs -->
            <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
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
            <div class="tab-content" id="ex2-content">
              <div
                class="tab-pane fade show active"
                id="all-tabs-1"
                role="tabpanel"
                aria-labelledby="all-tab-1"
              >
                All content
              </div>
              <div
                class="tab-pane fade"
                id="atok-tabs-1"
                role="tabpanel"
                aria-labelledby="atok-tab-1"
              >
                Atok content
              </div>
              <div
                class="tab-pane fade"
                id="bakun-tabs-2"
                role="tabpanel"
                aria-labelledby="bakun-tab-2"
              >
                Bakun content
              </div>
              <div
                class="tab-pane fade"
                id="bokod-tabs-3"
                role="tabpanel"
                aria-labelledby="bokod-tab-3"
              >
                Bokod content
              </div>
              <div
                class="tab-pane fade"
                id="biguias-tabs-4"
                role="tabpanel"
                aria-labelledby="biguias-tab-4"
              >
                Biguuas content
              </div>
              <div
                class="tab-pane fade"
                id="itogon-tabs-5"
                role="tabpanel"
                aria-labelledby="itogon-tab-5"
              >
                Itogon content
              </div>
              <div
                class="tab-pane fade"
                id="kabayan-tabs-6"
                role="tabpanel"
                aria-labelledby="kabayan-tab-6"
              >
                kabayan content
              </div>
              <div
                class="tab-pane fade"
                id="kapangan-tabs-7"
                role="tabpanel"
                aria-labelledby="kabayan-tab-7"
              >
                kapangan content
              </div>
              <div
                class="tab-pane fade"
                id="kibungan-tabs-8"
                role="tabpanel"
                aria-labelledby="kibungan-tab-8"
              >
                kibungan content
              </div>
              <div
                class="tab-pane fade"
                id="trinidad-tabs-8"
                role="tabpanel"
                aria-labelledby="trinidad-tab-8"
              >
                la trinidad content
              </div>
              <div
                class="tab-pane fade"
                id="mankayan-tabs-9"
                role="tabpanel"
                aria-labelledby="mankayan-tab-9"
              >
                Mankayan content
              </div>
              <div
                class="tab-pane fade"
                id="sablan-tabs-10"
                role="tabpanel"
                aria-labelledby="sablan-tab-10"
              >
                sablan content
              </div>
              <div
                class="tab-pane fade"
                id="tuba-tabs-11"
                role="tabpanel"
                aria-labelledby="tuba-tab-11"
              >
                Tuba content
              </div>
              <div
                class="tab-pane fade"
                id="tublay-tabs-12"
                role="tabpanel"
                aria-labelledby="tublay-tab-12"
              >
                Tublay content
              </div>
            </div>
            <!-- Tabs content -->
          </div>
        </div>
      </div>
    </div>
    <!--END NEW DATA SORTING-->

    <!--END SORTING TABLE-->


<div class="container my-5">
  <div class="container-fluid">
    <table class="table align-middle mb-0 bg-white">

        <form action="" method="POST">

          <select  name="harvestYear" id="harvestYear">
          <option value="">Choose Year</option>
          <option value="2019">2019</option>
          <option value="2018">2018</option>
          <option value="2017">2017</option>
          <option value="2016">2016</option>
          <option value="2015">2015</option>
        </select>

        <input type="text" name="cropName" placeholder="Enter Crop Name">

        <select  name="munName" id="munName">
          <option value="">Choose Municipality</option>
          <option value="Baguio">Atok</option>
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


        <br>
        <input type="submit" name="search" value="Search Data">
        </form>

        <?php
          if(isset($_POST['search']))
          {
            $harvestYear = $_POST['harvestYear'];
            $munName = $_POST['munName'];
            $cropName = $_POST['cropName'];

            $query= "SELECT * FROM historicaltable 
              where harvestYear = '$harvestYear'
                OR (cropName = '$cropName'
                      OR cropName = Null)
                OR (munName = '$munName'
                      OR munName = Null)";

            $query_run = mysqli_query($link, $query);

            while($row = mysqli_fetch_array($query_run))
          {
        ?>

          <tr>
            <td>
              <p class="fw-normal mb-1"><?php echo $row["harvestYear"]; ?></p>
            </td>
            <td>
              <p class="fw-normal mb-1"><?php echo $row["cropName"]; ?></p>
            </td>
            <td>
              <p class="fw-normal mb-1"><?php echo $row["munName"]; ?></p>
              <p class="text-muted mb-0">Benguet</p>
            </td>
            <td>
              <p class="fw-normal mb-1"><?php echo $row["prodArea"]; ?></p>
              <p class="text-muted mb-0">ha</p>
            </td>
            <td>
              <p class="fw-normal mb-1"><?php echo $row["cropProd"]; ?></p>
              <p class="text-muted mb-0">mt</p>
            </td>
            <td>
              <p class="fw-normal mb-1"><?php echo $row["prodRate"]; ?></p>
              <p class="text-muted mb-0">mt/ha</p>
            </td>
          </tr>
          <?php
            }
          }
        ?>

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
        $res=mysqli_query($link,"select * from historicaltable");
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
              <p class="text-muted mb-0">Benguet</p>
            </td>
            <td>
              <p class="fw-normal mb-1"><?php echo $row["prodArea"]; ?></p>
              <p class="text-muted mb-0">ha</p>
            </td>
            <td>
              <p class="fw-normal mb-1"><?php echo $row["cropProd"]; ?></p>
              <p class="text-muted mb-0">mt</p>
            </td>
            <td>
              <p class="fw-normal mb-1"><?php echo $row["prodRate"]; ?></p>
              <p class="text-muted mb-0">mt/ha</p>
            </td>
          </tr>
        <?php endwhile?>
      </tbody>
    </table>
  </div>
</div>
<?php include 'template/footer.php'; ?>
