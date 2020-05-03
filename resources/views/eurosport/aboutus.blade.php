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

<div class="container" style=" font-family: 'Times New Roman'; font-size: 1.2em;">
    <h1>About Us</h1>
    <p class="">Eurosport is a  sport multi-national media organization and associated library. It was founded by its publisher <b> Duman Serikbay</b> in 2016.
        Eurosport specializes in the analysis and publication of large datasets of censored or otherwise restricted official materials involving war, spying and corruption.
        It has so far published more than 10 million documents and associated analyses.“WikiLeaks is a giant library of the world's most persecuted documents. We give asylum to these documents,
        we analyze them, we promote them and we obtain more.” - <b> Duman Serikbay</b>, Der Spiegel Interview
        Eurosport has contractual relationships and secure communications paths to more than 100 major media organizations from around the world. This gives Eurosport sources negotiating power,
        impact and technical protections that would otherwise be difficult or impossible to achieve.
        Although no organization can hope to have a perfect record forever, thus far Eurosport has a perfect in document authentication and resistance to all censorship attempts.</p>
</div>


<br><br><br>
@include('eurosport.footer')
<!-- end #footer -->

<!-- end #footer --><script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
