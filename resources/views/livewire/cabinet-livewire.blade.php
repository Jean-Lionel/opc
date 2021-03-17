<div>
    {{-- Stop trying to control. --}}
    <form wire:submit.prevent="saveCabinet">
    	<div class="row">
    		<div class="col-md-12">
    			<h2 class="text-center">Ajouter un nouveau cabinet</h2>
    		</div>
    		<div class="form-group col-md-3">
    			<label for="">Nom du Cabinet</label>
    			<input type="text" class="form-control" wire:model="name">
    			@error('name')
    			<span class="text-danger">{{$message}}</span>
    			@enderror	
    		</div>
    		<div class="form-group col-md-3">
    			<label for="">N° d’Ordre</label>
    			<input type="text" class="form-control" wire:model="order_number">
    			@error('order_number')
    			<span class="text-danger">{{$message}}</span>
    			@enderror	
    		</div>
    		<div class="form-group col-md-3">
    			<label for="">N° de Téléphone</label>
    			<input type="text" class="form-control" wire:model="telephone">
    			@error('telephone')
    			<span class="text-danger">{{$message}}</span>
    			@enderror	
    		</div>
    		<div class="form-group col-md-3">
    			<label for="">Année d’Agrément</label>
    			<input type="text" class="form-control" wire:model="annee_debut">
    			@error('annee_debut')
    			<span class="text-danger">{{$message}}</span>
    			@enderror	
    		</div>

            <div class="offset-md-9 col-md-3">
                <button type="submit" class="btn-info btn-block">Enregistrer</button>
            </div>
    	</div>
    </form>

    <div class="col-md-12">
        <table class="table table-bordered">
               
            <thead>
                <tr>
                    <th>#</th>
                    <th> Nom du Cabinet </th>
                    <th> N° d’Ordre  </th>
                    <th>  N° de Tél  </th>
                    <th>  Année d’Agrément  </th>
                </tr>
                
            </thead>

            <tbody>
                @foreach($cabinets as $key=> $cabinet)
                <tr>
                 <td>{{ ++$key }}</td>
                 <td>{{ $cabinet->name }}</td>     
                 <td>{{ $cabinet->order_number }}</td>     
                 <td>{{ $cabinet->telephone }}</td>     
                 <td>{{ $cabinet->annee_debut }}</td>     
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
