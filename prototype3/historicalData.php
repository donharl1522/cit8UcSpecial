<?php
  include "config/connection.php";
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
              <p class="fw-normal mb-1"><?php echo $row["year"]; ?></p>
            </td>
            <td>
              <p class="fw-normal mb-1"><?php echo $row["name"]; ?></p>
            </td>
            <td>
              <p class="fw-normal mb-1"><?php echo $row["municipality"]; ?></p>
              <p class="text-muted mb-0">Benguet</p>
            </td>
            <td>
              <p class="fw-normal mb-1"><?php echo $row["area"]; ?></p>
              <p class="text-muted mb-0">ha</p>
            </td>
            <td>
              <p class="fw-normal mb-1"><?php echo $row["production"]; ?></p>
              <p class="text-muted mb-0">mt</p>
            </td>
            <td>
              <p class="fw-normal mb-1"><?php echo $row["productivity"]; ?></p>
              <p class="text-muted mb-0">mt/ha</p>
            </td>
          </tr>
        <?php endwhile?>
      </tbody>
    </table>
  </div>
</div>
<?php include 'template/footer.php'; ?>
