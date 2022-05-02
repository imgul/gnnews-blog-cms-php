<?php
include '../includes/config.php';

// Clear form before submission
$firstname = '';
$lastname = '';
$username = '';
$email = '';
$password = '';
$confirmPassword = '';

// Form Validation
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ((isset($_POST['registerSubmit'])) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
    $firstname = test_input($_POST['fname']);
    $lastname = test_input($_POST['lname']);
    $username = test_input($_POST['username']);
    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);
    $confirmPassword = test_input($_POST['confirmPassword']);
    // $alert_info = $firstname . $lastname . $username . $email . $password . $confirmPassword;

    if (empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
        $alert_error = "Please fill all the required fields.";
    } else {
        $existUser = false;
        $queryExistUser = "SELECT * FROM `users` WHERE `username` = '$username' OR `email` = '$email';";
        $resultExistUser = mysqli_query($conn, $queryExistUser);
        $rowExistUser = mysqli_fetch_array($resultExistUser);
        if ($rowExistUser > 1) {
            $existUser = true;
        }
        if ($existUser) {
            if ($username == $rowExistUser['username']) {
                $alert_error = "Username already exists. Try with different one.";
            }
            // else {
            //     $alert_error = "Email already registered. You can <a href='login.php'>Login Here</a>.";
            // }
            if ($email == $rowExistUser['email']) {
                $alert_error = "Email already registered. You can <a href='login.php'>Login Here</a>.";
            }
        } else {
            if ($password != $confirmPassword) {
                $alert_error = "Passwords do not match.";
            } else {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `password`) VALUES (NULL, '$username', '$firstname', '$lastname', '$email', '$hashed_password');";
                $result = mysqli_query($conn, $query);
                // $alert_info = $firstname . $lastname . $username . $email . $password . $confirmPassword . $hashed_password;
                if (!$result) {
                    die($alert_error = "Query Failed due to " . mysqli_error($conn));
                } else {
                    header("Location: login.php");
                    $alert_success = "Welcome " . $firstname . " " . $lastname . " Your account has been created successfully! <a href='login.php'>Login here</a>";
                }
                // Clear Form after submission
                $firstname = '';
                $lastname = '';
                $username = '';
                $email = '';
                $password = '';
                $confirmPassword = '';
            }
        }
    }
}


include 'includes/header.php';
?>


<div class="page-holder align-items-center py-4 bg-gray-100 vh-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 px-lg-4">
                <div class="card">
                    <div class="card-header px-lg-5">
                        <div class="card-heading text-primary">GN News Register</div>
                    </div>
                    <div class="card-body p-lg-5">
                        <h3 class="mb-4">Get started with GN News</h3>
                        <p class="text-muted text-sm mb-5">GN News provides you the great attention and honor. Become a member now and enjoy the fame.</p>
                        <form class="needs-validation" novalidate="" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="row">
                                <div class="form-floating mb-3 col-md-6 has-required">
                                    <input name="fname" class="form-control" value="<?php echo $firstname; ?>" id="fname" type="text" placeholder="John" minlength="1" maxlength="15" required>
                                    <!-- <div class="valid-feedback">Looks good!</div> -->
                                    <div class="invalid-feedback">Please enter your first name(1-15 Characters).</div>
                                    <label for="fname">First Name</label>
                                </div>
                                <div class="form-floating mb-3 col-md-6">
                                    <input name="lname" class="form-control" value="<?php echo $lastname; ?>" id="lname" type="text" placeholder="Doe" minlength="1" maxlength="15" required>
                                    <!-- <div class="valid-feedback">Looks good!</div> -->
                                    <div class="invalid-feedback">Please enter your last name(1-15 Characters).</div>
                                    <label for="lname">Last Name</label>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="username" class="form-control" value="<?php echo $username; ?>" id="username" type="text" placeholder="johndoe" minlength="3" maxlength="20" required>
                                <!-- <div class="valid-feedback">Looks good!</div> -->
                                <div class="invalid-feedback">Please enter your username(3-20 Characters).</div>
                                <label for="username">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="email" class="form-control" value="<?php echo $email; ?>" id="floatingInput" type="email" placeholder="name@example.com" required>
                                <!-- <div class="valid-feedback">Looks good!</div> -->
                                <div class="invalid-feedback">Please enter your valid email.</div>
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="password" class="form-control" value="<?php echo $password; ?>" id="floatingPassword" type="password" placeholder="Password" minlength="8" maxlength="30" required>
                                <!-- <div class="valid-feedback">Looks good!</div> -->
                                <div class="invalid-feedback">Please enter your Password(8-30 Characters).</div>
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="confirmPassword" class="form-control" value="<?php echo $confirmPassword; ?>" id="floatingConfirmPassword" type="password" placeholder="Confirm Password" minlength="8" maxlength="30" required>
                                <!-- <div class="valid-feedback">Looks good!</div> -->
                                <div class="invalid-feedback">Please confirm password.</div>
                                <label for="floatingConfirmPassword">Confirm Password</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="agree" id="agree" required>
                                <label class="form-check-label" for="agree">I agree with the <a href="#">Terms &
                                        Conditions</a>.</label>
                                <div class="invalid-feedback">You must agree before submitting.</div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" id="register" type="submit" name="registerSubmit">Register</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer px-lg-5 py-lg-4">
                        <div class="text-sm text-muted">Already have an account? <a href="login.php">Login</a>.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-5 ms-xl-auto px-lg-4 text-center text-primary">
                <img class="img-fluid mb-4" width="300" src="dist/img/register-account.png" alt=""> <!-- style="transform: rotate(10deg)" -->
                <h1 class="mb-4">Register Now <br class="d-none d-lg-inline">To GN News Network</h1>
                <p class="lead text-muted">We will be happy to see you a GN News Team Member. You are lucky enough to join a great community on the internet.</p>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>