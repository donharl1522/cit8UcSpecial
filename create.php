<?php
  include "config/connection.php";
?>

<?php include 'template/header.php'; ?>


<!--New design-->
<section class="h-100 h-custom background-color-light">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-8">
                <div class="p-5">
                  <div class="d-flex justify-content-between align-items-center mb-5">
                    <h1 class="fw-bold mb-0 text-black">List Crop Data</h1>
                    <h6 class="mb-0 text-muted"># Crops</h6>
                  </div>
                  <hr class="my-4">

                  <!--crop list-->
                  <?php
                  $res=mysqli_query($link,"select * from maintable");
                  while($row=mysqli_fetch_array($res)):?>
                  <div class="row mb-4 d-flex justify-content-between align-items-center">
                    <div class="col-md-2 col-lg-2 col-xl-2">
                      <img
                        src="https://media.istockphoto.com/vectors/wheat-ears-icon-in-flat-design-style-oats-harvest-crop-symbol-vector-id1281246050?k=20&m=1281246050&s=170667a&w=0&h=XR7P4GBMnwqHZx75mExrM-_2tJCyaOKBpx4K6TepDPM="
                        class="img-fluid rounded-3">
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2">
                      <h6 class="text-muted"><?php echo $row["municipality"]; ?></h6>
                      <h6 class="text-black mb-0"><?php echo $row["name"]; ?></h6>
                    </div>
                    <div class="col-md-1 col-lg-1 col-xl-1 d-flex">
                      <h6 class="mb-0"><?php echo $row["area"]; ?> (ha)</h6>
                    </div>
                    <div class="col-md-3 col-lg-1 col-xl-1 d-flex">
                      <h6 class="mb-0"><?php echo $row["production"]; ?> (mt)</h6>
                    </div>
                    <div class="col-md-3 col-lg-1 col-xl-1 d-flex">
                      <h6 class="mb-0"><?php echo $row["productivity"]; ?> (mt/ha)	</h6>
                    </div>
                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                      <a href="edit.php?id=<?php echo $row["id"]; ?>" class="text-muted"><i class="far fa-edit"></i></a>
                      <a href="delete.php?id=<?php echo $row["id"]; ?>" class="text-muted"><i class="fas fa-times me-1"></i></a>
                    </div>
                  </div>

                  <hr class="my-4">
                  <?php endwhile ?>
                  <!--end crop list-->

                  <div class="pt-5">
                    <h6 class="mb-0"><a href="index.php?id=" class="text-body"><i
                          class="fas fa-long-arrow-alt-left me-2"></i>Back to home</a></h6>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 bg-grey">
                <!--form-->
                <form action="" name="form1" method="post">
                  <div class="p-5">
                    <h3 class="fw-bold mb-5 mt-2 pt-1">Add Crop Data</h3>
                    <hr class="my-4">

                    <h5 class="text-uppercase mb-3">Municipality</h5>

                    <div class="mb-4 pb-2">
                      <select class="form-select"  name="municipality" id="municipality">
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
                    </div>


                    <h5 class="text-uppercase mb-3">Cropname</h5>

                    <div class="mb-5">
                      <div class="form-outline">
                        <input type="text" id="name" name="name" class="form-control form-control-lg" />
                        <label class="form-label" for="name">Enter Crop Name Here</label>
                      </div>
                    </div>


                    <h5 class="text-uppercase mb-3">Area Harvested (ha)	</h5>

                    <div class="mb-5">
                      <div class="form-outline">
                        <input type="number" id="area" name="area" class="form-control form-control-lg" />
                        <label class="form-label" for="area">Enter Area Harvested (ha) here</label>
                      </div>
                    </div>


                    <h5 class="text-uppercase mb-3">Production (mt)	</h5>

                    <div class="mb-5">
                      <div class="form-outline">
                        <input type="number" id="production" name="production" class="form-control form-control-lg" />
                        <label class="form-label" for="production">Enter Production (mt) here</label>
                      </div>
                    </div>

                    <h5 class="text-uppercase mb-3">Productivity (mt/ha)</h5>

                    <div class="mb-5">
                      <div class="form-outline">
                        <input type="number" id="productivity" name="productivity" class="form-control form-control-lg" />
                        <label class="form-label" for="productivity">Enter Productivity (mt/ha) here</label>
                      </div>
                    </div>

                    <hr class="my-4">

                    <button type="submit" name="insert" class="btn btn-color-primary btn-block btn-lg"
                      data-mdb-ripple-color="dark">Insert Crop</button>
                  </div>
                </form>
                <!--end form-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>

<?php
  if(isset($_POST['insert']))
  {
    mysqli_query($link, "insert into maintable values(NULL, '$_POST[name]', '$_POST[municipality]', '$_POST[area]', '$_POST[production]', '$_POST[productivity]')");
    ?>
    <script type="text/javascript">
      window.location.href=window.location.href;
    </script>
    <?php
  }


  if(isset($_POST["delete"]))
  {
    mysqli_query($link, "delete from maintable where name='$_POST[name]'");
    mysqli_query($link, "delete from maintable where municipality='$_POST[municipality]'");
    mysqli_query($link, "delete from maintable where area='$_POST[area]'");
    mysqli_query($link, "delete from maintable where production='$_POST[production]'");
    mysqli_query($link, "delete from maintable where productivity='$_POST[productivity]'");
    ?>
    <script type="text/javascript">
      window.location.href=window.location.href;
    </script>
    <?php
  }


?>
<?php include 'template/footer.php'; ?>