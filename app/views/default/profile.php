<section class="vh-90" style="background-color: #f4f5f7;">
    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col col-lg-8 mb-4 mb-lg-0">
                <div class="card mb-3" style="border-radius: .5rem;">
                    <div class="row g-0" style="min-height: 400px; border-radius: 8px;">
                        <div class="col-md-4 gradient-custom text-center" style="color: #f4f5f7; background-color:#009999; border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                            <div class="img-wrapper img-fluid my-5" style="background-color: rgb(255, 235, 182); width: 150px; height: 150px; border-radius: 50%; position: relative; left: 50%; transform: translate(-50%, 0); overflow: hidden;">
                                <img src="public/image/user-244.png" style="width: 150px; height: 150px;" />
                            </div>
                            <p style="font-size: 20px;"><?php echo $data['username'];?></p>
                            <p><?php echo $data['name'];?></p>
                            <i class="far fa-edit mb-5"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <h5>Information</h5>
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                    <div class="col-6 mb-3">
                                        <h6>Email</h6>
                                        <p><?php echo $data['email'];?></p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>Phone</h6>
                                        <p><?php echo $data['phone'];?></p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>Address</h6>
                                        <p><?php echo $data['address'];?></p>
                                    </div>
                                </div>
                                <div class="row pt-1"></div>
                                <h5>Social Media</h5>
                                <hr class="mt-0 mb-4">
                                <div class="d-flex justify-content-start">
                                    <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                                    <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                                    <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>