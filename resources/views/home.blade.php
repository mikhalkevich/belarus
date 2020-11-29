@extends('layouts.app')
@push('scripts')
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('who_is');
    </script>
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-10">

            <div class="card">
                <div class="card-header">Беларус</div>

                <div class="card-body">
                        <form method="post" action="{{route('create')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Имя Фамилия</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="date_rod">Сфера деятельности</label>
                                <select name="date_rod" id="date_rod" class="form-control">
                                    @foreach($catalogs as $one)
                                        <option value="{{$one->id}}">{{$one->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="status">Статус</label>
                                <select name="status" id="status" class="form-control">
                                    @foreach($statuses as $one)
                                    <option value="{{$one->id}}">{{$one->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="who_is">Описание</label>
                                <textarea class="form-control" id="who_is" name="who_is" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="how_is">Контакты</label>
                                <textarea class="form-control" id="how_is" name="how_is" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="picture2">Фото</label>
                                <input type="file" class="form-control-file" id="picture2" name="picture2">
                            </div>
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </form>
                    <table width="100%" class="table table-bordered">
                        <tr>
                            <th width="200px">Фото</th>
                            <th> Описание</th>
                            <th width="200px"> Действия</th>
                        </tr>
                    @foreach($objs as $condidat)
                            <tr>
                                <th width="200px">
                                    <img class="card-img-top" width="100%" src="{{asset('uploads/' . $condidat->user_id . '/s_' . $condidat->picture)}}" alt="{{$condidat->name}}">
                                </th>
                                <td>
                                    <h5 class="card-title">{{$condidat->name}}</h5>
                                    <p>Статуст человека в обществе: {{$condidat->date_rod}}</p>
                                    <p>Общественная деятельность: {!! $condidat->who_is !!}</p>
                                    <p>Контакты: {!! $condidat->how_is !!}</p>
                                </td>
                                <th width="200px"> Удалить<br />Редактировать</th>
                            </tr>
                    @endforeach
                    </table>
                    <p align="center">{!! $objs->links() !!}</p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
@include('includes/home_menu')
        </div>
    </div>
</div>
@endsection
