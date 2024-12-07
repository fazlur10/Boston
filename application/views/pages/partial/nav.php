<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <!-- Logo on the left -->
        <a class="navbar-brand" href="#">
            <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Logo">
        </a>

        <!-- Navbar toggler icon (visible on mobile) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links (centered in desktop, collapsed in mobile) -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('about'); ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('services'); ?>">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Doctors</a>
                </li>
                <!-- "Book Appointment" will appear here in mobile view -->
                <li class="nav-item">
                    <a class="nav-link book-appointment-mobile-btn" href="#">Book Appointment</a>
                </li>
            </ul>
        </div>

        <!-- Book Appointment button only visible in desktop view -->
        <div class="top-nav-button">
            <button class="ms-auto book-appointment-desktop-btn">Book Appointment</button>
        </div>
    </div>
</nav>