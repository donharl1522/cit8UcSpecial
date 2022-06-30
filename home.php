<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
	//blah blah blah
}
?>


<?php include 'template/header.php'; ?>
<?php include 'template/sidebar.php'; ?>

<!--Main layout-->
<main style="margin-top: 58px;">
  <div class="container pt-4">
	<div class="text-center">
		<img class="img-fluid" src="images/logo/logob2.png" alt="">
		<h1 class="display-5">A Decision Support System</h1>
		<span class="small text-muted text-uppercase mb-0">TagLine</span>
	</div>
  <!--<nav class="navtop">
			<div>
				<h1>Website Title</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
		</div>-->
  </div>
</main>
<!--Main layout-->

<?php include 'template/footer.php'; ?>
