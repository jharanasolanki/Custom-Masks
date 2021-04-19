<?php require 'config.php' ?>
<?php
session_start();
    if(!isset($_SESSION['username']))
    {
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
            $url = "https://";   
        else     
            $url = "http://";   
        $url.= $_SERVER['HTTP_HOST'];   
        $url.= $_SERVER['REQUEST_URI'];    
        $_SESSION['back']=$url;
        header('Location:'.'signin.php');
    }
    if(!isset($_GET['pid']))
    {
        header('Location:'.'catalog.php');
    }
    $accountid=$_SESSION['accountid'];
    $pid=$_GET['pid'];
    $sql="insert into maskwishlist(custid,pid) values($accountid,$pid)";
    $conn->query($sql)
?>