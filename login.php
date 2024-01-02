<?php

include("connection.php");
session_start();

if (isset($_SESSION['admin']) != null ) {
    header("Location: pages/index.php");
    exit(); // Ensure script stops after redirection
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT count(*) as total, category FROM `login` WHERE email = '$email' AND password = '$password'";
    $query = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($query);

    if ($result['total'] > 0 && $result['category'] == 'admin') {
        $_SESSION['admin'] = $result['category'];
        header("Location: pages/index.php");
    } else {
        echo "Login failed";
    }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Login</h3>
              <form action="" method="post">
                <div class="form-group">
                  <label>Username or email *</label>
                  <input type="email" class="form-control p_input" name="email" Required>
                </div>
                <div class="form-group">
                  <label>Password *</label>
                  <input type="password" class="form-control p_input" name="password" required>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn" name="submit">Login</button>
                </div>
                <span><a href="#">Forgotten account?</a></span>
                <!-- <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                      </label>
                  </div>
                  <a href="#" class="forgot-pass">Forgot password</a>
                </div> 
                
                <div class="d-flex">
                  <button class="btn btn-facebook mr-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook
                  </button>
                  <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus
                  </button>
                </div>
                <p class="sign-up">Don't have an Account?<a href="#"> Sign Up</a></p>-->
              </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
<?php





?>


  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
