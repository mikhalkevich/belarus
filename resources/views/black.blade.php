@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<h2 class="badge badge-dark">{{__('main.menu.belarus.blacklist')}}</h2>
			<table width="100%">
			@foreach($blacks as $condidat)
				<tr>
					<td width="200px">
						<img class="card-img-top" src="{{asset('uploads/' . $condidat->user_id . '/s_' . $condidat->picture)}}" alt="{{$condidat->name}}">
					</td>
					<td valign="top">
						<div class="card list_2">
						<div class="card-body">
							<h5 class="card-title">{{$condidat->name}}</h5>
							<p>{!! $condidat->who_is !!}</p>
							<a href="{{ route('condidat_show', ['id' => $condidat->id]) }}" class="btn btn-primary">Подробнее</a>
						</div>
						</div>
					</td>
				</tr>
			@endforeach
			</table>
		</div>
	</div>
@endsection