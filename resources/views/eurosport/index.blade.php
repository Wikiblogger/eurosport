<!DOCTYPE html>
<html lang="en">
<head>
	<title> Eurosport </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap/css/bootstrap.css')}}">
</head>
<body>
	@include('eurosport.headerfirst')
	@include('eurosport.header')
@yield('content')
<div id="page">
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Welcome to Eurosport </a></h2>
				<div class="entry">
					<p><a href="#"><img src="{{asset('photos/1.png')}}" width="600" height="170" alt="" /></a></p>
					Sport is very important in our life. The general belief is that a person who goes in for sports can’t be weak and ill. Physically inactive people get old earlier that those, who find time for sport activity. And of course good health is better than good medicine.People all over the world are fond of sports and games. In our country sport is being widely popularized as well. The most popular kinds of sport are football, volleyball, basketball, tennis, figure-skating, aerobics, ping-pong and swimming. A lot of people are fond of jogging. In schools and colleges sport is a compulsory subject. Many young people attend sport sections. Some of them dream to become professional sportsmen.</p>
					<p class="links"><a href="#" class="more">Read More</a><a href="#" title="b0x" class="comments">Comments</a></p>
				</div>
			</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<h2>Categories</h2>
					<ul>
						<li><a href="{{url('/today&new')}}">Today news</a></li>
						<li><a href="#">Today games</a></li>
						<li><a href="#">Football history</a></li>
						<li><a href="#">A new type of wrestling</a></li>
						<li><a href="#">Bolebol girls group</a></li>
						<li><a href="#">Chess winner</a></li>
						<li><a href="#">swimming competition is scheduled 2020</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>

<!-- end #page -->
	<div id="featured-content">
		<div id="column1">
			<h2>Volleyball </h2>
			<p><img src="{{asset('photos/2.png')}}" width="300" height="150" alt="" /></p>
			<p>Volleyball is a sport, a team sport game, during which two teams compete on a special platform, divided by a net, trying to direct the ball to the opponent’s side so that it lands on the opponent’s court , or the player of the defending team makes a mistake .</p>
			<p class="button"><a href="#">Read More</a></p>
		</div>
		<div id="column2">
			<h2>Spanish El Clasico</h2>
			<p><img src="{{asset('photos/3.png')}}" width="300" height="150" alt="" /></p>
			<p>In the last match, Examples Kike Setena squad defeated the Eibar with a score of 5: 0, Lionel Messi scored poker. A round earlier, “Barca” prevailed over “Getafe” - 2: 1. With 55 points, the Catalans are the first, ahead of the upcoming opponent by two points.</p>
			<p class="button"><a href="#">Read More</a></p>
		</div>

		<div id="column3">
			<h2> Khabib Nurmagomed </h2>
			<p><img src="{{asset('photos/4.png')}}" width="300" height="150" alt="" /></p>
			<p>Recall that because of the coronavirus pandemic, Khabib Nurmagomedov was still unable to meet with Tony Ferguson at the UFC 249 tournament, which was scheduled for April 18th. Catalans are the first, ahead of the upcoming opponent by two points.</p>
			<p class="button"><a href="#">Read More</a></p>
		</div>
	</div>
</div>
    <br>
    @include('eurosport.footer')
<!-- end #footer --><script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
