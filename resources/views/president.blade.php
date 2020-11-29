@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>{{$one->name}}</h1>
		<div class="row">

				<div class="col-2">
					<img class="card-img-top" src="{{asset('uploads/' . $one->user_id . '/s_' . $one->picture)}}" alt="{{$one->name}}" />
				</div>
			<div class="col-10 list_{{$one->status}}">
				<p>{!! $one->who_is !!}</p>
				<p>Контакты: {!! $one->how_is !!}</p>
			</div>
		</div>
	</div>
@endsection