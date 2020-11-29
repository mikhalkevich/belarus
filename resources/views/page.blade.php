@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{$obj->name}}</div>
                    <div class="card-body">
                        @if($obj->picture)
                         <img src="{{asset('uploads/'.$obj->user_id.'/ss_'.$obj->picture)}}" class="pic">
                        @endif
                        {!! $obj->body !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection