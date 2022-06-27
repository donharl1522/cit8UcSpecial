<?php 
    require "../config/connection.php"; 
    $farmerID=$_GET["farmerID"];

    $farmerFName="";
    $farmerLName="";
    $farmerContact="";
    $farmerLocation="";

  
    $res=mysqli_query($link, "SELECT * FROM farmers_table WHERE farmerID=$farmerID");
    while($row=mysqli_fetch_array($res)){
        $farmerFName=$row["farmerName"];
        $farmerLName=$row["farmerLName"];
        $farmerContact=$row["farmer_contact_number"];
        $farmerLocation=$row["farmerLocation"];
    }
?>
<?php include '../template/header.php'; ?>
<div class="container my-5">
  <div class="container-fluid">
    <h2>Update Farmers Data</h2>
    <form action=""  method="POST">
      <div class="card">
        <div class="card-body">
          <div class="form-outline mb-4">
            <input type="text" id="farmerFName" class="form-control" name="farmerFName" value="<?php echo $farmerFName; ?>"/>
            <label class="form-label" for="farmerFName">First Name</label>
          </div>
          <div class="form-outline mb-4">
            <input type="text" id="farmerLName" class="form-control" name="farmerLName" value="<?php echo $farmerLName; ?>" />
            <label class="form-label" for="farmerLName">Last Name</label>
          </div>

          <div class="form-outline mb-4">
            <input type="text" id="farmerContact" class="form-control" name="farmerContact" value="<?php echo $farmerContact; ?>" />
            <label class="form-label" for="farmerContact">Contact Number</label>
          </div>

          <div class="mb-4 form-outline">
                  <select class="form-select"  name="farmerLocation">
                     <option disabled>Choose Municipality</option>
                     <option value="<?php echo $farmerLocation; ?>"><?php echo $farmerLocation; ?></option>
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
          
          <button type="submit" class="btn btn-primary float-end" name="update_farmer">Update</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php include '../template/footer.php'; ?>

<?php
  if(isset($_POST["update_farmer"]))
  {
    mysqli_query($link, "UPDATE farmers_table SET farmerName='$_POST[farmerFName]', farmerLName='$_POST[farmerLName]', farmer_contact_number='$_POST[farmerContact]', farmerLocation='$_POST[farmerLocation]' WHERE farmerID=$farmerID");
    header('Location: ../farmer');
  }

?>
