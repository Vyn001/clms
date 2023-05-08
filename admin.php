<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin Login Page</title>
  <link rel="icon" type="image" href="img/favicon1.avif">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <style>
    .input-icons i {
      position: absolute;
    }

    .input-icons {
      width: 100%;
      margin-bottom: 10px;
    }

    .icon {
      padding: 10px;
      min-width: 40px;
    }

    .input-field {
      width: 100%;
      padding: 10px;
      text-align: center;
    }
  </style>
</head>

<body>
  <section class="vh-100" style="background-color: #eee">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem; background-color:seagreen; border-color: none;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="img/dean.gif" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 100%;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                  <?php
                  include "conn.php";
                  session_start();



                  //This is for login

                  if (isset($_POST['Login'])) {

                    $email = $_POST['email'];
                    $password = md5($_POST['password']);

                    $Login = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email' AND password='$password' ");

                    $n = mysqli_num_rows($Login);

                    if ($n >= 1) {
                      $_SESSION['email'] = $email;

                  ?>


                      <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>Welcome!</strong>
                        <script>
                          window.location.href = "admin/adminhomepage.php";
                        </script>
                      </div>
                    <?php

                    } else {
                    ?>
                      <div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>Error!</strong> Your email or password didn't match in our database, Please try again!
                      </div>
                  <?php
                    }
                  }


                  ?>
                  <form action="admin.php" method="POST">
                    <div class="d-flex " style="padding-right: 100px ;">
                      <i class="fas fa-cubes fa-2x ps-0" style="color: #ff6219;"></i>
                      <img src="img/logo.png" style="width:250px;  " alt="logo">
                      <span class="fw-bold mt-5" style="font-size: 30px; padding-top: 50px; color: white;">CITE CLMS</span>
                    </div>

                    <h5 class="fw-bold mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                    <div class="form-outline mb-3">
                      <label class="form-label" for="form2Example17">Email address</label>
                      <input type="email" id="form2Example17" name="email" class="form-control form-control-lg " required>
                    </div>
                    <div class="form-outline mb-3">
                      <label class="form-label" for="form2Example27">Password</label>

                      <input type="password" id="myInput" name="password" class="form-control form-control-lg" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one UPPERCASE 
                   and lowercase letter, and at least 8 or more characters.">

                      </br>
                      <input type="checkbox" onclick="myFunction()">Show Password
                      <script>
                        function myFunction() {
                          var x = document.getElementById("myInput");
                          if (x.type === "password") {
                            x.type = "text";
                          } else {
                            x.type = "password";
                          }
                        }
                      </script>
                    </div>
                    <div class="pt-1 mb-4 d-grid">
                      <input type="submit" class="btn btn-dark btn-lg btn-block" type="button" name="Login" value="LOGIN">

                    </div>
                    <a href="" data-bs-toggle="modal" data-bs-target="#myModal" cursor="pointer" style="color: orange;">Forgot password?</a>
                    <p class="mb-2" style="color: orange;">Don't have an account? <a href="reg.php" style="color: white;">Register here</a></p>
                    <p class="mb-0" style="color: white;">&copy; By Tugon Cite Students</p>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Modal forgot password -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <!-- Modal Header forgot password -->
        <div class="modal-header">
          <h4 class="modal-title" style="font-size:20px;">Forget Password Form</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <!-- Modal body  -->
        <div class="modal-body">
          <form action="index.php" method="POST">
            <label>OPT code</label>
            <input type="text" class="form-control mt-3" placeholder="" required> </br>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-infos btn-block fa-lg bg-info text-start" value="Submit" name="submit">
          </form>
        </div>
      </div>
    </div>
  </div>


</body>

</html>