<?php
   // We need to use sessions, so you should always start sessions using the below code.
   session_start();
   // If the user is not logged in redirect to the login page...
   if (!isset($_SESSION['loggedin'])) {
   	header('Location: ../../login.php');
   	exit;
   	//blah blah blah
   }
   ?>
<?php require "../../config/connection.php"; ?>
<?php include '../../template/header.php'; ?>
<?php include '../../template/sidebar.php'; ?>
<!--Main layout-->
<main style="margin-top: 58px;">
   <div class="container pt-4">
      <section class="vw-25">
        <h1>News</h1>
      </section>   
   </div>
</main>
<!--Main layout-->

<?php include '../../template/footer.php'; ?>