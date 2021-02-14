<div>
	{{-- Because she competes with no one, no one can compete with her. --}}


	<div class="col-md-12">
		<div class="col-md-12">
			<h4>Liste des membres enregistrer</h4>
		</div>
		<div class="row">

			<div class="col">

				  <select wire:model="table_name" name="" id="" class="form-control">
                        <option value="">Select ...</option>
                        <option value="A">TABLEAU A</option>
                        <option value="B">TABLEAU B</option>
                        <option value="C">TABLEAU C</option>
                        <option value="D">TABLEAU D</option>
                        <option value="S">STAGAIERE</option>
                        <option value="CABINET">CABINET</option>
                    </select>
				
			</div>
			<div class="col">
				<div class="row">
					<input type="date" class="form-control col-4" wire:model="date_debut">
					Aux
				<input type="date" class="form-control col-4" wire:model="date_fin">
					
				</div>
				
			</div>

			<div class="col">
				<input type="text" wire:model="searchKey" >
			</div>
		</div>
{{-- 
		<div class="row mt-3">
			<div class="col">
				<button>Imprimer</button>
			</div>
			<div class="col">
				<button>
					Export vers excelle
				</button>
				
			</div>
			<div class="col"></div>
			<div class="col"></div>
			<div class="col"></div>
			<div class="col"></div>
		</div>
 --}}
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Numéro d'ordre</th>
					<th>Nom et prénom</th>
					<th>Date d' Agrément</th>
					<th>Classement</th>
					<th>Téléphone</th>
				</tr>
			</thead>

			<tbody>
				@foreach($personnes as $key => $person)
				<tr>
					<td> {{ ++$key }}</td>
					<td>{{ $person->order_number ?? "" }}</td>
					<td>{{ $person->first_name ?? "" }}</td>
					<td>{{ $person->debut_activite ?? "" }}</td>
					<td>{{ $person->table_name ?? "" }}</td>
					<td>{{ $person->telephone ?? "" }}</td>

				</tr>

				@endforeach
			</tbody>

		</table>

		{{ $personnes->links() }}

	</div>

</div>


@push('scripts')
<script>
    // Your JS here.
    
    alert("Hello")
    console.log("Je suis un future milliardaire")
</script>
@endpush