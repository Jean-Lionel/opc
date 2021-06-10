@include('site.header')

<div class="container row">

<div class="col-md-6">
	<img src="{{ asset('images/7juin2020.jpg') }}" class="img-fluid" alt="Cliquez ici pour télécharger la loi no 1/14 du 24 décembre 2020 portant modification de la loi no 1/02 du 24 Janvier 2013 relative aux Impôts sur les Revenus (IR)">
	<a href="{{ asset('livre/Loi_Impôt_sur_le_revenu__24_décembre.pdf') }}" target="_blank">
		Cliquez ici pour télécharger la loi no 1/14 du 24 décembre 2020 portant modification de la loi no 1/02 du 24 Janvier 2013 relative aux Impôts sur les Revenus (IR)
	</a>
</div>

<div class="col-md-6">
	<img src="{{ asset('images/7juin2021.jpg') }}" class="img-fluid" alt="Cliquer ici pour télécharger la loi no1/10 du 16 novembre 2020 portant modification de la loi n°1/12 du 29 juillet 2013 portant révision de la loi n°1/02 du 17 février 2009 portant institution de la taxe sur la valeur Ajoutée TVA">
	
	<a href="{{ asset('livre/LOI_TVA_du_16_novembre_2020_red.pdf') }}" target="_blank">
	Cliquer ici pour télécharger la loi no1/10 du 16 novembre 2020 portant modification de la loi n°1/12 du 29 juillet 2013 portant révision de la loi n°1/02 du 17 février 2009 portant institution de la taxe sur la valeur Ajoutée "TVA"
    </a>
		
</div>

<div class="col-md-6">

<a href="{{ asset('livre/LOI_RELATIVE_AUX_PROCEDURES_FISCALES_ET_NON_FISCALES_2020.pdf') }}" target="_blank">
	Cliquer ici pour télécharger la loi relative aux procédures fiscales et non fiscales 2020
</a>
</div>






</div>



@include('site.footer')