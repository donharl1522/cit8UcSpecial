<?php require "config/connection.php"; ?>
<?php include 'template/header.php'; ?>
<h1>Farmers CRUD</h1>
<form action="" method="POST">
    <input type="text" name="farmerID" placeholder="Farmers ID"/><br>
    <input type="text" name="farmerFName" placeholder="Farmers First Name"/><br>
    <input type="text" name="farmerLName" placeholder="Farmers Last Name"/><br>
    <input type="text" name="farmerLocation" placeholder="Farmers Location"/><br>
    <input type="submit" name="insert_farmer" />
</form>
<?php include 'template/footer.php'; ?>

<?php
  try{
    if(isset($_POST['insert_farmer']))
    {
      mysqli_query($link, "INSERT INTO farmers_table values('$_POST[farmerID]', '$_POST[farmerFName]', '$_POST[farmerLName]', '$_POST[farmerLocation]' )");
      echo "Farmer Inserted";
    }
    } catch (Exception $e) {
      echo $e->getMessage();
  }
  catch (InvalidArgumentException $e) {
      echo $e->getMessage();
  }
?>
