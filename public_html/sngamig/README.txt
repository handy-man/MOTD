** Readme **

Copyright © 2013 - 2014 www.thehiddennation.com

---------

Authors: Handy_man

Website: www.thehiddennation.com

Contact-email: administrator@thehiddennation.com

Contact-steam: http://steamcommunity.com/id/Handy_man/

---------

Prerequisites
 * Webserver
   o PHP 5.0+
  * GameServer
   o Access to edit your server.cfg file
   
---------

Instructions:

Installation of the loadingurl is very simple and easy to do, please follow the simeple steps below:

1. Edit 'config.php' file found in this directory with all bits of information that's relevent to your community.
2. Edit 'index.php' from lines 66 - 145 taking out the "example" lines and replacing them with your own rules. (keeping in mind that Example 1 - 10 are on the left and Example 11 - 20 are on the right)
3. Upload 'config.php', 'index.php' & 'styles.php' to your website inside of an empty directory.
4. Edit your server.cfg sv_loadingurl to include your php file with the addition of ?steamid=%s" an example would be: sv_loadingurl "http://www.thehiddennation.com/loading/index.php?steamid=%s"
5. You should be able to join your server and see the loadingurl with all information filled in.

Follow up:

Should you want to change anything further such as the colour scheme just edit your 'config.php' either on the server or locally and make sure that copy is on your webserver.