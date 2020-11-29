<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('media/img/flag_50.jpg')}}" />
    <title>{{__('main.menu.republics.republic')}} {{__('main.menu.republics.belarus')}}</title>
    <link href="{{asset('media/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('media/main.css?time='.time())}}" rel="stylesheet" />
    @if($_SERVER['REQUEST_URI'] != '/')
        <link href="{{asset('media/css/others.css?time='.time())}}" rel="stylesheet" />
    @endif
    @stack('styles')
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="/">{{__('main.menu.republics.belarus')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('main.menu.republics.republic')}}</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="{{asset('/narod')}}">{{__('main.menu.republics.nation')}}</a>
                    <a class="dropdown-item" href="{{asset('/parlament')}}">{{__('main.menu.republics.parliament')}}</a>
                    <a class="dropdown-item" href="{{asset('/president')}}">{{__('main.menu.republics.president')}}</a>
                    <a class="dropdown-item" href="{{asset('/vote')}}">{{__('main.menu.republics.elect')}}</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('main.menu.elections.election')}}</a>
                <div class="dropdown-menu" aria-labelledby="dropdown02">
                    <a class="dropdown-item" href="{{asset('all')}}">{{__('main.menu.belarus.all')}}</a>
                    <a class="dropdown-item" href="{{asset('blacklist')}}">{{__('main.menu.belarus.blacklist')}}</a>
                    <a class="dropdown-item" href="{{asset('candidats')}}">{{__('main.menu.belarus.candidats')}}</a>
                    <a class="dropdown-item" href="{{asset('prisoner')}}">{{__('main.menu.belarus.polit_zak')}}</a>
                </div>
            </li>
            <li class="nav-item {{($_SERVER['REQUEST_URI'] == '/news')?'active':''}}">
                <a class="nav-link" href="{{asset('news')}}">{{__('main.menu.news')}}</a>
            </li>
            <li class="nav-item {{($_SERVER['REQUEST_URI'] == '/articles')?'active':''}}">
                <a class="nav-link" href="{{asset('articles')}}">{{__('page.links.page')}}</a>
            </li>
            <li class="nav-item {{($_SERVER['REQUEST_URI'] == '/help')?'active':''}}">
                <a class="nav-link" href="{{asset('help')}}">{{__('main.menu.help')}}</a>
            </li>
            <li class="nav-item dropdown {{($_SERVER['REQUEST_URI'] == '/art/music')?'active':''}}">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('main.menu.arts.art')}}</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="{{asset('art/music')}}">{{__('main.menu.arts.music')}}</a>
                    <a class="dropdown-item" href="{{asset('art/film')}}">{{__('main.menu.arts.films')}}</a>
                    <a class="dropdown-item" href="{{asset('ded_dobrey')}}">Дед добрей</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <span id="lanNavSel">
                        {{(isset($_COOKIE['lang']))?$_COOKIE['lang']:'by'}}
                    </span> <span class="caret"></span></a>
                <ul class="dropdown-menu mumu" role="menu">
                    <li><a id="navFra" href="/?lang=by" class="dropdown-item language">
                            <img id="imgNavBel" src="{{asset('media/img/flag_50.jpg')}}" width="50px" alt="Belarus" class="img-thumbnail icon-small">&nbsp;
                            <span id="lanNavBel">BY</span>&nbsp;
                        </a></li>
                    <li><a id="navRus" href="/?lang=ru" class="dropdown-item language">
                            <img id="imgNavRus" src="https://tattooscalculator.com/img/flag/Rus_40.jpg" alt="Russia" class="img-thumbnail icon-small">&nbsp;
                            <span id="lanNavRus">RU</span>&nbsp;
                        </a></li>
                    <li><a id="navFra" href="/?lang=fr" class="dropdown-item language">
                            <img id="imgNavFra" src="https://tattooscalculator.com/img/flag/Fra_40.jpg" alt="France" class="img-thumbnail icon-small">&nbsp;
                            <span id="lanNavFra">FR</span>&nbsp;
                        </a></li>
                    <li><a id="navEng" href="/?lang=en" class="dropdown-item language">
                            <img id="imgNavEng" src="https://tattooscalculator.com/img/flag/Eng_40.jpg" alt="English" class="img-thumbnail icon-small">&nbsp;
                            <span id="lanNavEng">EN</span>&nbsp;
                        </a></li>
                </ul>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{__('main.menu.auth.login')}}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{__('main.menu.auth.register')}}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a href="{{asset('home')}}" class="dropdown-item">{{__('main.menu.auth.home')}}</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{__('main.menu.auth.logout')}}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>
<div id="header">
    <img src="{{asset('media/img/gerb_belarus_pogona_315.png')}}" id="gerb">
</div>
<audio controls id="gimn">
    <source src="{{asset('media/gimn.mp3')}}" type="audio/mpeg">
    <a href="sounds/name.mp3">Download name.mp3</a>
</audio>
@include('inc.messages')
@yield('content')
<footer align="center" id="footer">
     &copy; <a href="http://mikhalkevich.colony.by" target="_blank">Mikhalkevich</a> 2020
</footer>
<script src="{{asset('media/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('media/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('media/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('media/js/main.js')}}"></script>
@stack('scripts')
</body>
</html>
