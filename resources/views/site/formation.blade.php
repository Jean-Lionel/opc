@include('site.header')

<style>
	
	.container a{
		text-decoration: none;
		color: black;
		font-size: 1.2rem;

	}
	.container a .color_grey{
		color: grey;
		font-size: 1.2rem;
	}
	.container a .color_red{
		color: rgba(255, 2, 20, 0.6);
		font-size: 1.2rem;
	}
	.container a:hover{
		
	}
</style>

<div class="container row">

<div class="col-md-6">
	<img src="{{ asset('images/7juin2020.jpg') }}" class="img-fluid" alt="Cliquez ici pour télécharger la loi no 1/14 du 24 décembre 2020 portant modification de la loi no 1/02 du 24 Janvier 2013 relative aux Impôts sur les Revenus (IR)">
	<a href="{{ asset('livre/decembre_24.pdf') }}" target="_blank">
		<span class="color_grey">
		Cliquez ici pour télécharger la loi no 1/14 du 24 décembre 2020
		portant modification de 	
		</span>
		 <span class="color_red">la loi no 1/02 du 24 Janvier 2013</span> relative aux Impôts sur les Revenus (IR)
	</a>
</div>

<div class="col-md-6">
	<img src="{{ asset('images/novembre_2020.jpg') }}" class="img-fluid" alt="Cliquer ici pour télécharger la loi no1/10 du 16 novembre 2020 portant modification de la loi n°1/12 du 29 juillet 2013 portant révision de la loi n°1/02 du 17 février 2009 portant institution de la taxe sur la valeur Ajoutée TVA">
	
	<a href="{{ asset('livre/nov_2020.pdf') }}" target="_blank">
		<span class="color_grey">
			Cliquer ici pour télécharger la loi no1/10 du 16 novembre 2020 portant modification de 
		</span>
	<span class="color_red">
		la loi n°1/12 du 29 juillet 2013
		</span> portant révision de la loi n°1/02 du 17 février 2009 portant institution de la taxe sur la valeur Ajoutée "TVA"
    </a>
		
</div>

<div class="col-md-6">

<a href="{{ asset('livre/nos_fiscal.pdf') }}" target="_blank">
	<span class="color_grey">
		Cliquer ici pour télécharger
	</span>
	Cliquer ici pour télécharger la loi relative aux procédures fiscales et non fiscales 2020
</a>
</div>

</div>

@include('site.footer')