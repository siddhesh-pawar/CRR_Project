<?php
include('PHP/link.php');
session_start();
unset($_SESSION['session_user']);
unset($_SESSION['session_name']);
unset($_SESSION['access_id']);

header("Location:../../index_1.php");
