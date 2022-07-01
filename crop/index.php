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
<main style="margin-top: 28px;">
  <div class="container pt-4">
  <div class="container">
   <div class="conatiner-fluid">
      <div class="card">
         <div class="card-body">
            <div class="d-flex mb-3">
               <div class="p-2">
                  <h1>Farmer Management</h1>
               </div>
               <div class="ms-auto p-2">
                  <button type="button" class="btn btn-color-primary btn-lg ripple-surface-dark" data-mdb-toggle="modal" data-mdb-target="#exampleModal">ADD Farmer</button>
               </div>
            </div>
            <!--<div class="form-group files">
               <form action="" method="POST" enctype="multipart/form-data">
                  <label>Upload Your File </label>
                  <input type="file" class="form-control" multiple="" accept=".csv" name="farmer_csv_file">
                  <div class="d-flex flex-row-reverse my-3">
                     <button class="btn btn-color-primary btn-lg ripple-surface-dark" type="submit" name="upload_farmer_csv">INSERT FARMER DATA</button>
                  </div>
               </form>
            </div>-->
            <!-- Tabs navs -->
            <ul class="nav nav-tabs nav-justified mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
               <a
                  class="nav-link active"
                  id="ex3-tab-1"
                  data-mdb-toggle="tab"
                  href="#ex3-tabs-1"
                  role="tab"
                  aria-controls="ex3-tabs-1"
                  aria-selected="true"
                  >Last Name</a
               >
            </li>
            <li class="nav-item" role="presentation">
               <a
                  class="nav-link"
                  id="ex3-tab-2"
                  data-mdb-toggle="tab"
                  href="#ex3-tabs-2"
                  role="tab"
                  aria-controls="ex3-tabs-2"
                  aria-selected="false"
                  >Municipality</a
               >
            </li>
            </ul>
            <!-- Tabs navs -->

            <!-- Tabs content -->
            <div class="tab-content" id="ex2-content">
            <div
               class="tab-pane fade show active"
               id="ex3-tabs-1"
               role="tabpanel"
               aria-labelledby="ex3-tab-1"
            >
               <!--Last Name-->
               <table class="table align-middle mb-0 bg-white">
                  <thead class="bg-light">
                     <tr>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Location</th>
                        <th scope="col">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        $res=mysqli_query($link,"SELECT * FROM farmers_table ORDER BY farmerLName ASC");
                        while($row=mysqli_fetch_array($res)):?>
                     <tr>
                        <td><?php echo $row["farmerName"]; ?></td>
                        <td class="fw-bold"><?php echo $row["farmerLName"]; ?></td>
                        <td class="fw-bold"><?php echo $row["farmer_contact_number"]; ?></td>
                        <td><?php echo $row["farmerLocation"]; ?></td>
                        <td>
                           <a href="delete_farmer.php?farmerID=<?php echo $row["farmerID"]; ?>" class="btn btn-link btn-rounded btn-sm fw-bold" data-ripple-color="dark">
                           <i class="fas fa-times"></i>
                           </a>
                           <a href="edit_farmer.php?farmerID=<?php echo $row["farmerID"]; ?>" class="btn btn-link btn-rounded btn-sm fw-bold" data-ripple-color="dark">
                           <i class="fas fa-check"></i>
                           </a>
                        </td>
                     </tr>
                     <?php endwhile ?>
                  </tbody>
               </table>
            </div>
            <div
               class="tab-pane fade"
               id="ex3-tabs-2"
               role="tabpanel"
               aria-labelledby="ex3-tab-2"
            >
                  <!--Muniicipality-->
                  <table class="table align-middle mb-0 bg-white">
                     <thead class="bg-light">
                        <tr>
                           <th scope="col">First Name</th>
                           <th scope="col">Last Name</th>
                           <th scope="col">Contact Number</th>
                           <th scope="col">Location</th>
                           <th scope="col">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           $res=mysqli_query($link,"SELECT * FROM farmers_table ORDER BY farmerLocation ASC");
                           while($row=mysqli_fetch_array($res)):?>
                        <tr>
                           <td><?php echo $row["farmerName"]; ?></td>
                           <td><?php echo $row["farmerLName"]; ?></td>
                           <td class="fw-bold"><?php echo $row["farmer_contact_number"]; ?></td>
                           <td class="fw-bold"><?php echo $row["farmerLocation"]; ?></td>
                           <td>
                              <a href="delete_farmer.php?farmerID=<?php echo $row["farmerID"]; ?>" class="btn btn-link btn-rounded btn-sm fw-bold" data-ripple-color="dark">
                              <i class="fas fa-times"></i>
                              </a>
                              <a href="edit_farmer.php?farmerID=<?php echo $row["farmerID"]; ?>" class="btn btn-link btn-rounded btn-sm fw-bold" data-ripple-color="dark">
                              <i class="fas fa-check"></i>
                              </a>
                           </td>
                        </tr>
                        <?php endwhile ?>
                     </tbody>
                  </table>
            </div>
            </div>
            <!-- Tabs content -->
            <!--<table class="table align-middle mb-0 bg-white">
               <thead class="bg-light">
                  <tr>
                     <th scope="col">First Name</th>
                     <th scope="col">Last Name</th>
                     <th scope="col">Location</th>
                     <th scope="col">Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     $res=mysqli_query($link,"SELECT * FROM farmers_table");
                     while($row=mysqli_fetch_array($res)):?>
                  <tr>
                     <td><?php echo $row["farmerName"]; ?></td>
                     <td><?php echo $row["farmerLName"]; ?></td>
                     <td><?php echo $row["farmerLocation"]; ?></td>
                     <td>
                        <a href="delete_farmer.php?farmerID=<?php echo $row["farmerID"]; ?>" class="btn btn-link btn-rounded btn-sm fw-bold" data-ripple-color="dark">
                        <i class="fas fa-times"></i>
                        </a>
                        <a href="edit_farmer.php?farmerID=<?php echo $row["farmerID"]; ?>" class="btn btn-link btn-rounded btn-sm fw-bold" data-ripple-color="dark">
                        <i class="fas fa-check"></i>
                        </a>
                     </td>
                  </tr>
                  <?php endwhile ?>
               </tbody>
            </table>-->
         </div>
      </div>
   </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <form action="" method="POST" enctype="multipart/form-data">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Add Farmer Data</h5>
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
<!--Sample Card-->
<!--<div class="container">
   <div class="container-fluid">
      <div class="row">
         <div class="col-xl-6 mb-4">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div class="d-flex align-items-center">
                        <img
                           src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                           alt=""
                           style="width: 45px; height: 45px"
                           class="rounded-circle"
                           />
                        <div class="ms-3">
                           <p class="fw-bold mb-1">Kent Cabatuan</p>
                           <p class="text-muted mb-0">Atok</p>
                        </div>
                     </div>
                     <span class="badge rounded-pill badge-success">Active</span>
                  </div>
               </div>
               <div
                  class="card-footer border-0 bg-light p-2 d-flex justify-content-around"
                  >
                  <a
                     class="btn btn-link m-0 text-reset"
                     href="#"
                     role="button"
                     data-ripple-color="primary"
                     >Delete<i class="fas fa-trash-alt ms-2"></i
                     ></a>
                  <a
                     class="btn btn-link m-0 text-reset"
                     href="#"
                     role="button"
                     data-ripple-color="primary"
                     >Update<i class="fas fa-edit ms-2"></i
                     ></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>-->
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
  /* try{
     if(isset($_POST['insert_farmer']))
     {
       mysqli_query($link, "INSERT INTO farmers_table values(null,'$_POST[farmerFName]', '$_POST[farmerLName]','$_POST[contact_number]', '$_POST[farmerLocation]' )");
       
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
*/?>