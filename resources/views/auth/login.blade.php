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

    <style>
      input{
        border: 1px solid black;
      }
    </style>
  </head>
  <body>

  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
         <center>
            
             <img src="{{ asset('img/undraw_visual_data_re_mxxo.svg') }} " alt="" class="img-fluid">
         </center>
          <div class="container ">
             <div class="text-center">
              <h2>Ordre des Professionnels Comptable du Burundi</h2>
            </div>

         
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

              <div class="mt-4">
               
                <input id="email" class="form-control" type="text" name="email" :value="old('email')" placeholder="EMAIL OU NOM D'UTILISATEUR" required autofocus>

                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror

              </div>
              <div class="mt-4">
               
                <input id="password" placeholder="MOT DE PASSE" class="form-control" type="password" name="password" required autocomplete="current-password">
                
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