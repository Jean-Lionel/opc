@extends('layouts.base')

@section('content')

<div>
	<div class="row">
		<div class="col">
			<button onclick="exportTo()">Exporter la liste des membres  aggrées </button>
		</div>
		<div class="col">
			<button onclick="">Exporter la liste des cabinets  aggrées </button>
		</div>

		<div class="col">
			<button onclick="">Exporter la liste des cotsations des membres </button>
		</div>


		<div class="col">
			<button onclick="exportTo()">Exporter la liste des membres  aggrées </button>
		</div>

		<div class="col">
			<button onclick="printDoc()">imprimer Tout les membres de l'opc</button>
		</div>
		<div class="col"></div>
		<div class="col"></div>
		<div class="col"></div>
		<div class="col"></div>
		
	</div>

	<div>
		

		<table id="tb" style="display: none;">
		<thead>
			<tr>
				<th>NUMERO</th>
				<th>NUMERO DE L'OPC</th>
				<th>NOM ET PRENOM</th>
				<th>NIF</th>
				<th>TELEPHONE</th>
				<th>ADRESSE</th>
				<th>CLASSEMENT</th>
				<th>TYPE</th>
			</tr>
		</thead>
		<tbody>

			@foreach($personnes  as $key => $value)

			<tr>
				<td>{{ ++$key }}</td>
				<td>{{ $value->order_number }}</td>
				<td>{{ $value->first_name }}</td>
				<td>{{ $value->nif }}</td>
				<td>{{ $value->telephone }}</td>
				<td>{{ $value->addresse }}</td>
				<td>{{ $value->table_name }}</td>
				<td>{{ $value->type_personne }}</td>
			</tr>
			
			@endforeach
		</tbody>
	</table>

	</div>
</div>

@stop

@section('script')

<script>
	function exportTo(){
		exportTableToExcel('tb', 'document_2020')

	}

	function printDoc(){
		const d = document.getElementById("tb")
		d.style.display = "block"

		printJS({
			printable : "tb",
			type: "html"
		})

		d.style.display = "none"
	}
	
	

</script>

@endsection