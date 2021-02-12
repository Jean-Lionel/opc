<div>
    {{-- Be like water. --}}

    <div class="row">
{{-- 
    	   	first_name
last_name
addresse
telephone
type_personne
sexe
email --}}
 
    	
    	<div class="col-md-3">
    		<h4 class="text-center">Enregistrer un Nouveau Membre</h4>
    		<form action="" wire:submit.prevent="savePersonne()">
    			<div class="form-group">
    				<label for="">Nom et Prénom</label>
    				<input class="form-control" type="text" wire:model="first_name">
    				@error('first_name')
    				<span class="error text-danger">{{ $message }}</span>

    				@enderror
    			</div>



    			<div class="form-group">
    				<label for="">GENRE</label>
    				<select name="" class="form-control" wire:model="sexe" id="">
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
    				<input class="form-control" type="text" wire:model="addresse" placeholder="ex: Bujumbura/Ntahangwa/Kigobe">

    				@error('addresse')
    				<span class="error text-danger">{{ $message }}</span>

    				@enderror
    			</div>

    			<div class="form-group">
    				<label for="">Téléphone</label>
    				<input class="form-control" placeholder="ex: +257 79 000 000" type="text" wire:model="telephone">

    				@error('telephone')
    				<span class="error text-danger">{{ $message }}</span>

    				@enderror
    			</div>


                <div class="form-group">
                    <label for="">Tableau</label>

                    <select wire:model="table_name" name="" id="" class="form-control">
                        <option value="">Select ...</option>
                        <option value="A">TABLEAU A</option>
                        <option value="B">TABLEAU B</option>
                        <option value="C">TABLEAU C</option>
                        <option value="D">TABLEAU D</option>
                        <option value="ST">STAGAIERE</option>
                        <option value="CABINET">CABINET</option>
                    </select>
                   
                    @error('telephone')
                    <span class="error text-danger">{{ $message }}</span>

                    @enderror
                </div>


                  <div class="form-group">
                    <label for="">NIF</label>
                    <input type="text" wire:model="nif" class="form-control">

                    @error('nif')
                    <span class="error text-danger">{{ $message }}</span>

                    @enderror
                </div>

                 <div class="form-group">
                    <label for="">DEBUT D'ACTIVITE</label>
                    <input type="date" wire:model="debut_activite" class="form-control">

                    @error('debut_activite')
                    <span class="error text-danger">{{ $message }}</span>

                    @enderror
                </div>
               


    			<div class="form-group">
    				<label for="">Email</label>
    				<input class="form-control" placeholder="ex: exemple@emple.bi" type="email" wire:model="email">

    				@error('email')
    				<span class="error text-danger">{{ $message }}</span>

    				@enderror
    			</div>

    			<div class="form-group">
    				<label for="">Type</label>

    				<select class="form-control" name="" id="" wire:model="type_personne">
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

    	<div class="col-md-9">
    		<div class="row">
    			<div class="col">
    				<h4>Liste des membres déjà enregistrer</h4>
    			</div>
    			<div class="col">
    				<input type="text" wire:model="searchKey" >
    			</div>
    		</div>

    		<table class="table table-sm">
    			<thead>
    				<tr>
                        <th>N°</th>
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
    				@foreach($personnes as $personne)
    				  <tr>
                        <td>{{ $personne->id }}</td>
    				  	<td>{{ $personne->first_name }}</td>
    				  	<td>{{ $personne->compte->name }}</td>
    				  	<td>{{ $personne->telephone }}</td>
    				  	<td>{{ $personne->table_name }}</td>
                        <td>{{ $personne->nif }}</td>
    				  	<td>{{ $personne->addresse }}</td>
    				  	<td>{{ $personne->type_personne }}</td>
    				  	<td>
    				  		<button>Modifier</button>
    				  	</td>
    				  </tr>

    				@endforeach
    			</tbody>
    		</table>

    	  {{ $personnes->links() }}
    		
    	</div>
    </div>

</div>
