<?php
  require "config/connection.php";

  if($link){
      $file = $_FILES['csvfile']['tmp_name'];
      $handle = fopen($file, "r");
      $i = 0;
      while( ($cont=fgetcsv($handle, 1000, ",")) !== false ){
          $table = rtrim( $_FILES['csvfile']['name'], ".csv"); //file name of csv
          if($i==0){
            $harvestYear = $cont[0];
            $munName  = $cont[1];
            $cropName = $cont[2];
            $prodArea = $cont[3];
            $cropProd = $cont[4];
            $prodRate = $cont[5];
            $query = "CREATE TABLE $table ($harvestYear INT(5), $munName VARCHAR(50), $cropName VARCHAR(50), $prodArea FLOAT(50), $cropProd FLOAT(50), $prodRate FLOAT(50))";
            mysqli_query($link, $query);
            echo $query,"<br>";
          }else{
              $query = "INSERT INTO $table ($harvestYear , $munName , $cropName , $prodArea , $cropProd , $prodRate) VALUES('$cont[0]', '$cont[1]', '$cont[2]', $cont[3], $cont[4], $cont[5])";
              echo $query,"<br>";
              mysqli_query($link, $query);
          }
          $i++;
      }
  }
?>
