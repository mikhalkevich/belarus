@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<table width="100%">
			@foreach($all as $condidat)
				<tr>
					<td width="200px">
						<img class="card-img-top" src="{{asset('uploads/' . $condidat->user_id . '/s_' . $condidat->picture)}}" alt="{{$condidat->name}}">
					</td>
					<td valign="top">
						<div class="card list_{{$condidat->status}}">
						<div class="card-body">
							<h5 class="card-title">{{$condidat->name}}</h5>
							<p><a href="{{asset('catalog/'.$condidat->date_rod)}}">{{$condidat->catalogs->name}}</a></p>
							<p>{!! $condidat->who_is !!}</p>
							<a href="{{ route('condidat_show', ['id' => $condidat->id]) }}" class="btn btn-primary">Подробнее</a>

						</div>
						</div>
					</td>
				</tr>
			@endforeach
			</table>
			<p align="center">
				{!! $all->links() !!}
			</p>
		</div>
	</div>
@endsection