<?php



# Enabling error display
error_reporting(E_ALL);
ini_set('display_errors', 1);
 
# Including all the required scripts for demo
require __DIR__ . "/discord.php";
require __DIR__ . "/functions.php";
require "cgi-bin/config.php";
 
init($redirect_url, $client_id, $secret_id, $bot_token);
 
get_user();

# Adding user to guild | (guilds.join scope)
# join_guild('SERVER_ID_HERE');

$_SESSION['guilds'] = get_guilds();

redirect("../client/dash.php");

?>