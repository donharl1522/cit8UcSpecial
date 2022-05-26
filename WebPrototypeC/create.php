<?php
  include "connection.php";
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
      <input type="text" class="form-control" id="name" placeholder="Enter Crop Name" name="name">
    </div>
    <div class="form-group">
      <label for="municipality">Municipality</label>
      <select class="form-control" name="municipality" id="municipality">
      <option value="">Choose Municipality</option>
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
      <input type="text" class="form-control" id="area" placeholder="Enter Area in Hectares" name="area">
    </div>
    <div class="form-group">
      <label for="area">Production:</label>
      <input type="text" class="form-control" id="production" placeholder="Enter Production value" name="production">
    </div>
    <div class="form-group">
      <label for="productivity">Productivity:</label>
      <input type="text" class="form-control" id="productivity" placeholder="Enter Productivity Value" name="productivity">
    </div>
    <button type="submit" name="insert" class="btn btn-default">Insert</button>
    <button type="submit" name="delete" class="btn btn-default">Delete</button>
    <br>
    <br>

    <a href="index.php?id="><button type="button" class="btn btn-success">Back to Home</button></a>

  </form>
</div>
</div>

<div class="col-lg-12">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Crop Name</th>
        <th>Municipality</th>
        <th>Area Harvested (ha)</th>
        <th>Production (mt)</th>
        <th>Productivity (mt/ha)</th>
        <th>Edit</th>
        <th>Delete</th>
        <br>
      </tr>
    </thead>
    <tbody>
      <?php
      $res=mysqli_query($link,"select * from maintable");
      while($row=mysqli_fetch_array($res))
      {
        echo "<tr>";
        echo "<td>"; echo $row["id"]; echo "</td>";
        echo "<td>"; echo $row["name"]; echo "</td>";
        echo "<td>"; echo $row["municipality"]; echo "</td>";
        echo "<td>"; echo $row["area"]; echo "</td>";
        echo "<td>"; echo $row["production"]; echo "</td>";
        echo "<td>"; echo $row["productivity"]; echo "</td>";
        echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
        echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-danger">Delete</button></a> <?php echo "</td>";
      }
      ?>
    </tbody>


  </table>
</div>


</body>

<?php
  if(isset($_POST['insert']))
  {
    mysqli_query($link, "insert into maintable values(NULL, '$_POST[name]', '$_POST[municipality]', '$_POST[area]', '$_POST[production]', '$_POST[productivity]')");
    ?>
    <script type="text/javascript">
      window.location.href=window.location.href;
    </script>
    <?php
  }


  if(isset($_POST["delete"]))
  {
    mysqli_query($link, "delete from maintable where name='$_POST[name]'");
    mysqli_query($link, "delete from maintable where municipality='$_POST[municipality]'");
    mysqli_query($link, "delete from maintable where area='$_POST[area]'");
    mysqli_query($link, "delete from maintable where production='$_POST[production]'");
    mysqli_query($link, "delete from maintable where productivity='$_POST[productivity]'");
    ?>
    <script type="text/javascript">
      window.location.href=window.location.href;
    </script>
    <?php
  }


?>
<script>
if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

</html>