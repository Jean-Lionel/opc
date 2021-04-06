@include('site.header')

<div class="container">

	<div class="row">
		{{-- ASIDE --}}
	<aside class="col-md-8">
		<h2> Actualités </h2>
		<p>
			Organisation d’une formation portant sur  « la communication et la visibilité » des actions de l’Union Européenne au Burundi
		</p>

		<div>
			<img src="{{ asset('images/opcslider1.jpg') }}" class="img-fluid" alt="photo de famille des cadres ayant participé à la formation.">
		</div>

		<div class="text-justify" style=" text-align: justify;
  text-justify: inter-word;">
			
			<p>
				« Faire savoir », tel est le maître mot de la formation portant sur la communication et la visibilité des actions de l’Union Européenne dans le cadre du Fonds Européen de Développement (FED).  Du 20 au 26 Mai 2014,  une vingtaine de cadres relevant de la cellule d’appui à l’Ordonnateur Nationale du FED(CELON), de projets FED et des ministères techniques a participé à cette formation dont le but est d’amener les projets et programmes du FED au BURUNDI à communiquer leurs réalisations à la population.
			</p>

			<h2>
				Session de formation aux procédures financières et contractuelles du FED
			</h2>

			<p >
				
				Dans le cadre du renforcement des capacités des  services de l’ordonnateur national du FED (Fonds Européen de Développement), la Délégation de l’Union Européenne au Burundi, en  collaboration avec la Cellule d’appui à l’ordonnateur national (CELON), a organisé une session de formation sur les procédures FED. Cette formation a été dispensée sur une période de deux semaines (du 21 Avril au 2 Mai 2014) à Bujumbura par un des principaux cabinets de conseil pour le secteur public « Human dynamics » basé en Autriche.
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