@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>{{$elem->name}}</h1>
		<div class="row">

				<div class="col-2">
					<img class="card-img-top" src="{{asset('uploads/' . $elem->user_id . '/s_' . $elem->picture)}}" alt="{{$elem->name}}" />
				</div>
			<div class="col-10 list_{{$elem->status}}">
				<p>{!! $elem->who_is !!}</p>
				<p>Контакты: {!! $elem->how_is !!}</p>
				@if($elem->status == 3)
				<a href="{{ route('addVote', ['id' => $elem->id]) }}" class="btn btn-lg btn-primary d-block my">Отдано голосов: {{$elem->counts }} Отдать голос</a>
				@endif
				<br />
				<br />
				<form action="{{asset('comment/'.$elem->id)}}" method="post">
					@csrf
					<div class="form-group">
						<label for="body">Оставьте  анонимный коментарий об этом человеке</label>
						<textarea class="form-control" required id="body" name="body" rows="3"></textarea>
					</div>
					<p align="right">
					<input type="submit" class="btn btn-primary" value="Сохранить">
					</p>
				</form>
				<hr />
				@foreach($comments as $one)
					<div class="comment">
						{!! $one->body !!}
					</div>
				@endforeach
				<p align="center">
					{!! $comments->links() !!}
				</p>
			</div>

		</div>
	</div>
@endsection