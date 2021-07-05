@include('site.header', ["title" => "Liste des membres de l'opc"])
	<style>
		.content-principal{
			margin: auto;
			width: 75%;

		}
		.content-principal table{
			width: 100%;
			border-collapse: collapse;
			margin-top: 20px;
		}
		table , td ,th,td {
			border: 1px solid rgba(0, 0, 0, 0.19);
			text-align: left;

		}
		.content-principal h1{
			text-align: center;
		}
		#input-search,.content-principal select {	
			padding: 6px;
			width: 200px;
			margin-top: 8px;
			margin-right: 16px;
			font-size: 17px;
		}

		.searchBtn{
			padding: 6px;
			border-radius: 5px;


		}

		.searchBtn:hover{
			cursor: pointer;
			color: gold;
			background: green;
		}

	</style>

	<div class="content-principal mt-3">
		<h3 style="text-align: center;">Liste des Membres de l'OPC en 'ordre pour l'exercice 2021</h3>
		<div>
			<form action="" method="get">
				<select  id="" name="classement">
					<option value="">Choisissez ici </option>
					@if($classement)
					<option value="{{ $classement }}" selected="">{{ $classement }}</option>
					@endif
					<option value="TABLEAU A">Table A</option>
					<option value="TABLEAU B">Table B</option>
					<option value="TABLEAU C">Table C</option>
					<option value="TABLEAU D">Table D</option>
					<option value="STAGIAIRE">STAGIAIRE</option>
				</select>

				<select name="status" id="">
					<option value="">... select</option>
					@if($status)
					<option value="{{ $status }}" selected="">{{ $status }}</option>
					@endif

					<option value="REDEVABLE">REDEVABLE</option>
					<option value="EN ORDRE">EN ORDRE</option>
					<option value="A RAYER">A RAYER</option>
				</select>

				<input name="key" id="input-search" value="{{ $search ?? "" }}" type="text" placeholder="Rechercher..">
				<button class="searchBtn" type="submit"> <i class="fa fa-search"></i> </button>
			</form>
		</div>
		

		<div id="print_doc">
			
			<table class="table">
				<thead>
					<tr>
						<th>Numéro d'Ordre</th>
						<th>Nom et prénom</th>
						{{-- <th>Date d' Agrément</th>
						<th>Classement</th> --}}
						<th>STATUS</th>
						<th>TABLEAU</th>
						{{-- <th>E-mail</th> --}}
					</tr>
				</thead>

				<tbody>
					@foreach($people as $person)

					<tr @if($person->status == 'EN ORDRE') class="" @endif 
						@if($person->status == 'REDEVABLE') class="bg-warning" @endif 
						@if($person->status == 'A RAYER') class="bg-danger" @endif 
						>
						<td>{{ $person->order_number ?? "" }}</td>
						<td>{{ $person->first_name ?? "" }}</td>
						{{-- <td>{{ $person->debut_activite ?? "" }}</td>
						<td>{{ $person->table_name ?? "" }}</td> --}}
						<td>{{ $person->status ?? "" }}</td>
						<td>{{ $person->table_name ?? "" }}</td>
						{{-- <td>{{ $person->email ?? "" }}</td> --}}

					</tr>

					@endforeach
				</tbody>
			</table>

			{{ $people->links()}}
		</div>
	</div>

	{{-- <script src="{{ asset('js/print.min.js') }}">
	</script>

	<script>
		const printDoc = document.getElementById("print_doc");
		const btn_print = document.getElementById("btn_print");
		console.log(btn_print)

		btn_print.addEventListener('click',(e) =>{
			e.preventDefault();
			console.log('je suis un future milliardaire');

			printJS({
				printable : 'print_doc',
				type : 'html',

				css : "{{ asset('css/printdoc.css') }}"
			})

		})


	</script> --}}

@include('site.footer')