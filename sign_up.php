<?php include "includes/connection.php"; ?>
<?php include "includes/header.php"; ?>

<?php
if(isset($_POST['submit'])){
$name =  $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$number = $_POST['number'];
$password = $_POST['password'];

$query = "INSERT INTO users (name, email, address, number, password) VALUES ('{$name}', '{$email}', '{$address}', '{$number}', '{$password}' ) ";

$result = mysqli_query($connection, $query);
}
?>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top sign">
  <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="index.php">Ambulance System </a></h1>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </div>
</header><!-- End Header -->
<!-- Form -->
<section class="mt-5 contact" id="contact">
  <form action="" method="post">
    <div class="container " data-aos="fade-up">
      <div class="row">
        <div class="col-lg-10 offset-sm-1 mt-lg-0 align-items-stretch">
          <div class="card shadow info">
            <div class="card-header text-center">
              <h4>Register With Us</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="form-group col-lg-6">
                  <label for="name">Username</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter Username">
                </div>
                <div class="form-group col-lg-6">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter Email">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-lg-6">
                  <label for="Address">Address</label>
                  <input type="text" class="form-control" name="address" placeholder="Enter Address">
                </div>
                <div class="form-group col-lg-6">
                  <label for="number">Phone Number</label>
                  <input type="text" class="form-control" name="number" placeholder="eg- 8144444444">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-lg-6">
                  <label for="name">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Enter Password">
                </div>
                <div class="form-group col-lg-6">
                  <label for="name">Confirm Password</label>
                  <input type="text" class="form-control" placeholder="Confirm your password">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-lg-6">
                  <p>Already have an account, Sign In &nbsp; <a href="sign_in.php" style="text-decoration: none;"> Here</a></p>
                </div>
                <div class="text-center"><button class="reg_button" name="submit" type="submit">Sign Up</button></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

</section>
<?php include "includes/footer.php"; ?>