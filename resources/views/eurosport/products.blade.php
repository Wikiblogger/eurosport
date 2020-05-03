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
<br><br><br>

<table style="margin-left: 20px;" class="container-fluid">
    <tr>
        <th>Football</th>
        <th>MMA</th>
        <th>Tennis</th>
    </tr>
    <tr>
        <td>
            <video width="400" controls>
                <source src="/videos/messi.mp4" type="video/mp4">
                <source src="/videos/messi.ogg" type="video/ogg">
                Your browser does not support HTML video.
            </video>
            <p>Messi</p>
        </td>
        <td>
            <video width="400" controls>
                <source src="/videos/mma.mp4" type="video/mp4">
                <source src="/videos/mma.ogg" type="video/ogg">
                Your browser does not support HTML video.
            </video>
            <p>MMA</p>
        </td>
        <td>
            <video width="400" controls>
                <source src="/videos/tennis.mp4" type="video/mp4">
                <source src="/videos/tennis.ogg" type="video/ogg">
                Your browser does not support HTML video.
            </video>
            <p>Tennis</p>
        </td>
    <tr>
        <th>Basketball</th>
        <th>Box</th>
        <th>Tennis</th>
    </tr>
    <tr>
        <td>
            <video width="400" controls>
                <source src="/videos/basketball.mp4" type="video/mp4">
                <source src="/videos/basketball.ogg" type="video/ogg">
                Your browser does not support HTML video.
            </video>
            <p>Basketball</p>
        </td>
        <td>
            <video width="400" controls>
                <source src="/videos/box.mp4" type="video/mp4">
                <source src="/videos/box.ogg" type="video/ogg">
                Your browser does not support HTML video.
            </video>
            <p>Box</p>
        </td>
        <td>
            <video width="400" controls>
                <source src="/videos/tennis.mp4" type="video/mp4">
                <source src="/videos/tennis.ogg" type="video/ogg">
                Your browser does not support HTML video.
            </video>
            <p>Tennis</p>
        </td>
    </tr>
</table>


<br><br><br>
@include('eurosport.footer')
<!-- end #footer -->
<!-- end #footer --><script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
