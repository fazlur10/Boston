<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boston - About</title>
        <link rel="icon" type="image/png" href="<?= base_url('assets/images/logo2.png'); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/nav.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/general.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/about.css'); ?>">
    </head>

    <body>
        <?php $this->load->view('pages/partial/nav'); ?>
        <div class="main-banner text-center">
            <h1 class="branding-text">Branding text here</h1>
            <div class="image-container mx-auto">
                <img src="<?php echo base_url('assets/images/h1-img-7.jpg'); ?>" alt="Landscape Image"
                    class="img-fluid">
            </div>
        </div>
        <section class="services-section py-5">
            <div class="container text-center">
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-item">
                            <div class="icon mb-3">
                                <img src="<?php echo base_url('assets/images/placeholder.jpg'); ?>"
                                    alt="Daily Prevention Icon" class="img-fluid">
                            </div>
                            <h5 class="service-title">Daily Prevention</h5>
                            <p class="service-description">Lorem ipsum dolor sit aiet wisi enim adit minim veniam</p>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-item">
                            <div class="icon mb-3">
                                <img src="<?php echo base_url('assets/images/placeholder.jpg'); ?>"
                                    alt="Teeth Whitening Icon" class="img-fluid">
                            </div>
                            <h5 class="service-title">Teeth Whitening</h5>
                            <p class="service-description">Lorem ipsum dolor sit aiet wisi enim adit minim veniam</p>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-item">
                            <div class="icon mb-3">
                                <img src="<?php echo base_url('assets/images/placeholder.jpg'); ?>"
                                    alt="Teeth Braces Icon" class="img-fluid">
                            </div>
                            <h5 class="service-title">Teeth Braces</h5>
                            <p class="service-description">Lorem ipsum dolor sit aiet wisi enim adit minim veniam</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="who-we-are">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Left Image -->
                    <div class="col-lg-6 mb-4 mb-lg-0" style="padding-left: 0px !important">
                        <img src="<?php echo base_url('assets/images/about-us-img-3.jpg'); ?>" alt="Reception Desk"
                            class="img-fluid rounded">
                    </div>
                    <!-- Right Content -->
                    <div class="col-lg-6 who-we-are-text-area">
                        <h6 class="text-uppercase text-primary">About Us</h6>
                        <h2 class="mb-4">Global Clinic</h2>
                        <p class="mb-4 text-muted">
                            Lorem ipsum dolor sit amet, consectetur adip iscing elit. Ut wisi enim ad minim veniam, qui
                            laore nostrud ctetur adipiscing elit, sed do eiusmod exerci tation wisi enim met cins.
                        </p>
                        <h2 class="mb-4">Our expansion</h2>
                        <p class="mb-4 text-muted">
                            Lorem ipsum dolor sit amet, consectetur adip iscing elit. Ut wisi enim ad minim veniam, qui
                            laore nostrud ctetur adipiscing elit, sed do eiusmod exerci tation wisi enim met cins.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-team py-5">
            <div class="container">
                <h2>Our Team</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adip iscing elit. Ut wisi enim ad minim veniam, qui
                    laore nostrud ctetur adipiscing elit, sed do eiusmod exerci tation wisi enim met cins.
                    Lorem ipsum dolor sit amet, consectetur adip iscing elit. Ut wisi enim ad minim veniam, qui
                    laore nostrud ctetur adipiscing elit, sed do eiusmod exerci tation wisi enim met cins.
                </p>
            </div>
            <div class="our-team-image-container container">
                <img src="<?php echo base_url('assets/images/team.jpg'); ?>" alt="our team" class="img-fluid ">
            </div>
        </section>

        <section class="image-grid py-5">
            <div class="container-fluid">
                <div class="row">
                    <!-- Image 1 -->
                    <div class="col-lg-3 col-md-4 col-6 mb-4">
                        <img src="<?php echo base_url('assets/images/service-gallary.jpg'); ?>" alt="Image 1"
                            class="img-fluid rounded shadow">
                    </div>
                    <!-- Image 2 -->
                    <div class="col-lg-3 col-md-4 col-6 mb-4">
                        <img src="<?php echo base_url('assets/images/service-gallary.jpg'); ?>" alt="Image 2"
                            class="img-fluid rounded shadow">
                    </div>
                    <!-- Image 3 -->
                    <div class="col-lg-3 col-md-4 col-6 mb-4">
                        <img src="<?php echo base_url('assets/images/service-gallary.jpg'); ?>" alt="Image 3"
                            class="img-fluid rounded shadow">
                    </div>
                    <!-- Image 4 -->
                    <div class="col-lg-3 col-md-4 col-6 mb-4">
                        <img src="<?php echo base_url('assets/images/service-gallary.jpg'); ?>" alt="Image 4"
                            class="img-fluid rounded shadow">
                    </div>
                    <!-- Image 5 -->
                    <div class="col-lg-3 col-md-4 col-6 mb-4">
                        <img src="<?php echo base_url('assets/images/service-gallary.jpg'); ?>" alt="Image 5"
                            class="img-fluid rounded shadow">
                    </div>
                    <!-- Image 6 -->
                    <div class="col-lg-3 col-md-4 col-6 mb-4">
                        <img src="<?php echo base_url('assets/images/service-gallary.jpg'); ?>" alt="Image 6"
                            class="img-fluid rounded shadow">
                    </div>
                    <!-- Image 7 -->
                    <div class="col-lg-3 col-md-4 col-6 mb-4">
                        <img src="<?php echo base_url('assets/images/service-gallary.jpg'); ?>" alt="Image 7"
                            class="img-fluid rounded shadow">
                    </div>
                    <!-- Image 8 -->
                    <div class="col-lg-3 col-md-4 col-6 mb-4">
                        <img src="<?php echo base_url('assets/images/service-gallary.jpg'); ?>" alt="Image 8"
                            class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </section>

        <!-- Include the footer -->
        <?php $this->load->view('pages/partial/footer'); ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="<?php echo base_url('assets/js/about.js'); ?>"></script>
    </body>

</html>