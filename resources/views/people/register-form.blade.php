<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enregistrement dans l'opc</title>

       <link rel="stylesheet" href="{{ asset('css/style.css') }} ">

    <!-- Font Icon -->
   
    <!-- Main css -->
   {{--  <link rel="stylesheet" href="css/register.css"> --}}
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
        


                 <div class="row">


         <div class="col-md-6">
            <h4 class="text-center">Enregistrer un Nouveau Membre</h4>
            <form action="{{ route('register-member') }}" method="post">

                @method('post')
                @csrf
                <div class="form-group">
                    <label for="">Nom et Prénom</label>
                    <input class="form-control" type="text" name="first_name">
                    @error('first_name')
                    <span class="error text-danger">{{ $message }}</span>

                    @enderror
                </div>



                <div class="form-group">
                    <label for="">GENRE</label>
                    <select name="" class="form-control" name="sexe" id="">
                        <option value="">Choisissez</option>
                        <option value="HOMME">HOMME</option>
                        <option value="FEMME">FEMME</option>
                    </select>

                    @error('sexe')
                    <span class="error text-danger">{{ $message }}</span>

                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Province/Commune/Quartier</label>
                    <input class="form-control" type="text" name="addresse" placeholder="ex: Bujumbura/Ntahangwa/Kigobe">

                    @error('addresse')
                    <span class="error text-danger">{{ $message }}</span>

                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Téléphone</label>
                    <input class="form-control" placeholder="ex: +257 79 000 000" type="text" name="telephone">

                    @error('telephone')
                    <span class="error text-danger">{{ $message }}</span>

                    @enderror
                </div>


                <div class="form-group">
                    <label for="">Tableau</label>

                    <select name="table_name" name="" id="" class="form-control">
                        <option value="">Select ...</option>
                        <option value="A">TABLEAU A</option>
                        <option value="B">TABLEAU B</option>
                        <option value="C">TABLEAU C</option>
                        <option value="D">TABLEAU D</option>
                        <option value="ST">STAGAIERE</option>
                        <option value="CABINET">CABINET</option>
                    </select>
                   
                    @error('table_name')
                    <span class="error text-danger">{{ $message }}</span>

                    @enderror
                </div>


                  <div class="form-group">
                    <label for="">NIF</label>
                    <input type="text" name="nif" class="form-control">

                    @error('nif')
                    <span class="error text-danger">{{ $message }}</span>

                    @enderror
                </div>

                 <div class="form-group">
                    <label for="">DEBUT D'ACTIVITE</label>
                    <input type="date" name="debut_activite" class="form-control">

                    @error('debut_activite')
                    <span class="error text-danger">{{ $message }}</span>

                    @enderror
                </div>
               


                <div class="form-group">
                    <label for="">Email</label>
                    <input class="form-control" placeholder="ex: exemple@emple.bi" type="email" name="email">

                    @error('email')
                    <span class="error text-danger">{{ $message }}</span>

                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Type</label>

                    <select class="form-control" id="" name="type_personne">
                        <option value="">Select ...</option>

                        <option value="ETUDIANT">ETUDIANT</option>
                        <option value="MEMBRE">MEMBRE</option>
                    </select>
                </div>

                <div class="form-group">
                    <button class=" btn-info btn">Enregistrer</button>

                    <a href="{{ route('people.index') }}" class=" btn-info btn">Retour</a>

                </div>

            </form>
            
        </div>




                 <div class="signup-image" class="col-md-6">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="{{ route('login') }}" class="signup-image-link">Je suis déjà membre</a>
                    </div>
                </div>

                </div>


            </div>
        </section>

        <!-- Sing in  Form -->
       <!--  <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

    </div>

  
 
</body>
</html>