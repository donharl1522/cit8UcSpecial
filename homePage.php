<?php
  require "config/connection.php";
?>

<?php include 'template/header.php'; ?>
<section>
  <div class="container">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <img class="img-fluid" src="images/farmers-using-modern-farming-technology-4254627-3535116.webp" />
        </div>
        <div class="col">
          <div class="container my-5">
            <p class="h1">Website Prototype</p>
            <p class="lead">This website is meant as a prototype</p>

            <a class="btn btn-color-primary" href="create.php?id=">Edit</a>
            <a class="btn btn-color-primary" href="historicalData.php?id=">Historical Data</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<div class="container my-5">
  <div class="row">
  <?php
      $res=mysqli_query($link,"select * from maintable");
      while($row=mysqli_fetch_array($res)):?>
        <div class="col">
          <div class="card" style="width: 18rem;">
                  <img src="https://media.istockphoto.com/vectors/wheat-ears-icon-in-flat-design-style-oats-harvest-crop-symbol-vector-id1281246050?k=20&m=1281246050&s=170667a&w=0&h=XR7P4GBMnwqHZx75mExrM-_2tJCyaOKBpx4K6TepDPM=" class="card-img-top" alt="Chicago Skyscrapers"/>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $row["cropName"]; ?></h5>
                    <p class="card-text"><i class="fas fa-map-marker-alt me-2"></i> <?php echo $row["munName"]; ?></p>
                  </div>
                  <ul class="list-group list-group-light list-group-small">
                    <li class="list-group-item px-4"><i class="fas fa-chart-area me-4"></i><?php echo $row["prodArea"]; ?> (ha)</li>
                    <li class="list-group-item px-4"><i class="fas fa-balance-scale me-4"></i><?php echo $row["cropProd"]; ?> (mt)</li>
                    <li class="list-group-item px-4"><i class="fas fa-chart-line me-4"></i><?php echo $row["prodRate"]; ?> (mt/ha)</li>
                  </ul>
                  <div class="card-body">
                    <a href="delete.php?id=<?php echo $row["id"]; ?>" class="card-link text-danger">Delete</a>
                    <a href="edit.php?id=<?php echo $row["id"]; ?>" class="card-link">Edit</a>
                  </div>
          </div> 
        </div>   
  <?php endwhile ?>
  </div>
</body>

<?php
  if(isset($_POST['insert']))
  {
    mysqli_query($link, "insert into maintable values(NULL, '$_POST[cropName]', '$_POST[munName]', '$_POST[prodArea]', '$_POST[cropProd]', '$_POST[prodRate]')");
    ?>
    <script type="text/javascript">
      window.location.href=window.location.href;
    </script>
    <?php
  }


  if(isset($_POST["delete"]))
  {
    mysqli_query($link, "delete from maintable where cropName='$_POST[cropName]'");
    mysqli_query($link, "delete from maintable where munName='$_POST[munName]'");
    mysqli_query($link, "delete from maintable where prodArea='$_POST[prodArea]'");
    mysqli_query($link, "delete from maintable where cropProd='$_POST[cropProd]'");
    mysqli_query($link, "delete from maintable where prodRate='$_POST[prodRate]'");
    ?>
    <script type="text/javascript">
      window.location.href=window.location.href;
    </script>
    <?php
  }


?>
<?php include 'template/footer.php'; ?>