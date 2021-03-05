<div>
    {{-- Success is as dangerous as failure. --}}

    <div class="row">
    	<form class="col-md-4" action="" wire:submit.prevent="saveUser">
    		<h4 class="text-center">Ajouter un nouveau utiisateur</h4>
    			<div class="form-group">
    				<label for="">NOM ET PRENOM</label>
    				<input type="text" class="" wire:model="name">

    				@error('name')
    				<span class="error text-danger">{{ $message }}</span>
    				@enderror
    			</div>

    			<div class="form-group">
    				<label for="">EMAIL </label >
    				<input type="email" class="" wire:model="email">

    				@error('email')
    				<span class="error text-danger">{{ $message }}</span>
    				@enderror
    			</div>

    			<div class="form-group">
    				<label for="">NOM D'UTILISATEUR</label>
    				<input type="text" class="" wire:model="user_name">

    				@error('user_name')
    				<span class="error text-danger">{{ $message }}</span>
    				@enderror
    			</div>

    			<div class="form-group">
    				<label for="">MOT DE PASSE</label>
    				<input type="text" class="" wire:model="password">

    				@error('password')
    				<span class="error text-danger">{{ $message }}</span>
    				@enderror
    			</div>

    			<div class="form-group">
    				<label for="">ROLE</label>
    				<select name="" wire:model="role" id="" class="">
    					<option value="">... SELECT</option>
    					@foreach($roles_users as  $role_user)
    					<option value="{{ $role_user }}">{{ $role_user }}</option>

    					@endforeach
    					
    				</select>
    				@error('role')
    				<span class="error text-danger">{{ $message }}</span>
    				@enderror
    			</div>

    			<div class="form-group">
    				<input type="submit" class="btn btn-primary" value="Enregistrer">
    			</div>
    
    	</form>

    	<div class="col-md-8">
    		<h4 class="text-center">Liste des utilisateurs</h4>
    		<table class="table">
    			<thead class="table-dark">
    				<tr>
    					<th>NOM ET PRENOM</th>
    					<th>EMAIL</th>
    					<th>ROLE</th>
    					<th>ACTION</th>
    				</tr>
    			</thead>

    			<tbody>
    				@foreach($users as $user)
    				<tr>
    					<td>{{ $user->name }}</td>
    					<td>{{ $user->email }}</td>
    					<td>{{ $user->role }}</td>
    					<td><button wire:click="updateUser({{ $user->id }})">Modifier</button></td>
    				</tr>

    				@endforeach
    			</tbody>
    		</table>

    		{{ $users->links() }}
    	</div>
    

    </div>
</div>
