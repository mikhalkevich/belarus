@extends('layouts.app')
@push('styles')
    <link href="{{asset('media/css/player.css')}}" rel="stylesheet"/>
@endpush
@push('scripts')
    <script src="{{asset('media/js/player.js')}}"></script>
    <script src="{{asset('media/js/translite.js')}}"></script>
@endpush
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Музыка протеста</div>
                    <div class="card-body">
                        <div class="container">
                            <audio id="audio" preload="none" controls tabindex="0">
                                @foreach($files as $one)
                                <source src="{{asset('/arts/misic/'.$one[1].'/'.$one[0])}}" data-track-number="{{$loop->index+1}}" />
                                @endforeach
                                    Your browser does not support HTML5 audio.
                            </audio>
                            <div class="player">

                                <div class="large-toggle-btn">
                                    <i class="large-play-btn"><span class="screen-reader-text">Large toggle button</span></i>
                                </div>
                                <!-- /.play-box -->
                                <div class="info-box">
                                    <div class="track-info-box">
                                        <div class="track-title-text player_title">Музыка протеста</div>
                                        <div class="audio-time">
                                            <span class="current-time">00:00</span> /
                                            <span class="duration">00:00</span>
                                        </div>
                                    </div>
                                    <!-- /.info-box -->
                                    <div class="progress-box">
                                        <div class="progress-cell">
                                            <div class="progress">
                                                <div class="progress-buffer"></div>
                                                <div class="progress-indicator"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.progress-box -->
                                <div class="controls-box">
                                    <i class="previous-track-btn disabled"><span class="screen-reader-text">Previous track button</span></i>
                                    <i class="next-track-btn"><span class="screen-reader-text">Next track button</span></i>
                                </div>
                                <!-- /.controls-box -->
                            </div>
                            <!-- /.player -->
                            <div class="play-list">
                                @foreach($files as $one)
                                    <div class="play-list-row" data-track-row="{{$loop->index+1}}">
                                        <div class="small-toggle-btn">
                                            <i class="small-play-btn"><span class="screen-reader-text">Small toggle button</span></i>
                                        </div>
                                        <div class="track-number">
                                            {{$loop->index+1}}.
                                        </div>
                                        <div class="track-title">
                                            <a class="playlist-track trans" href="#" data-play-track="10">{{$one[0]}}</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection