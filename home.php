<?php
ob_start();
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Welcome to ErgoGlide</h2>
        <p class="text-muted mb-0">Your one-stop store for ergonomic vertical mice</p>
    </div>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body">
        <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner rounded">
                <div class="carousel-item active">
                    <div class="ratio ratio-21x9">
                        <img src="images/mouse1.jpeg" class="d-block w-100 h-100 object-fit-cover" alt="Ergonomic vertical mouse">
                    </div>
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                        <h5>Comfort for Every Click</h5>
                        <p>A natural handshake position that reduces wrist strain.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="ratio ratio-21x9">
                        <img src="images/mouse2.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Wireless vertical mouse">
                    </div>
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                        <h5>Wireless Freedom</h5>
                        <p>Bluetooth and 2.4GHz vertical mice for your desk setup.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="ratio ratio-21x9">
                        <img src="images/mouse3.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Vertical mouse for left and right hand">
                    </div>
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                        <h5>Right and Left Hand Models</h5>
                        <p>Find the right fit for your hand.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<div class="row g-4">
    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center">
                <i class="bi bi-mouse-fill text-primary fs-1"></i>
                <h5 class="mt-2">Products</h5>
                <p class="text-muted">Manage the vertical mice in your inventory.</p>
                <a href="products.php" class="btn btn-primary">Open</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center">
                <i class="bi bi-people-fill text-primary fs-1"></i>
                <h5 class="mt-2">Customers</h5>
                <p class="text-muted">Keep track of your registered customers.</p>
                <a href="customers.php" class="btn btn-primary">Open</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center">
                <i class="bi bi-person-badge-fill text-primary fs-1"></i>
                <h5 class="mt-2">Staffs</h5>
                <p class="text-muted">Manage the staff who handle each order.</p>
                <a href="staffs.php" class="btn btn-primary">Open</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center">
                <i class="bi bi-cart-fill text-primary fs-1"></i>
                <h5 class="mt-2">Orders</h5>
                <p class="text-muted">Create orders, view details and invoices.</p>
                <a href="orders.php" class="btn btn-primary">Open</a>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>