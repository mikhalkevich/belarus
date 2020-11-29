@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{__('page.links.page')}}</div>
                    <div class="card-body">
                        <table width="100%" class="table">
                            @foreach($objs as $obj)
                                <tr>
                                    <td width="200px">
                        @if($obj->picture)
                         <img src="{{asset('uploads/'.$obj->user_id.'/ss_'.$obj->picture)}}" class="pic">
                        @endif
                                    </td>
                                    <td>
                                    <a href="{{asset($obj->url)}}">
                        {!! $obj->name !!}
                                    </a>
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection