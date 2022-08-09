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
         <h1>Historical Data</h1>
         <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card background-color-accent">
					<div class="card-body">
						<div class="row">
							<div class="col-sm-6">
                                <img class="img-fluid" src="../../images/icons/agricultural.png">
							</div>
							<div class="col-sm-5 float-right my-auto text-white">
                                <h2 class="card-title">Agricultural</h2>
								<a class="btn btn-light btn-rounded btn-lg" href="agricultural/">Proceed</a>
							</div>
						</div>
					</div>
				</div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="card background-color-accent">
					<div class="card-body">
						<div class="row">
							<div class="col-sm-6">
                                <img class="img-fluid" src="../../images/icons/climatological.png">
							</div>
							<div class="col-sm-5 float-right my-auto text-white">
                                <h3 class="card-title">Climatological</h3>
								<a class="btn btn-light btn-rounded btn-lg" href="climatological/">Proceed</a>
							</div>
						</div>
					</div>
				</div>
            </div>
         </div>
      </section>
   </div>
</main>
<!--Main layout-->
<?php include '../../template/footer.php'; ?>