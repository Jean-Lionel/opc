@include('site.header', ["title" => "Liste des cabinets agrée par opc Burundi"])
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

	<div class="content-principal mt-3">
		<h3 style="text-align: center;">Liste des Cabinets de l'OPC en 'ordre pour l'exercice 2021</h3>
		{{-- <div>
			<form action="" method="get">
				

				<input name="key" id="input-search" value="{{ $search ?? "" }}" type="text" placeholder="Rechercher..">
				<button class="searchBtn" type="submit"> <i class="fa fa-search"></i> </button>
			</form>
		</div>
		 --}}
		<div>
			<table class="table">
				<thead>
					<tr>
						<th>Numéro d'Ordre</th>
						<th>Nom</th>
						<th>Date d' Agrément</th>
						<th>Téléphone</th>
						<th>E-mail</th>
					</tr>
				</thead>

				<tbody>
					@foreach($cabinets as $cabinet)
					<tr>
						<td>{{ $cabinet->order_number }}</td>
						<td>{{ $cabinet->name }}</td>
						<td>{{ $cabinet->annee_debut }}</td>
						<td>{{ $cabinet->telephone }}</td>
						<td></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

	

@include('site.footer')