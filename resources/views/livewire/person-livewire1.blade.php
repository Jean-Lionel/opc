<div class="container">
    {{-- Be like water. --}}

    <div class="row">
	
    	<div class="col-md-12">
                 <h4 class="text-center">Enregistrer un Nouveau Membre </h4>
            
            
    		<form action="" wire:submit.prevent="savePersonne()">

			
               
68331404 
               


    			

    			

    			

    		</form>
    		
    	</div>


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
