@extends('layouts.app')

@push('scripts')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.19.0/apexcharts.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.19.0/apexcharts.min.js"></script>
    <script>
        var options2 = {
            series: [
                @foreach($elements as $condidat)
                {{$condidat->counts . ","}}
                @endforeach
            ],
            chart: {
                width: 600,
                type: 'pie',
            },
                dataLabels: {
                    enabled: true,
                    style: {
                        fontSize: "28px",
                        fontFamily: "Helvetica, Arial, sans-serif",
                        fontWeight: "bold"
                    }
                },
            labels:   [
                    @foreach($elements as $condidat)
                    {!! "'" . $condidat->name . " (" . $condidat->counts . ")'," !!}
                    @endforeach
                ]
             ,
            colors: [
                @foreach($elements as $condidat)
                        {!! "'" . $condidat->color . "'," !!}
                        @endforeach
            ],
            fill: {
                type: 'image',
                opacity: 0.85,
                image: {
                    src: [
                        @foreach($elements as $condidat)
                        {!! "'" . asset('uploads/' . $condidat->user_id . '/s_' . $condidat->picture) . "'," !!}
                        @endforeach
                    ],
                    width: 25,
                    imagedHeight: 25
                },
            },
            stroke: {
                width: 4
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };
        var chart = new ApexCharts(document.querySelector("#chart2"), options2);
        chart.render();
    </script>
@endpush

@section('content')
    <div class="container">
        <div class="row">
            @foreach($elements as $condidat)
                <div class="col-3">
                    <div class="card">
                        <span class="color" style="background:{{$condidat->color}}">&nbsp;</span>
                        <img class="card-img-top"
                             src="{{asset('uploads/' . $condidat->user_id . '/s_' . $condidat->picture)}}"
                             alt="{{$condidat->name}}">
                        <div class="card-body">

                            <h5 class="card-title" align="center">
                                <a href="{{ route('condidat_show', ['id' => $condidat->id]) }}">{{$condidat->name}}</a>

                            </h5>
                            <p class="default">Отдано голосов: {{$condidat->counts }} <br />

                        @if(isset($_COOKIE['ip']))
                                @foreach($votes as $vote)
                                    @if($vote->condidat_id == $condidat->id)
                                        <a href="{{route('minusVote',['id'=> $condidat->id])}}" class="btn btn-lg btn-danger d-block my">Забрать голос</a>
                                    @break
                                    @endif
                                @endforeach
                            @endif
                            <a href="{{ route('addVote', ['id' => $condidat->id]) }}" class="btn btn-lg btn-primary d-block my">Отдать голос</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-3">
                <br />
                <br />
                <br />
                <br />
                Для добавления своего кандидата необходимо зарегистрироваться
            </div>
        </div>
        <div id="chart2" class="mt-3"></div>
    </div>


@endsection