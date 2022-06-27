<?php
  require "config/connection.php";
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
                    <!--<div class="col-md-2 col-lg-2 col-xl-2">
                      <img
                        src="https://media.istockphoto.com/vectors/wheat-ears-icon-in-flat-design-style-oats-harvest-crop-symbol-vector-id1281246050?k=20&m=1281246050&s=170667a&w=0&h=XR7P4GBMnwqHZx75mExrM-_2tJCyaOKBpx4K6TepDPM="
                        class="img-fluid rounded-3">
                    </div>-->
                    <div class="col-md-2 col-lg-2 col-xl-2">
                      <h6 class="text-muted"><?php echo " Harvest Year"; ?></h6>
                      <h6 class="text-black mb-0"><?php echo $row["harvestYear"]; ?></h6>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2">
                      <h6 class="text-muted"><?php echo "Crop Name"; ?></h6>
                      <h6 class="text-black mb-0"><?php echo $row["cropName"]; ?></h6>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2">
                      <h6 class="text-muted"><?php echo "Municipality"; ?></h6>
                      <h6 class="text-black mb-0"><?php echo $row["munName"]; ?></h6>
                    </div>
                    <div class="col-md-2 col-lg-1 col-xl-2">
                      <h6 class="text-muted"><?php echo "Area"; ?></h6>
                      <h6 class="text-black mb-0"><?php echo $row["prodArea"]; ?>(ha)</h6>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2">
                      <h6 class="text-muted"><?php echo "Production"; ?></h6>
                      <h6 class="text-black mb-0"><?php echo $row["cropProd"]; ?>(mt)</h6>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2">
                      <h6 class="text-muted"><?php echo "Productivity"; ?></h6>
                      <h6 class="text-black mb-0"><?php echo $row["prodRate"]; ?>(mt/ha)</h6>
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
                    <h6 class="mb-0"><a href="homePage.php?id=" class="text-body"><i
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
                      <select class="form-select"  name="munName" id="munName">
                        <option value="">Choose Municipality</option>
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
                    </div>

                    <h5 class="text-uppercase mb-3"> Harvest Year </h5>

                    <div class="mb-5">
                      <div class="form-outline">
                        <input type="number" id="harvestYear" name="harvestYear" class="form-control form-control-lg" />
                        <label class="form-label" for="harvestYear">Harvest Year</label>
                      </div>
                    </div>


                    <h5 class="text-uppercase mb-3">Crop name</h5>

                    <div class="mb-5">
                      <div class="form-outline">
                        <input type="text" id="cropName" name="cropName" class="form-control form-control-lg" />
                        <label class="form-label" for="cropName">Enter Crop Name Here</label>
                      </div>
                    </div>


                    <h5 class="text-uppercase mb-3">Area Harvested (ha) </h5>

                    <div class="mb-5">
                      <div class="form-outline">
                        <input type="number" id="prodArea" name="prodArea" class="form-control form-control-lg" />
                        <label class="form-label" for="prodArea">Enter Area Harvested (ha) here</label>
                      </div>
                    </div>


                    <h5 class="text-uppercase mb-3">cropProd (mt) </h5>

                    <div class="mb-5">
                      <div class="form-outline">
                        <input type="number" id="cropProd" name="cropProd" class="form-control form-control-lg" />
                        <label class="form-label" for="cropProd">Enter Production (mt) here</label>
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
  try{
  if(isset($_POST['insert']))
  {
    $val1 = (int)$_POST['prodArea'];
    $val2 = (int)$_POST['cropProd'];
    

    $ha = floatval( $val1 );
    $mt = floatval( $val2 );
    $res = floatval( $mt / $ha );
    mysqli_query($link, "insert into maintable values(NULL, '$_POST[harvestYear]', '$_POST[cropName]', '$_POST[munName]', '$_POST[prodArea]', '$_POST[cropProd]', '$res')");
    ?>
    <script type="text/javascript">
      window.location.href=window.location.href;
    </script>
    <?php
  }
  } catch (Exception $e) {
    echo $e->getMessage();
}
catch (InvalidArgumentException $e) {
    echo $e->getMessage();
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