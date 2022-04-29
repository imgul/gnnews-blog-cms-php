<?php
include '../includes/config.php';

$alert_info = false;
$alert_success = false;
$alert_warning = false;
$alert_error = false;

// Clear form before submission
$username = '';
$password = '';

// Form Validation
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ((isset($_POST['loginSubmit'])) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);
    // $alert_info = $username . $password;

    if (empty($username) || empty($password)) {
        $alert_error = "Please fill all the required fields.";
    } else {
        $query = "SELECT * FROM `users` WHERE `user_username` = '$username' OR `user_email` = '$username';";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        if ($row < 1) {
            $alert_error = "User not found. <a href='register.php'>Register with this username</a>.";
        } elseif (password_verify($password, $row['user_password'])) {
            session_start();
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_role'] = $row['user_role'];
            // $alert_success = "Welcome " . $_SESSION['user_fname'] . " " . $_SESSION['user_lname'] . " " . $_SESSION['user_id'] . " You are loggedin successfully.";
            header('location: index.php');
        } else {
            $alert_error = "Invalid password. <a href='forget_password.php'>Reset Your Password.</a>";
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
                        <div class="card-heading text-primary">GN News Login</div>
                    </div>
                    <div class="card-body p-lg-5">
                        <h3 class="mb-4">Hi, welcome back! 👋👋</h3>
                        <p class="text-muted text-sm mb-5">GN News provides you the great attention and honor. Become a member now and enjoy the fame.</p>
                        <form class="needs-validation" novalidate="" id="loginForm" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="form-floating mb-3">
                                <input class="form-control" name="username" id="floatingInput" type="text" value="<?php echo $username; ?>" placeholder="johndoe or name@example.com" minlength="3" maxlength="20" required>
                                <div class="invalid-feedback">Please enter your username or email.</div>
                                <label for="floatingInput">Username or Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="password" id="floatingPassword" type="password" value="<?php echo $password; ?>" placeholder="Password" minlength="8" maxlength="30" required>
                                <div class="invalid-feedback">Please enter your password.</div>
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label" for="remember">Alwasys remember me</label>
                            </div>
                            <button class="btn btn-primary btn-lg" name="loginSubmit" type="submit">Submit</button>
                        </form>
                    </div>
                    <div class="card-footer px-lg-5 py-lg-4">
                        <div class="text-sm text-muted">Don't have an account? <a href="register.php">Register</a>.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-5 ms-xl-auto px-lg-4 text-center text-primary"><img class="img-fluid mb-4" width="300" src="dist/img/register-account.png" alt="">
                <h1 class="mb-4">Login Now <br class="d-none d-lg-inline">To GN News Network</h1>
                <p class="lead text-muted">We are happy to see you as a GN News Team Member. You are lucky enough to join a great community on the internet.</p>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>