<?php
session_start();

unset($_SESSION['user']); // delete the user session variable

header('Location: index.php');
exit;
