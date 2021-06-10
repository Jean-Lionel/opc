@include('site.header')

<style type="text/css">
    
    .fade img{ 
        height: 450px;
     }

    @media  screen and (max-width: 600px) {
        .fade img{
            height: 250px;
        }

   }
</style>

<div class="body-bloc">
    <div class="row mt-2">
        <div class="col-md-8">

         <div class="parent-slides">
            <!-- testing slides -->
            <!-- Slideshow container -->
            <div class="slideshow-container">
                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                   <img src="images/opcslider1.jpg"
                   class="w-100 img-fluid">
               </div>
               <div class="mySlides fade">
                <img src="images/7juin2021.jpg" class="w-100 img-fluid">
            </div>
            <div class="mySlides fade">
                <img src="images/7juin2020.jpg" class="w-100 img-fluid">
            </div>
            <div class="mySlides fade">
                <img src="images/remise2-opc.png" class="w-100 img-fluid">
            </div>
            <!-- Next and previous buttons -->
                    <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
                    </div>
                    <br>
                </div>
                <div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- TABS -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Evénement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Les examens en ligne</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Horaire</a>
                </li>
            </ul>
            <div class="tab-content p-2" id="myTabContent">
                <div class="tab-pane fade show active  bg-white" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <!-- CONTENT -->
                    <div class="others-item">
                     <h5>Evénements & Agenda</h5>
                     <div>   
                        <dl class="row">
                            <dd class="col-sm-4">Du 5 juillet jusqu’au 29 octobre 2021</dd>
                            <dt class="col-sm-8">Accouting Training 
                            </dt>
                            <button>Participer</button>
                            <hr>
                           
                            <dd class="col-sm-4">7 juillet jusqu’au 11 juillet  2021</dd>
                            <dt class="col-sm-8">IT / Program </dt>
                            <button>Participer</button>
                            <hr>
                        </dl>
                    </div>                  

                </div>
                <!-- END CONTENT -->
            </div>
            <div class="tab-pane fade  bg-white " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <p class="text-center">
                    Préparation en cours 
                </p>
            </div>
            <div class="tab-pane fade  bg-white" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <p class="p-5">
                Notre équipe pluridisciplinaire vous accueille du lundi au vendredi de 7h:30 à 17h:30 tout au long de l’année (sans fermeture annuelle).  
            </p>
        </div>
    </div>
    <!-- END  TABS -->
</div>
</div> 
<div>
    <div class="presentation">
        <h4>PRÉSENTATION DE L'ORDRE DES EXPERTS-COMPTABLES</h4>
        <p class="text-justify">Dans un environnement international marqué par la mondialisation de l'économie, la profession comptable joue de plus en plus un rôle central dans le développement d'une économie moderne fondé sur l'échange et l'investissement. Elle produit et certifie une information financière sans laquelle la confiance nécessaire aux transactions est altérée.</p>
    </div>
</div>
<div class="parent-articles2">
    <div class="articles2">
        <div class="arti">
            <img src="images/Mission.jpg" alt="">
            <div class="arti-text">
                <h5>Mission d'ordre</h5>
                <p>Développer et promouvoir la profession comptable du Burundi. -Défendre l'indépendance et l'honneur de la profession. -Introduire les réglés de transparence et de bonne gouvernance.
                </p>
                <a href="">En savoir plus</a>
            </div>
        </div>
        <div class="arti">
            <img src="images/histoire.jpg" alt="">
            <div class="arti-text">
                <h5>Mission d'ordre</h5>
                <p>Développer le professionnalisme Comptable au service des partenaires. Valeur Fondamentales : Integrite-probite Objectivité, Compétence, Indépendance

                </p>
                <a href="">En savoir plus</a>
            </div>
        </div>
        <div class="arti">
            <img src="images/Vision13.jpg" alt="">
            <div class="arti-text">
                <h5>Mission d'ordre</h5>
                <p>Développer et promouvoir la profession comptable du Burundi. -Défendre l'indépendance et l'honneur de la profession. -Introduire les réglés de transparence et de bonne gouvernance.
                </p>
                <a href="">En savoir plus</a>
            </div>
        </div>
        <div class="arti">
            <img src="images/histoire.jpg" alt="">
            <div class="arti-text">
                <h5>Mission d'ordre</h5>
                <p>Développer et promouvoir la profession comptable du Burundi. -Défendre l'indépendance et l'honneur de la profession. -Introduire les réglés de transparence et de bonne gouvernance.
                </p>
                <a href="">En savoir plus</a>
            </div>
        </div>
    </div>
</div>
<div class="parent-news">
    <div class="news">
        <div class="news-item">
            <img src="images/opcPresident.png" alt="">
            <div class="news-text">
                <h6>Mot du president</h6>
                <h4>Mr. GAHUNGU Fréderic</h4>
                <p>
                    Chères Consœurs, Chers Confrères, Chères autorités, Chers Clients ou partenaires, Chers amis, A l’heure du numérique incontournable, le Conseil de l’Ordre des experts-comptables du Burundi vous souhaite la bienvenue sur ce site de l’Ordre des experts-comptables. Notre ambition est de constituer un pont entre vous et nous et de créer un lieu d’échanges et de partage d’informations, d’expériences et de contact permanent. Notre métier évolue très vite, nos responsabilités s’accroissent. Notre rôle en tant qu’expert-comptable dans la promotion et la croissance de l’économie nationale est indéniable.
                </p>
                <a href="">En savoir plus</a>
            </div>
        </div>
    </div>
    <div class="news">
        <div class="news-item">                    
            <div class="news-text">
                <h6>DEVENIR UN PROFESSIONNEL COMPTABLE</h6>
                <h4>Quelles qualités pour devenir un Professionnel Comptable ?</h4>
                <p>
                    Le Professionnel Comptable doit posséder un véritable gout pour les chiffres, la gestion et l'analyse qui sont ses outils de travail principaux. II doit également être à l'aise avec le droit et la fiscalité et pouvoir formuler des recommandations à ses clients. II doit également être dote d'un bon relationnel et aimer le contact avec ses clients.

                </p>
                <a href="">En savoir plus</a>
            </div>
            <img src="images/profesioonelcomptable.jpg" alt="">
        </div>
    </div>
    <div class="news">
        <div class="news-item">
            {{-- <img src="images/conseil-national-opc.jpg" alt=""> --}}
            <div class="news-text">
                <h6>CONSEIL NATIONAL DE L'ORDRE</h6>
                <h4>Les membres du conseil National de l'Ordre</h4>
                        <!-- <p>
                            
                        </p> -->
                        <a href="">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div> 
        <div>
            <div class="presentation">
                <h4>Notre equipe</h4>
                <p>Notre équipe pluridisciplinaire vous accueille du lundi au vendredi de 7h:30 à 17h:30 tout au long de l’année (sans fermeture annuelle).</p>
            </div>
        </div>
        <div class="parent-team">
            <div class="team">
                <div class="team-item">
                    <img src="{{ asset('images/opcPresident.png') }}" alt="Mr. GAHUNGU Fréderic">
                    <h5>Mr. GAHUNGU Fréderic</h5>
                    <h6>PRESIDENT DE L'OPC</h3>
                    </div>
                    <div class="team-item">
                        <img src="{{ asset('images/FIONA-TRAITED.JPG') }}" alt="Munezero Anne Fiona">
                        <h5>Munezero Anne Fiona</h5>
                        <h6>SECRETAIRE EXECUTIF A.I</h3>
                        </div>
                        <div class="team-item">
                            <img src="{{ asset('images/jean-berchmas-photo1.JPG') }}" alt="BIVANDA Jean Berchimas">
                            <h5>BIVANDA Jean Berchimas</h5>
                            <h6>SECRETAIRE GENERAL</h3>
                            </div>
                            <div class="team-item">
                                <img src="{{ asset('images/ashura-photo.png') }}" alt="TAMBAKUBWAYO Ashura">
                                <h5>TAMBAKUBWAYO Ashura</h5>
                                <h6>TRESORIER</h3>
                                </div>

                            </div>
                            <div class="team">

                                <div class="team-item">
                                   <img src="{{ asset('images/JEAN-MOD.JPG') }}" alt="NGENZAHINDAVYI JEAN">
                                   <h5>NGENZAHINDAVYI JEAN</h5>
                                   <h6>MEMBRE DU CNO</h3>
                                   </div>
                                   <div class="team-item">
                                       <img src="{{ asset('images/FIDEL-M.JPG') }}" alt="BISUZUMA PHIDEL">
                                       <h5>BISUZUMA PHIDEL</h5>
                                       <h6>MEMBRE DU CNO</h3>
                                       </div>

                                       <div class="team-item">
                                           <img src="{{ asset('images/LIN-MOD.JPG') }}" alt="BAMPINGIRA LIN">
                                           <h5>BAMPINGIRA LIN</h5>
                                           <h6>MEMBRE DU CNO</h3>
                                           </div>

                                           <div class="team-item">
                                            <img src="{{ asset('images/KIGEME-M.JPG') }}" alt="KIGEME JEANNE">
                                            <h5>KIGEME JEANNE</h5>
                                            <h6>MEMBRE DU CNO</h3>
                                            </div>
                                        </div>
                                   

                                    <div class="team">
                                        <div class="team-item">
                                            <img src="{{ asset('images/andre-m.JPG') }}" alt="NDAYEGAMIYE HAKIZIMANA ANDRE">
                                            <h5>NDAYEGAMIYE HAKIZIMANA ANDRE</h5>
                                            <h6>MEMBRE DU CNO</h3>
                                        </div>

                                        <div class="team-item">
                                            <img src="{{ asset('images/yves.JPG') }}" alt="YVES DESIRE BAGABO">
                                            <h5>YVES DESIRE BAGABO</h5>
                                            <h6>MEMBRE DU CNO</h3>
                                        </div>
                                         <div class="team-item">
                                        <img src="{{ asset('images/medard-picture.JPG') }}" alt="MUZANEZA MEDARD">
                                            <h5>MUZANEZA MEDARD</h5>
                                            <h6>MEMBRE DU CNO</h3>
                                        </div>

                                        <div class="team-item">
                                        <img src="{{ asset('images/thadde-mod.JPG') }}" alt="NDAYISENGA THADEE">
                                            <h5>NDAYISENGA THADEE</h5>
                                            <h6>MEMBRE DU CNO</h3>
                                        </div>
                                        

                                    </div>
                                 </div>
                                    <div class="parent-others">
                                        <div class="others">
                                            <div class="others-item">
                                                <h5>Question fréquemment posée</h5>
                                                <div class="box">
                                                    <h6>COMMENT DEVENIR EXPERT-COMPTABLE ?</h6>
                                                    <p class="box-text">
                                                        Le DSCG (diplôme supérieur de comptabilité et de gestion) et le DEC (diplôme d'expertise comptable) sont les &apes obligées pour devenir expert-comptable. Le diplôme supérieur de comptabilité et de gestion le candidat au DSCG doit être titulaire d'un master bac + 5 (en économie, gestion, droit...) ou d'un diplôme obtenu en écolé de commerce ou d'ingénieurs. Il est composé de 8 matières que les candidats devront valider tout au long de leurs études.
                                                    </p>
                                                </div>
                                                <div class="box">
                                                    <h6>QUELLES QUALITÉS POUR DEVENIR EXPERT-COMPTABLE ?</h6>
                                                    <p class="box-text">
                                                        L'expert-comptable doit posséder un véritable gout pour les chiffres, la gestion et l'analyse qui sont ses outils de travail principaux. II doit également être à l'aise avec le droit et la fiscalité et pouvoir formuler des recommandations à ses clients. II doit également être dote d'un bon relationnel et aimer le contact avec ses clients.
                                                    </div>
                                                    <div class="box">
                                                        <h6>QUELLES QUALITÉS POUR DEVENIR EXPERT-COMPTABLE ?</h6>
                                                        <p class="box-text">
                                                            L'expert-comptable doit posséder un véritable gout pour les chiffres, la gestion et l'analyse qui sont ses outils de travail principaux. II doit également être à l'aise avec le droit et la fiscalité et pouvoir formuler des recommandations à ses clients. II doit également être dote d'un bon relationnel et aimer le contact avec ses clients.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="others-item">
                                                    <h5>Evénements & Agenda</h5>
                                                    <div class="box2">
                                                        <img src="images/OPC1-1.png" alt="">
                                                        <div class="box2-text">
                                                            <h6>INVITATION A LA FORMATION</h6>
                                                            <span> 12 November 2017</span>
                                                        </div>
                                                    </div>
                                                    <div class="box2">
                                                        <img src="images/OPC1-1.png" alt="">
                                                        <div class="box2-text">
                                                            <h6>INVITATION A LA FORMATION</h6>
                                                            <span> 12 November 2017</span>
                                                        </div>
                                                    </div>
                                                    <div class="box2">
                                                        <img src="images/OPC1-1.png" alt="">
                                                        <div class="box2-text">
                                                            <h6>INVITATION A LA FORMATION</h6>
                                                            <span> 12 November 2017</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="others-item">
                                                    <h5>Actualites</h5>
                                                    <div class="box2">
                                                        <img src="images/OPC1-1.png" alt="">
                                                        <div class="box2-text">
                                                            <h6>INVITATION A LA FORMATION</h6>
                                                            <span> 12 November 2017</span>
                                                        </div>
                                                    </div>
                                                    <div class="box2">
                                                        <img src="images/OPC1-1.png" alt="">
                                                        <div class="box2-text">
                                                            <h6>INVITATION A LA FORMATION</h6>
                                                            <span> 12 November 2017</span>
                                                        </div>
                                                    </div>
                                                    <div class="box2">
                                                        <img src="images/OPC1-1.png" alt="">
                                                        <div class="box2-text">
                                                            <h6>INVITATION A LA FORMATION</h6>
                                                            <span> 12 November 2017</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        @include('site.footer')