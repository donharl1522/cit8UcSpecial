<?php
  require "config/connection.php";
  $id=$_GET["id"];

  $cropName="";
  $munName="";
  $prodArea="";
  $cropProd="";
  $prodRate="";

  $res=mysqli_query($link, "select * from maintable where id=$id");
  while($row=mysqli_fetch_array($res)){
      $cropName=$row["cropName"];
      $munName=$row["munName"];
      $prodArea=$row["prodArea"];
      $cropProd=$row["cropProd"];
      $prodRate=$row["prodRate"];
  }
?>

<?php include 'template/header.php'; ?>
  <div class="container">
    <div class="container-fluid my-5">
        <!--card edit-->
        <div class="card mb-10" style="max-width: 1840px;">
          <div class="row g-0">
              <div class="col-md-6">
                <img
                    src="images/asian_farmers_03.jpg"
                    class="img-fluid rounded-start"
                    />
              </div>
              <div class="col-md-6">
                <div class="card-body">
                    <p class="card-text">
                    <h2>New Crop Data</h2>
                    <form action="" name="form1" method="post">
                      <div class="form-group">
                          <label for="cropName">Crop Name:</label>
                          <input type="text" class="form-control" id="namcropNamee" placeholder="Enter Crop Name" name="cropName" value="<?php echo $cropName; ?>">
                      </div>
                      <div class="form-group">
                          <label for="name">Municipality:</label>
                          <select class="form-select" name="munName" id="munName">
                            <option value="<?php echo $munName; ?>" selected><?php echo $munName; ?> - Current</option>
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
                      <div class="form-group">
                          <label for="prodArea">Area:</label>
                          <input type="text" class="form-control" id="prodArea" placeholder="Enter Area in Hectares" name="prodArea"  value="<?php echo $prodArea; ?>">
                      </div>
                      <div class="form-group">
                          <label for="cropProd">Production:</label>
                          <input type="text" class="form-control" id="cropProd" placeholder="Enter cropProd value" name="cropProd"  value="<?php echo $cropProd; ?>">
                      </div>
                  
                      <div class="my-3">
                        <button type="submit" name="update" class="btn btn-color-primary">Update</button>
                      </div>
                </div>
              </div>
          </div>
        </div>
        <!--end card edit-->
        </form>
    </div>
  </div>
</body>

<?php
  if(isset($_POST["update"]))
  {
    mysqli_query($link, "update maintable set cropName='$_POST[cropName]', munName='$_POST[munName]', prodArea='$_POST[prodArea]', cropProd='$_POST[cropProd]', prodRate='$_POST[prodRate]' where id=$id");
    ?>
    <script type="text/javascript">
      window.location="homePage.php";
    </script>
    <?php
  }

?>
</html>