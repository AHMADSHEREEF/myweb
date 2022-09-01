<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
        body {
                margin: 0;
                padding: 0;
        }
        .navbar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                background-color: rgb(50, 173, 171);
                font-size: 20px;
                padding-left: 20px; 
                padding-right: 20px;
                font-weight: 700;
                color: white;
                padding-bottom: 10px;
                padding-top: 10px;
        }
        .navbar1 {
                display: flex;
                justify-content: space-between;
                align-items: center;
        }

        .login {
                margin-right: 20px;
        }

        .navbar2 {
                display: flex;
                justify-content: space-between;
                align-items: center;
        }

        .share {
                margin-right: 20px;
                margin-left: 20px;
        }
        </style>
</head>
<body>


<div class="navbar">
                <div class="navbar2">
                <a href="./products.php">دەستپێک</a>
                <a href="./add.php" class="share">پارڤەکرن</a>
                <a href="./users.php">بکارهێنەر</a>
                   
                </div>
               <div class="navbar1">
                <a href="./login.php" class="login">چوونا ژوور</a>
                <a href="./register.php">خوتومارکرن</a>
               </div>
        </div>








<div class="container">    
  <div class="row">

  <?php
require_once('database.php');

$sql = "SELECT * FROM product";
$anjam = mysqli_query($connect, $sql);
while($products = mysqli_fetch_assoc($anjam)) {

?>

<a href="product.php?id=<?php echo $products['id'];  ?>">
  <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading"><?php echo $products['product_name'];  ?></div>
        <div class="panel-body"><img src="<?php echo $products['product_image'];  ?>" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><?php echo $products['product_price'];  ?></div>
      </div>
    </div>
</a>

    <?php
    }
    ?>

</div>
</div>
<br><br><br><br>
</body>
</html>