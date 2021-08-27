@extends('layouts.layout')

<link href="../css/post.css" rel="stylesheet">

@section('content')

<div class="events parallax-three pad" id="events">
	<div class="container">
		<!-- default heading -->
		<div class="default-heading-shadow">
			<!-- heading -->
			<h2>{{ $tag->name}}</h2>
		</div>
		<!-- events element -->
		<div class="events-element">
			<div class="row">
				
				 @foreach ($etiqueta as $item)
					
				<x-card-noticias :item="$item"/>
				@endforeach 
			</div>
		</div>
		
	</div>

{{-- paginacion dik --}}
	{{--$posts->links()--}}
</div>
@endsection
