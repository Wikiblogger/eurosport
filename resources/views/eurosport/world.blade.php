
    <!DOCTYPE html>
<html lang="en">
<head>
    @section('title')
        About Us
    @endsection
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap/css/bootstrap.css')}}">
</head>
<body>
@include('eurosport.headerfirst')
@include('eurosport.header')
@yield('football')
<br><br>

<table class="container" style="margin-right: 50px">
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th><button class="btn " style="border-color: black;">
                <img src="{{asset('country/arabia.png')}}"  style="max-width: 5em; border-radius: 2px;" alt="arabia">
                <a href="#" style="color: black;"><br><b>Arabya</b></a></button></th>

        <th><button class="btn " style="border-color: black;">
                <img src="{{asset('country/canada.png')}}"  style="max-width: 5em; border-radius: 2px;" alt="canada">
                <a href="#" style="color: black;"><br><b>Canada</b></a></button></th>

        <th><button class="btn " style="border-color: black;">
                <img src="{{asset('country/irak.png')}}"  style="max-width: 5em; border-radius: 2px;" alt="irak">
                <a href="#" style="color: black;"><br><b>Irak</b></a></button></th>

        <th><button class="btn " style="border-color: black;">
                <img src="{{asset('country/italy.png')}}"  style="max-width: 5em; border-radius: 2px;" alt="italy">
                <a href="#" style="color: black;"><br><b>Italy</b></a></button></th>

        <th><button class="btn " style="border-color: black;">
                <img src="{{asset('country/portu.png')}}"  style="max-width: 5em; border-radius: 2px;" alt="portu">
                <a href="#" style="color: black;"><br><b>Portugalya</b></a></button></th>
        <th><button class="btn " style="border-color: black;">
                <img src="{{asset('country/germany.png')}}"  style="max-width: 5em; border-radius: 2px;" alt="germany">
                <a href="#" style="color: black;"><br><b>Germany</b></a></button></th>
    </tr>

    <tr>
        <th><button class="btn " style="border-color: black;">
                <img src="{{asset('country/uae.png')}}"  style="max-width: 5em; border-radius: 2px;" alt="uae">
                <a href="#" style="color: black;"><br><b>UAE</b></a></button></th>

        <th><button class="btn " style="border-color: black;">
                <img src="{{asset('country/china.png')}}"  style="max-width: 5em; border-radius: 2px;" alt="china">
                <a href="#" style="color: black;"><br><b>China</b></a></button></th>

        <th><button class="btn " style="border-color: black;">
                <img src="{{asset('country/indian.png')}}"  style="max-width: 5em; border-radius: 2px;" alt="indian">
                <a href="#" style="color: black;"><br><b>Indian</b></a></button></th>

        <th><button class="btn " style="border-color: black;">
                <img src="{{asset('country/brasilia.png')}}"  style="max-width: 5em; border-radius: 2px;" alt="brasilia">
                <a href="#" style="color: black;"><br><b>Brasilya</b></a></button></th>

        <th><button class="btn " style="border-color: black;">
                <img src="{{asset('country/kazakhstan.png')}}"  style="max-width: 5em; border-radius: 2px;" alt="kazahstan">
                <a href="#" style="color: black;"><br><b>Kazahstan</b></a></button></th>
        <th><button class="btn " style="border-color: black;">
                <img src="{{asset('country/urugvay.png')}}"  style="max-width: 5em; border-radius: 2px;" alt="urugvay">
                <a href="#" style="color: black;"><br><b>Urugvay</b></a></button></th>
    </tr>


    <tr>
        <th><button class="btn " style="border-color: black;">
                <img src="{{asset('country/arg.png')}}"  style="max-width: 5em; border-radius: 2px;" alt="arg">
                <a href="#" style="color: black;"><br><b>Argentina</b></a></button></th>

        <th><button class="btn " style="border-color: black;">
                <img src="{{asset('country/bolivia.png')}}"  style="max-width: 5em; border-radius: 2px;" alt="bolivia">
                <a href="#" style="color: black;"><br><b>Bolivya</b></a></button></th>

        <th><button class="btn " style="border-color: black;">
                <img src="{{asset('country/indian.png')}}"  style="max-width: 5em; border-radius: 2px;" alt="indian">
                <a href="#" style="color: black;"><br><b>Indian</b></a></button></th>

        <th><button class="btn " style="border-color: black;">
                <img src="{{asset('country/turkey.png')}}"  style="max-width: 5em; border-radius: 2px;" alt="turkey">
                <a href="#" style="color: black;"><br><b>Turkey</b></a></button></th>

        <th><button class="btn " style="border-color: black;">
                <img src="{{asset('country/spain.png')}}"  style="max-width: 5em; border-radius: 2px;" alt="spain">
                <a href="#" style="color: black;"><br><b>Spain</b></a></button></th>
        <th><button class="btn " style="border-color: black;">
                <img src="{{asset('country/russian.png')}}"  style="max-width: 5em; border-radius: 2px;" alt="russian">
                <a href="#" style="color: black;"><br><b>Russian</b></a></button></th>
    </tr>

</table>


<br><br>
@include('eurosport.footer')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- end #footer -->
</body>
</html>
