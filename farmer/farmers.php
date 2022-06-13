<?php require "../config/connection.php"; ?>
<?php include '../template/header.php'; ?>
<h1>Farmers DATA</h1>
<form action="" method="POST">
    <input type="text" name="farmerID" placeholder="Farmers ID"/><br>
    <input type="text" name="farmerFName" placeholder="Farmers First Name"/><br>
    <input type="text" name="farmerLName" placeholder="Farmers Last Name"/><br>
    <input type="text" name="farmerLocation" placeholder="Farmers Location"/><br>
    <input type="submit" name="insert_farmer" />
</form>

<?php
    $res=mysqli_query($link,"SELECT * FROM farmers_table");
    while($row=mysqli_fetch_array($res)):?>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Location</th>
            <th>Action</th>
        </tr>
        <tr>
            <td><?php echo $row["farmerID"]; ?></td>
            <td><?php echo $row["farmerName"]; ?></td>
            <td><?php echo $row["farmerLName"]; ?></td>
            <td><?php echo $row["farmerLocation"]; ?></td>
            <td><a href="delete_farmer.php?farmerID=<?php echo $row["farmerID"]; ?>">Delete</a> - <a href="#">Update</a></td>
        </tr>
    </table>
<?php endwhile ?>

<?php include '../template/footer.php'; ?>

<?php
  try{
    if(isset($_POST['insert_farmer']))
    {
      mysqli_query($link, "INSERT INTO farmers_table values('$_POST[farmerID]', '$_POST[farmerFName]', '$_POST[farmerLName]', '$_POST[farmerLocation]' )");
      
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
