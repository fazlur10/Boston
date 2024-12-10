<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boston</title>
    <link rel="icon" type="image/png" href="<?= base_url('assets/images/logo2.png'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nav.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/general.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home.css'); ?>">


  </head>

  <body>

    <!-- <div class="top-area">
      <div class="social-media-links">
        <div class="facebook-link">
          <span><a href="#">Facebook</a></span>
        </div>
        <div class="instagram-link">
        <span><a href="#">instagram</a></span>
        </div>
      </div>
      <div class="phone-number-div">
        <div class="open-time-div">
        <i class="fas fa-calendar-alt"></i>
        <span> Everyday 9am - 12pm </span>
        </div>
        <div class="phone-div"></div>
        <i class="fas fa-phone"></i>
        <span> 6694 6146 </span>
      </div>
    </div> -->
    <!-- Navbar -->
    <?php $this->load->view('pages/partial/nav'); ?>

    <div class="carousal-overlay">
      <h1> Boston Medical Care Clinic for Dentist, Derma, and Laser</h1>
      <div id="overlay-carousal" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo base_url('assets/images/h1-img-8.jpg'); ?>" class="d-block"
              alt="dentist is checking a petient">
            <div class="carousal-bottom-text d-block">
              <p>Impressive Smile and Radiant Skin</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url('assets/images/h1-img-7.jpg'); ?>" class="d-block"
              alt="woman with a tooth brush">
            <div class="carousal-bottom-text d-block">
              <p><b style="font-size:18px">Tooth Cleaning</b> Beautiful smile</p>
            </div>
          </div>
          <button class="overlay-carousel-control-prev" type="button" data-bs-target="#overlay-carousal"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="overlay-carousel-control-next" type="button" data-bs-target="#overlay-carousal"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    </div>
    <!--carousal !-->
    <div id="mainCarousal">
    </div>

    <section class="about-section py-5">
      <div class="container">
        <div class="row align-items-center">
          <!-- Image Section -->
          <div class="col-lg-6 text-center mb-4 mb-lg-0">
            <img src="<?php echo base_url('assets/images/about-us-img-3.jpg'); ?>" alt="About Image"
              class="img-fluid rounded shadow">
          </div>

          <!-- Text Section -->
          <div class="col-lg-6">
            <h1 class="display-4" style="color:#40341e">About Us</h1>
            <p class="lead">Our journey in the Middle East began in 2012, when we established our specialized skin
              and dental care clinics. Since our establishment, we have strived to provide the highest
              quality and healthcare to our customers, instilling the values of excellence, creativity and
              trust in their minds.</p>
            <a href="<?= base_url('about'); ?>" class="btn abt-us-btn mt-3">Know More</a>
          </div>
        </div>
      </div>
    </section>

    <section class="services-section py-5">
      <div class="container-fluid">
        <h2 class="text-center mb-5 display-4" style="color:#40341e">Our Services</h2>
        <div class="row">
          <?php foreach ($main_services as $main_service): ?>
            <div class="col-lg-3 mb-4">
              <a href="<?= base_url('services/type/' . $main_service['id']); ?>"
                class="text-decoration-none text-dark d-block text-center">
                <img src="<?= base_url($main_service['image_path']); ?>" alt="<?= $main_service['service_name']; ?>"
                  class="img-fluid rounded mb-3">
                <h4 style="color:#0d443b"><?= $main_service['service_name']; ?></h4>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="text-center">
          <a href="<?= base_url('services'); ?>" class="btn services-btn mt-3">Know More</a>
        </div>
      </div>
    </section>

    <section class="appointment-section" id="appointment-section">
      <div class="row appointment-row">
        <div class="col-lg container py-5 appointment-container">
          <h3 class="mb-4 display-4">We Are Available, Book Here Now.</h3>
          <form class="row g-3" id="appointmentForm">
            <div class="col-lg-6">
              <input type="text" name="inputName" placeholder="Name" class="form-control custom-input" id="inputName"
                required>
              <label class="input-error" id="nameError"></label>
            </div>
            <div class="col-lg-6">
              <input type="text" name="inputPhone" placeholder="Phone" class="form-control custom-input" id="inputPhone"
                required>
              <label class="input-error" id="phoneError"></label>
            </div>
            <div class="col-lg-6">
              <select name="inputService" class="form-control custom-input" id="inputService" required>
                <option selected disabled>Type of service</option>
                <?php foreach ($main_services as $main_service): ?>
                  <option value="<?= $main_service['id']; ?>"><?= $main_service['service_name']; ?></option>
                <?php endforeach; ?>
              </select>
              <label class="input-error" id="serviceError"></label>
            </div>
            <div class="col-lg-6">
              <input name="inputDate" type="date" class="form-control custom-input" id="inputDate" required>
              <label class="input-error" id="dateError"></label>
            </div>
            <div class="col-lg-6">
              <select name="inputTime" class="form-control custom-input" id="inputTime" required>
                <option selected disabled>Select Time</option>
                <?php foreach ($time_slots as $slot): ?>
                  <option value="<?= $slot['slot_time']; ?>"><?= $slot['formatted_time']; ?></option>
                <?php endforeach; ?>
              </select>
              <label class="input-error" id="timeError"></label>
            </div>
            <div class="col-12">
              <textarea name="inputMessage" class="form-control" rows="3" placeholder="Message"
                id="inputMessage"></textarea>
              <label class="input-error" id="messageError"></label>
            </div>
            <div class="col-12 text-center">
              <button type="submit" class="btn btn-form">Book Now</button>
            </div>
            <div class="col-12 text-center">
              <label id="formMessage" class="form-message"></label>
            </div>
          </form>
        </div>
        <div class="col-lg appointment-bg">

        </div>
      </div>
    </section>

    <section class="parallax-section">
      <div class="overlay-text">
        <h1 class="display-4">Boston Med Care</h1>
        <p class="lead">A honorable past, a creative present, a bright future.</p>
      </div>
    </section>

    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <h4>Get Appointment</h4>
          <h5 class="display-4">Contact Us Now</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>
          <div class="contact-info">
            <div class="d-flex align-items-center py-2">
              <i class="fas fa-phone-alt me-3 contact-icon"></i>
              <span>+966 53413 3328</span>
            </div>
            <div class="d-flex align-items-center py-2">
              <i class="fas fa-envelope me-3 contact-icon"></i>
              <span>info@bostoncare.sa</span>
            </div>
            <div class="d-flex align-items-center py-2">
              <i class="fas fa-map-marker-alt me-3 contact-icon"></i>
              <span>حي, Al Andalus, الملك سعود ابن عبدالعزيز سعود, Al Khobar 34437, Saudi Arabia</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14304.381264362877!2d50.1797711!3d26.3234129!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49e7bc338c52c9%3A0x3e329e0ced3aebbc!2sBoston%20medical%20care!5e0!3m2!1sen!2sqa!4v1733812612735!5m2!1sen!2sqa" referrerpolicy="no-referrer-when-downgrade"
              width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
          </div>
        </div>
      </div>
    </div>

    <!-- Include the footer -->
    <?php $this->load->view('pages/partial/footer'); ?>


    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      // Set the current date as the minimum date for the input field
      document.addEventListener('DOMContentLoaded', function () {
        var today = new Date().toISOString().split('T')[0]; // Get current date in YYYY-MM-DD format
        document.getElementById("inputDate").setAttribute("min", today); // Set the 'min' attribute
      });
    </script>



    <script src="<?php echo base_url('assets/js/home.js'); ?>"></script>

  </body>

</html>