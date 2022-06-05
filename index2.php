<?php
  require "config/connection.php";
?>

<?php include 'template/header.php'; ?>

  <section class="vh-100 background-color-primary">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://thecounter.org/wp-content/uploads/2021/05/regenerative-agriculture-access-climate-change-justice.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form>

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Logo</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Insert Guest or Login</h5>


                  <div class="pt-1 mb-4">
                    <a href="homePage.php" class="btn btn-color-primary btn-lg btn-block" >Enter as Guest</a>
                  </div>

                  <div class="pt-1 mb-4">
                    <a href="login.php" class="btn btn-color-primary btn-lg btn-block">Sign In</a>
                  </div>

                  <div class="pt-1 mb-4">
                    <a href="signup.php" class="btn btn-dark btn-lg btn-block" >Don't have an Account</a>
                  </div>
        
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'template/footer.php'; ?>
