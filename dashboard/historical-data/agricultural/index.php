<?php
   // We need to use sessions, so you should always start sessions using the below code.
   session_start();
   // If the user is not logged in redirect to the login page...
   if (!isset($_SESSION['loggedin'])) {
   	header('Location: ../../');
   	exit;
   	//blah blah blah
   }
   ?>
<?php require "../../../config/connection.php"; ?>
<?php include '../../../template/header.php'; ?>
<?php include '../../../template/sidebar.php'; ?>
<!--Main layout-->
<main style="margin-top: 58px;">
   <div class="container pt-4">
      <section>
         <div class="container">
            <div class="container-fluid">
               <p class="h1">Agricultural Data </p>
                 
               </script>
               <!--End of Top Crop Production-->
            </div>
         </div>
   </div>
   </section>
   <!--******SORTING TABLE STARTS HERE-->
   <!--END SORTING TABLE STARTS HERE-->
   <!--Navigation-->
   
   </div>
   </div>
   <!--End Side Tabbed Sample-->
   <script>
      document.getElementById("ifYes").style.display = "none";
        function yesnoCheck(that) {
          if (that.value == "other") {
            //alert("check");
            document.getElementById("ifYes").style.display = "block";
          } else {
            document.getElementById("ifYes").style.display = "none";
          }
        }
   </script>
   <?php include 'gethistdata.php'; ?>
   </div>
</main>
<!--Main layout-->
<?php include '../../../template/footer.php'; ?>