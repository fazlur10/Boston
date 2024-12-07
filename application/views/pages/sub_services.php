<div class="container my-5">
    <!-- Banner -->
    <div class="text-center bg-light py-5">
        <h1 class="display-4"><?= $main_service['service_name']; ?></h1>
    </div>
    
    <!-- Sub-services grid -->
    <div class="row mt-4">
        <?php foreach ($sub_services as $sub_service): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Service Image">
                    <div class="card-body">
                        <h5 class="card-title"><?= $sub_service['sub_service_name']; ?></h5>
                        <p class="card-text"><?= substr($sub_service['description'], 0, 25); ?>...</p>
                        <a href="<?= base_url('service/sub/' . $sub_service['id']); ?>" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
