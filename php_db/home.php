<?php
session_start();
echo "welcome $_SESSION[email]";
?>
<br/>
<a href="logout.php">LOGOUT</a>
<a href="profile.php">PROFILE</a>