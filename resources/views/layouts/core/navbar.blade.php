<nav class="navbar navbar-expand-lg navbar fixed-top  navbar-light bg-light">
    <a class="navbar-brand" href="#Welcome">
        <img src="{{asset('images/logo.png')}}" width="50" height="50" class="d-inline-block" alt=""> Italian Restaurant
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ml-auto">
            {{--			      		<li class="nav-item">--}}
                {{--			        		<a class="nav-link" href="#Welcome">Welcome {{auth()->user()->name}}</a>--}}
                {{--			      		</li>--}}
            <li class="nav-item">
                <a class="nav-link" href="{{route('home.index')}}">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#List">List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('auth.formLogin')}}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('auth.formRegister')}}">Register</a>
            </li>
{{--            <li class="nav-item">--}}
{{--                <a href="#" class="language" rel="it-IT"><img src="images/italy.ico" class="flag" alt="Italiano"></a>--}}
{{--                <a href="index.blade.php" class="language" rel="en-En"><img src="images/english.ico" class="flag" alt="English"></a>--}}
{{--            </li>--}}
        </ul>
    </div>
</nav>
