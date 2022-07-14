<?php include 'template/header.php'; ?>
<section class="vh-100 background-color-primary">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="images/Benguet-farm-1.png"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="authenticate.php" method="POST">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <img class="img-fluid" src="images/logo/logob2.png" alt="" style="width:28%;">
                    <span class="h1 fw-bold mb-0">PASYA</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="text" id="username" class="form-control form-control-lg" name="username"/>
                    <label class="form-label" for="username">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control form-control-lg" name="password"/>
                    <label class="form-label" for="password">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-color-primary btn-lg btn-block" type="submit">Login</button>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="signup.php"
                      style="color: #393f81;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
    session_start();
    
    if(isset($_SESSION['account_login_status']))
    {
        ?>
            <script>
              Swal.fire({
              icon: '<?= $_SESSION['account_login_icon']; ?>',
              title: 'Oops...',
              text: '<?= $_SESSION['account_login_status']; ?>'
            })
            </script>
        <?php 
        unset($_SESSION['account_login_status']);
    }

?>
<?php include 'template/footer.php'; ?>