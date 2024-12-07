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
        <link rel="stylesheet" href="<?php echo base_url('assets/css/services.css'); ?>">
    </head>

    <body>
        <?php $this->load->view('pages/partial/nav'); ?>
        <div class="main-banner text-center">
            <h1 class="branding-text">Our Services</h1>
        </div>

        <div class="container my-5">
            <?php foreach ($main_services as $index => $main_service): ?>
                <div class="row align-items-center mb-4">
                    <!-- Image column -->
                    <div class="col-md-6 <?php echo $index % 2 == 1 ? 'order-md-2' : ''; ?>">
                        <img src="<?= base_url($main_service['image_path']); ?>" alt="<?= $main_service['service_name']; ?>"
                            class="img-fluid rounded" />
                    </div>

                    <!-- Content column -->
                    <div class="col-md-6 <?php echo $index % 2 == 1 ? 'order-md-1 text-md-end' : ''; ?>">
                        <h3 class="mt-3"><?= $main_service['service_name']; ?></h3>
                        <p><?= $main_service['description']; ?></p>
                        <a href="<?= base_url('services/type/' . $main_service['id']); ?>" class="btn btn-dark">
                            Know More
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>


        <!-- Include the footer -->
        <?php $this->load->view('pages/partial/footer'); ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="<?php echo base_url('assets/js/services.js'); ?>"></script>
    </body>

</html>