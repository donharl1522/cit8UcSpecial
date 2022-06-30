<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../');
	exit;
	//blah blah blah
}
?>
<?php require "../config/connection.php"; ?>
<?php include '../template/header.php'; ?>
<?php include '../template/sidebar.php'; ?>
<!--Main layout-->
<main style="margin-top: 58px;">
  <div class="container pt-4">
  <section class="vw-25">
  <div class="container">
    <div class="container-fluid">
      <h1 class="display-1">Crop Management</h1>
      <p class="lead">
        Add Crop Data Here
      </p>

      <div class="card">
        <div class="card-body">
          <h1 class="my-3 h3">Crop Information</h1>
          <!--<form action="" method="POST">
            <div class="row">
              <div class="col">
                <div class="form-outline mb-4">
                  <input type="text" id="cropName" class="form-control" name="cropName"/>
                  <label class="form-label" for="cropName">Crop Name</label>
                </div>
              </div>

              <div class="col">
                <div class="form-outline mb-4">
                  <input type="date" id="cropStart" class="form-control" name="cropStart"/>
                  <label class="form-label" for="cropStart">Crop Start</label>
                </div>
              </div>

              <div class="col">
                <div class="form-outline mb-4">
                  <input type="date" id="cropHarvest" class="form-control" name="cropHarvest"/>
                  <label class="form-label" for="cropHarvest">Crop Harvest</label>
                </div>
              </div>
            </div>

            <div class="form-outline mb-4">
              <input type="text" id="cropMaturity" class="form-control" name="cropMaturity"/>
              <label class="form-label" for="cropMaturity">Crop Maturity</label>
            </div>

            <div class="form-outline mb-4">     
              <select class="form-select"  name="cropSeason">
                      <option value="">Crop Season</option>
                      <option value="dry">Dry</option>
                      <option value="wet">wet</option>
              </select>
            </div>

            <div class="form-outline mb-4">
              <select class="form-select"  name="cropLocation">
                      <option value="">Crop Location</option>
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
            <button type="submit" class="btn btn-primary float-end" name="insert_crop">Add Crop</button>
          </form>-->
          <div class="form-group files">
                <label>Upload Your File </label>
                <input type="file" class="form-control" multiple="" accept=".csv">
          </div>
        </div>
      </div>

      <table class="table align-middle mb-0 bg-white my-5">
               <thead class="bg-light">
                  <tr>
                    <th>ID</th>
                    <th>Crop Name</th>
                    <th>Crop Start</th>
                    <th>Crop Maturity</th>
                    <th>Crop Harvest</th>
                    <th>Crop Season</th>
                    <th>Crop Location</th>
                    <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     $res=mysqli_query($link,"SELECT * FROM crops_table");
                     while($row=mysqli_fetch_array($res)):?>
                  <tr>
                    <td><?php echo $row["cropID"]; ?></td>
                    <td><?php echo $row["cropName"]; ?></td>
                    <td><?php echo $row["cropStart"]; ?></td>
                    <td><?php echo $row["cropMaturity"]; ?></td>
                    <td><?php echo $row["cropHarvest"]; ?></td>
                    <td><?php echo $row["cropSeason"]; ?></td>
                    <td><?php echo $row["cropLocation"]; ?></td>
                     <td>
                        <a href="delete_crop.php?cropID=<?php echo $row["cropID"]; ?>" class="btn btn-link btn-rounded btn-sm fw-bold" data-ripple-color="dark">
                        <i class="fas fa-times"></i>
                        </a>
                        <a href="edit_crop.php?cropID=<?php echo $row["cropID"]; ?>" class="btn btn-link btn-rounded btn-sm fw-bold" data-ripple-color="dark">
                        <i class="fas fa-check"></i>
                        </a>
                     </td>
                  </tr>
                  <?php endwhile ?>
               </tbody>
            </table>
    </div>
  </div>
</section>

  </div>
</main>
<!--Main layout-->

<?php include '../template/footer.php'; ?>

<?php
  try{
    if(isset($_POST['insert_crop']))
    {
      mysqli_query($link, "INSERT INTO crops_table values(NULL, '$_POST[cropName]', '$_POST[cropStart]', '$_POST[cropMaturity]', '$_POST[cropHarvest]', '$_POST[cropSeason]', '$_POST[cropLocation]' )");
      
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
?>
