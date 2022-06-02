<?php
  require "config/connection.php";
  $id=$_GET["id"];

  $name="";
  $municipality="";
  $area="";
  $production="";
  $productivity="";

  $res=mysqli_query($link, "select * from maintable where id=$id");
  while($row=mysqli_fetch_array($res)){
      $name=$row["name"];
      $municipality=$row["municipality"];
      $area=$row["area"];
      $production=$row["production"];
      $productivity=$row["productivity"];
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
                          <label for="name">Crop Name:</label>
                          <input type="text" class="form-control" id="name" placeholder="Enter Crop Name" name="name" value="<?php echo $name; ?>">
                      </div>
                      <div class="form-group">
                          <label for="name">Municipality:</label>
                          <select class="form-select" name="municipality" id="municipality">
                            <option value="<?php echo $municipality; ?>" selected><?php echo $municipality; ?> - Current</option>
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
                          <label for="area">Area:</label>
                          <input type="text" class="form-control" id="area" placeholder="Enter Area in Hectares" name="area"  value="<?php echo $area; ?>">
                      </div>
                      <div class="form-group">
                          <label for="area">Production:</label>
                          <input type="text" class="form-control" id="production" placeholder="Enter Production value" name="production"  value="<?php echo $production; ?>">
                      </div>
                      <div class="form-group">
                          <label for="productivity">Productivity:</label>
                          <input type="text" class="form-control" id="productivity" placeholder="Enter Productivity Value" name="productivity"  value="<?php echo $productivity; ?>">
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
    mysqli_query($link, "update maintable set name='$_POST[name]', municipality='$_POST[municipality]', area='$_POST[area]', production='$_POST[production]', productivity='$_POST[productivity]' where id=$id");
    ?>
    <script type="text/javascript">
      window.location="homePage.php";
    </script>
    <?php
  }

?>
</html>