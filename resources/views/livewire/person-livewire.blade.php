<div>
    @if($showForm)
	<div class="container">
        <h4 class="text-center">Enregistrement d'un Membre</h4>
		<form action="" wire:submit.prevent="savePersonne">
			<div class="row">
				<div class="col-md-5 mr-1">
					<div class="form-group">
						<label for="">Numéro d'ordre</label>
    				    <input class="form-control form-control-sm" type="text" wire:model="order_number">
    				    @error('order_number')
    				     <span class="error text-danger">{{ $message }}</span>
    				    @enderror
    		       </div>
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
    				<label for="">Téléphone</label>
    				<input class="form-control" placeholder="ex: +257 79 000 000" type="text" wire:model="telephone">
    				@error('telephone')
    				<span class="error text-danger">{{ $message }}</span>

    				@enderror
    			</div>


                 <div class="form-group">
                    <label for="">Montant dû</label>
                    <input class="form-control" placeholder="" type="text" wire:model="montant">
                    @error('montant')
                    <span class="error text-danger">{{ $message }}</span>

                    @enderror
                </div>


                 <div class="form-group">
                    <label for="devise">DEVISE</label>
                    <select name="" wire:model="devise" id="devise" class="form-control">
                        <option value="FBU"> FBU</option>
                        <option value="$">$ (Dollars)</option>
                    </select>
                    @error('devise')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="">Motif</label>
                    <input class="form-control" placeholder="" type="text" wire:model="motif">
                    @error('motif')
                    <span class="error text-danger">{{ $message }}</span>

                    @enderror
                </div>



				</div>
				<div class="col-md-5 ">
                    <div class="form-group">
                        <label for="">Province/Commune/Quartier</label>
                        <input class="form-control" type="text" wire:model="addresse" placeholder="ex: Bujumbura/Ntahangwa/Kigobe">

                        @error('addresse')
                        <span class="error text-danger">{{ $message }}</span>

                        @enderror
                    </div>

					<div class="form-group">
                    <label for="">Tableau</label>

                    <select wire:model="table_name" name="" id="" class="form-control">
                        <option value="">Select ...</option>
                        <option value="TABLEAU A">TABLEAU A</option>
                        <option value="TABLEAU B">TABLEAU B</option>
                        <option value="TABLEAU C">TABLEAU C</option>
                        <option value="TABLEAU D">TABLEAU D</option>
                        <option value="STAGIAIRE">STAGIAIRE </option>
                       
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
                    <label for="">STATUS</label>

                    <select class="form-control" name="" id="" wire:model="status">
                        <option selected>Select ...</option>
                        <option value="EN ORDRE">EN ORDRE</option>
                        <option value="REDEVABLE">REDEVABLE</option>
                        <option value="A RAYER">A RAYER</option>
                    </select>
                </div>
    			<div class="form-group">
    				<button type="submit" class="form-control btn-primary">Enregistrer</button>
    			</div>
				</div>
			</div>
		</form>
	</div>
    @else
	<div class="">
        <div class="row">
            <div class="col-md-8">
                <button wire:click="toogleShowForm">Ajouter</button>
                <div>
                    <select wire:model="searchTable" name="" id="">
                        <option value="">TOUT</option>
                        <option value="TABLEAU A">TABLEAU A</option>
                        <option value="TABLEAU B">TABLEAU B</option>
                        <option value="TABLEAU C">TABLEAU C</option>
                        <option value="TABLEAU D">TABLEAU D</option>
                        <option value="STAGIAIRE">STAGIAIRE</option>
                    </select>

                    <input type="text" wire:model="searchKey" placeholder="Rechercher">
                </div>
                <table class="table  table-responsive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>No d'ordre</th>
                        <th>Nom et Prénom</th>
                        <th>Numéro</th>
                        <th>TABLEAU</th>
                        <th>Status</th>

                        {{-- <th>Téléphone</th>
                        
                        <th>TABLEAU</th>
                        <th>NIF</th>
                        <th>TYPE</th> --}}
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
                        <td>{{ $personne->table_name ?? "" }}</td>
                        <td>{{ $personne->status }}</td>
                       {{--  <td>{{ $personne->telephone }}</td>
                        <td>{{ $personne->table_name }}</td>
                        <td>{{ $personne->nif }}</td>
                        <td>{{ $personne->addresse }}</td>
                        <td>{{ $personne->type_personne }}</td> --}}
                        <td class="d-flex justify-content-around">
                            <button wire:click="showInformationFormMember({{$personne->id}})"><i class="fa fa-eye"></i></button>

                      <button class="btn-sm btn-info" wire:click="modifierPersonne({{ $personne->id }})" title="Modifier"><i class="fa fa-edit"></i></button>

                       @if($personne->valider !='VALIDER')

                      <button class="btn btn-info" wire:click="validerPersonner({{ $personne->id  }})"><i class="fa fa-check" title="Valider"></i></button>
                        @endif
                            {{-- <button class="btn-sm btn-danger ml-3" wire:click="supprimerPersonne({{ $personne->id }})" title="Supprimer"><i class="fa fa-trash-o"></i></button> --}}
                        </td>
                      </tr>

                    @endforeach
                </tbody>
            </table>

          {{ $personnes->links() }}
        

            </div>

        <div class="col-md-4">
            @if($selectMember)
            <div class="card">
                <div class="card-header">
                    <h5>{{$selectMember->first_name }}</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">

                        <li class="list-group-item">No d'ordre :  {{ $selectMember->order_number }} </li>
                        <li class="list-group-item">Nom et Prénom: {{ $selectMember->first_name }} </li>
                        <li class="list-group-item"> Numéro :  {{ $selectMember->compte->name}} </li>
                        <li class="list-group-item"> NIF : {{ $selectMember->nif }} </li>
                        <li class="list-group-item"> Cotisation Annuelle :  
                         {{ $selectMember->compte->payement_annuel }} {{ $selectMember->compte->devise }} </li>
                         <li class="list-group-item">Montant dû : {{ $selectMember->compte->montant }} {{ $selectMember->compte->devise }}   ({{ $selectMember->compte->motif }})</li>
                        <li class="list-group-item">TYPE :  {{ $selectMember->type_table }} </li>
                        <li class="list-group-item"> ADDRESSE :  {{ $selectMember->addresse }} </li>
                        <li class="list-group-item"> Tableau :  {{ $selectMember->table_name }} </li>
                        <li class="list-group-item"> TELEPHONE : {{ $selectMember->telephone }} </li>
                        <li class="list-group-item"> EMAIL : {{ $selectMember->email }} </li>
                    </ul>
                    
                </div>
            </div>

            @endif
        </div>
        </div>
		
	</div>


    @endif
</div>