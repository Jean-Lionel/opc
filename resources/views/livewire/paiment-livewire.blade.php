<div>
    <div class="row">
    	<div class="col-md-4">		
    			<div class="form-group">
    				<label for="">Numéro de compte</label>
    				<input type="text" wire:model="compteName" placeholder="Tapez le numéro de compte" class="form-control">
    				@if($compte)
    				<div class="card mt-3">
    					<ul class="list-group">
    						<li class="list-group-item">Nom et Prénom : {{ $compte->person->fullName }}</li>
                            <li class="list-group-item">Numéro : {{ $compte->person->order_number }}</li>
    						<li class="list-group-item d-flex justify-content-between">
    							<span>Tel : {{ $compte->person->telephone }}</span>
    							<span>Addresse : {{ $compte->person->addresse }}</span>
    							
    						</li>
    						<li class="list-group-item d-flex justify-content-between">
    							<span>Compte {{ $compte->name }}</span>
    							</li>
    					</ul>
    				</div>

    				<form action=""  wire:submit.prevent="savePaiment()">
    					<div class="form-group">
                            <div class="form-group">

                            <label for="">Motif</label>
                            <select wire:model="type_cotisation" id="" class="form-control">
                                <option value="CONGRES">CONGRES</option>
                                <option value="COTISATION ANNUELLE">COTISATION ANNUELLE</option>
                                <option value="INSCRIPTION"> INSCRIPTION</option>
                            </select>           
                            </div>
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
    	<div class="col-md-8">
    		<table class="tab-content table table-hover">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>DATE</th>
                        <th>CODE DE TRANSACTION</th>
                        <th>NOM ET PRENOM</th>
                        <th>MONTANT</th>
                        <th>COMPTE</th>
                        <th>TYPE DE COTISATION</th>
                        <th>ACTION</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($paiments as $paiment)
                    <tr>
                        <td>{{ $paiment->id  }}</td>
                        <td>{{ $paiment->created_at  }}</td>
                        <td>{{ $paiment->transaction_code }}</td>
                        <td>{{ $paiment->person->fullName }}</td>
                        <td>{{ number_format($paiment->montant) }}</td>
                        <td>{{ $paiment->compte_name }}</td>
                        <td>{{ $paiment->type_cotisation }}</td>
                        <td>
                    
                            <button class="btn-sm btn-info" wire:click="$emit('confirmValidation',{{$paiment->id}})">Annuler</button>
                        </td>
                        
                    </tr>

                    @endforeach
                </tbody>

            </table>
    	</div>
    </div>
</div>


@push("scripts")
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded",function(e){
          @this.on('confirmValidation', orderId => {
            Swal.fire({
                title: 'êtez vous sûr ?',
                text: 'de Valider cette opération',
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: 'var(--success)',
                cancelButtonColor: 'var(--primary)',
                confirmButtonText: 'Valider '
            }).then((result) => {
        //if user clicks on delete
                if (result.value) {
             // calling destroy method to delete
                    @this.call('annulerPaiement',orderId)
            // success response
                    responseAlert({title: session('message'), type: 'success'});
                    
                } else {
                    responseAlert({
                        title: 'Operation Cancelled!',
                        type: 'success'
                    });
                }
            });
        });
    })
</script>

@endpush