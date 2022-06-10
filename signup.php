<?php include 'template/header.php'; ?>
<!-- Section: Design Block -->
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            PROJECT <br />
            <span class="custom-text-primary">NUM-A</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eveniet, itaque accusantium odio, soluta, corrupti aliquam
            quibusdam tempora at cupiditate quis eum maiores libero
            veritatis? Dicta facilis sint aliquid ipsum atque?
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form  action="register.php" method="POST">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="userFirstName" class="form-control" name="userFirstName"/>
                      <label class="form-label" for="userFirstName">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input disabled type="text" id="userLastName" class="form-control" name="userLastName" />
                      <label class="form-label" for="userLastName">Last name</label>
                    </div>
                  </div>
                </div>


                <!--Username Input-->
                <div class="form-outline mb-4">
                  <input disabled type="text" id="username" class="form-control" name="username"/>
                  <label class="form-label" for="username">Username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input disabled type="password" id="password" class="form-control" name="password"/>
                  <label class="form-label" for="password">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input disabled type="password" id="retypepassword" class="form-control" />
                  <label class="form-label" for="retypepassword">Confirm Password</label>
                </div>

                <!--<div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline mb-4">
                            <input type="password" id="form3Example4" class="form-control" />
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline mb-4">
                            <input type="password" id="retypepassword" class="form-control" />
                            <label class="form-label" for="retypepassword">Confirm Password</label>
                        </div>
                    </div>
                </div>-->

                <div class="registrationFormAlert"  id="CheckPasswordMatch">
                    <script>
                    function checkPasswordMatch() {
                        var password = $("#password").val();
                        var confirmPassword = $("#retypepassword").val();
                        if (password != confirmPassword)
                            $("#CheckPasswordMatch").html("<span class='text-danger'><i class='far fa-times-circle pe-2'></i>Passwords does not match!</span>");
                        else
                            $("#CheckPasswordMatch").html("<span class='text-success'><i class='far fa-check-circle pe-2'></i>Passwords match.</span>");
                    }
                    $(document).ready(function () {
                    $("#retypepassword").keyup(checkPasswordMatch);
                    });
                    </script>
                </div>

                <!--Location Input-->
                <div class="form-outline mb-4">
                  <input type="text" id="userLocation" class="form-control" name="userLocation" />
                  <label class="form-label" for="userLocation">Location (Optional)</label>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control" name="email"/>
                  <label class="form-label" for="form3Example3">Email address (Optional)</label>
                </div>

                <!-- Gender age -->
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="userGender">Gender</label>
                            <select class="form-select"  name="userGender" id="userGender">
                                <option selected disabled>Select Gender (Optional)</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="userAge">Age</label>
                            <select class="form-select"  name="userAge" id="userAge">
                                <option selected disabled>Select Age (Optional)</option>
                                <?php
                                for ($age_counter=18; $age_counter <=100 ; $age_counter++) { 
                                    echo "<option value='$age_counter'>$age_counter</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>

                <!--Type of Admin-->
                <div class="form-outline mb-4">
                  <label class="form-label" for="userType">User Type</label>
                  <select class="form-select"  name="userType" id="userType">
                    <option selected disabled>Select User Type</option>
                    <option value="Farmer">Farmer</option>
                    <option value="Coop">Coop</option>
                    <option value="Guest">Guest</option>
                  </select>
                </div>

                <!-- Submit button -->
                <button disabled type="submit" name="regSubmit" id="regSubmit" class="btn btn-color-primary btn-block mb-4">
                  Register
                </button>

                <!-- Register buttons -->
                <div class="text-center">
                  <p>or sign up with:</p>
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    document.getElementById("userFirstName").onchange = function () {
      document.getElementById("userLastName").setAttribute("disabled", "disabled");
      if (this.value !== null){
        document.getElementById("userLastName").removeAttribute("disabled");
      }
    }
    document.getElementById("userLastName").onchange = function () {
      document.getElementById("username").setAttribute("disabled", "disabled");
        if (this.value !== null){
      document.getElementById("username").removeAttribute("disabled");
      }
    }
    document.getElementById("username").onchange = function () {
      document.getElementById("password").setAttribute("disabled", "disabled");
        if (this.value !== null){
      document.getElementById("password").removeAttribute("disabled");
      }
    }
    document.getElementById("password").onchange = function () {
      document.getElementById("retypepassword").setAttribute("disabled", "disabled");
        if (this.value !== null){
      document.getElementById("retypepassword").removeAttribute("disabled");
      }
    }
    document.getElementById("retypepassword").onchange = function () {
      document.getElementById("regSubmit").setAttribute("disabled", "disabled");
        if (this.value !== null){
      document.getElementById("regSubmit").removeAttribute("disabled");
      }
    }
  </script>


  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
<?php include 'template/footer.php'; ?>

