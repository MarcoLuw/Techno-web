


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <base href="/asignment_web/">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <title>Registration</title>
</head>

<body>
  <div class="container my-5">

    <div class="row">
      <div class="col-sm-10">
      <div class="card">
      <div class="card-header bg-secondary">
        <div class="text-center"><h2>Register</h2></div>
      </div>
      <div class="card-body">
        <form action="/asignment_web/Register/result" method="post">
          <div class="row mb-3">
            <label class="col-sm-3 col-form-lable" for="username">Username:</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="username" id="username" required value="">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-lable" for="name">Fullname:</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="name" id="name" required value="">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-lable" for="password">Password: </label>
            <div class="col-sm-5">
              <input type="password" class="form-control" name="password" id="password" required value="">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-lable" for="email">Email:</label>
            <div class="col-sm-5">
              <input type="email" class="form-control" name="email" id="email" required value="">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-lable" for="phone">Phone:</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="phone" id="phone" required value="">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-lable" for="address">Address:</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="address" id="address" required value="">
            </div>
          </div>
          <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
              <button type="submit" name="btnRegister" class="btn btn-primary">Register</button>
            </div>
          </div>
          <?php if(isset($data["result"])) { ?>
              <h3><?php 
                  if($data["result"] == "true") {
                    echo "Registration Successful";
                  }
                  else {
                    echo "Registration Failed";
                  }
                ?></h3>

            <?php } ?>
          <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
              <p><a href="Login"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> Back to Login</p>

            </div>

          </div>

        </form>
      </div>
    </div>
      </div>
    </div>
    
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>