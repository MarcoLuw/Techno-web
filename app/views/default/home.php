<!-- Start Product Section -->
<div class="product-section">
    <div class="container">
        <div class="row">
            <!-- Start Column 1 -->
            <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                <h2 class="mb-4 section-title">Category.</h2>
                <p class="mb-4">Make your choices. Make your difference. </p>
                <p><a href="Products" class="btn">Explore</a></p>
            </div>
            <!-- End Column 1 -->

            <!-- Start Column 2 -->
            <!-- Get List Categories -->
            <?php 
                if(isset($data["output"])) {
                    echo $data["output"];
                }
            ?>
        </div>
    </div>
</div>
<!-- End Product Section -->

<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <h2 class="section-title">Why Choose Us</h2>
                <p>For a seamless shopping experience with a wide range of high-quality products, competitive prices and deals, easy online ordering, fast shipping, and exceptional customer service.</p>

                <div class="row my-5">
                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="public/images/truck.svg" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Fast &amp; Free Shipping</h3>
                            <p>Get your products quickly and without additional fees.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="public/images/bag.svg" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Easy to Shop</h3>
                            <p>Browse and order your favorite products with just a few clicks.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="public/images/support.svg" alt="Image" class="imf-fluid">
                            </div>
                            <h3>24/7 Support</h3>
                            <p>Get help anytime, anywhere with our dedicated customer service team.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="public/images/return.svg" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Hassle Free Returns</h3>
                            <p>Shop with confidence knowing that returns are easy and stress-free.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-5">
                <div class="img-wrap">
                    <img src="public/image/why-choose-us.png" alt="Image" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Why Choose Us Section -->

<!-- Start Popular Product -->
<div class="popular-product">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="product-item-sm d-flex">
                    <div class="thumbnail">
                        <img src="public/image/14-pro.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="pt-3">
                        <h3>iPhone 14 Pro Max</h3>
                        <p>The iPhone 14 Pro display has rounded corners that follow a beautiful curved design, and these corners are within a standard rectangle.</p>
                        <p><a href="#">Read More</a></p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="product-item-sm d-flex">
                    <div class="thumbnail">
                        <img src="public/image/zenbook-14.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="pt-3">
                        <h3>Kruzo Aero Chair</h3>
                        <p>Creativity. Style. Innovation. NanoEdge display and the exclusive NumberPad to give you the freedom to discover your creative power.</p>
                        <p><a href="#">Read More</a></p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="product-item-sm d-flex">
                    <div class="thumbnail">
                        <img src="public/image/sony-WH.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="pt-3">
                        <h3>Sony WF-1000XM4</h3>
                        <p>WH-1000XM4 headphones blend our most advanced noise canceling with exceptional sound quality and a range of smart features for an unrivaled listening experience.</p>
                        <p><a href="#">Read More</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Start Blog Section -->
<div class="blog-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                <h2 class="section-title">Recent Blog</h2>
            </div>
            <div class="col-md-6 text-start text-md-end">
                <a href="blog.html" class="more">View All Posts</a>
            </div>
        </div>

        <div class="row">

            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="public/image/blog-1.png" alt="Image" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h3><a href="#">Do you believe in Isolation</a></h3>
                        <div class="meta">
                            <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="public/image/blog-2.png" alt="Image" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h3><a href="#">Fully experience with your partner</a></h3>
                        <div class="meta">
                            <span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="public/image/blog-3.jpg" alt="Image" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h3><a href="#">How To Keep Your Macbook Clean</a></h3>
                        <div class="meta">
                            <span>by <a href="#">Thomas Patahn</a></span> <span>on <a href="#">Dec 12, 2021</a></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Blog Section -->