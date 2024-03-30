<?php
setcookie('user_id', '', time() - 3600, '/');
header("location: homepage.php");
exit;
