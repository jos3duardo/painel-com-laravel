<nav class="navbar navbar-expand-lg navbar-light" id="son-navbar">
    <span id="menu-toggle" class="mr-auto">
        <img src="/img/logo.png" alt="" class="mx-auto d-block">
    </span>
    <a href="{{route('mobile')}}" class="navbar-brand" id="navbar-site-title">Painel</a>

    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#son-navbar-collapse"
            aria-controls="son-navbar-collapse" aria-expanded="false" aria-label="Exibe toda a navbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="son-navbar-collapse">
        <form action="" class="form-inline son-form-field" id="navbar-search-form">
            <input type="text" class="form-control son-form-field" placeholder="Pesquisar" id="navbar-search-field">
        </form>

        {{--                <div class="dropdown profile ml-auto" id="navbar-profile">--}}
        {{--                    <a   class="ml-auto dropdown-toggle" id="navbar-profile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
        {{--                        <img src="/img/avatar.png" alt="">--}}
        {{--                        <spam> {{ Auth::user()->name }}</spam>--}}
        {{--                    </a>--}}
        {{--                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-profile">--}}
        {{--                        <a class="dropdown-item" href="#">Action</a>--}}
        {{--                        <a class="dropdown-item" href="#">Another action</a>--}}
        {{--                        <a class="dropdown-item" href="#">Something else here</a>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                        {{ __('Sair') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
