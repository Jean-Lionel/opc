<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/FortAwesome/Font-Awesome@5.14.0/css/all.css">

    <link rel="stylesheet" href="{{ asset('css/site/style.css') }}">
    <title>{{$title ?? "OPC|Acceuil Burundi Ordre Professionel des Copmtables"}}</title>

    <style>

     @media  screen and (max-width: 600px) {
        /*.head-logo-search img{
            display: none;
        }*/

        .drapeau_burundi{
            display: none;
        }

    }
        
    </style>
    
</head>
<body class="container-fluid">

    <!-- header -->
    
    <div id="head-menu">
        <div class="head">
            <div class="head-logo-search">
                <div>
                    <a href="{{ route('site') }}">
                        <img src="images/OPC1-1.png" class="logo">
                    </a>
                    
                </div>
               
                <div style="font-size: 20px;">
                    
                    <span class="sr-facebook "><a rel="nofollow" href="https://www.facebook.com/pg/OPC-1478253712318147/posts/" target="_blank" title="Facebook" style="color: #ffffff"><i class="fab fa-facebook-f" style="font-size: 35px;"></i></a></span>

                    <span class="sr-twitter "><a rel="nofollow" href="https://twitter.com/" target="_blank" title="Twitter" style="color: #ffffff"><i class="fab fa-twitter" style="font-size: 35px;"></i></a></span>

                    {{-- <form action="" class="form-search">
                        <input type="search">
                        <button type="submit"><i class="fa fa-search" type='submit'></i></button>
                    </form> --}}
                </div>

                <div class="drapeau_burundi">
                    <img src="img/Flag of Burundi.svg" width="100" alt="">
                </div>
                <i class="fas fa-bars" id="menu"></i>
            </div>
            
            
            <div class="menu-parent">
                <ul class="menu">
                    <li class="m-item"><a href="{{ route('accueil') }}"> Acceuil</a></li>
                    
                    <li class="m-item">A propos de nous<i class="fas fa-caret-down"></i>
                        <ul class="menu-items">
                            <li><a href="">Qui sommes-nous ? </a></li>
                            <li><a href="">Le conseil national d'ordre</a></li>
                            <li><a href="">Rapport annuel</a></li>
                            <li><a href="">Partenariats et liens</a></li>
                            <li><a href="">Charte de science</a></li>
                            <li><a href="">Plan stratégique</a></li>
                            <li><a href="{{ route('person-list') }}">Membres de l'OPC</a></li>
                            <li>
                                <a href="{{ route('cabinet') }}">Cabinet de l'OPC</a>
                            </li>

                            <li><a href="">Comité</a></li>
                        </ul>
                    </li>
                    <li class="m-item">Adhésion<i class="fas fa-caret-down"></i>
                        <ul class="menu-items">
                            <li><a href="{{ route('condition') }}">Condition d'adhésion</a></li>
                            <li><a href="">Cértification</a></li>
                            <li><a href="{{ route('category') }}">Catégories</a></li>
                            <li><a href="{{ route('register-member') }}">Enregistrement en ligne</a></li>
                            <li><a href="">Programme de stage</a></li>
                            <li><a href="">Agrément par OPC </a></li>
                            <li><a href="{{ route('cabinet') }}">Agrément pour cabinets</a></li>
                        </ul>
                    </li>
                    <li class="m-item">Publications<i class="fas fa-caret-down"></i>
                        <ul class="menu-items">
                            <li><a href="">Agenda</a></li>
                            <li><a href="{{ route('site-actualite') }}">Actualité</a></li>
                            <li><a href="{{ route('site-annuaire') }}">Annuaire</a></li>

                        </ul>
                    </li>
                  
                    
                    <li class="m-item"><a href="{{ route('formation') }}">Formation</a></i>
                        
                    </li>
                    <li class="m-item"> <a href="{{ route('publicite') }}">Appel d'offres</a></li>
                    <li class="m-item"><a href=" {{ route('site-contact') }} ">Contact</a> </li>
                    <li class="m-item"><a href="{{ route('login') }}">Se Connecter</a> </li>

                    <i class="fas fa-times" id="menu-close"></i>
                </ul>
            </div>
        </div>
    </div>
    