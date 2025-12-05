<?php
session_start();
session_destroy();

header("Location: 13-3.php");
exit;
?>
