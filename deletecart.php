<?php require 'config.php' ?>
<?php
    session_start();
    $id=$_GET['id'];
    $sql="delete from maskscart where id=$id and accountid=".$_SESSION['accountid'];
    $conn->query($sql);
    //header('Location:'.'cart.php');
?>