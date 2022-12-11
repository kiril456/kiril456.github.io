<?php

include("path.php");
session_start();

unset( $_SESSION['id']);
unset( $_SESSION['login']);
unset($_SESSION['admin']);
unset($_SESSION['count']);


header('Location: ' . BASE_URL);
