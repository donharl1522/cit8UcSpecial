<?php
   // We need to use sessions, so you should always start sessions using the below code.
   session_start();
   // If the user is not logged in redirect to the login page...
   if (!isset($_SESSION['loggedin'])) {
   	header('Location: ../../../login.php');
   	exit;
   	//blah blah blah
   }
   ?>
<?php require "../../../config/connection.php"; ?>
<?php include '../../../template/header.php'; ?>
<?php include '../../../template/sidebar.php'; ?>
<!--Main layout-->
<main style="margin-top: 58px;">
   <div class="container">
   <div class="card">
      <div class="card-body">
         <div class="d-flex mb-3">
            <div class="p-2">
               <h1>Crop Production Data</h1>
            </div>
            <div class="ms-auto p-2">
               <button type="button" class="btn btn-color-primary btn-lg ripple-surface-dark" data-mdb-toggle="modal" data-mdb-target="#insertCropModal">INSERT CROP PRODUCTION DATA</button>
            </div>
         </div>
         <table id="example" class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
               <tr>
                  <th>Harvest Year</th>
                  <th>Crop Name</th>
                  <th>Municipality</th>
                  <th>Area</th>
                  <th>Production</th>
                  <th>Productivity</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <!--crop list-->
               <?php
                  $res=mysqli_query($link,"SELECT * FROM maintable ORDER BY harvestYear DESC");
                  while($row=mysqli_fetch_array($res)):?>
               <tr>
                  <td>
                     <?php echo $row["harvestYear"]; ?>
                  </td>
                  <td>
                     <p class="fw-normal mb-1"><?php echo $row["cropName"]; ?></p>
                  </td>
                  <td>
                     <p class="fw-normal mb-1"><?php echo $row["munName"]; ?></p>
                  </td>
                  <td>
                     <p class="fw-normal mb-1"><?php echo $row["prodArea"]; ?> <span class="text-muted mb-0">ha</span></p>
                  </td>
                  <td>
                     <p class="fw-normal mb-1"><?php echo $row["cropProd"]; ?> <span class="text-muted mb-0">mt</span></p>
                  </td>
                  <td>
                     <p class="fw-normal mb-1"><?php echo $row["prodRate"]; ?> <span class="text-muted mb-0">(mt/ha)</span></p>
                  </td>
                  <td>
                     <a
                        href="delete.php?id=<?php echo $row["id"]; ?>"
                        type="button"
                        class="btn btn-danger btn-rounded btn-sm fw-bold"
                        data-mdb-ripple-color="dark"
                        >
                     Delete
                     </a>
                     <a
                        href="edit.php?id=<?php echo $row["id"]; ?>"
                        type="button"
                        class="btn btn-color-accent btn-rounded text-white btn-sm fw-bold"
                        data-mdb-ripple-color="dark"
                        >
                     Edit
                     </a>
                  </td>
               </tr>
               <?php endwhile ?>
               <!--end crop list-->
            </tbody>
         </table>
      </div>
   </div>
   <!-- Modal crop manual insert-->
   <div class="modal fade" id="insertCropModal" tabindex="-1" aria-labelledby="insertcropModalLabel" aria-hidden="true">
      <form action="" method="POST" name="form1" enctype="multipart/form-data">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="insertcropModalLabel">Crop Production Data</h5>
                  <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <!--form-->
                  <select class="form-select mb-4"  name="munName" id="munName">
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
                  <div class="form-outline mb-4">
                     <input type="number" id="harvestYear" name="harvestYear" class="form-control form-control-lg" />
                     <label class="form-label" for="harvestYear">Harvest Year</label>
                  </div>
                  <div class="form-outline mb-4">
                     <input type="text" id="cropName" name="cropName" class="form-control form-control-lg" />
                     <label class="form-label" for="cropName">Enter Crop Name Here</label>
                  </div>
                  <div class="form-outline mb-4">
                     <input type="number" id="prodArea" name="prodArea" class="form-control form-control-lg" />
                     <label class="form-label" for="prodArea">Enter Area Harvested (ha) here</label>
                  </div>
                  <div class="form-outline mb-4">
                     <input type="number" id="cropProd" name="cropProd" class="form-control form-control-lg" />
                     <label class="form-label" for="cropProd">Enter Production (mt) here</label>
                  </div>
                  <!--end form-->
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-color-colorAccent ripple-surface-dark" data-mdb-dismiss="modal">Back</button>
                  <button type="submit" class="btn btn-color-primary ripple-surface-dark"  name="insert">Insert</button>
               </div>
            </div>
         </div>
      </form>
   </div>
</main>
<!--Main layout-->
<?php include '../../../template/footer.php'; ?>
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