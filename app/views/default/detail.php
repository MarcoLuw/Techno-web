
<div class="detail-section" style="padding: 32px 0 200px 0;">
    <div class="container relative">
        <div class="row justify-content-md-center">
            <div style="width: 100%;">
                <div class="row">
                    <div class="col">
                        <div class="image-wrapper" style="width: 100%;">
                            <img src="public/image/<?php echo $data['image'];?>">
                        </div>
                    </div>
                    <div class="w-100" style="display: none;"></div>
                    <div class="col  py-4" style="border: solid 1px rgb(30, 62, 24); position: relative; border-radius: 15px; box-shadow: 0 2px 4px 0 rgba(60,64,67,.1), 0 3px 6px 3px rgba(60,64,67,.15);">
                        <div class="row mb-2">
                            <h2><?php echo $data['name'];?></h2>
                        </div>
                        <div class="row mb-4">
                            <h4 style="margin-bottom: auto;">Price: $<?php echo $data['price'];?></h4>
                        </div>

                        <form action="/asignment_web/Cart" method="post">
                            <input type="hidden" name ="id" value="<?php echo $data['id'];?>">
                            <input type="number" name="quantity" value="1" class="form-control-sm me-3 text-center">
                            <button class="btn btn-info" name="add-to-cart" type="submit">Add to cart <i class="fas fa-shopping-cart"></i></button>
                        </form>

                        <!-- <button class="btn addcart-button" style="width: auto; position: absolute; right: 20px; bottom: 20px">Add to cart</button> -->

                    </div>
                    <div class="w-100"></div>
                    <div class="wrapper">

                        <!-- Start Description -->

                        <div class="des-wrapper" style="margin-top: 50px;">
                            <!-- Start Description section -->
                            <div class="row" style="margin-top: 50px;">
                                <h4 style="font-weight: bold;">Description</h4>
                            </div>
                            <div class="row content" style="margin-top: 15px;">
                                <p><?php echo $data['desc'];?></p>
                            </div>
                            <!-- End Description section -->

                            <!-- Start Feedback section -->
                            <div class="row" style="margin-top: 50px; margin-bottom: 10px;">
                                <h4 style="font-weight: bold;">Feedback</h4>
                            </div>
                            <div class="container-relative">
                                <!-- Start row 1 -->
                                <div class="row" style="border-radius: 15px; box-shadow: 0 2px 4px 0 rgba(60,64,67,.1), 0 3px 6px 3px rgba(60,64,67,.15); padding: 20px 10px 5px 10px; margin-bottom: 20px;">

                                    <h6 class="card-title">Huy Hoang</h6>
                                    <div class="col product-info card-header" style="border: solid 1px rgb(30, 62, 24);  border-radius: 15px; margin: 20px 0 0 50px;">

                                        <p style="margin-bottom: auto;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type</p>

                                    </div>
                                </div>
                                <!-- End row 1 -->

                                <!-- Start row 2 -->
                                <div class="row" style="border-radius: 15px; box-shadow: 0 2px 4px 0 rgba(60,64,67,.1), 0 3px 6px 3px rgba(60,64,67,.15); padding: 20px 10px 5px 10px; margin-bottom: 15px;">

                                    <h6 class="card-title">Hoang Anh</h6>
                                    <div class="col product-info card-header" style="border: solid 1px rgb(30, 62, 24);  border-radius: 15px; margin: 20px 0 0 50px;">

                                        <p style="margin-bottom: auto;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                                    </div>
                                </div>
                                <!-- End row 2 -->
                            </div>
                            <!-- End Feedback section -->

                        </div>
                        <!-- End Description -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>