<?php

require __DIR__ . "/functions.php";


session_start();

session_destroy();

redirect("../index.php");

?>