<?php require 'nav.php' ?>
<?php require 'config.php' ?>
<?php
    if(empty($_POST['id']) || empty($_POST['qty']))
    {
        header('Location:'.'catalogue.php');
    }
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

    $qty=$_POST['qty'];
    $pid=$_POST['id'];
    $imgval=$_POST['imgValue'];

    $sql="SELECT * from maskcatalog where id=$pid;";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
    $price=$row["price"]+200;

    $sql="insert into custommask(userid,img,price,created_at) values(".$_SESSION['accountid'].",'".$imgval."',".$price.",'".date("d-m-y")."');";
    $conn->query($sql);

    $sql="select * from custommask order by id desc limit 1";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
    $customid=$row['id'];

    $sql="SELECT * from maskcatalog where id=$pid;";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
    $name=$row["name"];
    $category="Custom Mask";
    $description=$row["description"];
    $imgname="images/masks/".$row['imagename'];
?>
<html>
    <head>
    <link rel="stylesheet" href="css/productpage.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    </head>
    <body>
        <div class="prodbody">
        
        <div hidden>
            <img id="myImage" src="<?php echo $imgname; ?>" width="auto" height="auto">
            <img id="myCustom" src="<?php echo $imgval; ?>" width="auto" height="auto">
        </div>
            <div class="prodimage">
            
            <canvas id="myCanvas" width="400px" height="500px" style="border:1px solid #d3d3d3;">
            Your browser does not support the HTML5 canvas tag.
            </canvas> 
                
            </div>
            
            <div class="prodinfo">
                <div class="prodcategory">/<?php echo $category; ?></div>
                <div class="prodtitle"><?php echo $name; ?></div>
                <div class="prodprice">$<?php echo $price; ?></div>
                <div id="price" hidden><?php echo $price; ?></div>
                <div class="qty">
                    <div class="qtybtn" onclick="subQty()">-</div>
                    <input type="number" name="qty" value="<?php echo $qty ?>" id="qty" readonly>
                    <div class="qtybtn" onclick="addQty()">+</div>
                </div>
                <div class="totaldiv">
                    <div class="total">Total: $ </div>
                    <div id="dprice" class="totalprice"><?php echo $price*$qty; ?></div>
                </div>
                <div class="buybutton" onclick="buy(<?php echo $customid.','.$price*$qty; ?>)"><img src="icons/buy.png" height="24px" weight="24px">   Buy Now</div>
                <br><br><br><br>
                <div class="buyfeatures">
                    <div class="feature">3 Days Delivery</div>
                    <div class="feature">Fresh Items</div>
                    <div class="feature">24/7 Customer Support</div>
                </div>
                <div class="prodabout">
                    <div class="prodheads">About this Item:</div>
                    <div class="proddesc"><?php echo $description; ?></div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="http://fabricjs.com/lib/fabric.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.7.20/fabric.min.js"></script>
    <script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.selectric.js"></script>
    <script src="http://rawgit.com/bramstein/fontfaceobserver/master/fontfaceobserver.js"></script>
    <script type="text/javascript">
        function addQty()
        {
            var qty=parseInt(document.getElementById("qty").value);
            document.getElementById("qty").value=qty+1;
            var price=parseFloat(document.getElementById("price").innerHTML);
            document.getElementById("dprice").innerHTML=(qty+1)*price;
        }
        function subQty()
        {
            var qty=parseInt(document.getElementById("qty").value);
            if(qty==1)
            {
                return;
            }
            document.getElementById("qty").value=qty-1;
            var price=parseFloat(document.getElementById("price").innerHTML);
            document.getElementById("dprice").innerHTML=(qty-1)*price;
        }
        function buy(pid,price)
        {
            var qty=parseInt(document.getElementById("qty").value);
            window.location.replace("buycustomitem.php?pid="+pid+"&qty="+qty);
        }

        window.onload = function() {
        var c = document.getElementById("myCanvas");
        var ctx = c.getContext("2d");
        var img = document.getElementById("myImage");
        ctx.drawImage(img, 5, 5,400,500);
        img = document.getElementById("myCustom");
        ctx.drawImage(img, 80, 80,250,300);
        };
    

</script>
</html>