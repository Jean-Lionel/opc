<div>
    {{-- Be like water. --}} 
    <div>
        <h4>NOUVELLE FORMATION</h4>
        <form action="" wire:submit.prevent="saveFormation">
            <div class="form-group">
                <label for="">TITLE DU FORMATION</label>
                <input type="text" wire:model="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="">DATE DU DEBUT</label>
                <input type="date" wire:model="date_debut">

                 <label for="">DATE DU DEBUT</label>
                <input type="date" wire:model="date_fin">
            </div>

            <div class="form-group">
               
            </div>
            <div class="form-group">
                <button>Enregistrer</button>
            </div>
        </form>

        <div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>TITRE</th>
                        <th>DU</th>
                        <th>AU</th>
                        <th>ACTION</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($formations as $formation)
                        {{-- expr --}}
                        <tr>
                            <td>{{ $formation->title }}</td>
                            <td>{{ $formation->date_debut }}</td>
                            <td>{{ $formation->date_fin }}</td>
                            <td>
                                <button class="btn btn-sm btn-outline-info" wire:click="modifierFormation({{$formation->id}})"> Modifier</button>

                                <button class="btn btn-sm btn-danger" wire:click="supprimerFormation({{$formation->id}})"> Supprimer</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
