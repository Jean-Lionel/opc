<div>
    {{-- Do your work, then step back. --}}

    <form>
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

                </div>
                <div class="col-md-5 ">
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
                    <button type="submit" class="form-control btn-primary">Enregistrer</button>
                </div>

                </div>


            </div>
        </form>
        
    </form>
</div>
