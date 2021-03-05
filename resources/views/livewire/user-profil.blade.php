<div class="container">
    {{-- The Master doesn't talk, he acts. --}}

    <div class="row">
    	<div class="col-md-12 badge-secondary">
    		<h4>User Profil</h4>
    	</div>

    	<div class="col-md-12">
    		<div class="card">
    			<div class="card-body">
    				<div class="d-flex">
    					<div>
    						<img src="{{ asset('images/logo.jpg') }}" alt="">
    					</div>
    					<div class="ml-3">
    						<h3>{{ Auth::user()->name }}</h3>
    						<p>Categorie</p>
    						<p>Status</p>
    						<p>Payement</p>
    					</div>
    				</div>
    			</div>

    			<div class="card-body">
    				<h4>Information du Membre</h4>
    				
    			</div>
    		</div>
    		
    	</div>

    </div>


</div>
