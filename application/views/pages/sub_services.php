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
        <link rel="stylesheet" href="<?php echo base_url('assets/css/services-type.css'); ?>">
    </head>

    <body>
        <?php $this->load->view('pages/partial/nav'); ?>
        <div class="main-banner text-center">
            <h1 class="heading-text"><?= $main_service['service_name']; ?></h1>
        </div>
        <!-- Sub-services grid -->
        <div class="container">
            <div class="row mt-4">
                <?php foreach ($sub_services as $sub_service): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 text-center">
                            <img src="<?= base_url($sub_service['image_path']); ?>" class="card-img-top" alt="Service Image">
                            <div class="card-body">
                                <h5 class="card-title"><?= $sub_service['sub_service_name']; ?></h5>
                                <p class="card-text"><?= substr($sub_service['description'], 0, 50); ?>...</p>
                                <a href="<?= base_url('service/sub/' . $sub_service['id']); ?>" class="btn btn-dark">View
                                    More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php $this->load->view('pages/partial/footer'); ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="<?php echo base_url('assets/js/services-type.js'); ?>"></script>
    </body>

</html>