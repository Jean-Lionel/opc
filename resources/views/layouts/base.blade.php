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
        color: black;
      }
    </style>
  </head>
  <body class="container-fluid ml-0">
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar">
        <div class="custom-menu">
          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
        </div>
        <div class="p-4 pt-5">
          <h1><a href="/" class="logo"><img src="{{ asset('images/OPC1-1.png') }}" width="200" alt=""></a></h1>
          <ul class="list-unstyled components mb-5">
            <li>
              <a class="hand" href="{{ route('user-profil') }}"><i class="fa fa-user"></i> <span>Mon Profil</span></a>
            </li>
            @canany(['is-admin', 'is-secretaire'])
            <li>
               <a href="{{ route('people.index') }}"> <i class="fa fa-users"></i> Membres</a>
            </li>

            @endcanany

            @canany(['is-comptable', 'is-admin'])
            <li>
               <a href="{{ route('paiment') }}"> <i class="fa fa-dollar"></i> Paiements </a>
            </li>
            @endcanany


            @canany(['is-admin','is-secretaire'])

            <li>
               <a href="{{ route('create_formation') }}"> <i class="fa fa-book"></i> Formation</a>
            </li>

            @endcanany
           {{--  <li>
               <a href="{{ route('people.index') }}"> <i class="fa fa-users"></i> Membres</a>
            </li>

            <li>
              <a href="{{ route('cabinets') }}"> <i class="  fa fa-certificate"></i> Cabinets agréés par l’OPC</a>
            </li>
            
            <li>
               <a href="{{ route('create_formation') }}"> <i class="fa fa-book"></i> Articles</a>
            </li>
            
            <li>
              <a href="{{ route('person-list') }}"> <i class="fa fa-users"></i> Liste des Membres</a>
            </li>

             <li>
              <a href="{{ route('read-message') }}"> <i class="fa fa-commenting"></i> Contact</a>
            </li>

             --}}

              @canany(['is-secretaire', 'is-admin'])

             <li>
              <a href="{{ route('rapport') }}"> <i class="fa fa-bar-chart"></i> Rapport</a>
            </li>

             @endcanany
            

            @can('is-admin')
            <li>
              <a href="{{ route('users.index') }}"> <i class="fa fa-user-md"></i>  Utilisateur</a>
            </li>

            @endcan

          </ul>

        </div>
      </nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-0 pt-2  container-fluid">
        <div class="mb-4" style="background: #deb509">

          <div class="text-right">
           <a href="#profile" class="mr-3 text-white"> <em class="fa fa-user"></em> <span>Welcome {{ Auth::user()->name }}</span> </a>



            <form action="{{ route('logout') }}" method="post" class="d-inline">
              @csrf
              @method('post')
              <button type="submit" class="btn btn-default"> 
                <em class="fa fa-power-off"></em>  <span>LogOut</span>
              </button>
              

            </form>

            

          </div>
        </div>
        

        @yield('content')
       
      </div>
    </div>
     @livewireScripts
   
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/print.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    @yield('script')

    @stack('scripts')
  </body>
</html>