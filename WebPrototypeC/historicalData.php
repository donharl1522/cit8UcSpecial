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
    Historical Data
    <a href="index.php?id="><button type="button" class="btn btn-success">Home</button></a>
  </h2>
</div>

<div class="col-lg-12">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>year</th>
        <th>Crop Name</th>
        <th>Municipality</th>
        <th>Area Harvested (ha)</th>
        <th>Production (mt)</th>
        <th>Productivity (mt/ha)</th>
        <br>
      </tr>
    </thead>
    <tbody>
      <?php
      $res=mysqli_query($link,"select * from historicaltable");
      while($row=mysqli_fetch_array($res))
      {
        echo "<tr>";
        echo "<td>"; echo $row["year"]; echo "</td>";
        echo "<td>"; echo $row["name"]; echo "</td>";
        echo "<td>"; echo $row["municipality"]; echo "</td>";
        echo "<td>"; echo $row["area"]; echo "</td>";
        echo "<td>"; echo $row["production"]; echo "</td>";
        echo "<td>"; echo $row["productivity"]; echo "</td>";
      }
      ?>
    </tbody>


  </table>
</div>

</body>

<script>
if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

</html>
