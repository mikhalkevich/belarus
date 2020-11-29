@extends('layouts.app')
@push('styles')
    <link href="{{asset('media/css/news.css?time='.time())}}" rel="stylesheet" />
@endpush
@push('scripts')
    <script src="{{asset('media/js/news.js')}}"></script>
@endpush
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Новости Беларуси</div>
                    <div class="card-body">
                        <h2>Новости Google - сегодня</h2>
                        <div class="iframe2" id="google_news">
                            {!! $body !!}
                        </div>
                        <h2>Хартия 97 - смотрим через прокси</h2>
                        <iframe class="ifrmame1" src="https://ca.weboproxy.com/index.php?q=zqTaoNSfYpHImsepqMbWaXBhoqKYYw">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection