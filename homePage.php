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
          <h1 class="mb-3">CROP DATA</h1>
          <!--<h4 class="mb-3">Subheading</h4>-->
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


  <!--Crop Management-->
  <section class="vh-100 background-color-primary">
    <!-- Background image -->
    <div
      class="bg-image"
      style="
        background-image: url('https://images.unsplash.com/photo-1511735643442-503bb3bd348a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y3JvcHxlbnwwfHwwfHw%3D&w=1000&q=80');
        height: 100vh;
      "
    >
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
        <div class="container py-5 h-100 h-100">
          <br><br><br><br><br><br><br>
          <!--Text Content Here-->
          <h1 class="display-1 text-white">CROP MANAGEMENT</h1>
              <p class="lead text-white">
                Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est
                non commodo luctus.
              </p>
              <a class="btn btn-outline-light" data-mdb-ripple-color="dark" href="crop/">
                <i class="fas fa-angle-double-right pe-2"></i>
                Proceed
              </a>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </section>
  <!--Crop Management-->
 
  <!--Farmer Management-->
  <section class="vh-100  background-color-secondary">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-6 col-lg-5 d-none d-md-block">
          <!--Text Content Here-->
          <h1 class="display-1 custom-text-primary text-white">FARMER MANAGEMENT</h1>
          <p class="lead text-white">
            Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est
            non commodo luctus.
          </p>
          <a class="btn btn-color-primary" href="farmer/">
            <i class="fas fa-angle-double-right pe-2"></i>
            Proceed
          </a>
        </div>
        <div class="col-md-6 col-lg-7 d-flex align-items-center">
          <!--Graphics Content Here-->
          <img src="https://cdn-icons-png.flaticon.com/512/921/921114.png" class="img-fluid" alt="Wild Landscape" />
        </div>
      </div>
    </div>
  </section>
  <!--farmer Management-->
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

<?php include 'template/footer.php'; ?>