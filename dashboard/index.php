<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.php');
	exit;
	//blah blah blah
}
?>


<?php include '../template/header.php'; ?>
<?php include '../template/sidebar.php'; ?>

<!--Main layout-->
<main style="margin-top: 58px;">
  <div class="container pt-4">
	<div class="row container">
		<!--Main Content-->
		<div class="col-md-8 mb-2">
		<div class="row">
            <div class="col-md-6 mb-3">
                <div class="card background-color-accent">
					<div class="card-body">
						<div class="row">
							<div class="col-sm-6">
                                <img class="img-fluid" src="../images/icons/plant.png">
							</div>
							<div class="col-sm-5 float-right my-auto text-white">
                                <h4 class="card-title">Crop data</h4>
								<a class="btn btn-light btn-rounded btn-lg" href="management/crop/">Proceed</a>
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
                                <img class="img-fluid" src="../images/icons/farmer.png">
							</div>
							<div class="col-sm-5 float-right my-auto text-white">
                                <h4 class="card-title">Farmer's data</h4>
								<a class="btn btn-light btn-rounded btn-lg" href="management/farmer/">Proceed</a>
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
                                <img class="img-fluid" src="../images/icons/statistics.png">
							</div>
							<div class="col-sm-5 float-right my-auto text-white">
                                <h5 class="card-title">Crop Production</h4>
								<a class="btn btn-light btn-rounded btn-lg" href="management/crop-production/">Proceed</a>
							</div>
						</div>
					</div>
				</div>
            </div>
         </div>

			<!--Historical Data-->
			<h1 class="mt-5">Historical Data</h1>
			<div class="card">
				<div class="card-body w-100">
					<h5 class="card-title">Graph Here</h5>
				</div>
			</div>

			<div class="separator my-5">
				<h3>Latest Updates</h3>
			</div>

			<!--Latest Updates-->
			<div class="row">
				<div class="col-sm-6 mb-3">
					<div class="card">
						<div class="card-header background-color-primary"></div>
						<div class="card-body">
							<h5 class="card-title">Content</h5>
						</div>
					</div>
				</div>

				<div class="col-sm-6 mb-3">
					<div class="card">
						<div class="card-header background-color-secondary"></div>
						<div class="card-body">
							<h5 class="card-title">Content</h5>
						</div>
					</div>
				</div>

				<div class="col-sm-6 mb-3">
					<div class="card">
						<div class="card-header background-color-accent"></div>
						<div class="card-body">
							<h5 class="card-title">Content</h5>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Side bar right-->
		<div class="col-md-4 mb-2">
			<div class="container mb-3">
				<div class="card">
					<div class="card-header background-color-alt">
						<h1 class="display-1"><strong>OCT</strong> <span class="display-6">22</span> <br></h1>
						<span class="display-5">2021</span>
					</div>
					<div class="card-body">
						<img src="https://gardenerspath.com/wp-content/uploads/2021/08/How-to-Grow-Cauliflower-Cover-5.jpg" class="img-fluid" />
						<p class="card-text py-4">
							Cauliflower Benefits this season
						</p>
					</div>
				</div>
			</div>

			<div class="container mb-3">
				<div class="card">
					<div class="card-header background-color-secondary"></div>
					<div class="card-body">
						<h5 class="card-title">
							either list of users or preview of the latest forum here
						</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
  </div>
</main>
<!--Main layout-->

<?php include '../template/footer.php'; ?>
