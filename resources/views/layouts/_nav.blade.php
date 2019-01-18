<header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">
    <a class="navbar-brand mr-0 mr-md-5" href="/" >
        <img src="{{asset('img/logo.png')}}" alt="">
    </a>
    @guest
    @else

    <div class="navbar-nav-scroll">

        <ul class="navbar-nav bd-navbar-nav flex-row">
            <li class="nav-item">
                @if(Auth::user()->role->id == 1)
                <a class="nav-link {!! $section == "dashboard" ? "active" : "" !!}" href="/dashboard">Dashboard</a>
                @endif
            </li>
            <li class="nav-item">
                <a class="nav-link {!! $section == "home" ? "active" : "" !!}" href="/">Preguntas</a>
            </li>
        </ul>
    </div>

    <ul class="navbar-nav flex-row ml-md-auto d-md-flex">
        <li class="nav-item">

            <a class="nav-link p-2" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>

    @endguest
</header>