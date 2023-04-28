<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
    <div class="container">
        <a class="navbar-brand" href="Home">Techno<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <form class="d-flex ms-auto">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success btn-rounded btn-sm my-0" type="submit">Search</button>
            </form>
            
            <?php
                $url = $_GET['url'];
                $active = 'active';
                $unactive = 'x';
            ?>

            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
            <li class="<?php if(str_contains($url, 'Home')) echo $active; else echo $unactive; ?>">
                    <a class="nav-link" href="Home">Home</a>
                </li>
                <li class="<?php if(str_contains($url, 'Products')) echo $active; else echo $unactive; ?>">
                    <a class="nav-link" href="Products">Products</a>
                </li>
                <li class="<?php if(str_contains($url, 'About')) echo $active; else echo $unactive; ?>">
                    <a class="nav-link" href="About">About us</a>
                </li>
                <li class="<?php if(str_contains($url, 'Blog')) echo $active; else echo $unactive; ?>">
                    <a class="nav-link" href="Blog">Blog</a>
                </li>
                <li class="<?php if(str_contains($url, 'Contact')) echo $active; else echo $unactive; ?>">
                    <a class="nav-link" href="Contact">Contact us</a>
                </li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="Cart"><img src="public/images/cart.svg">(<?php if(isset($data['count'])) {echo $data['count'];} else echo 0; ?>)</a></li>
                <?php if (isset($_SESSION['user'])) { ?>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user me-2"></i><?php echo "Welcome"; ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="Profile">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="Logout">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                <?php } 
                else { ?>
                        <li><a class="nav-link" href="Login"><img src="public/images/user.svg"></a></li>
                <?php }?>
            </ul>


        </div>
    </div>
</nav>
