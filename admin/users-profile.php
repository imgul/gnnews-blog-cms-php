</head>
</body>
<?php
session_start();
include '../includes/config.php';


// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('location: login.php');
} else {
    $user_id = $_SESSION['user_id'];
    // Get user details
    $sql = "SELECT * FROM `users` WHERE `id` = '$user_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $username = $row['username'];
    $email = $row['email'];
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $profile_pic = $row['profile_pic'];
    $role = $row['role'];
    $about = $row['about'];
    $status = $row['status'];
    $created_at = $row['created_at'];
    $updated_at = $row['updated_at'];
}


// Upload Image to Server and Database
// if (isset($_POST['update_user'])) {

// }


// // Upload Image 2
// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["profileImg__input"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if (isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["profileImg__input"]["tmp_name"]);
//     if ($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }

// // Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }

// // Check file size
// if ($_FILES["profileImg__input"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }

// // Allow certain file formats
// if (
//     $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//     && $imageFileType != "gif"
// ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
//     // if everything is ok, try to upload file
// } else {
//     if (move_uploaded_file($_FILES["profileImg__input"]["tmp_name"], $target_file)) {
//         echo "The file " . htmlspecialchars(basename($_FILES["profileImg__input"]["name"])) . " has been uploaded.";
//     } else {
//         echo "Sorry, there was an error uploading your file.";
//     }
// }

// Form Validation
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ((isset($_POST['update_user'])) && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
    // Upload Image to Server and Database
    // Date Time for Images Prefix
    $date = date('Ymd');
    $time = date('His');
    $date_time = $date . "-" . $time;

    if (!empty($_FILES['profileImg']['name'])) {
        $target_dir = "../uploads/images/users/";
        $target_file = "IMG-" . $date_time . "-" . basename($_FILES["profileImg"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if (isset($_POST["update_user"])) {
            $check = getimagesize($_FILES["profileImg"]["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["profileImg"]["size"] > 2000000) {
            $uploadOk = 0;
        }
        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $alert_error = "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["profileImg"]["tmp_name"], $target_dir . $target_file)) {
                $alert_success = "The file " . basename($_FILES["profileImg"]["name"]) . " has been uploaded.";
            } else {
                $alert_error = "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        $target_file = $row['profile_pic'];
    }


    $up_first_name = test_input($_POST['first_name']);
    $up_last_name = test_input($_POST['last_name']);
    $up_username = test_input($_POST['username']);
    $up_email = test_input($_POST['email']);
    $up_about = test_input($_POST['about']);
    $up_user_role = test_input($_POST['user_role']);
    // $password = test_input($_POST['password']);
    // $confirmPassword = test_input($_POST['confirmPassword']);
    // $alert_info = $firstname . $lastname . $username . $email . $password . $confirmPassword;

    $user_id = $_SESSION['user_id'];
    if (empty($up_first_name) || empty($up_last_name) || empty($up_username) || empty($up_email)) {
        $alert_error = "Please fill all the required fields.";
    } else {
        $existUser = false;
        $queryExistUser = "SELECT `users`.`username`, `users`.`email` FROM `users` WHERE `username` IN ('gulzaib') AND `email` IN ('zaibg0375@gmail.com') AND `id` NOT IN ('$user_id');";
        $resultExistUser = mysqli_query($conn, $queryExistUser);
        $rowExistUser = mysqli_fetch_array($resultExistUser);
        if ($rowExistUser > 1) {
            $existUser = true;
        }
        if ($existUser) {
            if ($up_username == $rowExistUser['username']) {
                $alert_error = "Username already exists. Try with different one.";
            }
            if ($up_email == $rowExistUser['email']) {
                $alert_error = "Email already registered. You can <a href='login.php'>Login Here</a>.";
            }
        } else {
            // if ($password != $confirmPassword) {
            //     $alert_error = "Passwords do not match.";
            // } else {
            // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            // $queryUpdate = "INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `password`) VALUES (NULL, '$username', '$firstname', '$lastname', '$email', '$hashed_password');";
            $queryUpdate = "UPDATE `users` SET `username` = '$up_username', `first_name` = '$up_first_name', `last_name` = '$up_last_name', `email` = '$up_email', `about` = '$up_about', `profile_pic` = '$target_file', `role` = '$up_user_role' WHERE `users`.`id` = '$user_id';";
            echo "<meta http-equiv='refresh' content='0'>";
            // header("Refresh: 0");
            $resultUpdate = mysqli_query($conn, $queryUpdate);
            // $alert_info = $firstname . $lastname . $username . $email . $password . $confirmPassword . $hashed_password;
            if (!$resultUpdate) {
                die($alert_error = "Query Failed due to " . mysqli_error($conn));
            } else {
                // header("Location: login.php");
                $alert_success = "Great " . $up_first_name . " " . $up_last_name . " Your account has been updated successfully!";
            }
            // }
        }
    }
}


include 'includes/header.php';
include 'includes/navbar.php';


?>

<style>
    #profileImg__label {
        position: relative;
        width: 7rem;
        aspect-ratio: 1/1;
        border-radius: 50%;
    }

    #profileImg__overlay {
        position: absolute;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.8);
        width: 100%;
        padding: 4px 8px;
    }

    #profileImg__img {
        transition: .5 ease;
    }

    #profileImg__label:hover #profileImg__img {
        opacity: 0.7;
    }
</style>

<div class="d-flex align-items-stretch">
    <!-- Start Sidebar -->
    <?php include 'includes/sidebar.php'; ?>
    <!-- End Sidebar -->
    <div class="page-holder bg-gray-100">
        <div class="container-fluid px-lg-4 px-xl-5">
            <!-- Breadcrumbs -->
            <div class="page-breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Profile </li>
                </ul>
            </div>
            <!-- Page Header-->
            <div class="page-header">
                <h1 class="page-heading">Profile</h1>
            </div>
            <section>
                <div class="row">
                    <div class="col-lg-12">
                        <form class="card mb-4 needs-validation" novalidate="" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                            <div class="card-header">
                                <h4 class="card-heading">Edit Profile</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-4" for="profileImg">
                                            <label for="profileImg__input" id="profileImg__label">
                                                <img class="w-100 h-100" id="profileImg__img" src="../uploads/images/users/<?php echo $profile_pic; ?>" alt="Avatar">
                                                <div id="profileImg__overlay">Select Image</div>
                                            </label>
                                            <input class="d-none" type="file" accept="image/*" name="profileImg" id="profileImg__input" oninput="profileImg__img.src=window.URL.createObjectURL(this.files[0])">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="mb-4">
                                            <label for="username" class="form-label">Username</label>
                                            <input name="username" id="username" class="form-control" type="text" placeholder="Username" value="<?php echo $username; ?>" minlength="3" maxlength="20" required>
                                            <div class="invalid-feedback">Please enter username(3-20 Characters).</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="mb-4">
                                            <label for="email" class="form-label">Email address</label>
                                            <input name="email" id="email" class="form-control" type="email" placeholder="Email" value="<?php echo $email; ?>" required>
                                            <div class="invalid-feedback">Please enter your valid email.</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="mb-4">
                                            <label for="user-role" class="form-label">User Role</label>
                                            <select name='user_role' class="form-select" id="user-role" aria-label="Default select example">
                                                <?php
                                                // Array for user roles
                                                $user_roles = ['administrator', 'editor', 'author', 'contributor', 'subscriber'];
                                                // Loop through the array
                                                foreach ($user_roles as $user_role) {
                                                    $user_role_capital = ucfirst($user_role);
                                                    // If the current role is equal to the user role
                                                    if ($user_role == $role) {
                                                        // Display the current role as selected
                                                        echo "<option value='$user_role' selected>$user_role_capital</option>";
                                                    } else {
                                                        // Display the current role
                                                        echo "<option value='$user_role'>$user_role_capital</option>";
                                                    }
                                                }

                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="mb-4">
                                            <label for="first_name" class="form-label">First Name</label>
                                            <input name="first_name" id="first_name" class="form-control" type="text" placeholder="First name" value="<?php echo $first_name; ?>" minlength="1" maxlength="15" required>
                                            <div class="invalid-feedback">Please enter your first name(1-15 Characters).</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="mb-4">
                                            <label for="last_name" class="form-label">Last Name</label>
                                            <input name="last_name" id="last_name" class="form-control" type="text" placeholder="Last Name" value="<?php echo $last_name; ?>" minlength="1" maxlength="15" required>
                                            <div class="invalid-feedback">Please enter your last name(1-15 Characters).</div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-0">
                                            <label for="about" class="form-label">About Me</label>
                                            <textarea name="about" id="about" class="form-control" rows="5" placeholder="Here can be your description" minlength="50" maxlength="225" required><?php echo $about; ?></textarea>
                                            <div class="invalid-feedback">Please enter about yourself(50-255 Characters).</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button name="update_user" class="btn btn-primary" type="submit">Update Profile</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start fw-bold">
                        <p class="mb-2 mb-md-0 fw-bold">Your company &copy; <?php echo date('Y'); ?></p>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-gray-400">
                        <p class="mb-0">Version 1.0.0</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<?php include 'includes/footer.php'; ?>