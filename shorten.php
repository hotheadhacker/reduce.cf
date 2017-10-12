<?php
session_start();
require_once 'Shortener.php';

$s = new Shortener;
if(isset($_POST['url'])){
  $url = $_POST['url'];
    
    if($code = $s->makeCode($url)){
        $_SESSION['feedback'] = "Generated! Your short URL is <a href=\"http://localhost/shrinkit/{$code}\">http://localhost/shrinkit/{$code}</a>";
    }
    else{
        //There was an error
        $_SESSION['feedback'] = "There was a problem. Invalid URL, perhaps?";
    }
    
}

header('location:index.php');
