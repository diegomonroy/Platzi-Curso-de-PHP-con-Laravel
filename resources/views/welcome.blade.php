@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
	<h1>Laratter</h1>
	<nav>
		<ul class="nav nav-pills">
			<li class="nav-item"><a href="/" class="nav-link">Home</a></li>
		</ul>
	</nav>
</div>
<div class="row">
	@forelse ($messages as $message)
		<div class="col-6">
			<img src="{{ $message->image }}" class="img-thumbnail">
			<p class="card-text">
				{{ $message->content }}
				<a href="/messages/{{ $message->id }}">Leer más</a>
			</p>
		</div>
	@empty
		<p>No hay mensaje destacados.</p>
	@endforelse
</div>
@endsection