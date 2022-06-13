<?php 
    require "../config/connection.php"; 
    $farmerID=$_GET["farmerID"];

    $farmerFName="";
    $farmerLName="";
    $farmerLocation="";

  
    $res=mysqli_query($link, "SELECT * FROM farmers_table WHERE farmerID=$farmerID");
    while($row=mysqli_fetch_array($res)){
        $farmerFName=$row["farmerName"];
        $farmerLName=$row["farmerLName"];
        $farmerLocation=$row["farmerLocation"];
    }
?>
<?php include '../template/header.php'; ?>
<h1>Farmers DATA</h1>
<form action="" method="POST">
    <input type="text" name="farmerFName" placeholder="Farmers First Name" value="<?php echo $farmerFName; ?>"/><br>
    <input type="text" name="farmerLName" placeholder="Farmers Last Name" value="<?php echo $farmerLName; ?>"/><br>
    <input type="text" name="farmerLocation" placeholder="Farmers Location" value="<?php echo $farmerLocation; ?>"/><br>
    <input type="submit" name="update_farmer" />
</form>


<?php include '../template/footer.php'; ?>

<?php
  if(isset($_POST["update_farmer"]))
  {
    mysqli_query($link, "UPDATE farmers_table SET farmerName='$_POST[farmerFName]', farmerLName='$_POST[farmerLName]', farmerLocation='$_POST[farmerLocation]' WHERE farmerID=$farmerID");
    ?>
    <script type="text/javascript">
      window.location="farmers.php";
    </script>
    <?php
  }

?>
