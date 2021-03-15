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
		<div class="col">
			<label for="">Importation des données excel</label>
			<input type="file" id="file_data" accept=".csv">
		</div>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

	const file_data = document.getElementById('file_data')

	let membres = [];
	

	file_data.addEventListener('change', function(e){
		

		const fr = new FileReader();

		fr.onload = function(){
			//console.log(csvJSON(fr.result))

			membres = csvJSON(fr.result);

			// jQuery.post('', membres, function(data, textStatus, xhr) {
			// 	console.log(data)
			// 	console.log(textStatus)
			//   //optional stuff to do after success
			// });

			$.ajax({
			
			  url: '{{ route('ajouter')  }}',
			  type: 'POST',
			  // dataType: 'json',
			  data: {membres ,  "_token": "{{ csrf_token() }}"},
			  complete: function(xhr) {
			    //called when complete
			    console.log(xhr)
			  },
			  success: function(data) {
			    //called when successful

			    console.log(data)
			  },
			  error: function(xhr) {
			    //called when there is an error
			    console.log(xhr)
			  }
			});
			
		}
		fr.readAsText(this.files[0], 'ISO-8859-1');

	})








</script>

@endsection