<?php include 'connection.php'?>
<!doctype html>
<html lang="en">
  
<!-- Mirrored from demo.themeies.com/elearning/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 10:07:15 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon icons -->
    <link href="images/favicon.png" rel="shortcut icon">

    <!-- All CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Elearning - Tutor, Education HTML Template</title>
  </head>
  <body>
    <?php
    include 'connection.php';

    $query="select * from department";
    $result=mysqli_query($conn,$query);?>

  <?php include 'header.php'; ?>


    <!-- Preloader -->
    <!-- <div id="preloader">
      <div id="status"></div>
    </div>
     -->
    
    <h1 style="text-align: center;">Welcome Employee</h1>

    <!-- Login / Registration start -->
    <section class="banner login-registration">
      <div class="vector-img">
        <img src="images/vector.png" alt="">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="content-box">
              <h2>Create Account</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sedo<br> eiusmod tempor incididunt dolore.</p>
            </div>
            <form action="employee.php" method="POST" class="sl-form">
              <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="EmpName" placeholder="Jhone Doe" required>
              </div>
              <div class="form-group">
                <label>Enter Department</label>
                <!--<input type="number" name="EmpDept" placeholder="Department" required>-->
              <select name="dddepartment">
              <?php
              while($row=mysqli_fetch_array($result))
              {
              ?>
                <option value="<?php echo $row['Dep_Id']?>"><?php echo $row['Dep_Name']?></option>
                <?php
                }
                ?>
              </select>
              </div>
              <div class="form-group">
                <label>Email or Username</label>
                <input type="email" name="EmpEmail" placeholder="example@gmail.com" required>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="EmpPass" placeholder="Password" required>
              </div>
              <div class="form-group">
                <label>Your date of birth</label>
                <input type="date" name="DOB" placeholder="Enter your Date of Birth" required>
              </div>
              <div class="form-group">
                <label>Contact</label>
                <input type="text" name="EmpContact" placeholder="Contact number" required>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input">
                <label class="form-check-label">Agree with <a href="#">Terms and Conditions</a></label>
              </div>
              <button name="empSignup" type="submit" class="btn btn-filled btn-round">Signup</button>
              <p class="notice">Already have an account? <a href="login.html">Login Account</a></p>
            </form>
          </div>          
        </div>
      </div>      
    </section>
  <!-- Login / Registration end -->

    
    <!-- JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>

<!-- Mirrored from demo.themeies.com/elearning/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 10:07:15 GMT -->
</html>