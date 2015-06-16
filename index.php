<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Le Foot.fr, football rien que du football</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/fr_main.css">
</head>
<body class="foot-fr">

	<div class="container">
		<?php include "header.php";?>
		<div class="row main">
		  <div class="left-side col-md-8"><!--start left side-->
		  	<?php include "carousel-home.php";?>
		  	<?php include "next-matches.php";?>
	  		<?php include "carousel-news.php";?>
		  	<?php include "carousel-videos.php";?>
			<?php include "comments-block.php";?>
		</div><!--end left side-->

		 	<div class="right-side col-md-4"><!--start right side-->
				<ul class="nav nav-tabs" id="myTab">
					<li class="active"><a data-toggle="tab" href="#live-comment">Live Comentry</a></li>
					<li><a data-toggle="tab" href="#results">Results</a></li>
				</ul>
			    <div class="tab-content">
			    	<div class="tab-pane active" id="live-comment">
						<div class="tab-row">
							<p class="comment-name">
								<span>19h45 C1</span>
								<span>Manchester City - FC Barcelone</span>
							</p>
							<p class="comment-info">Some bla bla some bla bla, Some bla bla some bla bla, Some bla bla some bla bla, Some bla bla some bla bla</p>
						</div>
						<div class="tab-row">
							<p class="comment-name">
								<span>19h45 C1</span>
								<span>Bayer Leverkusen - PSG</span>
							</p>
							<p class="comment-info">Some bla bla some bla bla, Some bla bla some bla bla, Some bla bla some bla bla, Some bla bla some bla bla</p>
						</div>
						<div class="tab-row">
							<p class="comment-name">
								<span>19h25 Pologne</span>
								<span></span>
							</p>
							<p class="comment-info">Some bla bla some bla bla, Some bla bla some bla bla, Some bla bla some bla bla, Some bla bla some bla bla</p>
						</div>
						<div class="tab-row">
							<p class="comment-name">
								<span>19h20 l1</span>
								<span>PSG</span>
							</p>
							<p class="comment-info">Some bla bla some bla bla, Some bla bla some bla bla, Some bla bla some bla bla, Some bla bla some bla bla</p>
						</div>
						<div class="tab-row">
							<p class="comment-name">
								<span>19h10 Angleterre</span>
								<span></span>
							</p>
							<p class="comment-info">Some bla bla some bla bla, Some bla bla some bla bla, Some bla bla some bla bla, Some bla bla some bla bla</p>
						</div>
						<div class="tab-row">
							<p class="comment-name">
								<span>19h45 C1</span>
								<span>Manchester City - FC Barcelone</span>
							</p>
							<p class="comment-info">Some bla bla some bla bla, Some bla bla some bla bla, Some bla bla some bla bla, Some bla bla some bla bla</p>
						</div>
			    	</div>
			    	<div class="tab-pane" id="results">
			    		<div class="results-row">
			    			<span class="team1">Arsenal</span>
			    			<span class="score">3 - 2</span>
			    			<span class="team2">Tottenham</span>
			    		</div>
			    		<div class="results-row">
			    			<span class="team1">Southampton</span>
			    			<span class="score">3 - 2</span>
			    			<span class="team2">Sheff Utd</span>
			    		</div>
			    		<div class="results-row">
			    			<span class="team1">Chelsea</span>
			    			<span class="score">3 - 2</span>
			    			<span class="team2">Derby</span>
			    		</div>
			    		<div class="results-row">
			    			<span class="team1">Liverpool</span>
			    			<span class="score">3 - 2</span>
			    			<span class="team2">Crystal Palace</span>
			    		</div>
			    		<div class="results-row">
			    			<span class="team1">Sunderland</span>
			    			<span class="score">3 - 2</span>
			    			<span class="team2">Newcastle</span>
			    		</div>
			    		<div class="results-row">
			    			<span class="team1">Chelsea</span>
			    			<span class="score">3 - 2</span>
			    			<span class="team2">Derby</span>
			    		</div>
			    		<div class="results-row">
			    			<span class="team1">Liverpool</span>
			    			<span class="score">3 - 2</span>
			    			<span class="team2">Crystal Palace</span>
			    		</div>
			    		<div class="results-row">
			    			<span class="team1">Sunderland</span>
			    			<span class="score">3 - 2</span>
			    			<span class="team2">Newcastle</span>
			    		</div>
			    		<div class="results-row">
			    			<span class="team1">Chelsea</span>
			    			<span class="score">3 - 2</span>
			    			<span class="team2">Derby</span>
			    		</div>
			    		<div class="results-row">
			    			<span class="team1">Liverpool</span>
			    			<span class="score">3 - 2</span>
			    			<span class="team2">Crystal Palace</span>
			    		</div>
			    		<div class="results-row">
			    			<span class="team1">Sunderland</span>
			    			<span class="score">3 - 2</span>
			    			<span class="team2">Newcastle</span>
			    		</div>
			    	</div>
			    </div>
			    <div class="row heading">
					<div class="col-md-12 ">
						<h1>Calendar</h1>
					</div>
				</div>
				<div class="row">
					<table class="table matchs">
						<tbody>
							<tr>
								<td class="c-team1">PSG</td>
								<td class="c-versus">vs</td>
								<td class="c-team2">Newcastle</td>
								<td class="c-date">12.12.2014</td>
							</tr>
							<tr>
								<td class="c-team1">PSG</td>
								<td class="c-versus">vs</td>
								<td class="c-team2">Newcastle</td>
								<td class="c-date">12.12.2014</td>
							</tr>
							<tr>
								<td class="c-team1">PSG</td>
								<td class="c-versus">vs</td>
								<td class="c-team2">Newcastle</td>
								<td class="c-date">12.12.2014</td>
							</tr>
							<tr>
								<td class="c-team1">PSG</td>
								<td class="c-versus">vs</td>
								<td class="c-team2">Newcastle</td>
								<td class="c-date">12.12.2014</td>
							</tr>
							<tr>
								<td class="c-team1">PSG</td>
								<td class="c-versus">vs</td>
								<td class="c-team2">Newcastle</td>
								<td class="c-date">12.12.2014</td>
							</tr>
							<tr>
								<td class="c-team1">PSG</td>
								<td class="c-versus">vs</td>
								<td class="c-team2">Newcastle</td>
								<td class="c-date">12.12.2014</td>
							</tr>
							<tr>
								<td class="c-team1">PSG</td>
								<td class="c-versus">vs</td>
								<td class="c-team2">Newcastle</td>
								<td class="c-date">12.12.2014</td>
							</tr>
							<tr>
								<td class="c-team1">PSG</td>
								<td class="c-versus">vs</td>
								<td class="c-team2">Newcastle</td>
								<td class="c-date">12.12.2014</td>
							</tr>
							<tr>
								<td class="c-team1">PSG</td>
								<td class="c-versus">vs</td>
								<td class="c-team2">Newcastle</td>
								<td class="c-date">12.12.2014</td>
							</tr>
							<tr>
								<td class="c-team1">PSG</td>
								<td class="c-versus">vs</td>
								<td class="c-team2">Newcastle</td>
								<td class="c-date">12.12.2014</td>
							</tr>
							<tr>
								<td class="c-team1">PSG</td>
								<td class="c-versus">vs</td>
								<td class="c-team2">Newcastle</td>
								<td class="c-date">12.12.2014</td>
							</tr>
						</tbody>
					</table>
		    	</div>
			    <div class="row heading">
					<div class="col-md-12 ">
						<h1>League Table</h1>
					</div>
				</div>
				<div class="row league-table">
					<div class="col-md-12 ">
						<p>Show me:
							<select>
								<option>Premier League</option>
								<option>Championship</option>
								<option>League One</option>
								<option>League Two</option>
								<option>Ligue 1</option>
								<option>Ligue 2</option>
								<option>Coupe de la Ligue</option>
								<option>Troph&eacute;e des Champions</option>
								<option>Serie A</option>
								<option>Serie B</option>
								<option>Coppa Italia</option>
								<option>Super Cup</option>
								<option>Bundesliga</option>
								<option>2nd Bundesliga</option>
								<option>DFB Cup</option>
								<option>Super Cup</option>
							</select>
						</p>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th data-toggle="tooltip" title="Position">Pos</th>
								<th data-toggle="tooltip" title="Team">Team</th>
								<th data-toggle="tooltip" title="Played">P</th>
								<th data-toggle="tooltip" title="Goal Difference">GD</th>
								<th data-toggle="tooltip" title="Points">Pts</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="position">
									<span class="position-number">1</span>
									<span class="no-movement"></span>
								</td>
								<td class="team"><a href="#">Liverpool</a></td>
								<td class="played">16</td>
								<td class="goal-difference">23</td>
								<td class="points">39</td>
							</tr>
							<tr>
								<td class="position">
									<span class="position-number">2</span>
									<span class="no-movement"></span>
								</td>
								<td class="team"><a href="#">Man United</a></td>
								<td class="played">16</td>
								<td class="goal-difference">23</td>
								<td class="points">39</td>
							</tr>
							<tr>
								<td class="position">
									<span class="position-number">3</span>
									<span class="move-up"></span>
								</td>
								<td class="team"><a href="#">Arsenal</a></td>
								<td class="played">16</td>
								<td class="goal-difference">23</td>
								<td class="points">39</td>
							</tr>
							<tr>
								<td class="position">
									<span class="position-number">4</span>
									<span class="move-up"></span>
								</td>
								<td class="team"><a href="#">Chelsea</a></td>
								<td class="played">16</td>
								<td class="goal-difference">23</td>
								<td class="points">39</td>
							</tr>
							<tr>
								<td class="position">
									<span class="position-number">5</span>
									<span class="move-down"></span>
								</td>
								<td class="team"><a href="#">Man City</a></td>
								<td class="played">16</td>
								<td class="goal-difference">23</td>
								<td class="points">39</td>
							</tr>
							<tr>
								<td class="position">
									<span class="position-number">6</span>
									<span class="no-movement"></span>
								</td>
								<td class="team"><a href="#">Newcastle</a></td>
								<td class="played">16</td>
								<td class="goal-difference">23</td>
								<td class="points">39</td>
							</tr>
							<tr>
								<td class="position">
									<span class="position-number">7</span>
									<span class="no-movement"></span>
								</td>
								<td class="team"><a href="#">Liverpool</a></td>
								<td class="played">16</td>
								<td class="goal-difference">23</td>
								<td class="points">39</td>
							</tr>
							<tr>
								<td class="position">
									<span class="position-number">8</span>
									<span class="no-movement"></span>
								</td>
								<td class="team"><a href="#">Man United</a></td>
								<td class="played">16</td>
								<td class="goal-difference">23</td>
								<td class="points">39</td>
							</tr>
							<tr>
								<td class="position">
									<span class="position-number">9</span>
									<span class="move-up"></span>
								</td>
								<td class="team"><a href="#">Arsenal</a></td>
								<td class="played">16</td>
								<td class="goal-difference">23</td>
								<td class="points">39</td>
							</tr>
							<tr>
								<td class="position">
									<span class="position-number">10</span>
									<span class="move-up"></span>
								</td>
								<td class="team"><a href="#">Chelsea</a></td>
								<td class="played">16</td>
								<td class="goal-difference">23</td>
								<td class="points">39</td>
							</tr>
							<tr>
								<td class="position">
									<span class="position-number">11</span>
									<span class="move-down"></span>
								</td>
								<td class="team"><a href="#">Man City</a></td>
								<td class="played">16</td>
								<td class="goal-difference">23</td>
								<td class="points">39</td>
							</tr>
							<tr>
								<td class="position">
									<span class="position-number">12</span>
									<span class="no-movement"></span>
								</td>
								<td class="team"><a href="#">Newcastle</a></td>
								<td class="played">16</td>
								<td class="goal-difference">23</td>
								<td class="points">39</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="row ">
					<button class="btn btn-foot1 btn-sm">
						<i class="fa fa-expand"></i>
						<span>View full table</span>
					</button>
				</div>
				<img alt="some image" src="css/images/foot_fr/body/ads_4.jpg">
			</div><!--end right side-->
		</div>
	</div>
	<div style="height:60px;">
	</div>
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/fr_scripts.js"></script>
</body>
</html>