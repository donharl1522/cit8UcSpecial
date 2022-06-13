<?php require "../config/connection.php"; ?>
<?php include '../template/header.php'; ?>
<h1>CROPS DATA</h1>
<form action="" method="POST">
    <input type="text" name="cropID" placeholder="Crop ID"/><br>
    <input type="text" name="cropName" placeholder="CROP Name"/><br>
    <input type="text" name="cropStart" placeholder="crop Start Last Name"/><br>
    <input type="text" name="cropMaturity" placeholder="Crop Maturity Location"/><br>
    <input type="time" name="cropHarvest" placeholder="Crop Harvest"/><br>
    <input type="text" name="cropSeason" placeholder="Crop Season"/><br>
    <input type="text" name="cropLocation" placeholder="Crop Location"/><br>
    <input type="submit" name="insert_crop" />
</form>
<table>
        <tr>
            <th>ID</th>
            <th>Crop Name</th>
            <th>Crop Start</th>
            <th>Crop Maturity</th>
            <th>Crop Harvest</th>
            <th>Crop Season</th>
            <th>Crop Location</th>
            <th>Action</th>
        </tr>
<?php
    $res=mysqli_query($link,"SELECT * FROM crops_table");
    while($row=mysqli_fetch_array($res)):?>
        <tr>
            <td><?php echo $row["cropID"]; ?></td>
            <td><?php echo $row["cropName"]; ?></td>
            <td><?php echo $row["cropStart"]; ?></td>
            <td><?php echo $row["cropMaturity"]; ?></td>
            <td><?php echo $row["cropHarvest"]; ?></td>
            <td><?php echo $row["cropSeason"]; ?></td>
            <td><?php echo $row["cropLocation"]; ?></td>
            <td><a href="delete_crop.php?cropID=<?php echo $row["cropID"]; ?>">Delete</a> - <a href="edit_crop.php?cropID=<?php echo $row["cropID"]; ?>">Update</a></td>
        </tr>
    
<?php endwhile ?>
</table>

<?php include '../template/footer.php'; ?>

<?php
  try{
    if(isset($_POST['insert_crop']))
    {
      mysqli_query($link, "INSERT INTO crops_table values('$_POST[cropID]', '$_POST[cropName]', '$_POST[cropStart]', '$_POST[cropMaturity]', '$_POST[cropHarvest]', '$_POST[cropSeason]', '$_POST[cropLocation]' )");
      
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
