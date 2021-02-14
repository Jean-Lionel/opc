<!doctype html>
<html lang="en">
  <head>
    <title>OPC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        @livewireStyles
        <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }} ">

    <style>
      body{
        background: #abc;
        font-size: 1.2rem;
        color: black;
      }
    </style>


  </head>
  <body>
    
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar">
        <div class="custom-menu">
          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
        </div>
        <div class="p-4 pt-5">
          <h1><a href="index.html" class="logo">OPC</a></h1>
          <ul class="list-unstyled components mb-5">
           {{--  <li class="active">
              <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="   fa fa-header"></i> Home</a>
              <ul class="collapse list-unstyled" id="homeSubmenu">
                
                <li>
                    <a href="#">Home 2</a>
                </li>
                <li>
                    <a href="#">Home 3</a>
                </li>
              </ul>
            </li> --}}

            <li>
               <a href="{{ route('people.create') }}"> <i class="fa fa-users"></i> Membres agréés par
l’OPC</a>
            </li>

            <li>
               <a href="{{ route('people.index') }}"> <i class="fa fa-users"></i> Membres</a>
            </li>

            <li>
              <a href=""> Cabinets agréés par l’OPC</a>
            </li>

            <li>
               <a href="{{ route('paiment') }}"> <i class="fa fa-dollar"></i> Paiements des Cotisations</a>
            </li>
            
            <li>
              <a href="{{ route('person-list') }}"> <i class="fa fa-users"></i> Liste des Membres</a>
            </li>
            <li>
              <a href="{{ route('register-member') }}">File Enregistrement</a>
            </li>

             <li>
              <a href="#">Contact</a>
            </li>

            <li>
              <a href="{{ route('rapport') }}">Rapport</a>
            </li>

            <li>
              <form action="{{ route('logout') }}" method="post">
                @csrf
                @method('post')
                <button type="submit">Deconnexion</button>
              </form>
            </li>
          </ul>

        </div>
      </nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">

        

        @yield('content')
       
      </div>
    </div>

    @livewireScripts
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/print.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    @yield('script')
  </body>
</html>