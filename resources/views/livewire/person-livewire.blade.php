<div class="container-fluid">
    {{-- Be like water. --}}

    <div class="row">
	
        @if($showForm)
    	<div class="col-md-3">
                 <h4 class="text-center">Enregistrer un Nouveau Membre </h4>
            
            
    		<form action="" wire:submit.prevent="savePersonne()">

			<div class="form-group">
    				<label for="">Numéro d'ordre</label>
    				<input class="" type="text" wire:model="order_number">
    				@error('order_number')
    				<span class="error text-danger">{{ $message }}</span>

    				@enderror
    			</div>


    			<div class="form-group">
    				<label for="">Nom et Prénom</label>
    				<input class="" type="text" wire:model="first_name">
    				@error('first_name')
    				<span class="error text-danger">{{ $message }}</span>

    				@enderror
    			</div>



    			<div class="form-group">
    				<label for="">GENRE</label>
    				<select name="" class="" wire:model="sexe" id="">
    					<option value="">Choisissez</option>
    					<option value="HOMME">HOMME</option>
    					<option value="FEMME">FEMME</option>
    				</select>

    				@error('sexe')
    				<span class="error text-danger">{{ $message }}</span>

    				@enderror
    			</div>

    			<div class="form-group">
    				<label for="">Province/Commune/Quartier</label>
    				<input class="" type="text" wire:model="addresse" placeholder="ex: Bujumbura/Ntahangwa/Kigobe">

    				@error('addresse')
    				<span class="error text-danger">{{ $message }}</span>

    				@enderror
    			</div>

    			<div class="form-group">
    				<label for="">Téléphone</label>
    				<input class="" placeholder="ex: +257 79 000 000" type="text" wire:model="telephone">

    				@error('telephone')
    				<span class="error text-danger">{{ $message }}</span>

    				@enderror
    			</div>


                <div class="form-group">
                    <label for="">Tableau</label>

                    <select wire:model="table_name" name="" id="" class="">
                        <option value="">Select ...</option>
                        <option value="A">TABLEAU A</option>
                        <option value="B">TABLEAU B</option>
                        <option value="C">TABLEAU C</option>
                        <option value="D">TABLEAU D</option>
                        <option value="S">STAGAIERE</option>
                        <option value="CABINET">CABINET</option>
                    </select>
                   
                    @error('telephone')
                    <span class="error text-danger">{{ $message }}</span>

                    @enderror
                </div>


                  <div class="form-group">
                    <label for="">NIF</label>
                    <input type="text" wire:model="nif" class="">

                    @error('nif')
                    <span class="error text-danger">{{ $message }}</span>

                    @enderror
                </div>

                 <div class="form-group">
                    <label for="">DEBUT D'ACTIVITE</label>
                    <input type="date" wire:model="debut_activite" class="">

                    @error('debut_activite')
                    <span class="error text-danger">{{ $message }}</span>

                    @enderror
                </div>
               


    			<div class="form-group">
    				<label for="">Email</label>
    				<input class="" placeholder="ex: exemple@emple.bi" type="email" wire:model="email">

    				@error('email')
    				<span class="error text-danger">{{ $message }}</span>

    				@enderror
    			</div>

    			<div class="form-group">
    				<label for="">Type</label>

    				<select class="" name="" id="" wire:model="type_personne">
    					<option value="">Select ...</option>

    					<option value="ETUDIANT">ETUDIANT</option>
    					<option value="MEMBRE">MEMBRE</option>
    				</select>
    			</div>

    			<div class="form-group">
    				<button class=" btn-info btn">Enregistrer</button>
    			</div>

    		</form>
    		
    	</div>

        @endif

    	<div class=" {{ $showForm ? 'col-md-9' : 'col-md-11' }}">
    		<div class="row">
                <div class="col-2">

                    <button wire:click="toogleShowForm">

                        {{ $showForm ? 'X' : '+' }}

                    </button></div>
    			<div class="col-8">
    				<h4>Liste des membres déjà enregistrer</h4>
    			</div>
    			<div class="col-2">
    				<input type="text" wire:model="searchKey" >
    			</div>
    		</div>

    		<table class="table-responsive">
    			<thead>
    				<tr>
                        <th>#</th>
                        <th>No d'ordre</th>
    					<th>Nom et Prénom</th>
    					<th>Numéro</th>
    					<th>Téléphone</th>
    					<th>TABLEAU</th>
                        <th>TABLEAU</th>
    					<th>NIF</th>
    					<th>TYPE</th>
    					<th>Action</th>
    				</tr>
    				
    			</thead>

    			<tbody>
    				@foreach($personnes as $key => $personne)
    				  <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $personne->order_number }}</td>
    				  	<td>{{ $personne->first_name }}</td>
    				  	<td>{{ $personne->compte->name ?? "" }}</td>
    				  	<td>{{ $personne->telephone }}</td>
    				  	<td>{{ $personne->table_name }}</td>
                        <td>{{ $personne->nif }}</td>
    				  	<td>{{ $personne->addresse }}</td>
    				  	<td>{{ $personne->type_personne }}</td>
    				  	<td class="d-flex">
    				  <button class="btn-sm btn-info" wire:click="modifierPersonne({{ $personne->id }})">Modifier</button>

                       @if($personne->valider !='VALIDER')

                      <button class="btn btn-info" wire:click="validerPersonner({{ $personne->id  }})">valider</button>
                        @endif
                            <button class="btn-sm btn-danger ml-3" wire:click="supprimerPersonne({{ $personne->id }})">Supprimer</button>
    				  	</td>
    				  </tr>

    				@endforeach
    			</tbody>
    		</table>

    	  {{ $personnes->links() }}
    		
    	</div>
    </div>

</div>
