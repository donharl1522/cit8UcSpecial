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
   <div class="container pt-4">
      <section class="vw-25">
         <div class="container">
            <div class="container-fluid">
               <div class="card">
                  <div class="card-body">
                     <div class="d-flex mb-3">
                        <div class="p-2">
                           <h1>Farmer Management</h1>
                        </div>
                        <div class="ms-auto p-2">
                           <button type="button" class="btn btn-color-primary btn-lg ripple-surface-dark mb-2" data-mdb-toggle="modal" data-mdb-target="#csvModal">INSERT FARMER DATA CSV</button>
                           <button type="button" class="btn btn-color-primary btn-lg ripple-surface-dark mb-2" data-mdb-toggle="modal" data-mdb-target="#insertCropModal">INSERT FARMER DATA MANUALY</button>
                        </div>
                     </div>

                     <table id="example" class="table align-middle mb-0 bg-white my-5">
                        <thead class="bg-light">
                           <tr>
                              <th scope="col">First Name</th>
                              <th scope="col">Last Name</th>
                              <th scope="col">Phone Number</th>
                              <th scope="col">Location</th>
                              <th scope="col">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              $res=mysqli_query($link,"SELECT * FROM farmers_table ORDER BY farmerLocation ASC");
                              while($row=mysqli_fetch_array($res)):?>
                           <tr>
                              <td><?php echo $row["farmerFName"]; ?></td>
                              <td><?php echo $row["farmerLName"]; ?></td>
                              <td><?php echo $row["farmer_contact_number"]; ?></td>
                              <td class="fw-bold"><?php echo $row["farmerLocation"]; ?></td>
                              <td>
                                 <a href="delete_farmer.php?farmerID=<?php echo $row["farmerID"]; ?>" class="btn btn-danger btn-rounded btn-sm fw-bold" data-ripple-color="dark">
                                    Delete
                                 </a>
                                 <a href="edit_farmer.php?farmerID=<?php echo $row["farmerID"]; ?>" class="btn btn-color-accent btn-rounded text-white btn-sm fw-bold" data-ripple-color="dark">
                                    Edit
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
   <!-- Modal csv-->
   <div class="modal fade" id="csvModal" tabindex="-1" aria-labelledby="csvModalLabel" aria-hidden="true">
      <form action="" method="POST" enctype="multipart/form-data">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="csvModalLabel">Add Farmer Data</h5>
                  <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="form-group files">
                     <label>Upload Your File </label>
                     <input type="file" class="form-control" multiple="" accept=".csv" name="crop_csv_file">
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-color-colorAccent ripple-surface-dark" data-mdb-dismiss="modal">Back</button>
                  <button type="submit" class="btn btn-color-primary ripple-surface-dark"  name="csvfile_btn">Upload</button>
               </div>
            </div>
         </div>
      </form>
   </div>
   <!-- Modal crop manual insert-->
   <div class="modal fade" id="insertCropModal" tabindex="-1" aria-labelledby="insertcropModalLabel" aria-hidden="true">
      <form action="" method="POST" enctype="multipart/form-data">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="insertcropModalLabel">Add Farmer Data</h5>
                  <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="form-outline mb-4">
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
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-color-colorAccent ripple-surface-dark" data-mdb-dismiss="modal">Back</button>
                  <button type="submit" class="btn btn-color-primary ripple-surface-dark"  name="insert_farmer">Insert</button>
               </div>
            </div>
         </div>
      </form>
   </div>
</main>
<!--Main layout-->


<!--DataTable-->
<script>
    $(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        dom: 'frtipB',
        buttons: [
            { extend: 'excel', text: 'Export as excel', className: 'background-color-alt',
                exportOptions: {
                    columns: [ 0, 1, 2, 3 ]
                }},
            //{ extend: 'colvis', text: 'Column Visibility', className: 'background-color-alt' },
        ]
        //buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>

<?php include '../../../template/footer.php'; ?>
<?php
   try{
       if(isset($_POST['csvfile_btn'])){
          //do action
          if($link){
             $file = $_FILES['crop_csv_file']['tmp_name'];
             $handle = fopen($file, "r");
             $i = 0;
             while( ($cont=fgetcsv($handle, 1000, ",")) !== false ){
                 $table = rtrim( $_FILES['crop_csv_file']['name'], ".csv"); //file name of csv
                 if($i==0){
                     //column and create table if table is not exists
                     $cropID = $cont[0];
                     $cropName  = $cont[1];
                     $cropStart = $cont[2];
                     $cropMaturity = $cont[3];
                     $cropHarvest = $cont[4];
                     $cropSeason = $cont[5];
                     $cropLocation = $cont[6];
                     $query = "CREATE TABLE $table ($cropID INT(10), $cropName VARCHAR(20), $cropStart date(format), $cropMaturity int(5), $cropHarvest date(format), $cropSeason VARCHAR(3), $cropLocation VARCHAR(20))";
                     mysqli_query($link, $query);
                     echo $query,"<br>";
                   }else{
                       //insert data if exist
                       $query = "INSERT INTO $table (null , $cropName , $cropStart , $cropMaturity , $cropHarvest , $cropSeason, $cropLocation) VALUES('$cont[0]', '$cont[1]', '$cont[2]', $cont[3], $cont[4], $cont[5], $cont[6])";
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
      try{
         if(isset($_POST['insert_farmer']))
      {
         mysqli_query($link, "INSERT INTO farmers_table values(NULL, UPPER('$_POST[farmerFName]'),  UPPER('$_POST[farmerLName]'),'$_POST[contact_number]',  UPPER('$_POST[farmerLocation]'))");
          
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