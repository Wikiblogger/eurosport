<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        @yield('title')
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>    <h3 style="text-align: center; padding-top: 2%; font-family: upper; margin-bottom: 0px; background: #e5332a;" >ADMIN - PANEL</h3>

        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">

               {{-- <div class="sidebar-wrapper"   id="sidebar-wrapper">--}}
                    <ul class="nav" style="font-size: 20px;">
                    <!--how to set active menu link ternary operator class="{{ 'role-register' == request()->path() ? 'active' : ''}}" -->
                        <li style="margin-right: 2%;" class="{{ 'dashboard' == request()->path() ? 'active' : ''}}">
                            <a href="/dashboard">
                                <i class="now-ui-icons design_app"></i>
                                <p style="color: #FFFFFF;">Dashboard</p>
                            </a>
                        </li>
                        <li class="{{ 'role-register' == request()->path() ? 'active' : ''}}">
                            <a href="/role-register"> <!--edit here for user profile -->
                                <i class="now-ui-icons users_single-02"></i>
                                <p style="color: #FFFFFF;">User Profile</p>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="collapse navbar-collapse justify-content-end" style="color: #000000;" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" style="color: #ffff;"  class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
        </nav>
        <!-- End Navbar -->

                        <div class="content">
                              @yield('content')
                        </div><br><br>
    <footer class="footer">
            <div class="container-fluid" style="font-size: 20px;">
                <nav>
                    <ul class="row">
                        <li style="list-style-type: none; margin-right: 5%;">
                            <a  style="color: #1b1e21;" target="_blank" href="https://wikileaks.org/What-is-WikiLeaks.html">
                                About Us
                            </a>
                        </li>
                        <li style="list-style-type: none">
                            <a style="color: #1b1e21;" target="_blank" href="https://wikileaks.org/+-Intelligence-+.html">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>
        </footer>



</body>
<!--   Core JS Files   -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</html>
