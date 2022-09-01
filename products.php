<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>products viewing and deleting</title>
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
        
        
















        <div class="container text-center">    
  <div class="row text-center">

<?php
require_once('database.php');

if(empty($_GET['delete'])) {

} else {
  $id = $_GET['delete'];
  $sql2 = "DELETE FROM product WHERE id = $id";
  if(mysqli_query($connect, $sql2) === TRUE) {
    echo "داتا هاتە ژێبرن";
  } else {
    echo "نەهاتە ژێبرن";
  }
}


$sql = "SELECT * FROM product";
$anjam = mysqli_query($connect, $sql);
while($product = mysqli_fetch_assoc($anjam)){
?>

    <div class="text-center"> 
      <div class="panel panel-danger">
        <div class="panel-heading"><?php echo $product['product_name'];  ?></div>s
        <div class="panel-footer"><?php echo $product['product_price'];  ?></div>
        <a href="products.php?delete=<?php echo $product['id'];  ?>" class="btn btn-danger">ژێبرن</a>

      </div>
    </div>
    <br> <br> <br>

<?php
}
?>
<br><br>
<br><br>
</div>
</div>



</body>
</html>