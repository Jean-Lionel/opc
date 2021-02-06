<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <div class="row">
    	<div class="col-md-4">
    		
    			<div class="form-group">
    				<label for="">Numéro de compte</label>
    				<input type="text" wire:model="compteName" placeholder="Tapez le numéro de compte" class="form-control">


    				@if($compte)

    				<div class="card mt-3">

    					<ul class="list-group">
    						<li class="list-group-item">Nom Prénom : {{ $compte->person->fullName }}</li>

    						<li class="list-group-item d-flex justify-content-between">
    							<span>Tel : {{ $compte->person->telephone }}</span>
    							<span>Addresse : {{ $compte->person->addresse }}</span>
    							
    						</li>
    						<li class="list-group-item d-flex justify-content-between">
    							<span>Compte {{ $compte->name }}</span>
    							<button class="btn btn-info">Choisissez</button>
    							</li>
    						
    					</ul>
    				</div>

    				<form action=""  wire:submit.prevent="savePaiment()">
    					<div class="form-group">
    						<label for="">Montant</label>

    						<input type="text" wire:model="montant" class="form-control">
    						@error('montant')
    						<p class="error text-danger">{{ $message }}</p>

    						@enderror

    						<button class="btn-info btn mt-3">Valider</button>

    					</div>

    				</form>


    				@endif

    			</div>
    		
    	</div>
    	<div class="col-md-8">B

    		{{ 
    		$paiments }}


    	</div>
    </div>
</div>
