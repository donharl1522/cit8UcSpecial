<?php
  require "config/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
</head>
<body>
    <a href="test.php?municipality=atok">Atok</a>
    <a href="test.php?municipality=La Trinidad">Trinidad</a>

    <div>
        <?php
        $mun = $_GET['municipality'];
        $res=mysqli_query($link,"select * from historicaltable WHERE munName LIKE '%$mun%'");
        while($row=mysqli_fetch_array($res)) {?>

              <p class="fw-normal mb-1"><?php echo $row["harvestYear"]; ?></p>
         
            
              <p class="fw-normal mb-1"><?php echo $row["cropName"]; ?></p>
           
           
              <p class="fw-normal mb-1"><?php echo $row["munName"]; ?></p>
              <p class="text-muted mb-0">Benguet</p>
      
              <p class="fw-normal mb-1"><?php echo $row["prodArea"]; ?></p>
              <p class="text-muted mb-0">ha</p>
          
              <p class="fw-normal mb-1"><?php echo $row["cropProd"]; ?></p>
              <p class="text-muted mb-0">mt</p>
           
              <p class="fw-normal mb-1"><?php echo $row["prodRate"]; ?></p>
              <p class="text-muted mb-0">mt/ha</p>
              <br><br>
          <?php }?>
    </div>
</body>
</html>