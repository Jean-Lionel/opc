@extends('layouts.base')
@section('content')

<div>
	<div class="row container pt-4">
		<div class="col-md-3">
			<button onclick="exportTo()">Exporter la liste des membres  aggrées </button>
		</div>
		<div class="col-md-3">
			<button onclick="">Exporter la liste des cabinets  aggrées </button>
		</div>

		<div class="col-md-3">
			<button onclick="">Exporter la liste des cotsations des membres </button>
		</div>

		<div class="col-md-3">
			<button onclick="exportTo()">Exporter la liste des membres  aggrées </button>
		</div>

		<div class="col-md-3 pt-4">
			<label for="">Importation des membres excel</label>
			<input type="file" id="file_data" accept=".csv">

			<div id="loader" style="display: none;">
				<div class="text-center">
					<div class="spinner-border text-warning" role="status">
	  					<span class="sr-only">Loading...</span>
					</div>
				</div>
			</div>

			<div id="response">
				
			</div>
		</div>

		<div class="col-md-3 pt-4">
			<label for="">Importation des Cabinets excel</label>
			<input type="file" id="file_data_member" accept=".csv">

			<div id="loader" style="display: none;">
				<div class="text-center">
					<div class="spinner-border text-warning" role="status">
	  					<span class="sr-only">Loading...</span>
					</div>
				</div>
			</div>

			<div id="responseCabinet">
				
			</div>
		</div>
	
		
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
			let loader = $("#loader")
			//loader.show()
			membres = csvJSON(fr.result);
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
			    loader.hide()
			    $("#response").html(` 
			    	<div> 
			    	 <h4>Importation Réussi </h4>
			    	</div>

			    	`)

			    console.log(data)
			  },
			  error: function(xhr) {
			    //called when there is an error

			    $("#response").html(` 
			    	<div> 
			    	 ${xhr}
			    	</div>

			    	`)
			    console.log(xhr)
			  }
			});
			
		}
		fr.readAsText(this.files[0], 'ISO-8859-1');

	})


	let file_data_member = document.getElementById("file_data_member")

	let cabinets = [];

	file_data_member.addEventListener('change', function(e){
		const fr = new FileReader();

		fr.onload = function(){
			//console.log(csvJSON(fr.result))
			let loader = $("#loader")

			loader.show()

			cabinets = csvJSON(fr.result);
	
			$.ajax({
			
			  url: '{{ route('ajouter_cabinet')  }}',
			  type: 'POST',
			  // dataType: 'json',
			  data: {cabinets ,  "_token": "{{ csrf_token() }}"},
			  complete: function(xhr) {
			    //called when complete
			    console.log(xhr)
			  },
			  success: function(data) {
			    //called when successful
			    loader.hide()
			    $("#responseCabinet").html(` 
			    	<div> 
			    	 <h4>Importation Réussi </h4>
			    	</div>

			    	`)

			    console.log(data)
			  },
			  error: function(xhr) {
			    //called when there is an error

			    $("#response").html(` 
			    	<div> 
			    	 ${xhr}
			    	</div>

			    	`)
			    console.log(xhr)
			  }
			});
			
		}
		fr.readAsText(this.files[0], 'ISO-8859-1');

	})

</script>

@endsection