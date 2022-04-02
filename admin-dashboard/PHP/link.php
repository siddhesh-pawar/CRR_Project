<?php

//live site credentials
// $link = mysqli_connect("localhost", "finstreet", "#Rajabeta420","finstreet");
// $baseurl = 'https://www.finstreet.in/';

// localhost
// local host link
$link = mysqli_connect("localhost", "root", "", "kriyata");



// test link
// $link = mysqli_connect("localhost", "test_cms", "AGYasmOCFOEU", "test_cms");
// local host base
$baseurl = 'http://localhost:8080/management_sys/';

// test host base
//  
if (mysqli_connect_error()) {
    die("<script>console.log('There is a problem with mysql connection')</script>");
}
