<?php
include('link.php');
session_start();
unset($_SESSION['admin_email']);
unset($_SESSION['admin_name']);
unset($_SESSION['admin_id']);

header("Location:../sign-in");
