<?php
require_once('config/initialize.php');

if($session->is_logged_in()){
  redirect_to(url_for('index.php'));
}
$errors = [];
$username = '';
$password = '';
if(is_post_request()) {

  $username = $_POST['username'] ?? '';
  $password = $_POST['password'] ?? '';

  // Validations
  if(is_blank($username)) {
    $errors[] = "Username cannot be blank.";
  }
  if(is_blank($password)) {
    $errors[] = "Password cannot be blank.";
  }
$password=md5($password);
  // if there were no errors, try to login
  if(empty($errors)) {
    $user = User::find_by_account($username,$password);
    // test if user found and password is correct
    if($user != false) {
      // Mark user as logged in
      $session->login($user);
      redirect_to(url_for('index.php'));
    } else {
      // username not found or password does not match
      $errors[] = "Log in was unsuccessful.";
    }

  }

}
HTML::head("Virtualr.Online Home","vr");
?>
  <body>

  <?php HTML::header2(); ?>

    <div class="content content-fixed content-auth">
      <div class="container">
        <div class="media align-items-stretch justify-content-center ht-100p pos-relative">
          <div class="media-body align-items-center d-none d-lg-flex">
            <div class="mx-wd-600">
              <img src="img/banner.jpg" class="img-fluid" alt="">
            </div>
            <div class="pos-absolute b-0 l-0 tx-12 tx-center">
            
            </div>
          </div><!-- media-body -->
          <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
            <div class="wd-100p">
              <h3 class="tx-color-01 mg-b-5">Sign In</h3>
              <p class="tx-color-03 tx-16 mg-b-40">Welcome back! Please signin to continue.</p>
              <form class="form-horizontal form-material" id="loginform" method="POST">
              <div class="form-group">
                <label>Email address</label>
                <input name="username" type="text" class="form-control" placeholder="yourname@yourmail.com">
              </div>
              <div class="form-group">
                <div class="d-flex justify-content-between mg-b-5">
                  <label class="mg-b-0-f">Password</label>
                </div>
                <input  name="password"  type="password" class="form-control" placeholder="Enter your password">
              </div>
              <div class="form-group">
              <div class="d-flex justify-content-between mg-b-5">
                  <a href="" class="tx-13">Forgot password?</a>
                </div>
              </div>
              <button class="btn btn-brand-02 btn-block" type="submit">Sign In</button>
              <div class="divider-text">or</div>
              <button class="btn btn-outline-facebook btn-block">Sign In With Facebook</button>
              <button class="btn btn-outline-twitter btn-block">Sign In With Twitter</button>
              <div class="tx-13 mg-t-20 tx-center">Don't have an account? <a href="page-signup.html">Create an Account</a></div>
              </form >
            </div>
          </div><!-- sign-wrapper -->
        </div><!-- media -->
      </div><!-- container -->
    </div><!-- content -->

    <footer class="footer">
      <div>
        <span>&copy; Emannme </span>
        <span>Created by <a href="http://emann.me">Emannme</a></span>
      </div>
      <div>
        <nav class="nav">
          <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
          <a href="change-log.html" class="nav-link">Change Log</a>
          <a href="https://discordapp.com/invite/RYqkVuw" class="nav-link">Get Help</a>
        </nav>
      </div>
    </footer>

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/feather-icons/feather.min.js"></script>
    <script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script src="assets/js/dashforge.js"></script>

    <!-- append theme customizer -->
    <script src="lib/js-cookie/js.cookie.js"></script>
    <script src="assets/js/dashforge.settings.js"></script>

  </body>
</html>
