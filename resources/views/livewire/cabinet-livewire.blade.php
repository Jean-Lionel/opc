<div>
    {{-- In work, do what you enjoy. --}}

    <div class="container">
    	<form  action="" wire:submit.prevent="saveCabinet">

            <div class="row">
                <div class="col-md-3 form-group">
                    <label for="">NOM DU CABINET</label>
                    <input type="text" class="form-control" name="name">
                    @error('name')
                    <p class="error text-danger">{{ $message}}</p>

                    @enderror
                    
                </div>

                <div class="col-md-3 form-group">
                    <label for="">NUMERO D'ORDRE</label>
                    <input type="text" class="form-control" name="order_number"> 

                    @error('order_number')
                    <p class="error text-danger">{{ $message}}</p>

                    @enderror 
                </div>
                 <div class="col-md-3 form-group">
                    <label for="">TELEPHONE</label>
                    <input type="text" class="form-control" name="telephone"> 
                    @error('telephone')
                    <p class="error text-danger">{{ $message}}</p>
                    @enderror 
                </div> 
                <div class="col-md-3 form-group">
                    <label for="">Année d’Agrément</label>
                    <input type="text" class="form-control" name="annee_debut">  
                    @error('annee_debut')
                    <p class="error text-danger">{{ $message}}</p>
                    @enderror
                </div>
            </div>
    		<div class="form-group">
    			<button type="submit" class="btn btn-info">Enregistrer</button>
    		</div>
    		
    	</form>
    	
    </div>
</div>
