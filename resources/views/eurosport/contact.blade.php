<!DOCTYPE html>
<html lang="en">
<head>
    @section('title')
        Contact
    @endsection
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap/css/bootstrap.css')}}">
</head>
<body>
@include('eurosport.headerfirst')
@include('eurosport.header')
<br><br><br><br>
<form class="container" action="#">
    <div class="form-row container-fluid" >
        <div class="form-group col-md-6">
            <label for="lastname">Lastname</label>
            <input type="text" class="form-control" id="lastname">
        </div>

        <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name">
        </div>

        <div class="form-group col-md-6">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>

        <div class="form-group col-md-6">
            <label for="phonenumber">Phonenumber</label>
            <input type="text" class="form-control" id="phonenumber">
        </div>
    </div>

    <div class="form-row" style="max-width: 97.5%; margin-left: 9px;">
        <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="us">USA</option>
                <option value="russian">Russian</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
    </div>
    <div class="form-group" style="margin-left: 15px;">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
        </div>
    </div>
    <button style="margin-left: 15px;" type="submit" class="btn btn-primary">Sign in</button>
</form>
<br><br><br><br>
@include('eurosport.footer')
<!-- end #footer -->

<!-- end #footer --><script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
