<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Hiển thị form đăng nhập -->
    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="border border-3 border-primary"></div>
                <div class="card bg-white">
                <div class="card-body p-5">
                    <form class="mb-3 mt-md-4" method="post" autocomplete="off">
                    <h2 class="fw-bold mb-2 text-uppercase ">Login</h2>
                    <p class=" mb-5">Please enter your username and password!</p>
                    <div class="mb-3">
                        <label for="username" class="form-label ">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label ">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="*******">
                    </div>
                    <p class="small"><a class="text-primary" href="forget-password.html">Forgot password?</a></p>
                    <div class="d-grid">
                        <button class="btn btn-outline-dark" type="submit" name="btnLogin">Login</button>
                    </div>
                    <p style="color:red">
                        <?php 
                            if($data["err"] != "") {
                                echo $data["err"];
                            }
                        ?>
                    </p>    
                </form>
                <div>
                  <p class="mb-0  text-center">Don't have an account? <a href="registration.php" class="text-primary fw-bold">Sign
                      Up</a></p>
                </div>

                </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>