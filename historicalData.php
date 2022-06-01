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

            <a class="btn btn-color-primary" href="index.php?id=">Home</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


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
