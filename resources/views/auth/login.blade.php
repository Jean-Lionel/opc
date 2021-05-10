<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style1.css">
    <title>Opc Burundi</title>
  </head>
  <body>

  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
         <center>
            <img src="img/Flag of Burundi.svg"  width="150" alt="Image" class="img-fluid">
         </center>
          <div class="container pt-4 mt-4">
             <div class="text-center">
              <strong style="font-size:20px;">Informations</strong>
            </div>

           <div style="text-align:left;"> 

             <p> 1. Click <strong>activate account link </strong> on the left side of this screen. </p> 
             <p> 2. Type your email addresses used for communication with ICPAK (members only) </p> 
             <p>3. Login to your email for an activation link sent to you</p> 
             <p>4. Click on the first link to set your password and confirm</p> <p>5. Login to your Portal</p> </div>
          </div>
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3 class="text-center">Indéntification</h3>
              <p class="mb-4">Ordre des Professionnels Comptable du Burundi</p>
            </div>
            <form action="{{ route('login') }}" method="POST">

               @csrf
               @method('post')

              <div class="form-group first">
                <label for="username">Email</label>
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus>

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Se Souvenir de moi</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Mot de passe oublié</a></span> 
              </div>
              <input type="submit" value="Se Connecter" class="btn btn-block btn-primary">
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
  
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>