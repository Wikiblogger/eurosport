<!DOCTYPE html>
<html lang="en">
<head>
	<title> Eurosport </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap/css/bootstrap.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

            <style>
                  .icons li {
                    background: none repeat scroll 0 0 #fff;
                    height: 9px;
                    width: 9px;
                    border-radius:50%;
                    pointer-events: none;
                }

                .btn-right {
                    right: 0.3em;
                }

                .btn-left, .btn-right {
                    position: absolute;
                    top: 0.23em;
                }




                .dropdown {
                    position: absolute;
                    display: inline-block;
                    right: 0.4em;
                }

                .dropdown-content {
                	color: black;
                    display: none;
                    position: relative;
                    margin-top: 60px;
                    background-color: #fff;
                    min-width: 160px;
                    overflow: auto;
                    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                    z-index: 1;
                }

                .dropdown-content a {
                    color: black;
                    padding: 12px 16px;
                    text-decoration: none;
                    display: block;
                }

                .dropdown a:hover {background-color: #f1f1f1}

                .show {display:block;}

            </style>
            <script>
                function changeLanguage(language) {
                    var element = document.getElementById("url");
                    element.value = language;
                    element.innerHTML = language;
                }

                function showDropdown() {
                    document.getElementById("myDropdown").classList.toggle("show");
                }

                // Close the dropdown if the user clicks outside of it
                window.onclick = function(event) {
                    if (!event.target.matches('.dropbtn')) {
                        var dropdowns = document.getElementsByClassName("dropdown-content");
                        var i;
                        for (i = 0; i < dropdowns.length; i++) {
                            var openDropdown = dropdowns[i];
                            if (openDropdown.classList.contains('show')) {
                                openDropdown.classList.remove('show');
                            }
                        }
                    }
                }
            </script>
</head>
<body>
<header >
	 <div id="header-wrapper" >
		<div id="header">

			<div id="menu">
				<ul>
					<li class="current_page_item"><a href="{{url('/')}}">Home<span class="sr-only">(current)</span></a></li>
                    <li><a href="{{url('/football')}}">Football</a></li>
					<li><a href="{{url('/tennis')}}">Tennis</a></li>
					<li><a href="{{url('/mma')}}">MMA</a></li>
					<li><a href="{{url('/box')}}">Box</a></li>
					<li><a href="{{url('/basketball')}}">Basketball</a></li>
					<li><a href="{{url('/boleball')}}">Boleball</a></li>
					<li><a href="{{url('/hockey')}}">Hockey</a></li>
					<li><a href="{{url('/biathlon')}}">Biathlon</a></li>
					<li><a href="{{url('/auto')}}">Auto</a></li>
					<li><a href="{{url('/wrestling')}}">Wrestling</a></li>
					<li><a href="{{url('/skiing')}}">Skiing</a></li>
					<li><a href="{{url('/gymnastic')}}">Gymnastic</a></li>
					<li><a href="{{url('/cybersport')}}">Cybersport</a></li>
					<li>
						<div class="dropdown">
                    <ul class="dropbtn icons btn-right showLeft" onclick="showDropdown()">
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
	                    <div id="myDropdown" class="dropdown-content">
	                     <table style="width:100%;">

  <tr>
    <td>  <a href="#home" style="color: black";>Poker</a></td>
    <td>  <a href="#home" style="color: black";>Modern Pentathlon</a></td>
    <td>  <a href="#home" style="color: black";>Shooting</a></td>
  </tr>
  <tr>
    <td>  <a href="#home" style="color: black";>Cycling</a></td>
    <td>  <a href="#home" style="color: black";>Handball</a></td>
    <td>  <a href="#home" style="color: black";>Fencing</a></td>
  </tr>
      <tr>
    <td>  <a href="#home" style="color: black";>Hockey with a ball</a></td>
    <td>  <a href="#home" style="color: black";>Chess</a></td>
    <td>  <a href="#home" style="color: black";>Golf</a></td>
  </tr>
  <tr>
    <td>  <a href="#home" style="color: black";>Mini football</a></td>
    <td>  <a href="#home" style="color: black";>Horseback Riding</a></td>
    <td>  <a href="#home" style="color: black";>Beach Soccer</a></td>
    <tr>
    <td>  <a href="#home" style="color: black";>Hockey with a ball</a></td>
    <td>  <a href="#home" style="color: black";>Chess</a></td>
    <td>  <a href="#home" style="color: black";>Extreme views</a></td>
  </tr>
  <tr>
    <td>  <a href="#home" style="color: black";>UFC</a></td>
    <td>  <a href="#home" style="color: black";>Promotional Codes</a></td>
    <td>  <a href="#home" style="color: black";>Finance</a></td>
  </tr>

</table>
	                    </div>
               			</div>
            		</li>
				</ul>
			</div>
		</div>
	</div>
</header>
</body>
</html>

