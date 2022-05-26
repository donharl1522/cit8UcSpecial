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

  <div>
    <h1 align="center">Website Prototype</h1>
    <p align="center">This website is meant as a prototype</p>
    <p align="center">insert intro here</p>
  </div>
  <br>
  <br>


<div>
  <h2 align="center">
    Crop Database
    <a href="create.php?id="><button type="button" class="btn btn-success">Edit</button></a>
    <a href="historicalData.php?id="><button type="button" class="btn btn-success">Historical Data</button></a>
  </h2>
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