<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

    <div>
        <label>Tableau</label>
        <select name="" id="" wire:model="table_name">
            <option value="">...select</option>
            <option value="TABLEAU A">TABLEAU A</option>
            <option value="TABLEAU B">TABLEAU B</option>
            <option value="TABLEAU C">TABLEAU C</option>
            <option value="TABLEAU D">TABLEAU D</option>
            <option value="STAGIAIRE">STAGIAIRE</option>
        </select>
        <label for="">Status</label>
        <select name="" id="" wire:model="current_status">
            <option value=""></option>
            <option value="EN ORDRE">EN ORDRE</option>
            <option value="REDEVABLE">REDEVABLE</option>
            <option value="A RAYER">A RAYER</option>
        </select>
        <input type="text" wire:model="searchKey" placeholder="Recherche">

        <button id="btn_print"> <i class="fa fa-print"></i> Imprimer</button>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr> 
                <td>N°</td>
                <td>NUMERO D'ORDRE</td>
                <td>NOM ET PRENOM</td>
                <td>TABLEAU</td>
                <td>STATUS</td>
            </tr>
        </thead> 
        <tbody>
            @foreach($membres as $key => $membre)
            <tr> 
                <td>{{ ++$key }}</td>
                <td>{{ $membre->order_number }}</td>
                <td>{{ $membre->first_name }}</td>
                <td>{{ $membre->table_name }}</td>
                <td>{{ $membre->status }}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
    {{ $membres->links()}}


    <div id="print_doc" style="display:none;">

        <style>

        table{
            border-collapse: collapse; 
            width: 100%;
        }
        tr,td,table,thead,tbody{
            border: 1px solid black;
        }
            
        </style>

        <table>
        <thead>
            <tr> 
                <td>N°</td>
                <td>NUMERO D'ORDRE</td>
                <td>NOM ET PRENOM</td>
                <td>TABLEAU</td>
                <td>STATUS</td>
            </tr>
        </thead> 
        <tbody>
            @foreach($membres_all as $key => $membre)
            <tr> 
                <td>{{ ++$key }}</td>
                <td>{{ $membre->order_number }}</td>
                <td>{{ $membre->first_name }}</td>
                <td>{{ $membre->table_name }}</td>
                <td>{{ $membre->status }}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
        
    </div>
</div>



@push('scripts')

<script>
    let btn = $('#btn_print')

    btn.on('click', (e)=>{
        e.preventDefault();
       const d = document.getElementById("print_doc")
        d.style.display = "block"
        printJS({
            printable : "print_doc",
            type: "html",
            honorColor: true,
            targetStyles: ['margin','font-size','width','text-align','font-weight','border']
        })

        d.style.display = "none"
    })

</script>


@endpush