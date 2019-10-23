<<<<<<< HEAD:page_racing.php
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
	<body id="body_racing">
	
	<div class = "container">
	<!-- Top of the page that use the logo-->
		<div class = "top">
			
			<img src="img/logo/logo2.png">
			
		</div>
		<!-- Navegation bar block-->
		<div class = "navbar_2">
			<nav>
				<ul class="cf">
					<li><a class="dropdown" href="index.php">Home</a>
						
					</li>
					
					<li><a class="dropdown" href="#">Genre</a>
						<ul>
							<li><a href="page_adventure.php">Adventure</a></li>
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
		<div class = "bump_racing">
			
			<img src="img/bump/bump_racing1.png">
			
		</div>
	
		
		<!-- Feature games block-->
		
		<!-- Racing Game 1-->	
			<div class = "outer">
				<p id="title">Need For Speed: Payback</p>
					<div class = "wrap_left">
					
						<div id = "video">
							<iframe  src="https://www.youtube.com/embed/K-5EdHZ0hBs" frameborder="0" gesture="media" allowfullscreen></iframe>
						</div>
							<p>Need for Speed Payback is a racing video game developed by Ghost Games and published by Electronic Arts for Microsoft Windows, PlayStation 4 and Xbox One.
							It is the twenty-third installment in the Need for Speed series. The game was revealed with a trailer released on June 2, 2017.
							The game was released worldwide on November 10, 2017</p>			
					</div>
				
								<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						 <p>Price: 
						
						<span style="font-size:1.6em;"> $59.99</span>
						<br/>Category: Racing<br/>Developer: Ghost Games <br/>
						Publisher: Electronic Arts<br/>
						Release Date: Nov 10, 2017<br/>
						Platform: PS4, Xbox One, PC
						</p>
					</div>
					
					
					
					<div id = "game_img">
							<img src="img/games/game_racing0.png">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Need For Speed: Payback">
							<input type="hidden" name="item_number" value="ACO">
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
							
							<option value="XBOX ONE">XBOX ONE</option>
							<option value="PS4">PS4</option>
							<option value="PC">PC</option>
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
			
			
			<!-- Racing Game 2-->
			<div class = "outer">
			
			<p id="title">Forza Horizon 3</p>
				<div class = "wrap_left">
				
					<div id = "video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/vD1ccSM9qiA" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
					<p>Forza Horizon 3 is an open world racing video game developed by Playground Games and published by Microsoft Studios for Xbox One and Microsoft Windows 10. The game features cross-platform play between the two platforms</p>
				</div>
				
				<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						<p>Price: <span style="background-color:green;font-size:1.1em;">
						20%off </span>
						<span style="text-decoration: line-through;font-size:1.6em;color:grey"> $59.00</span>
						<span style="font-size:1.6em;"> $48.00</span>
						<br/>Category: Racing<br/>Developer: Playground Games<br/>
						Publisher: Microsoft<br/>
						Release Date: Sep 27, 2016<br/>
						Platform: Xbox one, PC
						</p>
					</div>
					
					
					
							<div id = "game_img">
							<img src="img/games/game_racing01.png">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Forza Horizon 3">
							<input type="hidden" name="item_number" value="ACO">
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
			
			
			<!-- Racing Game 3-->
			<div class = "outer">
			
			<p id="title">Project Cars 2: Collector's Edition</p>
				
				<div class = "wrap_left">
				
					<div id = "video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/0YrrK92fQmk" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
						<p>Project CARS 2 is a motorsport racing simulator video game developed by Slightly Mad Studios and published and distributed by Bandai Namco Entertainment.</p>
				</div>
				
				<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						<p>Price:
						<span style="font-size:1.6em;"> $59.00</span>
						<br/>Category: Racing<br/>Developer: Slightly Mad Studios<br/>
						Publisher: Bandai Namco Entertainment<br/>
						Release Date: Sep 22, 2017<br/>
						Platform: Xbox one, PC, PS4
						</p>
					</div>
					
					
					
							<div id = "game_img">
							<img src="img/games/game_racing02.jpg">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Project Cars 2: Collector's Edition">
							<input type="hidden" name="item_number" value="ACO">
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
				
			<!-- Racing Game 4-->	
			</div>
			
			
			
			<div class = "outer">
			
			<p id="title">Gran Turismo Sport</p>
			
				<div class = "wrap_left">
				
					<div id = "video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/0siGVASN9PQ" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
					<p>Gran Turismo Sport is a racing video game developed by Polyphony Digital and published by Sony Interactive Entertainment for PlayStation 4.</p>		
				</div>
				
				<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						<p>Price:
						<span style="font-size:1.6em;"> $59.00</span>
						<br/>Category: Racing<br/>Developer: Polyphony Digital<br/>
						Publisher: Sony Interactive Entertainment<br/>
						Release Date: Nov 10, 2017<br/>
						Platform: PS4
						</p>
					</div>
					
					
					
							<div id = "game_img">
							<img src="img/games/game_racing03.png">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Gran Turismo Sport">
							<input type="hidden" name="item_number" value="ACO">
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
	<body id="body_racing">
	
	<div class = "container">
	<!-- Top of the page that use the logo-->
		<div class = "top">
			
			<img src="img/logo/logo2.png">
			
		</div>
		<!-- Navegation bar block-->
		<div class = "navbar_2">
			<nav>
				<ul class="cf">
					<li><a class="dropdown" href="index.html">Home</a>
						
					</li>
					
					<li><a class="dropdown" href="#">Genre</a>
						<ul>
							<li><a href="page_adventure.html">Adventure</a></li>
							<li><a href="page_shooter.html">Shooter</a></li>
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
		<div class = "bump_racing">
			
			<img src="img/bump/bump_racing1.png">
			
		</div>
	
		
		<!-- Feature games block-->
		
		<!-- Racing Game 1-->	
			<div class = "outer">
				<p id="title">Need For Speed: Payback</p>
					<div class = "wrap_left">
					
						<div id = "video">
							<iframe  src="https://www.youtube.com/embed/K-5EdHZ0hBs" frameborder="0" gesture="media" allowfullscreen></iframe>
						</div>
							<p>Need for Speed Payback is a racing video game developed by Ghost Games and published by Electronic Arts for Microsoft Windows, PlayStation 4 and Xbox One.
							It is the twenty-third installment in the Need for Speed series. The game was revealed with a trailer released on June 2, 2017.
							The game was released worldwide on November 10, 2017</p>			
					</div>
				
								<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						 <p>Price: 
						
						<span style="font-size:1.6em;"> $59.99</span>
						<br/>Category: Racing<br/>Developer: Ghost Games <br/>
						Publisher: Electronic Arts<br/>
						Release Date: Nov 10, 2017<br/>
						Platform: PS4, Xbox One, PC
						</p>
					</div>
					
					
					
					<div id = "game_img">
							<img src="img/games/game_racing0.png">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Need For Speed: Payback">
							<input type="hidden" name="item_number" value="ACO">
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
							
							<option value="XBOX ONE">XBOX ONE</option>
							<option value="PS4">PS4</option>
							<option value="PC">PC</option>
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
			
			
			<!-- Racing Game 2-->
			<div class = "outer">
			
			<p id="title">Forza Horizon 3</p>
				<div class = "wrap_left">
				
					<div id = "video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/vD1ccSM9qiA" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
					<p>Forza Horizon 3 is an open world racing video game developed by Playground Games and published by Microsoft Studios for Xbox One and Microsoft Windows 10. The game features cross-platform play between the two platforms</p>
				</div>
				
				<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						<p>Price: <span style="background-color:green;font-size:1.1em;">
						20%off </span>
						<span style="text-decoration: line-through;font-size:1.6em;color:grey"> $59.00</span>
						<span style="font-size:1.6em;"> $48.00</span>
						<br/>Category: Racing<br/>Developer: Playground Games<br/>
						Publisher: Microsoft<br/>
						Release Date: Sep 27, 2016<br/>
						Platform: Xbox one, PC
						</p>
					</div>
					
					
					
							<div id = "game_img">
							<img src="img/games/game_racing01.png">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Forza Horizon 3">
							<input type="hidden" name="item_number" value="ACO">
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
			
			
			<!-- Racing Game 3-->
			<div class = "outer">
			
			<p id="title">Project Cars 2: Collector's Edition</p>
				
				<div class = "wrap_left">
				
					<div id = "video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/0YrrK92fQmk" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
						<p>Project CARS 2 is a motorsport racing simulator video game developed by Slightly Mad Studios and published and distributed by Bandai Namco Entertainment.</p>
				</div>
				
				<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						<p>Price:
						<span style="font-size:1.6em;"> $59.00</span>
						<br/>Category: Racing<br/>Developer: Slightly Mad Studios<br/>
						Publisher: Bandai Namco Entertainment<br/>
						Release Date: Sep 22, 2017<br/>
						Platform: Xbox one, PC, PS4
						</p>
					</div>
					
					
					
							<div id = "game_img">
							<img src="img/games/game_racing02.jpg">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Project Cars 2: Collector's Edition">
							<input type="hidden" name="item_number" value="ACO">
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
				
			<!-- Racing Game 4-->	
			</div>
			
			
			
			<div class = "outer">
			
			<p id="title">Gran Turismo Sport</p>
			
				<div class = "wrap_left">
				
					<div id = "video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/0siGVASN9PQ" frameborder="0" gesture="media" allowfullscreen></iframe>
					</div>
					<p>Gran Turismo Sport is a racing video game developed by Polyphony Digital and published by Sony Interactive Entertainment for PlayStation 4.</p>		
				</div>
				
				<div class = "wrap_right"> <!-- Right block-->
					<div id = "game_text">
						<p>Price:
						<span style="font-size:1.6em;"> $59.00</span>
						<br/>Category: Racing<br/>Developer: Polyphony Digital<br/>
						Publisher: Sony Interactive Entertainment<br/>
						Release Date: Nov 10, 2017<br/>
						Platform: PS4
						</p>
					</div>
					
					
					
							<div id = "game_img">
							<img src="img/games/game_racing03.png">
							<div id = "clear"></div>
						
						
						<form target="PayPal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0;padding:0;">
							<input type="hidden" name="business" value="ljb2k5@gmail.com">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="item_name" value="Gran Turismo Sport">
							<input type="hidden" name="item_number" value="ACO">
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
>>>>>>> 50d5de1c0db865ff9112b264f243e05a8e1125d9:page_racing.php
</html>