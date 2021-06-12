<?php require 'config.php'; ?>
<?php require 'nav.php' ?>
<?php
    $qty=$_GET['qty'];
    $pid=$_GET['id'];
    $sql="SELECT * from maskcatalog where id=$pid;";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
    $name=$row["name"];
    $price=$row["price"];
    $total=$qty*$price;
    $accountid=$_SESSION['accountid'];

    $sql="SELECT * from account where id=$accountid;";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
    $username=$row["username"];
    $custid=$row["custid"];

    $sql="SELECT * from customer where id=$custid;";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
    $email=$row["emailid"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paypal Integration Test</title>
</head>
<body>

    <form class="paypal" action="payments.php" method="post" id="paypal_form">
        <input type="hidden" name="cmd" value="_xclick" />
        <input type="hidden" name="no_note" value="1" />
        <input type="hidden" name="lc" value="UK" />
        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
        <input type="hidden" name="first_name" value="<?php echo $username; ?>" />
        <input type="hidden" name="last_name" value="" />
        <input type="hidden" name="payer_email" value="<?php echo $email; ?>" />
        <input type="hidden" name="item_name" value="<?php echo $name; ?>" />
        <input type="hidden" name="item_number" value="<?php echo $pid; ?>" />
        <input type="hidden" name="qty" value="<?php echo $qty; ?>" />
        <input type="hidden" name="price" value="<?php echo $price; ?>" />
        <input type="hidden" name="total" value="<?php echo $total; ?>" />
        <input type="submit" name="submit" value="Submit Payment"/>
    </form>

</body>
</html>