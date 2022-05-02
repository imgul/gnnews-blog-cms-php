</head>
</body>

<?php
session_start();
include '../includes/config.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

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
                    <div class="col-lg-4">
                        <!-- Card Info Follow -->
                        <!-- <div class="card card-profile mb-4">
                            <div class="card-header" style="background-image: url(dist/img/photos/paul-morris-116514-unsplash.jpg);">
                            </div>
                            <div class="card-body text-center"><img class="card-profile-img" src="dist/img/avatar-7.jpg" alt="Nathan Andrews">
                                <h3 class="mb-3">Nathan Andrews</h3>
                                <p class="mb-4">One morning, when Gregor Samsa woke from troubled </p>
                                <button class="btn btn-outline-dark btn-sm"><span class="fab fa-twitter"></span>
                                    Follow</button>
                            </div>
                        </div> -->
                        <!-- Profile Social Icons Card -->
                        <!-- <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0"><img class="avatar avatar-lg p-1" src="dist/img/avatar-7.jpg" alt="Nathan Andrews"></div>
                                    <div class="flex-grow-1 ps-3">
                                        <h4>Nathan Andrews</h4>
                                        <p class="text-muted mb-0">Coder</p>
                                        <ul class="social-links list-inline mb-0 mt-2">
                                            <li class="list-inline-item"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Nathan's Facebook"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="@nathan_andrews"><i class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="+420777555987"><i class="fa fa-phone"></i></a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="@nathan"><i class="fab fa-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- My Profile -->
                        <form class="card mb-4">
                            <div class="card-header">
                                <h4 class="card-heading">My Profile</h4>
                            </div>
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-auto d-flex align-items-center"><img class="avatar avatar-lg p-1" src="dist/img/avatar-7.jpg" alt="Avatar">
                                    </div>
                                    <div class="col">
                                        <h4 class="mt-3">Gul Zaib</h4>
                                        <p>@gulzaib</p>
                                        <!-- <label class="form-label">Name</label>
                                        <input class="form-control" placeholder="Your name"> -->
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Bio</label>
                                    <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream.</p>
                                    <!-- <textarea class="form-control" rows="8">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. &quot;What's happened to me?&quot; he thought. It wasn't a dream.</textarea> -->
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <p>zaibg0375@gmail.com</p>
                                    <!-- <input class="form-control" placeholder="you@domain.com"> -->
                                </div>
                                <!-- <label class="form-label">Password</label>
                                <input class="form-control" type="password" value="password"> -->
                            </div>
                            <!-- <div class="card-footer text-end">
                                <button class="btn btn-primary">Save</button>
                            </div> -->
                        </form>
                    </div>
                    <div class="col-lg-8">
                        <!-- <div class="card overflow-hidden mb-4">
                            <div class="card-header">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Message">
                                    <button class="btn btn-outline-secondary" type="button"><i class="fa fa-paper-plane"></i></button>
                                </div>
                            </div>
                            <div class="list-group rounded-0">
                                <div class="list-group-item border-start-0 border-end-0 py-5 border-top-0">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0"><img class="avatar avatar-lg p-1" src="dist/img/avatar-7.jpg" alt="Nathan Andrews"></div>
                                        <div class="flex-grow-1 ps-3"><small class="float-right">10 mins ago</small>
                                            <h5 class="fw-bold">Nathan Andrews</h5>
                                            <div class="text-muted text-sm"> One morning, when Gregor Samsa woke
                                                from troubled dreams, he found himself transformed in his bed into a
                                                horrible vermin. He lay on his armour-like back, and if he lifted
                                                his head a little he could see his brown belly, slightly domed and
                                                divided by arches into stiff sections</div>
                                            <div class="d-flex mt-4">
                                                <div class="flex-shrink-0"><img class="avatar avatar-md p-1" src="dist/img/avatar-3.jpg" alt="Serenity Mitchelle"></div>
                                                <div class="flex-grow-1 ps-3 text-sm text-muted"><strong class="text-dark">Serenity Mitchelle: </strong>The bedding
                                                    was hardly able to cover it and seemed ready to slide off any
                                                    moment. His many legs, pitifully thin compared with the size of
                                                    the rest of him, waved about helplessly as he looked.
                                                    &quot;What's happened to me?&quot; he thought. It wasn't a
                                                    dream.</div>
                                            </div>
                                            <div class="d-flex mt-4">
                                                <div class="flex-shrink-0"><img class="avatar avatar-md p-1" src="dist/img/avatar-1.jpg" alt="Tony O'Brian"></div>
                                                <div class="flex-grow-1 ps-3 text-sm text-muted"><strong class="text-dark">Tony O'Brian: </strong>His room, a proper
                                                    human room although a little too small, lay peacefully between
                                                    its four familiar walls. A collection of textile samples lay
                                                    spread out on the table.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item border-start-0 border-end-0 py-5">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0"><img class="avatar avatar-lg p-1" src="dist/img/avatar-7.jpg" alt="Nathan Andrews"></div>
                                        <div class="flex-grow-1 ps-3"><small class="float-right">12 mins ago</small>
                                            <h5 class="fw-bold">Nathan Andrews</h5>
                                            <div class="text-muted text-sm"> Samsa was a travelling salesman - and
                                                above it there hung a picture that he had recently cut out of an
                                                illustrated magazine and housed in a nice, gilded frame.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item border-start-0 border-end-0 py-5">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0"><img class="avatar avatar-lg p-1" src="dist/img/avatar-7.jpg" alt="Nathan Andrews"></div>
                                        <div class="flex-grow-1 ps-3"><small class="float-right">34 mins ago</small>
                                            <h5 class="fw-bold">Nathan Andrews</h5>
                                            <div class="text-muted text-sm"> He must have tried it a hundred times,
                                                shut his eyes so that he wouldn't have to look at the floundering
                                                legs, and only stopped when he began to feel a mild, dull pain there
                                                that he had never felt before.</div>
                                            <div class="d-flex mt-4">
                                                <div class="flex-shrink-0"><img class="avatar avatar-md p-1" src="dist/img/avatar-6.jpg" alt="Javier Gregory"></div>
                                                <div class="flex-grow-1 ps-3 text-sm text-muted"><strong class="text-dark">Javier Gregory: </strong>One morning, when
                                                    Gregor Samsa woke from troubled dreams, he found himself
                                                    transformed in his bed into a horrible vermin. He lay on his
                                                    armour-like back, and if he lifted his head a little he could
                                                    see his brown belly, slightly domed and divided by arches into
                                                    stiff sections</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!--  Register Form -->
                        <!-- <div class="card-body p-lg-5">
                            <h3 class="mb-4">Get started with GN News</h3>
                            <p class="text-muted text-sm mb-5">GN News provides you the great attention and honor. Become a member now and enjoy the fame.</p>
                            <form class="needs-validation" novalidate="" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                                <div class="row">
                                    <div class="form-floating mb-3 col-md-6 has-required">
                                        <input name="fname" class="form-control" value="<?php echo $firstname; ?>" id="fname" type="text" placeholder="John" minlength="2" maxlength="15" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">Please enter your first name(2-15 Characters).</div>
                                        <label for="fname">First Name</label>
                                    </div>
                                    <div class="form-floating mb-3 col-md-6">
                                        <input name="lname" class="form-control" value="<?php echo $lastname; ?>" id="lname" type="text" placeholder="Doe" minlength="2" maxlength="15" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">Please enter your last name(2-15 Characters).</div>
                                        <label for="lname">Last Name</label>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input name="username" class="form-control" value="<?php echo $username; ?>" id="username" type="text" placeholder="johndoe" minlength="3" maxlength="20" required>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter your username(3-20 Characters).</div>
                                    <label for="username">Username</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input name="email" class="form-control" value="<?php echo $email; ?>" id="floatingInput" type="email" placeholder="name@example.com" required>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter your valid email.</div>
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input name="password" class="form-control" value="<?php echo $password; ?>" id="floatingPassword" type="password" placeholder="Password" minlength="8" maxlength="30" required>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter your Password(8-30 Characters).</div>
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input name="confirmPassword" class="form-control" value="<?php echo $confirmPassword; ?>" id="floatingConfirmPassword" type="password" placeholder="Confirm Password" minlength="8" maxlength="30" required>
                                    <div class="valid-feedback">Looks good!</div>
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
                        </div> -->
                        <form class="card mb-4">
                            <div class="card-header">
                                <h4 class="card-heading">Edit Profile</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
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

                                            /* #profileImg__img,
                                            #profileImg__overlay {
                                                position: absolute;
                                                top: 0;
                                                left: 0;
                                            } */
                                        </style>
                                        <div class="mb-4" for="profileImg">
                                            <label for="profileImg__input" id="profileImg__label">
                                                <img class="w-100 h-100" id="profileImg__img" src="dist/img/avatar-7.jpg" alt="Avatar">
                                                <div id="profileImg__overlay">Select Image</div>
                                            </label>
                                            <input class="d-none" type="file" accept="image/*" name="profileImg" id="profileImg__input" oninput="profileImg__img.src=window.URL.createObjectURL(this.files[0])">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="mb-4">
                                            <label class="form-label">Username</label>
                                            <input class="form-control" type="text" placeholder="Username" value="nathan">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="mb-4">
                                            <label class="form-label">Email address</label>
                                            <input class="form-control" type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="mb-4">
                                            <label class="form-label">First Name</label>
                                            <input class="form-control" type="text" placeholder="First name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="mb-4">
                                            <label class="form-label">Last Name</label>
                                            <input class="form-control" type="text" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-4">
                                            <label class="form-label">Address</label>
                                            <input class="form-control" type="text" placeholder="Home Address">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="mb-4">
                                            <label class="form-label">City</label>
                                            <input class="form-control" type="text" placeholder="City">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="mb-4">
                                            <label class="form-label">ZIP</label>
                                            <input class="form-control" type="number" placeholder="ZIP">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="mb-4">
                                            <label class="form-label">Country</label>
                                            <select class="form-control custom-select">
                                                <option value="">UK</option>
                                                <option value="">US</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-0">
                                            <label class="form-label">About Me</label>
                                            <textarea class="form-control" rows="5" placeholder="Here can be your description">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. &quot;What's happened to me?&quot; he thought. It wasn't a dream.</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" type="submit">Update Profile</button>
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
                        <p class="mb-2 mb-md-0 fw-bold">Your company &copy; 2022</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-gray-400">
                        <p class="mb-0">Version 1.3.0</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<?php include 'includes/footer.php'; ?>