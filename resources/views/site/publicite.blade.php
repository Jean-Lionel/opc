@include('site.header')

<div class="container">

	<div>

		<a download="true" href="{{ asset('doc/recrutement_d_un_commissaire_aux_comptes.pdf') }}">
			<img src="{{ asset('doc/publicite1.PNG') }}" alt=""> <br>
		Télécharger le document</a>
	</div>

	

	{{-- <div class="embed-responsive">

		<iframe src="{{ asset('/doc/recrutement_d_un_commissaire_aux_comptes.pdf') }}" width="100%" height="800px">
		
	</div> --}}
	
</div>

@include('site.footer')