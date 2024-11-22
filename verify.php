<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coinbase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css">

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
      
  </head>
  <body>

     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="img/Consumer_Wordmark.svg" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Products
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Buy & Sell Cryptocurrency</a></li>
                      <li><a class="dropdown-item" href="#">Coinbase Pro</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Coinbase Prime</a></li>
                      <li><a class="dropdown-item" href="#">Coinbase Commerce</a></li>
                      <li><a class="dropdown-item" href="#">Developer Platform</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Prices</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Sign In</a>
                </li>
            </ul>

            <a class="new-btn-2">Sign Up</a>
            
          </div>
        </div>
      </nav>

      <div class="cb-sec mt-5 mt-md-0">
        <div class="container">
            <div class="row align-items-center" style="height: 100vh;">
                <div class="col-md-4 mt-4 mt-md-0 px-4 px-md-0">
                        <form action="">
                            <h2>Sign in to Coinbase</h2>
                            <div class="mb-3 input-group">
                              <label for="inputPassword5" class="form-label mb-3">Enter your Phone Number to Verify your Account</label>
                              
                              <input id="mobile" type="tel" name="mobile" class="form-control" autofocus required >    
                            </div>
                           
                              <div class="mb-3">
                                <button type="button" class="btn btn-primary px-4">Submit</button>
                                <a href="" class="form-link">Forget Password?</a>
                                <a href="" class="form-link">Don't have an account? </a>
                              </div>
                        </form>
                </div>
                <div class="col-md-8">
                    <div class="cb-img">
                        <img src="img/hero_3x_B.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.7/js/intlTelInput.js"></script>
      <script>
        $("input").intlTelInput({
  utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
});
      </script>
  </body>
</html>
