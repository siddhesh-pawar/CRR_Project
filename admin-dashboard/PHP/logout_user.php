<?php
include('PHP/link.php');
session_start();
unset($_SESSION['user_email']);
unset($_SESSION['user_name']);
unset($_SESSION['user_name']);

header("Location:../../index_1");
