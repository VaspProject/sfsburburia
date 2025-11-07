<?php 
// Initialize session for form messages
session_start();

include('master/header.php');
//include('master/navbar.php');
//include('socialicon.php');


// Get form status
$status = $_GET['status'] ?? '';
$form_data = $_SESSION['form_data'] ?? [];
$form_errors = $_SESSION['form_errors'] ?? [];
$form_success = $_SESSION['form_success'] ?? '';

// Clear session data after retrieving
unset($_SESSION['form_data'], $_SESSION['form_errors'], $_SESSION['form_success']);
?>

<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('images/school_img/img13.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <h2 style="font-size: 2.5rem; font-weight: 700;">Contact us</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="bread-list">
                    <li><a href="index.php">Home<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Contact Us -->
<section id="contact" class="contact section" style="padding-top: 38px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="section-title bg">
                    <h2 style="font-size: 2.5rem;font-weight: 700;">Enquiry Form</span></h2>
                    <!-- <div class="icon"><i class="fa fa-paper-plane"></i></div> -->
                </div>
            </div>
        </div>

        <!-- Display Messages -->
        <?php if ($status === 'success' && !empty($form_success)): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo htmlspecialchars($form_success); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if ($status === 'error' && !empty($form_errors)): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    <?php foreach ($form_errors as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-lg-8 col-md-8 col-12">
                <div class="form-head">
                    <!-- Contact Form -->
                    <form class="form" action="mail.php" method="POST">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <i class="fa fa-user"></i>
                                    <input name="first-name" type="text" placeholder="First Name" 
                                           value="<?php echo htmlspecialchars($form_data['first-name'] ?? ''); ?>" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <i class="fa fa-user"></i>
                                    <input name="last-name" type="text" placeholder="Last Name" 
                                           value="<?php echo htmlspecialchars($form_data['last-name'] ?? ''); ?>" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <i class="fa fa-envelope"></i>
                                    <input name="email" type="email" placeholder="Email Address" 
                                           value="<?php echo htmlspecialchars($form_data['email'] ?? ''); ?>" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <i class="fa fa-globe"></i>
                                    <input name="url" type="url" placeholder="Website URL (Optional)" 
                                           value="<?php echo htmlspecialchars($form_data['url'] ?? ''); ?>">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group message">
                                    <i class="fa fa-pencil"></i>
                                    <textarea name="message" placeholder="Type your message" required><?php echo htmlspecialchars($form_data['message'] ?? ''); ?></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="button">
                                        <button type="submit" class="btn primary">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="contact-right">
                    <!-- Contact-Info -->
                    <div class="contact-info">
                        <!-- <div class="icon"><i class="fa fa-map"></i></div> -->
                        <h3>Our School Location</h3>
                        <p>St.Francis De Sales School, Burburia, Gamaku (PO), Amarpur, Gomati (Dist), Tripura, PIN: 799101</p>
                    </div>
                    <!-- Contact-Info -->
                    <div class="contact-info">
                        <!-- <div class="icon"><i class="fa fa-envelope"></i></div> -->
                        <h3>Contact Information</h3>
                        <p><i class="fa fa-envelope" style="color: #288FB4; margin-right: 10px;"></i><a href="mailto:sfsburburia@gmail.com">sfsburburia@gmail.com</a>
                    <br><i class="fa fa-phone" style="color: #288FB4; margin-right: 10px;"></i>+91 9615837112
                </p>
                        <!-- <p>9615837112</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add this CSS for alerts -->
<style>
.alert {
    margin: 20px 0;
    padding: 15px;
    border-radius: 4px;
}

.alert-success {
    background-color: #d4edda;
    border-color: #c3e6cb;
    color: #155724;
}

.alert-danger {
    background-color: #f8d7da;
    border-color: #f5c6cb;
    color: #721c24;
}

.alert ul {
    margin-bottom: 0;
    padding-left: 20px;
}

.btn-close {
    float: right;
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1;
    color: #000;
    opacity: .5;
    background: none;
    border: 0;
    padding: 0;
}
</style>

<?php 
include('master/footer.php');
?>