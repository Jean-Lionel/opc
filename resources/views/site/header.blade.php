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
    <title>OPC|Acceuil</title>
    
</head>
<body class="container-fluid">

    <!-- header -->
    
    <div id="head-menu">
        <div class="head">
            <div class="head-logo-search">
                <div>
                    <img src="images/OPC1-1.png" class="logo">
                </div>
                <div>
                    <form action="" class="form-search">
                        <input type="search">
                        <button type="submit"><i class="fa fa-search" type='submit'></i></button>
                    </form>
                </div>
                <i class="fas fa-bars" id="menu"></i>
            </div>
            
            
            <div class="menu-parent">
                <ul class="menu">
                    <li class="m-item"><a href="{{ route('accueil') }}"> Acceuil</a></li>
                    
                    <li class="m-item">A propos de nous<i class="fas fa-caret-down"></i>
                        <ul class="menu-items">
                            <li><a href="">Qui sommes-nous ? </a></li>
                            <li><a href="">Le conseil</a></li>
                            <li><a href="">Gestion</a></li>
                            <li><a href="">Rapport annuel</a></li>
                            <li><a href="">Partenariats et liens</a></li>
                            <li><a href="">Charte de science</a></li>
                            <li><a href="">Plan stratégique</a></li>
                            <li><a href="{{ route('person-list') }}">Membres de l'OPC</a></li>

                            <li><a href="">Comité</a></li>
                        </ul>
                    </li>
                    <li class="m-item">Adhésion<i class="fas fa-caret-down"></i>
                        <ul class="menu-items">
                            <li><a href="">Avantage</a></li>
                            <li><a href="">Cértification</a></li>
                            <li><a href="">Catégories</a></li>
                            <li><a href="{{ route('register-member') }}">Enregistrement en ligne</a></li>
                            <li><a href="">Programme de stage</a></li>
                            <li><a href="">Agrement par OPC </a></li>
                            <li><a href="">Agrement pour cabinets</a></li>
                        </ul>
                    </li>
                    <li class="m-item">Publication<i class="fas fa-caret-down"></i>
                        <ul class="menu-items">
                            <li><a href="">Agenda</a></li>
                            <li><a href="">Actualité</a></li>
                            <li><a href="">Annuaire</a></li>

                        </ul>
                    </li>
                    <li class="m-item">Publications<i class="fas fa-caret-down"></i>
                        <ul class="menu-items">


                            <li><a href="">Agenda</a></li>
                            <li><a href="">Actualités</a></li>
                            <li><a href="">Annuaires Téléphoniques</a></li>
                        </ul>
                    </li>
                    
                    <li class="m-item">Formation<i class="fas fa-caret-down"></i>
                        <ul class="menu-items">

                            <li><a href="">Formulaire</a></li>
                            <li><a href="">FIchier Excel</a></li>

                        </ul>
                    </li>
                    <li class="m-item"><a href="">Contact</a> </li>
                    <li class="m-item"><a href="{{ route('login') }}">Se Connecter</a> </li>

                    <i class="fas fa-times" id="menu-close"></i>
                </ul>
            </div>
        </div>
    </div>
    