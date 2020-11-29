@extends('layouts.app')
@push('scripts')
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'body');
    </script>
@endpush
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{__('page.links.page')}}</div>
                    <div class="card-body">
                        <form method="post" action="{{asset('home/page')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <select class="form-control" name="catalog">
                                    @foreach(__('page.catalogs') as $one)
                                    <option value="">{{__($one)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">{{__('page.actions.name')}}</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="body">{{__('page.actions.body')}}</label>
                                <textarea class="form-control" id="body" name="body" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="picture2">{{__('page.catalogs.picture')}}</label>
                                <input type="file" class="form-control-file" id="picture2" name="picture2">
                            </div>
                            <button type="submit" class="btn btn-primary">{{__('page.actions.save')}}</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                @include('includes/home_menu')
            </div>
        </div>
    </div>
@endsection
