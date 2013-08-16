<?php
	//The title, usually your web address but can just be something like "The fancy pants community"
	$title_text = "";
	//Use custom font type, lots of different custom fonts can be found here: http://www.dafont.com/
	$custom_font = false;
	//Custom font source (if we're using a custom font type, we need the source of that fonts location) example : http://www.yourwebsitehere.com/loading/myfont.ttf
	$font_src = "";
	
	//Your steamAPI key, this is required and can be applied for here: http://steamcommunity.com/dev
	$steam_api = "";
	
	//Custom serverip, the serverip address comes from Steam data. If a user's profile is set to private/friends only this field will be blank, so set a custom one.
	$custom_serverip = false;
	
	//This is useful for when you want user's to check for a dns (exmaple: ttt.sngaming.org) for your server, or they have a private profile.
	$serverip_text = "";
	
	//The largest visible background colour by default: #2C3539 
	//Will not function/ be used if $bgimg_enabled = true, if your background isn't this colour set $bgimg_enabled to false. 
	$body_main = "#2C3539";
	
	//The gradient at the top going to the bottom. Default: #1765B5
	$header_top_gradient = "#1765B5";
	//The gradient at the bottom going to the top/ Default: #2096E1
	$header_bot_gradient = "#2096E1";
	
	//Title colour background. Default: #1061B3 or R:16 G:97 B:179
	$title_red = "16";
	$title_green = "97";
	$title_blue = "179";
	
	//The colour of all the font in the loadingurl. Defualt: white
	$text_colour = "white";
	
	//Dropshadow colour. Default: #1589FF
	$drop_colour = "#1589FF";
	
	//Community name in welcome message
	$com_name = "";
	
	//Welcome message text. (LEAVE BLANK IF NOT REQUIRED)
	$welcome_message_1 = "";
	
	//Welcome message text for a second paragraph with 5px distance between the first paragraph and the second. (LEAVE BLANK IF NOT REQUIRED)
	$welcome_message_2 = "";
	
	//Welcome message text for a third paragraph with 5px distance between the first paragraph and the second. (LEAVE BLANK IF NOT REQUIRED)
	$welcome_message_3 = "";
	
	//NEW SINCE 1.1
	//This is the true/false boolean for if you want the information such as serverip, gamemode etc to line up with the results as seen here: http://www.thehiddennation.com/coderhire-example4.png set to true, else false.
	$lined_up = true;
	
	//NEW SINCE 1.2
	//This enables a background image to be used over the normal plain background colour
	$bgimg_enabled = false;
	
	//The background of the entire loadingurl can be generated here, please insert an absolute reference link to the image, preferably this would be on your website host.
	//Example image used in coderhire-example5.png: http://www.hdwallpapers3d.com/wp-content/uploads/2013/05/3d-abstract-hd-wallpaper.jpg NOTE: I do not own the copyright to this image.
	$bgimg_src = "";
	
	//All content is split up into box's, this is the opacity of that box (ability to see through the box) allowing you to see background colour's/ images.
	$opaque_enabled = true;
	
	//All content is split up into box's this is the colour of that box, default R:0 G:0 B:0 AKA black.
	$box_backgroud_red = "0";
	
	//All content is split up into box's this is the colour of that box, default R:0 G:0 B:0 AKA black.
	$box_backgroud_green = "0";
	
	//All content is split up into box's this is the colour of that box, default R:0 G:0 B:0 AKA black.
	$box_backgroud_blue = "0";
?>