<?php include "includes/header.php"; ?>

<?php
$con=mysqli_connect('localhost', 'root', '', 'driver');
if (!isset($_SESSION)) {
    session_start();

}
  
?>
<?php
if (!isset($_SESSION['email'])) {

    // header("Location: ../driver.php");
}
?>
<?php
if (isset($_POST['sign_in'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL INJECTION
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM driver WHERE email = '{$email}' ";
    $login_result = mysqli_query($connection, $query);

    if (!$login_result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }

    while ($row = mysqli_fetch_array($login_result)) {
        $database_id = $row['id'];
        $database_name = $row['name'];
        $database_email = $row['email'];
        $database_number = $row['number'];
        $database_password = $row['password'];
    }

    if ($password === $database_password) {
        $_SESSION['name'] = $database_name;
        $_SESSION['email'] = $database_email;
        $_SESSION['number'] = $database_number;
        $_SESSION['password'] = $database_password;

        header("Location: driver/index.php");
    } else {
        // header("Location: driver.php");
    }
}

?>

<header id="header" class="fixed-top sign">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.php">Ambulance Management  System </a></h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li><a class="getstarted scrollto" href="driver.php">Driver</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>

<!-- Form -->
<section class="mt-5 contact" id="contact">
    <form action="" method="POST">
        <div class="container " data-aos="fade-left">
            <div class="row">
                <div class="col-lg-6 offset-sm-3 mt-lg-0 align-items-stretch">
                    <div class="card shadow info">
                        <div class="card-header text-center">
                            <h4>Sign In</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group col-lg-12">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Email">
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="name">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter Password">
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <!-- <p>Don't have an account, Sign Un &nbsp; <a href="sign_up.php" style="text-decoration: none;"> Here</a></p> -->
                                </div>
                                <div class="text-center p-5"><button class="reg_button" name="sign_in" type="submit"><a href="driver.php">Sign In</a></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</section>

<?php include "includes/footer.php"; ?>