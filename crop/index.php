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
               <div class="card">
                  <div class="card-body">
                     <div class="d-flex mb-3">
                        <div class="p-2">
                           <h1>Crop Management</h1>
                        </div>
                        <div class="ms-auto p-2">
                           <button type="button" class="btn btn-color-primary btn-lg ripple-surface-dark" data-mdb-toggle="modal" data-mdb-target="#exampleModal">ADD CROP</button>
                        </div>
                     </div>
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
                        <label>Upload CSV File </label>
                        <input type="file" class="form-control" multiple="" accept=".csv">
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
            </div>
         </div>
      </section>
   </div>
   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <form action="" method="POST" enctype="multipart/form-data">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Crop Data</h5>
                  <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <!--<div class="form-outline mb-4">
                     <input type="text" id="firstname" class="form-control" name="farmerFName"/>
                     <label class="form-label" for="firstname">First name</label>
                     </div>
                     <div class="form-outline mb-4">
                     <input type="text" id="lastname" class="form-control" name="farmerLName"/>
                     <label class="form-label" for="lastname">Last Name</label>
                     </div>
                     <div class="form-outline mb-4">
                     <input type="number" id="lastname" class="form-control" name="contact_number"/>
                     <label class="form-label" for="lastname">Contact Number</label>
                     </div>
                     <div class="mb-4 form-outline">
                     <select class="form-select"  name="farmerLocation">
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
                     </div>-->
                  <div class="form-group files">
                     <label>Upload Your File </label>
                     <input type="file" class="form-control" multiple="" accept=".csv" name="farmer_csv_file">
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-color-colorAccent ripple-surface-dark" data-mdb-dismiss="modal">Back</button>
                  <button type="submit" class="btn btn-color-primary ripple-surface-dark"  name="csvfile">UPLOAD NOW</button>
               </div>
            </div>
         </div>
      </form>
   </div>
</main>
<!--Main layout-->
<?php include '../template/footer.php'; ?>
<?php
try{
    if(isset($_POST['insert_farmer'])){
       //do action
       if($link){
          $file = $_FILES['csvfile']['tmp_name'];
          $handle = fopen($file, "r");
          $i = 0;
          while( ($cont=fgetcsv($handle, 1000, ",")) !== false ){
              $table = rtrim( $_FILES['csvfile']['name'], ".csv"); //file name of csv
              if($i==0){
                //column and create table if table is not exists
                $harvestYear = $cont[0];
                $munName  = $cont[1];
                $cropName = $cont[2];
                $prodArea = $cont[3];
                $cropProd = $cont[4];
                $prodRate = $cont[5];
                $query = "CREATE TABLE $table ($harvestYear INT(5), $munName VARCHAR(50), $cropName VARCHAR(50), $prodArea FLOAT(50), $cropProd FLOAT(50), $prodRate FLOAT(50))";
                mysqli_query($link, $query);
                echo $query,"<br>";
              }else{
                  //insert data if exist
                  $query = "INSERT INTO $table ($harvestYear , $munName , $cropName , $prodArea , $cropProd , $prodRate) VALUES('$cont[0]', '$cont[1]', '$cont[2]', $cont[3], $cont[4], $cont[5])";
                  echo $query,"<br>";
                  mysqli_query($link, $query);
              }
              $i++;
          }
      }
    }
 }
 catch (Exception $e) {
    echo $e->getMessage();
 }
 catch (InvalidArgumentException $e) {
    echo $e->getMessage();
 }
   /*try{
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
   }*/
   ?>