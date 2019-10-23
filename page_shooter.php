<<<<<<< HEAD:page_shooter.php
<!doctype html>
<html lang="en-us">

	<!-- Header of the page-->
	<head>
		<meta charset="utf-8">
		<meta author = "author" content = "Jesus,Ibrahima,Leland">
		<title>Game Galaxy</title>
		
		<link rel="stylesheet" href="css/site.css"> 				<!-- Needed for general page styling-->
		<link rel="stylesheet" href="css/bump.css"> 				<!-- Needed for general every single page that uses a bump picture-->
		<link rel="stylesheet" href="css/footer.css"> 				<!-- Needed for everypage that uses footer-->
		<link rel="stylesheet" href="css/non_index_styling.css"> 	<!-- Needed for navbar margin and color in genre pages, and genre block styling-->
		<script type="text/javascript" src="js/scripts.js"></script>
	</head>

	
	<!-- Body of the page starts here-->
	<body id="body_shooter">
	
	<div class = "container">
	<!-- Top of the page that use the logo-->
		<div class = "top">
			
			<img src="img/logo/logo2.png">
			
		</div>
		<!-- Navigation bar block-->
		<div class = "navbar_2">
			<nav>
				<ul class="cf">
					<li><a class="dropdown" href="index.php">Home</a>
						
					</li>
					
					<li><a class="dropdown" href="#">Genre</a>
						<ul>
							<li><a href="page_adventure.php">Adventure</a></li>
							<li><a href="page_racing.php">Racing</a></li>
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
						
						<li><a class="dropdown" href="#">Contact us</a>
							<ul>
								<li><a href="page_contactus.php">Support</a></li>
								
							</ul>
						</li>
				
			</ul>
        </nav>
    </div>
		
		
	<!-- Frame of the main body starts here. -->	
	<div class = "frame">
		<!-- Partition of news-->

					
			
		
		
	

		
		<!-- First banner that divides blocks. -->
		<div class = "bump_shooter">
			
			<img src="img/bump/img0006.png">
			
		</div>
	
		
		<!-- Feature games block-->
		
		<!-- Shooter Game 1-->	
			<div class = "outer">
				<p id="title">Star Wars: Battlefront II</p>
					<div class = "wrap_left">
					
						<div id = "video">
							<iframe  src="https://www.youtube.com/embed/Uvmx94cUVEY" frameborder="0" gesture="media" allowfullscreen></iframe>
						</div>
							<p>Star Wars is at its best when it focuses on a group of unlikely heroes coming together to save the day. Luke meeting Leia, Rey finding Finn - their stories intertwine and become one, like the Force.
							   Star Wars Battlefront II features a single-player campaign that is told from the perspective of the Empire.</p>			
					</div>
				
								<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						 <p>Price: 
						
						<span style="font-size:1.6em;"> $59.99</span>
						<br/>Category: Shooter<br/>Developer: EA DICE <br/>
						Publisher: Electronic Arts<br/>
						Release Date: Nov 17, 2017<br/>
						Platform: PC, Xbox One, PS4
						</p>
					</div>
					
					
					
					<div id = "game_img">
							<img src="img/games/game_shooter0.png">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Star Wars: Battlefront II">
							<input type="hidden" name="item_number" value="SWBF2">
							<input type="hidden" name="amount" value="59.99">
							<input type="hidden" name="tax" value="3.96">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="return" value="">
							<input type="hidden" name="cancel_return" value="">
							<input type="hidden" name="receiver_email" value="ljb2k5@gmail.com">
							<input type="hidden" name="no_shipping" value="0">
							<input type="hidden" name="no_note" value="1">
							<input type="hidden" name="shipping" value="3.00">
							<input type="hidden" name="shipping2" value="0.00">
							<input type="hidden" name="handling" value="0.00">
							<input type="hidden" name="on0" value="Platform">
							
						<div class ="platform_wrap">
							
							<p style="color:white;" >Select Platform</p><select name="os0" id="platform_choice">
							
							<option value="PC">Microsoft Windows</option>
							<option value="XBOX ONE">XBOX ONE</option>
							<option value="PS4">PS4</option>
							
							</select>
							
							
							<div id = "clear"></div>
							
							<div id="button_left">
							<input id="PayPal5" type="image" style="font-size: 0.7em;" value="Add to cart" <button class="button"></button> 
							</div>	
							</form>
							
							<div id="button_right">
							<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
								<input type="hidden" name="business" value="ljb2k5@gmail.com">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<input id="PayPal6" type="image" style="font-size: 0.7em;" value="View Cart" <button class="button"></button> 
							</form>
							</div>
							<div id = "clear"></div>							
						
						</div>
					</div>
				</div>
				
				<div id = "clear"></div>
				
				
			</div>
			
			
			<!-- Shooter Game 2-->
			<div class = "outer">
			
			<p id="title">Call of Duty: World War II</p>
				<div class = "wrap_left">
				
					<div id = "video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/a9ITIaKzG3A" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
					<p>Call of Duty returns to its roots with Call of Duty: WWII - a breathtaking experience that redefines World War II for a new gaming generation.
					   Land in Normandy on D-Day and battle across Europe through iconic locations in history's most monumental war.</p>
				</div>
				
				<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						<p>Price: <span style="background-color:green;font-size:1.1em;">
						20%off </span>
						<span style="text-decoration: line-through;font-size:1.6em;color:grey"> $59.00</span>
						<span style="font-size:1.6em;"> $48.00</span>
						<br/>Category: Shooter<br/>Developer: Sledgehammer Games/Raven Software <br/>
						Publisher: Activision<br/>
						Release Date: Nov 3, 2017<br/>
						Platform: PC, Xbox One, PS4
						</p>
					</div>
					
					
					
							<div id = "game_img">
							<img src="img/games/game_shooter02.jpg">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Call of Duty: World War II">
							<input type="hidden" name="item_number" value="CODWW2">
							<input type="hidden" name="amount" value="48.00">
							<input type="hidden" name="tax" value="3.96">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="return" value="">
							<input type="hidden" name="cancel_return" value="">
							<input type="hidden" name="receiver_email" value="ljb2k5@gmail.com">
							<input type="hidden" name="no_shipping" value="0">
							<input type="hidden" name="no_note" value="1">
							<input type="hidden" name="shipping" value="3.00">
							<input type="hidden" name="shipping2" value="0.00">
							<input type="hidden" name="handling" value="0.00">
							<input type="hidden" name="on0" value="Platform">
							
						<div class ="platform_wrap">
							
							<p style="color:white;" >Select Platform</p><select name="os0" id="platform_choice">
							
							<option value="PC">Microsoft Windows</option>
							<option value="XBOX ONE">XBOX ONE</option>
							<option value="PS4">PS4</option>
							
							
							</select>
							
							
							<div id = "clear"></div>
							
							<div id="button_left">
							<input id="PayPal5" type="image" style="font-size: 0.7em;" value="Add to cart" <button class="button"></button> 
							</div>	
							</form>
							
							<div id="button_right">
							<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
								<input type="hidden" name="business" value="ljb2k5@gmail.com">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<input id="PayPal6" type="image" style="font-size: 0.7em;" value="View Cart" <button class="button"></button> 
							</form>
							</div>
							<div id = "clear"></div>							
						
						</div>
					</div>
				</div>
				<div id = "clear">
				</div>
				
			</div>
			
			
			<!-- Shooter Game 3-->
			<div class = "outer">
			
			<p id="title">Wolfenstein II: The New Colossus </p>
				
				<div class = "wrap_left">
				
					<div id = "video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/bkrwUzWeACg" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
						<p>Wolfenstein II sends players to Nazi-controlled America on a mission to recruit the boldest resistance leaders left.
						   Fight the Nazis in iconic locations and equip an arsenal of badass guns, and unleash new abilities against advanced Nazi über soldiers in this definitive first-person shooter.</p>
				</div>
				
				<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						<p>Price:
						<span style="font-size:1.6em;"> $59.00</span>
						<br/>Category: Shooter<br/>Developer: MachineGames<br/>
						Publisher: Bethesda Softworks<br/>
						Release Date: Oct 27, 2017<br/>
						Platform: PC, Xbox One, PS4
						</p>
					</div>
					
					
					
							<div id = "game_img">
							<img src="img/games/game_shooter03.jpg">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Wolfenstein II: The New Colossus">
							<input type="hidden" name="item_number" value="WF2NC">
							<input type="hidden" name="amount" value="59.00">
							<input type="hidden" name="tax" value="3.96">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="return" value="">
							<input type="hidden" name="cancel_return" value="">
							<input type="hidden" name="receiver_email" value="ljb2k5@gmail.com">
							<input type="hidden" name="no_shipping" value="0">
							<input type="hidden" name="no_note" value="1">
							<input type="hidden" name="shipping" value="3.00">
							<input type="hidden" name="shipping2" value="0.00">
							<input type="hidden" name="handling" value="0.00">
							<input type="hidden" name="on0" value="Platform">
							
						<div class ="platform_wrap">
							
							<p style="color:white;" >Select Platform</p><select name="os0" id="platform_choice">
							
							<option value="PC">Microsoft Windows</option>
							<option value="XBOX ONE">XBOX ONE</option>
							<option value="PS4">PS4</option>
							
							</select>
							
							
							<div id = "clear"></div>
							
							<div id="button_left">
							<input id="PayPal5" type="image" style="font-size: 0.7em;" value="Add to cart" <button class="button"></button> 
							</div>	
							</form>
							
							<div id="button_right">
							<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
								<input type="hidden" name="business" value="ljb2k5@gmail.com">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<input id="PayPal6" type="image" style="font-size: 0.7em;" value="View Cart" <button class="button"></button> 
							</form>
							</div>
							<div id = "clear"></div>							
						
						</div>
					</div>
				</div>
				<div id = "clear">
				</div>
				
			<!-- Shooter Game 4-->	
			</div>
			
			
			
			<div class = "outer">
			
			<p id="title">Destiny 2</p>
			
				<div class = "wrap_left">
				
					<div id = "video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/hdWkpbPTpmE" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
					<p>Humanity's last safe city has fallen to an overwhelming invasion force, led by Ghaul, the imposing commander of the brutal Red Legion.
					   He has stripped the city's Guardians of their power, and forced the survivors to flee. You must reunite humanity's scattered heroes, stand together, and fight back to reclaim our home.</p>		
				</div>
				
				<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						<p>Price:
						<span style="font-size:1.6em;"> $59.00</span>
						<br/>Category: Shooter<br/>Developer: Bungie<br/>
						Publisher: Activision<br/>
						Release Date: Sep 6, 2017<br/>
						Platform: PC, Xbox One, PS4
						</p>
					</div>
					
					
					
							<div id = "game_img">
							<img src="img/games/game_shooter04.jpg">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Destiny 2">
							<input type="hidden" name="item_number" value="DES2">
							<input type="hidden" name="amount" value="59.00">
							<input type="hidden" name="tax" value="3.96">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="return" value="">
							<input type="hidden" name="cancel_return" value="">
							<input type="hidden" name="receiver_email" value="ljb2k5@gmail.com">
							<input type="hidden" name="no_shipping" value="0">
							<input type="hidden" name="no_note" value="1">
							<input type="hidden" name="shipping" value="3.00">
							<input type="hidden" name="shipping2" value="0.00">
							<input type="hidden" name="handling" value="0.00">
							<input type="hidden" name="on0" value="Platform">
							
						<div class ="platform_wrap">
							
							<p style="color:white;" >Select Platform</p><select name="os0" id="platform_choice">
							
							<option value="PC">Microsoft Windows</option>
							<option value="XBOX ONE">XBOX ONE</option>
							<option value="PS4">PS4</option>
							
							</select>
							
							
							<div id = "clear"></div>
							
							<div id="button_left">
							<input id="PayPal5" type="image" style="font-size: 0.7em;" value="Add to cart" <button class="button"></button> 
							</div>	
							</form>
							
							<div id="button_right">
							<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
								<input type="hidden" name="business" value="ljb2k5@gmail.com">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<input id="PayPal6" type="image" style="font-size: 0.7em;" value="View Cart" <button class="button"></button> 
							</form>
							</div>
							<div id = "clear"></div>							
						
						</div>
					</div>
				</div>
				<div id = "clear"></div>
				
				
			</div>
			
			

			
		</body>
		
			<div id = "on_sale_advertise">
			
				<p>Check out our games on sale!</p>
				
			</div>
		
		<div class = "on_sale_non_index">
		<table>
			<tr>
				<th><a href="page_on_sale.php#NOA"><img src = "img/games/game_other01.png" alt = "ON_SALE"</a></th>
				<th><a href="page_on_sale.php#blue_reflection"><img src = "img/games/game_rpg01.png" alt = "ON_SALE"</a></th>
				<th><a href="page_on_sale.php#fatal_frame_v"><img src = "img/games/game_other0.png" alt = "ON_SALE"</a></th>
				<th><a href="page_on_sale.php#nfl17"><img src = "img/games/game_sports01.jpg" alt = "ON_SALE"</a></th>
				<th><a href="page_on_sale.php#pdx"><img src = "img/games/game_other02.jpg" alt = "ON_SALE"</a></th>
				<th><a href="page_on_sale.php#ffxv"><img src = "img/games/game_rpg0.png" alt = "ON_SALE"</a></th>
				<th><a href="page_on_sale.php#rbi2017"><img src = "img/games/game_sports03.png" alt = "ON_SALE"</a></th>
			</tr>
		</table>
		</div>
		
		<div id = "clear">
		
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
		
		<link rel="stylesheet" href="css/site.css"> 				<!-- Needed for general page styling-->
		<link rel="stylesheet" href="css/bump.css"> 				<!-- Needed for general every single page that uses a bump picture-->
		<link rel="stylesheet" href="css/footer.css"> 				<!-- Needed for everypage that uses footer-->
		<link rel="stylesheet" href="css/non_index_styling.css"> 	<!-- Needed for navbar margin and color in genre pages, and genre block styling-->
		<script type="text/javascript" src="js/scripts.js"></script>
	</head>

	
	<!-- Body of the page starts here-->
	<body id="body_shooter">
	
	<div class = "container">
	<!-- Top of the page that use the logo-->
		<div class = "top">
			
			<img src="img/logo/logo2.png">
			
		</div>
		<!-- Navigation bar block-->
		<div class = "navbar_2">
			<nav>
				<ul class="cf">
					<li><a class="dropdown" href="index.html">Home</a>
						
					</li>
					
					<li><a class="dropdown" href="#">Genre</a>
						<ul>
							<li><a href="page_adventure.html">Adventure</a></li>
							<li><a href="page_racing.html">Racing</a></li>
							<li><a href="page_sports.html">Sports</a></li>
							<li><a href="page_rpg.html">RPG</a></li>
							<li><a href="page_others.html">Other</a></li>
							
						</ul>
					</li>
					
					<li><a class="dropdown" href="#">Games</a>
						<ul>
							<li><a href="page_featured_games.html">Featured Games</a></li>
							<li><a href="page_best_sellers.html">Best Bellers</a></li>
							<li><a href="page_on_sale.html">On Sale</a></li>
						</ul>
					</li>
					
						<li><a class="dropdown" href="news.html">News</a>
							<ul>
								<li><a href="news.html#nintendo1">Nintendo Switch</a></li>
								<li><a href="news.html#xboxone1">Xbox One</a></li>
								<li><a href="news.html#sony1">PlayStation</a></li>
								<li><a href="news.html#pc_gamer1">PC</a></li>
							</ul>
						</li>
					
						<li><a class="dropdown" href="#">About Us</a>
							<ul>
								<li><a href="page_aboutus.html#developers">Get to know us</a></li>
								<li><a href="page_aboutus.html">Game Galaxy Project</a></li>
							</ul>
						</li>
						
						<li><a class="dropdown" href="#">Contact us</a>
							<ul>
								<li><a href="page_contactus.html">Support</a></li>
								
							</ul>
						</li>
				
			</ul>
        </nav>
    </div>
		
		
	<!-- Frame of the main body starts here. -->	
	<div class = "frame">
		<!-- Partition of news-->

					
			
		
		
	

		
		<!-- First banner that divides blocks. -->
		<div class = "bump_shooter">
			
			<img src="img/bump/img0006.png">
			
		</div>
	
		
		<!-- Feature games block-->
		
		<!-- Shooter Game 1-->	
			<div class = "outer">
				<p id="title">Star Wars: Battlefront II</p>
					<div class = "wrap_left">
					
						<div id = "video">
							<iframe  src="https://www.youtube.com/embed/Uvmx94cUVEY" frameborder="0" gesture="media" allowfullscreen></iframe>
						</div>
							<p>Star Wars is at its best when it focuses on a group of unlikely heroes coming together to save the day. Luke meeting Leia, Rey finding Finn - their stories intertwine and become one, like the Force.
							   Star Wars Battlefront II features a single-player campaign that is told from the perspective of the Empire.</p>			
					</div>
				
								<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						 <p>Price: 
						
						<span style="font-size:1.6em;"> $59.99</span>
						<br/>Category: Shooter<br/>Developer: EA DICE <br/>
						Publisher: Electronic Arts<br/>
						Release Date: Nov 17, 2017<br/>
						Platform: PC, Xbox One, PS4
						</p>
					</div>
					
					
					
					<div id = "game_img">
							<img src="img/games/game_shooter0.png">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Star Wars: Battlefront II">
							<input type="hidden" name="item_number" value="SWBF2">
							<input type="hidden" name="amount" value="59.99">
							<input type="hidden" name="tax" value="3.96">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="return" value="">
							<input type="hidden" name="cancel_return" value="">
							<input type="hidden" name="receiver_email" value="ljb2k5@gmail.com">
							<input type="hidden" name="no_shipping" value="0">
							<input type="hidden" name="no_note" value="1">
							<input type="hidden" name="shipping" value="3.00">
							<input type="hidden" name="shipping2" value="0.00">
							<input type="hidden" name="handling" value="0.00">
							<input type="hidden" name="on0" value="Platform">
							
						<div class ="platform_wrap">
							
							<p style="color:white;" >Select Platform</p><select name="os0" id="platform_choice">
							
							<option value="PC">Microsoft Windows</option>
							<option value="XBOX ONE">XBOX ONE</option>
							<option value="PS4">PS4</option>
							
							</select>
							
							
							<div id = "clear"></div>
							
							<div id="button_left">
							<input id="PayPal5" type="image" style="font-size: 0.7em;" value="Add to cart" <button class="button"></button> 
							</div>	
							</form>
							
							<div id="button_right">
							<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
								<input type="hidden" name="business" value="ljb2k5@gmail.com">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<input id="PayPal6" type="image" style="font-size: 0.7em;" value="View Cart" <button class="button"></button> 
							</form>
							</div>
							<div id = "clear"></div>							
						
						</div>
					</div>
				</div>
				
				<div id = "clear"></div>
				
				
			</div>
			
			
			<!-- Shooter Game 2-->
			<div class = "outer">
			
			<p id="title">Call of Duty: World War II</p>
				<div class = "wrap_left">
				
					<div id = "video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/a9ITIaKzG3A" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
					<p>Call of Duty returns to its roots with Call of Duty: WWII - a breathtaking experience that redefines World War II for a new gaming generation.
					   Land in Normandy on D-Day and battle across Europe through iconic locations in history's most monumental war.</p>
				</div>
				
				<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						<p>Price: <span style="background-color:green;font-size:1.1em;">
						20%off </span>
						<span style="text-decoration: line-through;font-size:1.6em;color:grey"> $59.00</span>
						<span style="font-size:1.6em;"> $48.00</span>
						<br/>Category: Shooter<br/>Developer: Sledgehammer Games/Raven Software <br/>
						Publisher: Activision<br/>
						Release Date: Nov 3, 2017<br/>
						Platform: PC, Xbox One, PS4
						</p>
					</div>
					
					
					
							<div id = "game_img">
							<img src="img/games/game_shooter02.jpg">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Call of Duty: World War II">
							<input type="hidden" name="item_number" value="CODWW2">
							<input type="hidden" name="amount" value="48.00">
							<input type="hidden" name="tax" value="3.96">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="return" value="">
							<input type="hidden" name="cancel_return" value="">
							<input type="hidden" name="receiver_email" value="ljb2k5@gmail.com">
							<input type="hidden" name="no_shipping" value="0">
							<input type="hidden" name="no_note" value="1">
							<input type="hidden" name="shipping" value="3.00">
							<input type="hidden" name="shipping2" value="0.00">
							<input type="hidden" name="handling" value="0.00">
							<input type="hidden" name="on0" value="Platform">
							
						<div class ="platform_wrap">
							
							<p style="color:white;" >Select Platform</p><select name="os0" id="platform_choice">
							
							<option value="PC">Microsoft Windows</option>
							<option value="XBOX ONE">XBOX ONE</option>
							<option value="PS4">PS4</option>
							
							
							</select>
							
							
							<div id = "clear"></div>
							
							<div id="button_left">
							<input id="PayPal5" type="image" style="font-size: 0.7em;" value="Add to cart" <button class="button"></button> 
							</div>	
							</form>
							
							<div id="button_right">
							<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
								<input type="hidden" name="business" value="ljb2k5@gmail.com">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<input id="PayPal6" type="image" style="font-size: 0.7em;" value="View Cart" <button class="button"></button> 
							</form>
							</div>
							<div id = "clear"></div>							
						
						</div>
					</div>
				</div>
				<div id = "clear">
				</div>
				
			</div>
			
			
			<!-- Shooter Game 3-->
			<div class = "outer">
			
			<p id="title">Wolfenstein II: The New Colossus </p>
				
				<div class = "wrap_left">
				
					<div id = "video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/bkrwUzWeACg" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
						<p>Wolfenstein II sends players to Nazi-controlled America on a mission to recruit the boldest resistance leaders left.
						   Fight the Nazis in iconic locations and equip an arsenal of badass guns, and unleash new abilities against advanced Nazi über soldiers in this definitive first-person shooter.</p>
				</div>
				
				<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						<p>Price:
						<span style="font-size:1.6em;"> $59.00</span>
						<br/>Category: Shooter<br/>Developer: MachineGames<br/>
						Publisher: Bethesda Softworks<br/>
						Release Date: Oct 27, 2017<br/>
						Platform: PC, Xbox One, PS4
						</p>
					</div>
					
					
					
							<div id = "game_img">
							<img src="img/games/game_shooter03.jpg">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Wolfenstein II: The New Colossus">
							<input type="hidden" name="item_number" value="WF2NC">
							<input type="hidden" name="amount" value="59.00">
							<input type="hidden" name="tax" value="3.96">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="return" value="">
							<input type="hidden" name="cancel_return" value="">
							<input type="hidden" name="receiver_email" value="ljb2k5@gmail.com">
							<input type="hidden" name="no_shipping" value="0">
							<input type="hidden" name="no_note" value="1">
							<input type="hidden" name="shipping" value="3.00">
							<input type="hidden" name="shipping2" value="0.00">
							<input type="hidden" name="handling" value="0.00">
							<input type="hidden" name="on0" value="Platform">
							
						<div class ="platform_wrap">
							
							<p style="color:white;" >Select Platform</p><select name="os0" id="platform_choice">
							
							<option value="PC">Microsoft Windows</option>
							<option value="XBOX ONE">XBOX ONE</option>
							<option value="PS4">PS4</option>
							
							</select>
							
							
							<div id = "clear"></div>
							
							<div id="button_left">
							<input id="PayPal5" type="image" style="font-size: 0.7em;" value="Add to cart" <button class="button"></button> 
							</div>	
							</form>
							
							<div id="button_right">
							<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
								<input type="hidden" name="business" value="ljb2k5@gmail.com">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<input id="PayPal6" type="image" style="font-size: 0.7em;" value="View Cart" <button class="button"></button> 
							</form>
							</div>
							<div id = "clear"></div>							
						
						</div>
					</div>
				</div>
				<div id = "clear">
				</div>
				
			<!-- Shooter Game 4-->	
			</div>
			
			
			
			<div class = "outer">
			
			<p id="title">Destiny 2</p>
			
				<div class = "wrap_left">
				
					<div id = "video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/hdWkpbPTpmE" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
					<p>Humanity's last safe city has fallen to an overwhelming invasion force, led by Ghaul, the imposing commander of the brutal Red Legion.
					   He has stripped the city's Guardians of their power, and forced the survivors to flee. You must reunite humanity's scattered heroes, stand together, and fight back to reclaim our home.</p>		
				</div>
				
				<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						<p>Price:
						<span style="font-size:1.6em;"> $59.00</span>
						<br/>Category: Shooter<br/>Developer: Bungie<br/>
						Publisher: Activision<br/>
						Release Date: Sep 6, 2017<br/>
						Platform: PC, Xbox One, PS4
						</p>
					</div>
					
					
					
							<div id = "game_img">
							<img src="img/games/game_shooter04.jpg">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Destiny 2">
							<input type="hidden" name="item_number" value="DES2">
							<input type="hidden" name="amount" value="59.00">
							<input type="hidden" name="tax" value="3.96">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="return" value="">
							<input type="hidden" name="cancel_return" value="">
							<input type="hidden" name="receiver_email" value="ljb2k5@gmail.com">
							<input type="hidden" name="no_shipping" value="0">
							<input type="hidden" name="no_note" value="1">
							<input type="hidden" name="shipping" value="3.00">
							<input type="hidden" name="shipping2" value="0.00">
							<input type="hidden" name="handling" value="0.00">
							<input type="hidden" name="on0" value="Platform">
							
						<div class ="platform_wrap">
							
							<p style="color:white;" >Select Platform</p><select name="os0" id="platform_choice">
							
							<option value="PC">Microsoft Windows</option>
							<option value="XBOX ONE">XBOX ONE</option>
							<option value="PS4">PS4</option>
							
							</select>
							
							
							<div id = "clear"></div>
							
							<div id="button_left">
							<input id="PayPal5" type="image" style="font-size: 0.7em;" value="Add to cart" <button class="button"></button> 
							</div>	
							</form>
							
							<div id="button_right">
							<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
								<input type="hidden" name="business" value="ljb2k5@gmail.com">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<input id="PayPal6" type="image" style="font-size: 0.7em;" value="View Cart" <button class="button"></button> 
							</form>
							</div>
							<div id = "clear"></div>							
						
						</div>
					</div>
				</div>
				<div id = "clear"></div>
				
				
			</div>
			
			

			
		</body>
		
			<div id = "on_sale_advertise">
			
				<p>Check out our games on sale!</p>
				
			</div>
		
		<div class = "on_sale_non_index">
		<table>
			<tr>
				<th><a href="page_on_sale.html#NOA"><img src = "img/games/game_other01.png" alt = "ON_SALE"</a></th>
				<th><a href="page_on_sale.html#blue_reflection"><img src = "img/games/game_rpg01.png" alt = "ON_SALE"</a></th>
				<th><a href="page_on_sale.html#fatal_frame_v"><img src = "img/games/game_other0.png" alt = "ON_SALE"</a></th>
				<th><a href="page_on_sale.html#nfl17"><img src = "img/games/game_sports01.jpg" alt = "ON_SALE"</a></th>
				<th><a href="page_on_sale.html#pdx"><img src = "img/games/game_other02.jpg" alt = "ON_SALE"</a></th>
				<th><a href="page_on_sale.html#ffxv"><img src = "img/games/game_rpg0.png" alt = "ON_SALE"</a></th>
				<th><a href="page_on_sale.html#rbi2017"><img src = "img/games/game_sports03.png" alt = "ON_SALE"</a></th>
			</tr>
		</table>
		</div>
		
		<div id = "clear">
		
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
					<a href="index.html">Home</a>
					<a href="privacy.html">Privacy</a>
					<a href="page_aboutus.html">About us</a>
					<a href="page_contactus.html">Contact us</a>
				</div>
				<div id = "rights">
					<a>&copy; 2017 Games Galaxy Corporation. All rights reserved. All trademarks are property of their respective owners in the US and other countries.</a>
				</div>

		</div>
		
		</footer>
	</div>
>>>>>>> 50d5de1c0db865ff9112b264f243e05a8e1125d9:page_shooter.php
</html>