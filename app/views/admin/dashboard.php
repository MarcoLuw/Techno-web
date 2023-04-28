<div class="container-fluid px-4">
    <div class="row g-3 my-2">
        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2"><?php echo $data["count_user"]; ?></h3>
                    <p class="fs-5">Total Users</p>
                </div>
                <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2"><?php echo $data["count_category"]; ?></h3>
                    <p class="fs-5">Total Categories</p>
                </div>
                <i class="fas fa-list fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2"><?php echo $data["count_product"]; ?></h3>
                    <p class="fs-5">Total Products</p>
                </div>
                <i class="fas fa-desktop-alt fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">%25</h3>
                    <p class="fs-5">Total Orders</p>
                </div>
                <i class="fas fa-shipping-fast fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>
    </div>
</div>