<?php 
    require "../config/connection.php"; 
    $cropID=$_GET["cropID"];

    $cropName="";
    $cropStart="";
    $cropMaturity="";
    $cropHarvest="";
    $cropSeason="";
    $cropLocation="";

  
    $res=mysqli_query($link, "SELECT * FROM crops_table WHERE cropID=$cropID");
    while($row=mysqli_fetch_array($res)){
        $cropName=$row["cropName"];
        $cropStart=$row["cropStart"];
        $cropMaturity=$row["cropMaturity"];
        $cropHarvest=$row["cropHarvest"];
        $cropSeason=$row["cropSeason"];
        $cropLocation=$row["cropLocation"];
    }
?>
<?php include '../template/header.php'; ?>


<section class="vh-100" style="background-color:#F6F7FB;">
  <div class="container my-5 ms-5">
    <div class="container-fluid">
      <h1 class="display-1">Crops</h1>
      <p class="lead">
        Update Crop Data Here
      </p>

      <div class="card">
        <div class="card-body">
          <h1 class="my-3 h3">Crop Information</h1>
          <form action="" method="POST">
            <div class="row">
              <div class="col">
                <!-- Crop name input -->
                <div class="form-outline mb-4">
                  <input type="text" id="cropName" class="form-control" name="cropName" value="<?php echo $cropName; ?>"/>
                  <label class="form-label" for="cropName">Crop Name</label>
                </div>
              </div>

              <div class="col">
                <!-- Crop start input -->
                <div class="form-outline mb-4">
                  <input type="date" id="cropStart" class="form-control" name="cropStart" value="<?php echo $cropStart; ?>"/>
                  <label class="form-label" for="cropStart">Crop Start</label>
                </div>
              </div>

              <div class="col">
                <!-- Crop harvest input -->
                <div class="form-outline mb-4">
                  <input type="date" id="cropHarvest" class="form-control" name="cropHarvest" value="<?php echo $cropHarvest; ?>"/>
                  <label class="form-label" for="cropHarvest">Crop Harvest</label>
                </div>
              </div>
            </div>

            <!-- Crop cropSeason input -->
            <div class="form-outline mb-4">
              <input type="text" id="cropSeason" class="form-control"  name="cropSeason" value="<?php echo $cropSeason; ?>"/>
              <label class="form-label" for="cropSeason">Crop Season</label>
            </div>

            <!-- Crop Maturity input -->
            <div class="form-outline mb-4">
              <input type="text" id="cropMaturity" class="form-control" name="cropMaturity" value="<?php echo $cropMaturity; ?>"/>
              <label class="form-label" for="cropMaturity">Crop Maturity</label>
            </div>

            <!-- Crop location input -->
            <div class="form-outline mb-4">
              <select class="form-select"  name="cropLocation">
                      <option disabled>Crop Location</option>
                      <option value="<?php echo $cropLocation; ?>" selected><?php echo $cropLocation; ?></option>
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
            <button type="submit" class="btn btn-primary float-end" name="update_crop">Update Crop</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include '../template/footer.php'; ?>

<?php
  if(isset($_POST["update_crop"]))
  {
    mysqli_query($link, "UPDATE crops_table SET cropName='$_POST[cropName]', cropStart='$_POST[cropStart]', cropMaturity='$_POST[cropMaturity]' , cropHarvest='$_POST[cropHarvest]' ,cropSeason='$_POST[cropSeason]' , cropLocation='$_POST[cropLocation]' WHERE cropID=$cropID");
    ?>
    <script type="text/javascript">
      window.location="crop.php";
    </script>
    <?php
  }

?>
