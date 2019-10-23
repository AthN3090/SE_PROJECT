<<<<<<< HEAD:index.php
<!doctype html>
<?php include('./php/server.php'); ?>
<html lang="en-us">

	<!-- Header of the page-->
	<head>
		<meta charset="utf-8">
		<meta author = "author" content = "Jesus,Ibrahima,Leland">
		<title>Game Galaxy</title>
		
		<link rel="stylesheet" href="css/site.css">
		<link rel="stylesheet" href="css/slider.css">
		<link rel="stylesheet" href="css/bump.css">
		<link rel="stylesheet" href="css/footer.css">
		
		<script type="text/javascript" src="js/scripts.js"></script>
	</head>

	
	<!-- Body of the page starts here-->
	<body id="body">
	<div class = "container">
	<!-- Top of the page that use the logo-->
		<div class = "top">
			
			<a><img src="img/logo/logo2.png"></a>
			
		</div>
		<!-- Navegation bar block-->
		<div class = "navbar">
			<nav>
				<ul class="cf">
				
					<li>
						<a class="dropdown" href="index.php">Home</a>
					</li>
					
					<li><a class="dropdown" href="#">Genre</a>
						<ul>
							<li><a href="page_adventure.php">Adventure</a></li>
							<li><a href="page_racing.php">Racing</a></li>
							<li><a href="page_shooter.php">Shooter</a></li>
							<li><a href="page_sports.php">Sports</a></li>
							<li><a href="page_rpg.php">RPG</a></li>
							<li><a href="page_others.php">Other</a></li>
						</ul>
					</li>
					
					<li><a class="dropdown" href="#">Games</a>
						<ul>
							<li><a href="page_featured_games.php">Featured Games</a></li>
							<li><a href="page_best_sellers.php">Best Bellers</a></li>
							<li><a href="page_on_sale.php">On Sale</a></li>
						</ul>
					</li>
					
						<li><a class="dropdown" href="news.php">News</a>
							<ul>
								<li><a href="news.php#nintendo1">Nintendo Switch</a></li>
								<li><a href="news.php#xboxone1">Xbox One</a></li>
								<li><a href="news.php#sony1">PlayStation</a></li>
								<li><a href="news.php#pc_gamer1">PC</a></li>
							</ul>
						</li>
					
						<li><a class="dropdown" href="#">About Us</a>
							<ul>
								<li><a href="page_aboutus.php#developers">Get to know us</a></li>
								<li><a href="page_aboutus.php">Game Galaxy Project</a></li>
							</ul>
						</li>
						
						<li><a class="dropdown" href="page_contactus.php">Contact us</a>
							<ul>
								<li><a href="page_contactus.php">Support</a></li>
							</ul>
						</li>
				
			</ul>
        </nav>
    </div>
		<!-- Slider of the top-->
		<div class = "slider">
			<figure>
				<div class="slide">
					<img src="img/slide/banner00.png">
				</div>
			
				<div class="slide">
					<img src="img/slide/banner01.png">
				</div>
			
				<div class="slide">
					<img src="img/slide/banner02.png">
				</div>
			
				<div class="slide">
					<img src="img/slide/banner03.png">
				</div>
			
				<div class="slide">
					<img src="img/slide/banner04.png">
				</div>
			</figure>
		</div>
		
		
		
	<!-- Frame of the main body starts here. -->	
	<div class = "frame">
		<!-- Partition of news-->
		<div class = "block0">
			<h4>News</h4>
					
					
						
						<div class = "news0">
							<div class="ele">
								<img src="img/news/news2.png">
							</div>
							<div class="ele">
								<div class ="news0info" >
									<a href="news.php#nintendo1">Double the battery life on your Nintendo Switch with this awesome accessory</a>
								</div>
							</div>
						</div>
						
						<div class = "news1">
							<div class="ele2">
								<img src="img/news/news3.png">
							</div>
							<div class="ele2">
								<div class = "news1info">
									<a href="news.php#nintendo2">Xenoblade Chronicles 2: How to Get Salty Soil</a>
								</div>
							</div>
						</div>
						
						<div class = "news1">
							<div class="ele2">
								<img src="img/news/news1.png">
							</div>
							<div class="ele2">
								<div class = "news1info">
									<a href="news.php#xboxone1">The best Xbox One games that are available right now</a>
								</div>
							</div>
						</div>
						
						<div class = "news1">
							<div class="ele2">
								<img src="img/news/news0.png">
							</div>
							<div class="ele2">
								<div class = "news1info">
									<a href="news.php#pc_gamer1">Save 20% off a PC Gamer or Maximum PC subscription in our 24-hour flash sale</a>
								</div>
							</div>
						</div>
							
							
		</div>
		
		<!-- Partition of hot deals -->
		<div class = "block1">
			<h4>Hotdeals</h4>
				
				
				
				<div class="slideshow-container">

				<div class="mySlides fade">
					<div class="numbertext">1 / 3</div>
					<img src="img/background/backg05.png" style="width:100%">
					<div class="text">BUY NOW: NEED FOR SPEED PAYBACK 20% OFF!!!</div>
				</div>

				<div class="mySlides fade">
				  <div class="numbertext">2 / 3</div>
				  <img src="img/background/backg06.png" style="width:100%">
				  <div class="text">BUY NOW: NIOH 30% OFF!!!</div>
				</div>

				<div class="mySlides fade">
				  <div class="numbertext">3 / 3</div>
				  <img src="img/background/backg07.png" style="width:100%">
				  <div class="text">BUY NOW: FINAL FANTASY XV 50% OFF!!!</div>
				</div>

				</div>
				<br>

				<div style="text-align:center">
				  <span class="dot"></span> 
				  <span class="dot"></span> 
				  <span class="dot"></span> 
				</div>
				
		<!-- JavaScript Function to make the hot deals slider work-->
				<script>var slideIndex = 0;showSlides();</script>
		</div>
		<div id="social_news_index">
						<a href="https://www.facebook.com/Games-Galaxy-1805648999468804/"><image src = "img/social/ico00.png" alt = "social0"></a>
						<a href="https://www.instagram.com/northamericanu/"><image src = "img/social/ico01.png" alt = "social0"></a>
						<a href="https://www.youtube.com/watch?v=_yF08r-49m0&feature=youtu.be"><image src = "img/social/ico02.png" alt = "social0"></a>
						<a href="https://twitter.com/NorthAmericanU"><image src = "img/social/ico03.png" alt = "social0"></a>
						<a href="https://www.twitch.tv/"><image src = "img/social/ico04.png" alt = "social0"></a>
						<a href="https://www.linkedin.com/"><image src = "img/social/ico05.png" alt = "social0"></a>
						</div>
		
		
		<!-- First banner that divides blocks. -->
		<div class = "bump0">
			
			<a href="page_featured_games.php"><img src="img/bump/bump_nier2.png"></a>
			
		</div>
		
		<!-- Feature games block-->
		<div class = "feat_games">
		
			
			
			<div id = "inner_frame">
				<tr>
					
					<div class="game_frame">
					<th><a href="page_featured_games.php#sm_odyssey"><img src = "img/games/game_adventure0.png" alt = "FEATURED_GAMES"</a></th>
					<p class="info_text">Super Mario Odyssey</p>
					<a href="page_featured_games.php#sm_odyssey" class="info_link">More info</a>
					</div>
					
					
					
					
					<div class="game_frame">
					<th><a href="page_featured_games.php#nioh"><img src = "img/games/game_rpg02.jpg" alt = "FEATURED_GAMES"</a></th>
					<p class="info_text">Nioh</p>
					<a href="page_featured_games.php#nioh" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_featured_games.php#swb2"><img src = "img/games/game_shooter0.png" alt = "FEATURED_GAMES"</a></th>
					<p class="info_text">Star Wars: Battlefront II</p>
					<a href="page_featured_games.php#swb2" class="info_link">More info</a>
					</div>
					
					
					<div class="game_frame">
					<th><a href="page_featured_games.php#shadow_of_war"><img src = "img/games/game_adventure04.png" alt = "FEATURED_GAMES"</a></th>
					<p class="info_text">Shadow of War</p>
					<a href="page_featured_games.php#shadow_of_war" class="info_link">More info</a>
					</div>
				</tr>
			
				<tr>
					<div class="game_frame">
					<th><a href="page_featured_games.php#ffxv"><img src = "img/games/game_rpg0.png" alt = "FEATURED_GAMES"</a></th>
					<p class="info_text">Final Fantasy XV</p>
					<a href="page_featured_games.php#ffxv" class="info_link">More info</a>
						</div>
						
					<div class="game_frame">
					<th><a href="page_featured_games.php#forza_horizon3"><img src = "img/games/game_racing01.png" alt = "FEATURED_GAMES"</a></th>
					<p class="info_text">Forza Horizon 3</p>
					<a href="page_featured_games.php#forza_horizon3" class="info_link">More info</a>
						</div>
						
					<div class="game_frame">
					<th><a href="page_featured_games.php#nfs_payback"><img src = "img/games/game_racing0.png" alt = "FEATURED_GAMES"</a></th>
					<p class="info_text">Need for Speed: Payback</p>
					<a href="page_featured_games.php#nfs_payback" class="info_link">More info</a>
						</div>
						
					<div class="game_frame">
					<th><a href="page_featured_games.php#origins"><img src = "img/games/game_adventure01.jpg" alt = "FEATURED_GAMES"</a></th>
					<p class="info_text">Assassin's Creed: Origins</p>
					<a href="page_featured_games.php#origins" class="info_link">More info</a>
						</div>
						
				</tr>
				<tr>
					
					<div class="game_frame">
					<th><a href="page_featured_games.php#TEW2"><img src = "img/games/game_other02.png" alt = "FEATURED_GAMES"</a></th>
					<p class="info_text">The Evil Within 2</p>
					<a href="page_featured_games.php#TEW2" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_featured_games.php#pes2018"><img src = "img/games/game_sports0.jpg" alt = "FEATURED_GAMES"</a></th>
					<p class="info_text">PES 2018</p>
					<a href="page_featured_games.php#pes2018" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_featured_games.php#gts"><img src = "img/games/game_racing03.png" alt = "FEATURED_GAMES"</a></th>
					<p class="info_text">Gran Turismo Sport</p>
					<a href="page_featured_games.php#gts" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_featured_games.php#codww2"><img src = "img/games/game_shooter02.jpg" alt = "FEATURED_GAMES"</a></th>
					<p class="info_text">Call of Duty: WWII</p>
					<a href="page_featured_games.php#codww2" class="info_link">More info</a>
					</div>
					
				</tr>
			</div>
			
			

		</div>
			
			<!-- Second banner that divides blocks -->
			<div class = "bump1">
				<a href="page_best_sellers.php"><img src="img/bump/bump02.png"></a>
			</div>
			
			
			<!-- Best Sellers block -->
			
			
			<div class = "best_sellers">
			
			
		
			<!-- <table> Table will make them smaller when decreasing page size -->
			<div id = "inner_frame">
				<tr>
					<div class="game_frame">
					<th><a href="page_best_sellers.php#codww2"><img src = "img/games/game_shooter02.jpg" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">Call of Duty: WWII</p>
					<a href="page_featured_games.php#codww2" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_best_sellers.php#gtav"><img src = "img/games/game_shooter03.png" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">Grand Theft Auto V</p>
					<a href="page_featured_games.php#gtav" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_best_sellers.php#swb2"><img src = "img/games/game_shooter0.png" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">Star Wars: Battlefront II</p>
					<a href="page_featured_games.php#swb2" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_best_sellers.php#wolf2"><img src = "img/games/game_shooter01.jpg" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">Wolfensten II</p>
					<a href="page_featured_games.php#wolf2" class="info_link">More info</a>
					</div>
				</tr>
				<tr>
					<div class="game_frame">
					<th><a href="page_best_sellers.php#pc2"><img src = "img/games/game_racing02.jpg" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">Project Cars 2</p>
					<a href="page_featured_games.php#pc2" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_best_sellers.php#pes2018"><img src = "img/games/game_sports0.jpg" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">PES 2018</p>
					<a href="page_featured_games.php#pes2018" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_best_sellers.php#TEW2"><img src = "img/games/game_other02.png" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">The Evil Within 2</p>
					<a href="page_featured_games.php#TEW2" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_best_sellers.php#shadow_of_war"><img src = "img/games/game_adventure04.png" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">Shadow of War</p>
					<a href="page_featured_games.php#shadow_of_war" class="info_link">More info</a>
					</div>
				</tr>
				<tr>
					<div class="game_frame">
					<th><a href="page_best_sellers.php#origins"><img src = "img/games/game_adventure01.jpg" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">Assassin's Creed: Origins</p>
					<a href="page_featured_games.php#origins" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_best_sellers.php#nfs_payback"><img src = "img/games/game_racing0.png" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">Need for Speed: Payback</p>
					<a href="page_featured_games.php#nfs_payback" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_best_sellers.php#gts"><img src = "img/games/game_racing03.png" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">Gran Turismo Sport</p>
					<a href="page_featured_games.php#gts" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_best_sellers.php#nier"><img src = "img/games/game_adventure02.png" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">Nier: Automata</p>
					<a href="page_featured_games.php#nier" class="info_link">More info</a>
					</div>
				</tr>
			</div>
			<!-- </table> -->
		
		</div>
		
		<!-- Third banner that divides blocks -->
		<div class = "bump2">
				<a href="page_on_sale.php"><img src="img/bump/bump01.png"></a>
		</div>
		
		<!-- ON SALE block-->
		<div class = "on_sale">

		<div id = "inner_frame">
			<tr>
				<div class="game_frame">
				<th><a href="page_on_sale.php#NOA"><img src = "img/games/game_other01.png" alt = "ON_SALE"</a></th>
				<p class="info_text">Nights of Azure</p>
				<a href="page_featured_games.php#NOA" class="info_link">More info</a>
				</div>
					
				<div class="game_frame">
				<th><a href="page_on_sale.php#blue_reflection"><img src = "img/games/game_rpg01.png" alt = "ON_SALE"</a></th>
				<p class="info_text">Blue Reflection</p>
					<a href="page_featured_games.php#blue_reflection" class="info_link">More info</a>
					</div>
				
				<div class="game_frame">
				<th><a href="page_on_sale.php#fatal_frame_v"><img src = "img/games/game_other0.png" alt = "ON_SALE"</a></th>
				<p class="info_text">Project Zero</p>
					<a href="page_featured_games.php#fatal_frame_v" class="info_link">More info</a>
					</div>
				
				<div class="game_frame">
				<th><a href="page_on_sale.php#nfl17"><img src = "img/games/game_sports01.jpg" alt = "ON_SALE"</a></th>
				<p class="info_text">NFL Madden 17</p>
					<a href="page_featured_games.php#nfl17" class="info_link">More info</a>
					</div>
			</tr>
			<tr>
				<div class="game_frame">
				<th><a href="page_on_sale.php#pdx"><img src = "img/games/game_other02.jpg" alt = "ON_SALE"</a></th>
				<p class="info_text">Project Diva X</p>
					<a href="page_featured_games.php#pdx" class="info_link">More info</a>
					</div>
				
				<div class="game_frame">
				<th><a href="page_on_sale.php#ffxv"><img src = "img/games/game_rpg0.png" alt = "ON_SALE"</a></th>
				<p class="info_text">Final Fantasy XV</p>
					<a href="page_featured_games.php#ffxv" class="info_link">More info</a>
					</div>
				
				<div class="game_frame">
				<th><a href="page_on_sale.php#rbi2017"><img src = "img/games/game_sports03.png" alt = "ON_SALE"</a></th>
				<p class="info_text">RBI Baseball 2017</p>
					<a href="page_featured_games.php#rbi2017" class="info_link">More info</a>
					</div>
				
				<div class="game_frame">
				<th><a href="page_on_sale.php#nhl18"><img src = "img/games/game_sports02.jpg" alt = "ON_SALE"</a></th>
				<p class="info_text">NHL 18</p>
					<a href="page_featured_games.php#nhl18" class="info_link">More info</a>
					</div>
				<div class="game_frame">
					<th><a href="page_on_sale.php#gtav"><img src = "img/games/game_shooter03.png" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">Grand Theft Auto V</p>
					<a href="page_on_sale.php#gtav" class="info_link">More info</a>
					</div>
			</tr>
		</div>
		
		</div>
	
		</body>
		
		<!-- Footer block starts here-->
		<footer>
		
				<div class = "social">
			
					<h4>Follow us!</h4>
					<a href="https://www.facebook.com/Games-Galaxy-1805648999468804/"><image src = "img/social/ico00.png" alt = "social0"></a>
					<a href="https://www.instagram.com/northamericanu/"><image src = "img/social/ico01.png" alt = "social0"></a>
					<a href="https://www.youtube.com/watch?v=_yF08r-49m0&feature=youtu.be"><image src = "img/social/ico02.png" alt = "social0"></a>
					<a href="https://twitter.com/NorthAmericanU"><image src = "img/social/ico03.png" alt = "social0"></a>
					<a href="https://www.twitch.tv/"><image src = "img/social/ico04.png" alt = "social0"></a>
					<a href="https://www.linkedin.com/"><image src = "img/social/ico05.png" alt = "social0"></a>
					
				</div>
				<div class="footer">
					<a href="index.php">Home</a>
					<a href="privacy.php">Privacy</a>
					<a href="page_aboutus.php">About us</a>
					<a href="page_contactus.php">Contact us</a>
				</div>
				<div id = "rights">
					<a>&copy; 2017 Games Galaxy Corporation. All rights reserved. All trademarks are property of their respective owners in the US and other countries.</a>
				</div>



		</div>
		</footer>
	</div>
=======
<!doctype html>
<html lang="en-us">

	<!-- Header of the page-->
	<head>
		<meta charset="utf-8">
		<meta author = "author" content = "Jesus,Ibrahima,Leland">
		<title>Game Galaxy</title>
		
		<link rel="stylesheet" href="css/site.css">
		<link rel="stylesheet" href="css/slider.css">
		<link rel="stylesheet" href="css/bump.css">
		<link rel="stylesheet" href="css/footer.css">
		
		<script type="text/javascript" src="js/scripts.js"></script>
	</head>

	
	<!-- Body of the page starts here-->
	<body id="body">
	
	<div class = "container">
	<!-- Top of the page that use the logo-->
		<div class = "top">
			
			<a><img src="img/logo/logo2.png"></a>
			
		</div>
		<!-- Navegation bar block-->
		<div class = "navbar">
			<nav>
				<ul class="cf">
				
					<li>
						<a class="dropdown" href="index.php">Home</a>
					</li>
					
					<li><a class="dropdown" href="#">Genre</a>
						<ul>
							<li><a href="page_adventure.php">Adventure</a></li>
							<li><a href="page_racing.php">Racing</a></li>
							<li><a href="page_shooter.php">Shooter</a></li>
							<li><a href="page_sports.php">Sports</a></li>
							<li><a href="page_rpg.php">RPG</a></li>
							<li><a href="page_others.php">Other</a></li>
						</ul>
					</li>
					
					<li><a class="dropdown" href="#">Games</a>
						<ul>
							<li><a href="page_featured_games.php">Featured Games</a></li>
							<li><a href="page_best_sellers.php">Best Bellers</a></li>
							<li><a href="page_on_sale.php">On Sale</a></li>
						</ul>
					</li>
					
						<li><a class="dropdown" href="news.php">News</a>
							<ul>

								<li><a href="news.php#nintendo1">Nintendo Switch</a></li>
								<li><a href="news.php#xboxone1">Xbox One</a></li>
								<li><a href="news.php#sony1">PlayStation</a></li>
								<li><a href="news.php#pc_gamer1">PC</a></li>
							</ul>
						</li>
					
						<li><a class="dropdown" href="#">About Us</a>
							<ul>
								<li><a href="page_aboutus.php#developers">Get to know us</a></li>
								<li><a href="page_aboutus.php">Game Galaxy Project</a></li>
							</ul>
						</li>
						
						<li><a class="dropdown" href="page_contactus.php">Contact us</a>
							<ul>
								<li><a href="page_contactus.php">Support</a></li>
							</ul>
						</li>
				
			</ul>
        </nav>
    </div>
		<!-- Slider of the top-->
		<div class = "slider">
			<figure>
				<div class="slide">
					<img src="img/slide/banner00.png">
				</div>
			
				<div class="slide">
					<img src="img/slide/banner01.png">
				</div>
			
				<div class="slide">
					<img src="img/slide/banner02.png">
				</div>
			
				<div class="slide">
					<img src="img/slide/banner03.png">
				</div>
			
				<div class="slide">
					<img src="img/slide/banner04.png">
				</div>
			</figure>
		</div>
		
		
		
	<!-- Frame of the main body starts here. -->	
	<div class = "frame">
		<!-- Partition of news-->
		<div class = "block0">
			<h4>News</h4>
					
					
						
						<div class = "news0">
							<div class="ele">
								<img src="img/news/news2.png">
							</div>
							<div class="ele">
								<div class ="news0info" >
									<a href="news.php#nintendo1">Double the battery life on your Nintendo Switch with this awesome accessory</a>
								</div>
							</div>
						</div>
						
						<div class = "news1">
							<div class="ele2">
								<img src="img/news/news3.png">
							</div>
							<div class="ele2">
								<div class = "news1info">
									<a href="news.php#nintendo2">Xenoblade Chronicles 2: How to Get Salty Soil</a>
								</div>
							</div>
						</div>
						
						<div class = "news1">
							<div class="ele2">
								<img src="img/news/news1.png">
							</div>
							<div class="ele2">
								<div class = "news1info">
									<a href="news.php#xboxone1">The best Xbox One games that are available right now</a>
								</div>
							</div>
						</div>
						
						<div class = "news1">
							<div class="ele2">
								<img src="img/news/news0.png">
							</div>
							<div class="ele2">
								<div class = "news1info">
									<a href="news.php#pc_gamer1">Save 20% off a PC Gamer or Maximum PC subscription in our 24-hour flash sale</a>
								</div>
							</div>
						</div>
							
							
		</div>
		
		<!-- Partition of hot deals -->
		<div class = "block1">
			<h4>Hotdeals</h4>
				
				
				
				<div class="slideshow-container">

				<div class="mySlides fade">
					<div class="numbertext">1 / 3</div>
					<img src="img/background/backg05.png" style="width:100%">
					<div class="text">BUY NOW: NEED FOR SPEED PAYBACK 20% OFF!!!</div>
				</div>

				<div class="mySlides fade">
				  <div class="numbertext">2 / 3</div>
				  <img src="img/background/backg06.png" style="width:100%">
				  <div class="text">BUY NOW: NIOH 30% OFF!!!</div>
				</div>

				<div class="mySlides fade">
				  <div class="numbertext">3 / 3</div>
				  <img src="img/background/backg07.png" style="width:100%">
				  <div class="text">BUY NOW: FINAL FANTASY XV 50% OFF!!!</div>
				</div>

				</div>
				<br>

				<div style="text-align:center">
				  <span class="dot"></span> 
				  <span class="dot"></span> 
				  <span class="dot"></span> 
				</div>
				
		<!-- JavaScript Function to make the hot deals slider work-->
				<script>var slideIndex = 0;showSlides();</script>
		</div>
		<div id="social_news_index">
						<a href="https://www.facebook.com/Games-Galaxy-1805648999468804/"><image src = "img/social/ico00.png" alt = "social0"></a>
						<a href="https://www.instagram.com/northamericanu/"><image src = "img/social/ico01.png" alt = "social0"></a>
						<a href="https://www.youtube.com/watch?v=_yF08r-49m0&feature=youtu.be"><image src = "img/social/ico02.png" alt = "social0"></a>
						<a href="https://twitter.com/NorthAmericanU"><image src = "img/social/ico03.png" alt = "social0"></a>
						<a href="https://www.twitch.tv/"><image src = "img/social/ico04.png" alt = "social0"></a>
						<a href="https://www.linkedin.com/"><image src = "img/social/ico05.png" alt = "social0"></a>
						</div>
		
		
		<!-- First banner that divides blocks. -->
		<div class = "bump0">
			
			<a href="page_featured_games.php"><img src="img/bump/bump_nier2.png"></a>
			
		</div>
		
		<!-- Feature games block-->
		<div class = "feat_games">
		
			
			
			<div id = "inner_frame">
				<tr>
					
					<div class="game_frame">
					<th><a href="page_featured_games.php#sm_odyssey"><img src = "img/games/game_adventure0.png" alt = "FEATURED_GAMES"</a></th>
					<p class="info_text">Super Mario Odyssey</p>
					<a href="page_featured_games.php#sm_odyssey" class="info_link">More info</a>
					</div>
					
					
					
					
					<div class="game_frame">
					<th><a href="page_featured_games.php#nioh"><img src = "img/games/game_rpg02.jpg" alt = "FEATURED_GAMES"</a></th>
					<p class="info_text">Nioh</p>
					<a href="page_featured_games.php#nioh" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_featured_games.php#swb2"><img src = "img/games/game_shooter0.png" alt = "FEATURED_GAMES"</a></th>
					<p class="info_text">Star Wars: Battlefront II</p>
					<a href="page_featured_games.php#swb2" class="info_link">More info</a>
					</div>
					
					
					<div class="game_frame">
					<th><a href="page_featured_games.php#shadow_of_war"><img src = "img/games/game_adventure04.png" alt = "FEATURED_GAMES"</a></th>
					<p class="info_text">Shadow of War</p>
					<a href="page_featured_games.php#shadow_of_war" class="info_link">More info</a>
					</div>
				</tr>
			
				<tr>
					<div class="game_frame">
					<th><a href="page_featured_games.php#ffxv"><img src = "img/games/game_rpg0.png" alt = "FEATURED_GAMES"</a></th>
					<p class="info_text">Final Fantasy XV</p>
					<a href="page_featured_games.php#ffxv" class="info_link">More info</a>
						</div>
						
					<div class="game_frame">
					<th><a href="page_featured_games.php#forza_horizon3"><img src = "img/games/game_racing01.png" alt = "FEATURED_GAMES"</a></th>
					<p class="info_text">Forza Horizon 3</p>
					<a href="page_featured_games.php#forza_horizon3" class="info_link">More info</a>
						</div>
						
					<div class="game_frame">
					<th><a href="page_featured_games.php#nfs_payback"><img src = "img/games/game_racing0.png" alt = "FEATURED_GAMES"</a></th>
					<p class="info_text">Need for Speed: Payback</p>
					<a href="page_featured_games.php#nfs_payback" class="info_link">More info</a>
						</div>
						
					<div class="game_frame">
					<th><a href="page_featured_games.php#origins"><img src = "img/games/game_adventure01.jpg" alt = "FEATURED_GAMES"</a></th>
					<p class="info_text">Assassin's Creed: Origins</p>
					<a href="page_featured_games.php#origins" class="info_link">More info</a>
						</div>
						
				</tr>
				<tr>
					
					<div class="game_frame">
					<th><a href="page_featured_games.php#TEW2"><img src = "img/games/game_other02.png" alt = "FEATURED_GAMES"</a></th>
					<p class="info_text">The Evil Within 2</p>
					<a href="page_featured_games.php#TEW2" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_featured_games.php#pes2018"><img src = "img/games/game_sports0.jpg" alt = "FEATURED_GAMES"</a></th>
					<p class="info_text">PES 2018</p>
					<a href="page_featured_games.php#pes2018" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_featured_games.php#gts"><img src = "img/games/game_racing03.png" alt = "FEATURED_GAMES"</a></th>
					<p class="info_text">Gran Turismo Sport</p>
					<a href="page_featured_games.php#gts" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_featured_games.php#codww2"><img src = "img/games/game_shooter02.jpg" alt = "FEATURED_GAMES"</a></th>
					<p class="info_text">Call of Duty: WWII</p>
					<a href="page_featured_games.php#codww2" class="info_link">More info</a>
					</div>
					
				</tr>
			</div>
			
			

		</div>
			
			<!-- Second banner that divides blocks -->
			<div class = "bump1">
				<a href="page_best_sellers.php"><img src="img/bump/bump02.png"></a>
			</div>
			
			
			<!-- Best Sellers block -->
			
			
			<div class = "best_sellers">
			
			
		
			<!-- <table> Table will make them smaller when decreasing page size -->
			<div id = "inner_frame">
				<tr>
					<div class="game_frame">
					<th><a href="page_best_sellers.php#codww2"><img src = "img/games/game_shooter02.jpg" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">Call of Duty: WWII</p>
					<a href="page_featured_games.php#codww2" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_best_sellers.php#gtav"><img src = "img/games/game_shooter03.png" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">Grand Theft Auto V</p>
					<a href="page_featured_games.php#gtav" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_best_sellers.php#swb2"><img src = "img/games/game_shooter0.png" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">Star Wars: Battlefront II</p>
					<a href="page_featured_games.php#swb2" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_best_sellers.php#wolf2"><img src = "img/games/game_shooter01.jpg" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">Wolfensten II</p>
					<a href="page_featured_games.php#wolf2" class="info_link">More info</a>
					</div>
				</tr>
				<tr>
					<div class="game_frame">
					<th><a href="page_best_sellers.php#pc2"><img src = "img/games/game_racing02.jpg" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">Project Cars 2</p>
					<a href="page_featured_games.php#pc2" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_best_sellers.php#pes2018"><img src = "img/games/game_sports0.jpg" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">PES 2018</p>
					<a href="page_featured_games.php#pes2018" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_best_sellers.php#TEW2"><img src = "img/games/game_other02.png" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">The Evil Within 2</p>
					<a href="page_featured_games.php#TEW2" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_best_sellers.php#shadow_of_war"><img src = "img/games/game_adventure04.png" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">Shadow of War</p>
					<a href="page_featured_games.php#shadow_of_war" class="info_link">More info</a>
					</div>
				</tr>
				<tr>
					<div class="game_frame">
					<th><a href="page_best_sellers.php#origins"><img src = "img/games/game_adventure01.jpg" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">Assassin's Creed: Origins</p>
					<a href="page_featured_games.php#origins" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_best_sellers.php#nfs_payback"><img src = "img/games/game_racing0.png" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">Need for Speed: Payback</p>
					<a href="page_featured_games.php#nfs_payback" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_best_sellers.php#gts"><img src = "img/games/game_racing03.png" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">Gran Turismo Sport</p>
					<a href="page_featured_games.php#gts" class="info_link">More info</a>
					</div>
					
					<div class="game_frame">
					<th><a href="page_best_sellers.php#nier"><img src = "img/games/game_adventure02.png" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">Nier: Automata</p>
					<a href="page_featured_games.php#nier" class="info_link">More info</a>
					</div>
				</tr>
			</div>
			<!-- </table> -->
		
		</div>
		
		<!-- Third banner that divides blocks -->
		<div class = "bump2">
				<a href="page_on_sale.php"><img src="img/bump/bump01.png"></a>
		</div>
		
		<!-- ON SALE block-->
		<div class = "on_sale">

		<div id = "inner_frame">
			<tr>
				<div class="game_frame">
				<th><a href="page_on_sale.php#NOA"><img src = "img/games/game_other01.png" alt = "ON_SALE"</a></th>
				<p class="info_text">Nights of Azure</p>
				<a href="page_featured_games.php#NOA" class="info_link">More info</a>
				</div>
					
				<div class="game_frame">
				<th><a href="page_on_sale.php#blue_reflection"><img src = "img/games/game_rpg01.png" alt = "ON_SALE"</a></th>
				<p class="info_text">Blue Reflection</p>
					<a href="page_featured_games.php#blue_reflection" class="info_link">More info</a>
					</div>
				
				<div class="game_frame">
				<th><a href="page_on_sale.php#fatal_frame_v"><img src = "img/games/game_other0.png" alt = "ON_SALE"</a></th>
				<p class="info_text">Project Zero</p>
					<a href="page_featured_games.php#fatal_frame_v" class="info_link">More info</a>
					</div>
				
				<div class="game_frame">
				<th><a href="page_on_sale.php#nfl17"><img src = "img/games/game_sports01.jpg" alt = "ON_SALE"</a></th>
				<p class="info_text">NFL Madden 17</p>
					<a href="page_featured_games.php#nfl17" class="info_link">More info</a>
					</div>
			</tr>
			<tr>
				<div class="game_frame">
				<th><a href="page_on_sale.php#pdx"><img src = "img/games/game_other02.jpg" alt = "ON_SALE"</a></th>
				<p class="info_text">Project Diva X</p>
					<a href="page_featured_games.php#pdx" class="info_link">More info</a>
					</div>
				
				<div class="game_frame">
				<th><a href="page_on_sale.php#ffxv"><img src = "img/games/game_rpg0.png" alt = "ON_SALE"</a></th>
				<p class="info_text">Final Fantasy XV</p>
					<a href="page_featured_games.php#ffxv" class="info_link">More info</a>
					</div>
				
				<div class="game_frame">
				<th><a href="page_on_sale.php#rbi2017"><img src = "img/games/game_sports03.png" alt = "ON_SALE"</a></th>
				<p class="info_text">RBI Baseball 2017</p>
					<a href="page_featured_games.php#rbi2017" class="info_link">More info</a>
					</div>
				
				<div class="game_frame">
				<th><a href="page_on_sale.php#nhl18"><img src = "img/games/game_sports02.jpg" alt = "ON_SALE"</a></th>
				<p class="info_text">NHL 18</p>
					<a href="page_featured_games.php#nhl18" class="info_link">More info</a>
					</div>
				<div class="game_frame">
					<th><a href="page_on_sale.php#gtav"><img src = "img/games/game_shooter03.png" alt = "BEST_SELLERS"</a></th>
					<p class="info_text">Grand Theft Auto V</p>
					<a href="page_on_sale.php#gtav" class="info_link">More info</a>
					</div>
			</tr>
		</div>
		
		</div>
	
		</body>
		
		<!-- Footer block starts here-->
		<footer>
		
				<div class = "social">
			
					<h4>Follow us!</h4>
					<a href="https://www.facebook.com/Games-Galaxy-1805648999468804/"><image src = "img/social/ico00.png" alt = "social0"></a>
					<a href="https://www.instagram.com/northamericanu/"><image src = "img/social/ico01.png" alt = "social0"></a>
					<a href="https://www.youtube.com/watch?v=_yF08r-49m0&feature=youtu.be"><image src = "img/social/ico02.png" alt = "social0"></a>
					<a href="https://twitter.com/NorthAmericanU"><image src = "img/social/ico03.png" alt = "social0"></a>
					<a href="https://www.twitch.tv/"><image src = "img/social/ico04.png" alt = "social0"></a>
					<a href="https://www.linkedin.com/"><image src = "img/social/ico05.png" alt = "social0"></a>
					
				</div>
				<div class="footer">
					<a href="index.php">Home</a>
					<a href="privacy.php">Privacy</a>
					<a href="page_aboutus.php">About us</a>
					<a href="page_contactus.php">Contact us</a>
				</div>
				<div id = "rights">
					<a>&copy; 2017 Games Galaxy Corporation. All rights reserved. All trademarks are property of their respective owners in the US and other countries.</a>
				</div>



		</div>
		</footer>
	</div>
>>>>>>> 50d5de1c0db865ff9112b264f243e05a8e1125d9:index.php
</html>