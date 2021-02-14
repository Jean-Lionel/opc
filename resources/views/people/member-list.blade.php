<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Liste des membres de l'opc</title>

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
			border: 1px solid black;
			text-align: left;

		}

		.content-principal h1{
			text-align: center;
		}
		#input-search,.content-principal select {
			
			padding: 6px;
			width: 400px;
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
</head>
<body>

	<div class="content-principal">
		<h3 style="text-align: center;">Liste des Membres de l'OPC</h3>


		<div>
			<form action="" method="get">
				<select  id="" name="classement">
					<option value="">Choisissez ici </option>
					@if($classement)
					<option value="{{ $classement }}" selected="">{{ $classement }}</option>
					@endif
					<option value="A">Table A</option>
					<option value="B">Table B</option>
					<option value="C">Table C</option>
					<option value="D">Table D</option>
					<option value="STAGAIRE">STAGAIRE</option>
					<option value="CABINET">CABINET</option>
				</select>

				<input name="key" id="input-search" value="{{ $search ?? "" }}" type="text" placeholder="Search..">
				<button class="searchBtn" type="submit"> <i class="fa fa-search"></i> </button>
			</form>
		</div>
		<button id="btn_print">Imprimmer</button>

		<div id="print_doc">
			

			<table class="table">
				<thead>
					<tr>
						<th>Numéro d'Ordre</th>
						<th>Nom et prénom</th>
						<th>E-mail</th>
						<th>Date d' Agrément</th>
						<th>Classement</th>
						<th>Téléphone</th>
					</tr>
				</thead>

				<tbody>
					@foreach($people as $person)
					<tr>
						<td>{{ $person->order_number }}</td>
						<td>{{ $person->first_name ?? "" }}</td>
						<td>{{ $person->email ?? "" }}</td>
						<td>{{ $person->debut_activite ?? "" }}</td>
						<td>{{ $person->table_name ?? "" }}</td>
						<td>{{ $person->telephone ?? "" }}</td>

					</tr>

					@endforeach
				</tbody>

			</table>

		</div>

		{{ $people->links() }}

	</div>

	<script src="{{ asset('js/print.min.js') }}">
		
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


	</script>
	
</body>
</html> 