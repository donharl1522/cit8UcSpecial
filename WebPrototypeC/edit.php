<?php
  include "connection.php";
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

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PrototypeSQL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="col-xs-4">
  <h2>New Crop Data</h2>
  <form action="" name="form1" method="post">
    <div class="form-group">
      <label for="name">Crop Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Crop Name" name="name" value="<?php echo $name; ?>">
    </div>
     <div class="form-group">
      <label for="name">Municipality:</label>
      <input type="text" class="form-control" id="municipality" placeholder="Enter Municipality" name="municipality" value="<?php echo $name; ?>">
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
    <button type="submit" name="update" class="btn btn-default">Update</button>

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
      window.location="index.php";
    </script>
    <?php
  }

?>
</html>