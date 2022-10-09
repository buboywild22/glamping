<?php include 'includes/partials/header.php' ?>
<section class="vh-100 m-5 bg-black">
        <div class="py-5 m-5 bg-black">
          <div class="m-5 p-5 bg-black row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src="/Glamping/public/img/sign-in.jpg"
                class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
              <form>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form1Example13" class="form-control" />
                  <label class="form-label text-light" for="form1Example13">Email address</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form1Example23" class="form-control" />
                  <label class="form-label text-light" for="form1Example23">Password</label>
                </div>
      
                <div class="d-flex justify-content-around align-items-center mb-4">
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                    <label class="form-check-label" for="form1Example3"> Remember me </label>
                  </div>
                  <a href="#!">Forgot password?</a>
                </div>
      
                <!-- Submit button -->
                <div>
                    <button type="submit" class="btn btn-success btn-lg"><a class="text-dark fw-bolder" href="/Glamping/admin.php">Sign in</a></button>
                </div>
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                </div>
      
                <a class="m-1 btn btn-primary btn-block" style="background-color: #3b5998" href="#!"
                  role="button">
                  <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                </a>
                <a class="m-1 btn btn-primary btn-block" style="background-color: #55acee" href="#!"
                  role="button">
                  <i class="fab fa-twitter me-2"></i>Continue with Twitter</a>
      
              </form>
            </div>
          </div>
        </div>
</section>
<?php include 'includes/partials/footer.inc.php' ?>