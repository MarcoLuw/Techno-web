<div class="bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i class="fas fa-user-secret me-2"></i>BKU</div>
        <?php
        $url = $_GET['url'];
        $active = 'active';
        $inactive = 'fw-bold';
        ?>
        <div class="list-group list-group-flush my-3">
                <a href="admin/Dashboard" class="list-group-item list-group-item-action bg-transparent second-text <?php if (str_contains($url, "admin/Dashboard")) echo $active;
                                                                                                                        else echo $inactive; ?>"><i class="fa-sharp fa-solid fa-home me-2"></i>Dashboard</a>
                <a href="admin/cmsCustomer" class="list-group-item list-group-item-action bg-transparent second-text <?php if (str_contains($url, "admin/cmsCustomer")) echo $active;
                                                                                                                        else echo $inactive; ?>"><i class="fa-solid fa-user me-2"></i>Customer</a>
                <a href="admin/cmsCategory" class="list-group-item list-group-item-action bg-transparent second-text <?php if (str_contains($url, "admin/cmsCategory")) echo $active;
                                                                                                                        else echo $inactive; ?>"><i class="fa-solid fa-list me-2"></i>Category</a>
                <a href="admin/cmsProduct" class="list-group-item list-group-item-action bg-transparent second-text <?php if (str_contains($url, "admin/cmsProduct")) echo $active;
                                                                                                                        else echo $inactive; ?>"><i class="fas fa-desktop-alt me-2"></i>Products</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text <?php if (str_contains($url, "admin/#")) echo $active;
                                                                                                        else echo $inactive; ?>"><i class="fas fa-comment-dots me-2"></i>Chat</a>
                <a href="admin/Logout" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fas fa-power-off me-2"></i>Logout</a>
        </div>
</div>