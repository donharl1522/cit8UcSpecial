<?php
function userType($userType){
     switch ($userType) {
        case "Farmer":
          echo "farmer!";
          break;
        case "Coop":
          echo "Coop!";
          break;
        case "Guest":
          echo "Guest";
          break;
        default:
          echo "OOPS!!!";
    }
}
?>