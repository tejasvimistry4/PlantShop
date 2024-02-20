<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style2.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      function myFunction() {
       var x = document.getElementById("myInputt");
          if (x.type === "password") {
          x.type = "text";
           } else {
           x.type = "password";
           }
        }
</script>
</head>
<body>
  <form action="user_login" method="post">

    <div class ="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
           <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
            <div class="brand-logo pt-2">                  
                <img src="img/core-img/logoo.png" alt="logo">
                </div>
                <h5 class="centered-text">Create an account with</h5>
             
                <button type="button" class="btn btn-primary btn-lg"  style="margin-left : 10px;" >Facebook</button>
                <button type="button" class="btn btn-danger btn-lg" style="margin-left : 20px; width :120px; height : 46px;">Google</button>

                <h5 class="centered-text pt-3"> Or Use Your Email</h5>

                <form class="pt-2">
                <div class="form-group"> 
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="myinputt" placeholder="Password">
                  <input type="checkbox" class="form-check-input my-2 " onclick="myFunction()">Show Password
                </div>
                <div class="mt-3">
                <button type="Submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="AdminLog
                ">Sign In</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                
                <div class="text-center mt-4 fw-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div>

            </div>

        </div>
         



          

        </div>
    </div>
    </form>
</body>
</html>