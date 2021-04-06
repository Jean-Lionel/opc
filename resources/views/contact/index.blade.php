@extends('layouts.base')

@section('content')

<div class="container-fluid">

	@foreach($messages as $message)

	<div class="card">
		<div class="card-header">
			{{$message->name}} 
			
		</div>
		<div class="card-body">
			<h4>{{$message->subject}}</h4>
			<p>
				{{ $message->message}}
			</p>

			<div class="d-flex justify-content-around">
				<div>DATE {{ $message->created_at }}</div>
				<div>Email:{{$message->email}} <a href="mailto({{$message->email}})">Repondre</a></div>
			</div>
		</div>
	</div>

	@endforeach	
	
</div>


@endsection