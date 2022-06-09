<?php
  require "config/connection.php";
?>

<?php include 'template/header.php'; ?>

<header>
<?php include 'template/navbar.php'; ?>
<!-- Background image -->
<div
    class="p-5 text-center bg-image"
    style="
      background-image: url('https://github.com/donharl1522/cit8UcSpecial/blob/main/UI%20files/wp%20orig.jpeg?raw=true');
      height: 400px;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">CRUD</h1>
          <h4 class="mb-3">Subheading</h4>
          <a class="btn btn-outline-light btn-lg" href="create.php?id=" role="button"
          >GO TO CRUD</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>

<section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-6 col-lg-5 d-none d-md-block">
          <!--Text Content Here-->
          <h1 class="display-1 custom-text-primary">NEWS</h1>
          <p class="lead">
            Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est
            non commodo luctus.
          </p>
          <a class="btn btn-color-primary" href="index2.php">
            <i class="fas fa-angle-double-right pe-2"></i>
            Proceed
          </a>
        </div>
        <div class="col-md-6 col-lg-7 d-flex align-items-center">
          <!--Graphics Content Here-->
          <img src="https://img.freepik.com/free-vector/flat-design-farm-landscape-background_52683-11172.jpg" class="img-fluid" alt="Wild Landscape" />
        </div>
      </div>
    </div>
  </section>

  <!--Alternate-->
  <section class="vh-100 background-color-primary">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-6 col-lg-7 d-flex align-items-center">
          <!--Graphics Content Here-->
          <img src="images/farmers-using-modern-farming-technology-4254627-3535116.webp" class="img-fluid" alt="Wild Landscape" />
        </div>
        <div class="col-md-6 col-lg-5 d-none d-md-block ">
          <!--Text Content Here-->
          <h1 class="display-1 text-white">HISTORY DATA</h1>
          <p class="lead text-white">
            Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est
            non commodo luctus.
          </p>
          <a class="btn btn-outline-light" href="historicalData.php?id=">
            <i class="fas fa-angle-double-right pe-2"></i>
            Proceed
          </a>
        </div>
      </div>
    </div>
  </section>

  <!--Community-->
  <div class="container py-4 py-xl-5">
    <div class="row mb-5">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
            <h2>Community</h2>
            <p class="w-lg-50">Curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra nunc. Vestibulum dui eget ultrices.</p>
            <a class="custom-text-primary" href="#">See More</a>
        </div>
    </div>
    <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
        <div class="col">
            <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" />
                <div class="card-body p-4">
                    <p class="custom-text-primary card-text mb-0">Article</p>
                    <h4 class="card-title">Lorem libero donec</h4>
                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" />
                        <div>
                            <p class="fw-bold mb-0">John Smith</p>
                            <p class="text-muted mb-0">Erat netus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" />
                <div class="card-body p-4">
                    <p class="custom-text-primary card-text mb-0">Article</p>
                    <h4 class="card-title">Lorem libero donec</h4>
                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" />
                        <div>
                            <p class="fw-bold mb-0">John Smith</p>
                            <p class="text-muted mb-0">Erat netus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" />
                <div class="card-body p-4">
                    <p class="custom-text-primary card-text mb-0">Article</p>
                    <h4 class="card-title">Lorem libero donec</h4>
                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                    <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" />
                        <div>
                            <p class="fw-bold mb-0">John Smith</p>
                            <p class="text-muted mb-0">Erat netus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
        <div class="col-md-6 mb-4">
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