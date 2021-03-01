<?php
    require('nav.php');
    require('config.php');  
    if (isset($_GET['id'])) {
        $sql = "SELECT id,name,price,imagename FROM maskcatalog where category=1";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $name=$row["name"];
                    $price=$row["price"];
                    $description=$row["description"];
                    $imgname=$row["imagename"];
                    $id=$row["id"];
                }
            }
            else
            {
                header('Location: ' . 'catalog.php');
            }
    }
    else
    {
        header('Location: ' . 'catalog.php');
    }
?>