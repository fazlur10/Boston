<footer class="py-4 py-md-5" style="background-color:#0a0b0d">
  <div>
    <div class="container border-bottom border-dark pb-4">
      <div class="row gy-3 align-items-sm-center">
        <div class="col-12 col-sm-6">
          <div class="footer-logo-wrapper text-start">
            <a href="#!">
              <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Footer Logo" height="60">
            </a>
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="booking-appointment-footer-wrapper">
            <ul class="m-0 list-unstyled d-flex justify-content-sm-end gap-2">
              <li>
                <button class="book-appointment-desktop-btn">Book Appointment</button>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="py-4 py-md-5 py-xl-7 py-xxl-10">
    <div class="container">
      <div class="row gy-4 gy-md-0">
        <div class="col-6 col-md-3">
          <div class="link-wrapper">
            <h4 class="mb-3 fw-bold fs-7 text-light">Working Time</h4>
            <ul class="m-0 list-unstyled">
              <li class="mb-1">
                <p class="link-opacity-75 link-opacity-100-hover text-decoration-none fs-8 link-light mb-0">
                  Sunday - Thursday: 8AM - 9PM
                </p>
              </li>
              <li class="mb-1">
                <p class="link-opacity-75 link-opacity-100-hover text-decoration-none fs-8 link-light mb-0">
                  Saturday: 10AM - 12AM
                </p>
              </li>
              <li class="mb-1">
                <p class="link-opacity-75 link-opacity-100-hover text-decoration-none fs-8 link-light mb-0">
                  Friday: 2PM-12AM
                </p>
              </li>

            </ul>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="link-wrapper">
            <h4 class="mb-3 fw-bold fs-7 text-light">Services</h4>
            <ul class="m-0 list-unstyled">
              <?php foreach ($main_services as $main_service): ?>
                <li class="mb-1">
                  <a href="<?= base_url('services/type/' . $main_service['id']); ?>"
                    class="link-opacity-75 link-opacity-100-hover text-decoration-none fs-8 link-light mb-0">
                    <?= $main_service['service_name']; ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="link-wrapper">
            <h4 class="mb-3 fw-bold fs-7 text-light">Dental</h4>
            <ul class="m-0 list-unstyled">
              <li class="mb-1">
                <a href="<?= base_url('service/sub/1'); ?>" class="link-opacity-75 link-opacity-100-hover text-decoration-none fs-8 link-light mb-0">
                  Dental Implants
                </a>
              </li>
              <li class="mb-1">
                <a href="<?= base_url('service/sub/2'); ?>" class="link-opacity-75 link-opacity-100-hover text-decoration-none fs-8 link-light mb-0">
                  Dental Surgery
                </a>
              </li>
              <li class="mb-1">
                <a href="<?= base_url('service/sub/3'); ?>" class="link-opacity-75 link-opacity-100-hover text-decoration-none fs-8 link-light mb-0">
                  Orthodontics and maxillofacial
                </a>
              </li>
              <li class="mb-1">
                <a href="<?= base_url('service/sub/4'); ?>" class="link-opacity-75 link-opacity-100-hover text-decoration-none fs-8 link-light mb-0">
                  Endodontics Treatment
                </a>
              </li>
              <li class="mb-1">
                <a href="<?= base_url('service/sub/5'); ?>" class="link-opacity-75 link-opacity-100-hover text-decoration-none fs-8 link-light mb-0">
                  Periodontal Treatment
                </a>
              </li>
              <li class="mb-1">
                <a href="<?= base_url('service/sub/10'); ?>" class="link-opacity-75 link-opacity-100-hover text-decoration-none fs-8 link-light mb-0">
                  Teeth cleaning
                </a>
              </li>


            </ul>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="link-wrapper">
            <h4 class="mb-3 fw-bold fs-7 text-light">Dermalogy</h4>
            <ul class="m-0 list-unstyled">
              <li class="mb-1">
                <a href="#" class="link-opacity-75 link-opacity-100-hover text-decoration-none fs-8 link-light mb-0">
                  Full Laser Treatment
                </a>
              </li>
              <li class="mb-1">
                <a href="#" class="link-opacity-75 link-opacity-100-hover text-decoration-none fs-8 link-light mb-0">
                  Cosmetic procedures
                </a>
              </li>
              <li class="mb-1">
                <a href="#" class="link-opacity-75 link-opacity-100-hover text-decoration-none fs-8 link-light mb-0">
                  Body Lift and Sculpting
                </a>
              </li>
              <li class="mb-1">
                <a href="#" class="link-opacity-75 link-opacity-100-hover text-decoration-none fs-8 link-light mb-0">
                  Peeling and Brightening
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Copyright & Links - Bootstrap Brain Component -->
  <div>
    <div class="container border-top border-dark pt-4">
      <div class="row gy-3 align-items-lg-center">
        <div class="col-12 col-lg-6 order-1 order-lg-0">
          <div class="copyright-wrapper d-block mb-1 fs-7 text-light text-start">
            &copy; 2024. All Rights Reserved. Boston Medical Care
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="link-wrapper">
            <ul class="m-0 list-unstyled d-flex justify-content-centerX justify-content-lg-end gap-2 gap-md-3">
              <li>
                <a href="#!"
                  class="link-underline-opacity-0 link-opacity-75-hover link-offset-1 link-light fs-8 d-flex align-items-center pe-2 pe-md-3 bsb-sep bsb-sep-border">
                  Home
                </a>
              </li>
              <li>
                <a href="#!"
                  class="link-underline-opacity-0 link-opacity-75-hover link-offset-1 link-light fs-8 d-flex align-items-center pe-2 pe-md-3 bsb-sep bsb-sep-border">
                  About
                </a>
              </li>
              <li>
                <a href="#!"
                  class="link-underline-opacity-0 link-opacity-75-hover link-offset-1 link-light fs-8 d-flex align-items-center pe-2 pe-md-3 bsb-sep bsb-sep-border">
                  Services
                </a>
              </li>
              <li>
                <a href="#!"
                  class="link-underline-opacity-0 link-opacity-75-hover link-offset-1 link-light fs-8 d-flex align-items-center pe-2 pe-md-3 bsb-sep bsb-sep-border">
                  Doctors
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

</footer>