<!DOCTYPE html>
<html lang="en">
<head>
	<title> Eurosport </title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{asset('css/headerft.css')}}">
</head>
<body>

<header style="background-color: #262626";>
	<div class="top-navigation" id="navigation">
		<div class="stickynavbar" >
			<li><a href="{{url('/')}}" class="logoname"><b>EUROSPORT.RU</b></a></li>
			<li><a href="#">Tv program</a></li>
			<li><a href="#">News</a></li>
			<li><a href="#">Forecasts for Sport</a></li>
			<li><a href="/contact-us">Contact</a></li>
			<li><a href="/products">Video</a></li>
			<li><a href="/about-us">About</a></li>
			<li>&nbsp; &nbsp;
				 <input  class="form-controll" type="search" placeholder="Search" aria-label="Search">
    			 <button  class="btn btn-outline-success " style="margin-bottom: 5px;" type="submit">Search</button>
			</li>
		</div>

        <div class="action-buttons"> @guest
                <a class="button-face donate-link" id="id01"  href="{{ route('login') }}"
                   onclick="document.getElementById('id01').style.display=''">{{ __('Login') }}</a>

                @if (Route::has('register'))
                    <a class="button-face submit-link"  href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
        </div>
    </div>
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" style="margin: 15px; border-radius: 5px;" class="nav-link dropdown-toggle donate-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('password.change')}}" >Change password</a>

                <a class="dropdown-item " href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</header>

<script>
var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>




