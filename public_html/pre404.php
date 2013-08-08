<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Handy_man's MOTD</title>
	<link href="css/pre404.css" media="screen" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
	<script type="text/javascript">
	function GameDetails( servername, serverurl, mapname, maxplayers, steamid, gamemode ) {
		$("#dont_want").append("" + serverurl + "");
		$(".in_content_sn").append("" + servername + "");
		$(".NOTINUSE").append("" + maxplayers + "");
		$(".NOTINUSE").append("" + steamid + "");
		$(".in_content_gm").append("" + gamemode + "");
		$(".in_content_map").append("" + mapname + "");
	}


	function SetStatusChanged( status ) {
		$(".in_status").append("" + status + "");
	}
	</script>
	
	<?PHP
	//Get the steamid (really the community id)
$communityid = $_GET["steamid"];
//See if the second number in the steamid (the auth server) is 0 or 1. Odd is 1, even is 0
$authserver = bcsub($communityid, '76561197960265728') & 1;
//Get the third number of the steamid
$authid = (bcsub($communityid, '76561197960265728')-$authserver)/2;
//Concatenate the STEAM_ prefix and the first number, which is always 0, as well as colons with the other two numbers
$steamid = "STEAM_0:$authserver:$authid";
	
$link = file_get_contents('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=CA269D3FE157CBEA7386C9830FCC218D&steamids=' . $communityid . '&format=json');
$myarray = json_decode($link, true);
		?>

<body>
	<div id="page">
		<div id="site_title">
			<span>www.SNGaming.org</span>
		</div>
		<div id="dynamic_content">
		<span class="in_title">Server name:</span>
		<span class="in_content_sn"></span>
		<span class="in_title">Gamemode:</span>
		<span class="in_content_gm"></span>
		<span class="in_title">server ip:</span>
		<span class="in_content"><?php print $myarray['response']['players'][0]['gameserverip']; ?></span>
		<span class="in_title">Current map:</span>
		<span class="in_content_map"></span>
		</div>
		<div id="primary_content">
		Welcome to a test example webpage of a loadingurl, we can insert some rules here or maybe a welcome message.
		</div>
		
		<div id="status_content">
		<span class="in_status"></span>
		</div>
		
		<div id="avatar_content">
		<img src='<?php print $myarray['response']['players'][0]['avatarfull']; ?>'/>
		</div>
		<div id="secondary_content">
		<span class="center">
		Welcome, 
		<?php print $myarray['response']['players'][0]['personaname']; ?>
		Perhaps i can insert a better welcome message here by using their name?
		</span>
		</div>
		</div>

</body>

</html>