<div class="container">
    {{-- The Master doesn't talk, he acts. --}}



    <div class="row">
    	<div class="col-md-12 badge-secondary">
    		<h4>INFORMATION PERSONNELLE</h4>
    	</div>

    	<div class="col-md-12">
    		<div class="card">
    			<div class="card-body">
    				<div class="d-flex">
    					<div>
    						<img src="{{ asset('images/logo.jpg') }}" alt="" width="100">
    					</div>
                            @can('is-membre')
    					<div class="ml-3">
    						<h3>{{ Auth::user()->name }}</h3>
    						<p>Categorie :  {{ $compte->person->table_name ?? ""}}</p>
    						<p>Status :  <span @if($compte->person->status ?? "" == 'EN ORDRE') class="text-success" @endif>{{ $compte->person->status ?? ""}} </span></p>
    						<p>Montant dû :   <b> {{ $compte->montant }}</b> #FBU   </p>

                            <p>
                                
                                Libellé  :   <b>{{ $compte->motif }} </b> 
                            </p>
                            <p>
                                <a href="{{ route('completer-profil')}}"> <i class="fa fa-edit"></i> Completer </a>
                            </p>
    					</div>
    				</div>
    			</div>

    			<div class="card-body">
    				<h4>Information du Membre</h4>

                    <table class="table table-bordered  table-hover table-striped">
                        <tr>
                            <th>DATE</th>
                            <th>COMPTE</th>
                            <th>CODE DE TRANSACTION</th>
                            <th>MONTANT</th>
                            <th>MOTIF</th>
                        </tr>
                        
                        @foreach ($paiments as $element)
                           <tr>
                               <td>{{ $element->created_at }}</td>
                               <td>{{ $element->compte_name }}</td>
                            
                               <td>{{ $element->transaction_code }}</td>
                                  <td>{{ $element->montant }}</td>
                               <td>{{ $element->type_cotisation }}</td>
                           </tr>
                        @endforeach
                    </table>
    				{{ $paiments->links()}}
    			</div>
    		</div>


                 @endcan

    		
    	</div>

    </div>


</div>
