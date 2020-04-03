@extends('master')

@section('title', 'Homepage')

@section('content')

	Recent Messages:

	<ul>
		@foreach($messages as #message)
		<li><strong>{{ $message->title }}</strong><br>
		{{ $message->content }}</li><br>
		{{ $message->created_at->diffForHumans() }}
		@endforeach
	</ul>

@endsection