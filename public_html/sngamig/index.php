<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>Dynamic Loadingurl</title>
		<link href="styles.php" media="screen" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	</head>
	<script type="text/javascript">
		function GameDetails( servername, serverurl, mapname, maxplayers, steamid, gamemode ) {
			$(".NOTINUSE").append("" + serverurl + "");
			$(".in_content_sn").append("" + servername + "");
			$(".NOTINUSE").append("" + maxplayers + "");
			$(".NOTINUSE").append("" + steamid + "");
			if (gamemode == "terrortown"){
			$(".in_content_gm").append("Trouble In Terrorist Town");
			}
			else{
			$(".in_content_gm").append("" + gamemode + "");
			}
			$(".in_content_map").append("" + mapname + "");
		}
		function SetStatusChanged( status ) {
			$(".in_status").empty();
			$(".in_status").append("" + status + "");
		}
	</script>
<?PHP
	//Include our config file, we need this to get certain variables that we changed.
	require("./config.php");	
	//Get the steamid (really the community id)
	$communityid = $_GET["steamid"];
	//See if the second number in the steamid (the auth server) is 0 or 1. Odd is 1, even is 0
	$authserver = bcsub($communityid, '76561197960265728') & 1;
	//Get the third number of the steamid
	$authid = (bcsub($communityid, '76561197960265728')-$authserver)/2;
	//Concatenate the STEAM_ prefix and the first number, which is always 0, as well as colons with the other two numbers
	$steamid = "STEAM_0:$authserver:$authid";
	$link = file_get_contents('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=' . $steam_api . '&steamids=' . $communityid . '&format=json');
	$myarray = json_decode($link, true);
?>
<body>
	<div id="header"></div>
	<div id="site_title">
		<span><?php echo $title_text;?></span>
	</div>
	<div id="page">
		<div id="dynamic_content">
			<span class="in_title">Server name:</span>
			<span class="in_content_sn"></span>
			<span class="in_title">Gamemode:</span>
			<span class="in_content_gm"></span>
			<span class="in_title">server ip:</span>
			<span class="in_content"><?php
				if ($custom_serverip == false){
			print $myarray['response']['players'][0]['gameserverip'];
			}
			else{
			echo $serverip_text;
			} 
			?></span>
			<span class="in_title">Current map:</span>
			<span class="in_content_map"></span>
		</div>
		<div id="primary_content">
			<span class="rules_title">Rules</span>
				<table>
					<tr>
						<td>
							<ul>
								<li>
								No Hacking
								</li>
								
								<li>
								No Racism or Hate speech
								</li>

								<li>
								No RDMing
								</li>

								<li>
								No Trolling
								</li>

								<li>
								Listen to the Admins
								</li> 
							</ul>
						</td>
						<td>
							<ul>
								<li>
								No Mic/Chat spamming
								</li>
								
								<li>
								No advertising
								</li>

								<li>
								No NSFW Sprays
								</li>

								<li>
								Read the MOTD
								</li>

								<li>
								Have Fun!
								</li> 
							</ul>
						</td>
					</tr>
				</table>
		</div>
			<div id="status_content">
				<span class="in_status"></span>
			</div>
			<div id="avatar_content">
				<img src='<?php print $myarray['response']['players'][0]['avatarfull']; ?>'/>
			</div>
			<div id="secondary_content">
				<span class="welcome_steam">
					Welcome, <?php print $myarray['response']['players'][0]['personaname']; ?> to the <?PHP echo $com_name; ?> community.
				</span>
				<span class="welcome">
					<?PHP
					if ($welcome_message_1 != ""){
					echo $welcome_message_1;
					}
					?>
				</span>
				<span class="welcome">
					<?PHP
					if ($welcome_message_2 != ""){
					echo $welcome_message_2;
					}
					?>
				</span>
				<span class="welcome">
					<?PHP
					if ($welcome_message_3 != ""){
					echo $welcome_message_3;
					}
					?>
				</span>
			</div>
	</div>
</body>
</html>