<?php 
    require "../config/connection.php"; 
    $cropID=$_GET["cropID"];

    $cropName="";
    $cropStart="";
    $cropMaturity="";
    $cropHarvest="";
    $cropSeason="";
    $cropLocation="";

  
    $res=mysqli_query($link, "SELECT * FROM crops_table WHERE cropID=$cropID");
    while($row=mysqli_fetch_array($res)){
        $cropName=$row["cropName"];
        $cropStart=$row["cropStart"];
        $cropMaturity=$row["cropMaturity"];
        $cropHarvest=$row["cropHarvest"];
        $cropSeason=$row["cropSeason"];
        $cropLocation=$row["cropLocation"];
    }
?>
<?php include '../template/header.php'; ?>
<h1>CROP DATA</h1>
<form action="" method="POST">
    <input type="text" name="cropName"  value="<?php echo $cropName; ?>"/><br>
    <input type="text" name="cropStart"  value="<?php echo $cropStart; ?>"/><br>
    <input type="text" name="cropMaturity"  value="<?php echo $cropMaturity; ?>"/><br>
    <input type="time" name="cropHarvest"  value="<?php echo $cropHarvest; ?>"/><br>
    <input type="text" name="cropSeason"  value="<?php echo $cropSeason; ?>"/><br>
    <input type="text" name="cropLocation"  value="<?php echo $cropLocation; ?>"/><br>
    <input type="submit" name="update_crop" />
</form>


<?php include '../template/footer.php'; ?>

<?php
  if(isset($_POST["update_crop"]))
  {
    mysqli_query($link, "UPDATE crops_table SET cropName='$_POST[cropName]', cropStart='$_POST[cropStart]', cropMaturity='$_POST[cropMaturity]' , cropHarvest='$_POST[cropHarvest]' ,cropSeason='$_POST[cropSeason]' , cropLocation='$_POST[cropLocation]' WHERE cropID=$cropID");
    ?>
    <script type="text/javascript">
      window.location="crop.php";
    </script>
    <?php
  }

?>
