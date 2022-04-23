<!-- Include Header File -->
<?php
include 'includes/header.php';
?>

<!-- Breadcrumb -->
<div class="bn-breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="bn-breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="#">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a href="#">lifestyle</a></li>
                    <li><i class="fa fa-angle-right"></i>Struggling to sell one..</li>
                </ol>
            </div>
            <!-- Col End -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Breadcrumb End -->
<!-- Start Main Content -->
<section class="main-content pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="bn-Page-title">Contact Us</h2>
                <p>True friendship is perhaps the only relation that survives the trials and tribulations of time and remains unconditional. A unique blend of affection, loyalty, love, respect, trust and loads of fun is perhaps what describes the true meaning of friendship. Similar interests, mutual respect and strong attachment with each other are what friends share between each other. These are just the general traits of a friendship. To experience what is friendship, one must have true friends, who are indeed rare treasure.</p>
                <h3>Contact Form</h3>
                <!-- Start Form -->
                <form id="contact-form" action="contact-form.html" method="post">
                    <div class="error-container"></div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control form-control-name" name="visitor_name" id="name" placeholder="" type="text" required="">
                            </div>
                        </div>
                        <!-- Col End -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control form-control-email" name="visitor_email" id="email" placeholder="" type="email" required="">
                            </div>
                        </div>
                        <!-- Col End -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Subject</label>
                                <input class="form-control form-control-subject" name="email_title" id="subject" placeholder="" required="">
                            </div>
                        </div>
                        <!-- Col End -->
                    </div>
                    <!-- Row End -->
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control form-control-message" name="visitor_message" id="message" placeholder="" rows="10" required=""></textarea>
                    </div>
                    <div>
                        <button class="btn-submit btn btn-primary" type="submit">Send Message</button>
                    </div>
                </form>
                <!-- Form End -->
            </div>
            <!-- Col End -->
            <div class="col-lg-4 col-md-12">
                <!-- Start Sidebar -->
                <?php include 'includes/sidebar.php'; ?>
                <!-- Sidebar End -->
            </div>
            <!-- Col End -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</section>
<!-- Main Content End -->

<!-- Include Footer -->
<?php include 'includes/footer.php'; ?>