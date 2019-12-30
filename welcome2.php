<?php
session_start();
echo "welcome". $_SESSION['email'];
echo "logout";
?>