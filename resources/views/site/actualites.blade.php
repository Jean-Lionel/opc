@include('site.header')

<div class="container">

	<div class="row">
		{{-- ASIDE --}}
	<aside class="col-md-8">
		<h2> Actualités </h2>

		<div class="text-center"> 
			<img src="{{ asset('images/actualite_new.jpg') }}"  height="auto" width="100%" alt="photo de famille des cadres ayant participé à la formation.">
		</div>

		<div class="text-justify" style=" text-align: justify;
  text-justify: inter-word; font-size: 1.6rem;">
			
			<p>
				Les élèves finalistes du Saint Esprit de la section Économique, accompagnés par le préfet de discipline et les enseignants de cette section, ont été accueillis, Vendredi le 07 Avril 2021, au siège de l’OPC, Reçus par le Président de l’OPC, le secrétaire Général, le Secrétaire Exécutif ainsi que le Consultant de la Banque Mondial à l’OPC, les étudiants ont pu découvrir la place de l’Ordre des Professionnels Comptables dans le développement et la promotion de la profession comptable du Burundi. Ils ont également pu échanger sur les perspectives professionnelles ouvertes par l’OPC pour y effectuer des stages afin de devenir plus tard  des professionnels comptable. Les étudiants ont pu pratiqués les connaissances avec le logiciel de gestion de la comptabilité Sage saari. Cette visite s'inscrit dans des relations étroites déjà établies entre l'OPC et  l’Ecole du Saint Esprit ainsi que  d’autres Universités.
			</p>
	
		</div>

		
	</aside>

	{{-- FIN ASIDE --}}

	{{-- ARTICLES --}}

	<article class="pl-1 col-md-3">
		<h4>Les autres articles</h4>

		<ul class="list-group">
			{{-- <li>Article 1</li>
			<li>Article 1</li>
			<li>Article 1</li>
			<li>Article 1</li>
			<li>Article 1</li>
			<li>Article 1</li> --}}
		</ul>
		
	</article>

	{{-- FIN ARTICLES --}}
	</div>


	
</div>

@include('site.footer')