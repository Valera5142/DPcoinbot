<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['email']);
unset($_SESSION['img']);
header("Location: ../index.php");
