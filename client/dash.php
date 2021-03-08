<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


require __DIR__ . "../../functions.php";
require __DIR__ . "../../discord.php";
require __DIR__ . "../../cgi-bin/config.php";


?>

<html>
<head>
	<title>Demo - Discord Oauth</title>
	<link rel="stylesheet" href="../assets/style.css">
</head>

<body>
	<header> <span class="logo">Demo - Discord Oauth</span> 
		<span class="menu"> 
		<?php
			#$auth_url = url($client_id, $redirect_url, $scopes);
			if(isset($_SESSION['user'])) { 
				echo '<a href="/logout.php"><button class="log-in">LOGOUT</button></a>'; 
			}

			else { 
				echo "<a href='https://discord.com/oauth2/authorize?response_type=code&client_id=805091349883650048&redirect_uri=&scope=identify+guilds&state=d1ca1f7237bf707738b1c229'><button class='log-in'>LOGIN</button></a>"; 
			}
		?>
		</span>
	</header>
	<h1 style="text-align: center;">A Simple Working Demo of the Script </h2>
	<?php
		if(!isset($_SESSION['user'])) {
			echo "<h2 style='color:red; font-weight:900; text-align: center;'> LOGIN WITH THE LINK BELOW TO SEE IT WORK! </h3>";
		}
	?>
	<h2> User Details :</h2>
	<p> Name : <?php echo $_SESSION['username'] . '#'. $_SESSION['discrim']; ?></p>
	<p> ID : <?php echo $_SESSION['user_id']; ?></p>
	<p> Profile Picture : <img src="https://cdn.discordapp.com/avatars/<?php $extention = is_animated($_SESSION['user_avatar']); echo $_SESSION['user_id'] . "/" . $_SESSION['user_avatar'] . $extention; ?>"/></p>
	<br>
	<h2>User Response :</h2>
		<div class="response-block"><p><?php echo json_encode($_SESSION['user']); ?></p></div>
	<br>
	<h2> User Guilds :</h2>
		<table border="1">
		<tr>
			<th>NAME</th>
			<th>ID</th>
		</tr>
		<?php
		for($i = 0; $i < sizeof($_SESSION['guilds']); $i++) {
			echo "<tr><td>";
			echo $_SESSION['guilds'][$i]['name'];
			echo "<td>";
			echo $_SESSION['guilds'][$i]['id'];
			echo "</td>";
			echo "</tr></td>";
		}
		?>
		</table>
		<br>
	<h2> User Guilds Response :</h2>
		<div class="response-block"><p> <?php echo json_encode($_SESSION['guilds']); ?></p></div>
</body>
</html>