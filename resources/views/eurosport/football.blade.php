

<!DOCTYPE html>
<html lang="en">
<head>
    @section('title')
        Contact
    @endsection
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap/css/bootstrap.css')}}">

</head>
<body>
@include('eurosport.headerfirst')
@include('eurosport.header')
<br><br>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav mr-auto" >
            <li class="nav-item dropown">
                <a style="color: black; font-weight: bold;" class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Leage
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Anglean Premer Leage</a>
                    <a class="dropdown-item" href="#">Bundes leage</a>
                    <a class="dropdown-item" href="#">La leage</a>
                    <a class="dropdown-item" href="#">Seria 1</a>
                    <a class="dropdown-item" href="#">KPL</a>
                </div>
            </li>

            <li class="nav-item">
                <a  class="nav-link" href="#" style=" margin-left: 10px; color: black"><b>CHEAMPION LEAGE</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="margin-left: 2em; color: black"><b>EUROPE LEAGE</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/world" style="margin-left: 2em; color: black"><b>WORLD</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="margin-left: 2em; color: black"><b>ASIAN</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="margin-left: 2em; color: black"><b>EUROPA</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="margin-left: 2em; color: black"><b>AFRICA</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="margin-left: 2em; color: black"><b>NORTH AMERICA</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="margin-left: 2em; color: black"><b>SOUTH AMERICA</b></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" style="margin-left: 2em; color: black"><b>AUSTRALIA</b></a>
            </li>
        </ul>
    </div>
</nav>
<br>
<img src="{{asset('country/fifaa.jpg')}}" alt="" style="width: 100%;">



@include('eurosport.footer')
<!-- end #footer -->

<!-- end #footer --><script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
