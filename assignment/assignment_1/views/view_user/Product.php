<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="alert alert-primary text-center ">
        CHÀO MỪNG ĐẾN VỚI TRANG SẢN PHẨM
    </div>

    <div class="grid d-flex justify-content-around" style="width: 650px;">
    <?php
    foreach($listProduct as $product){
        extract($product);
        echo '<div class="d-flex flex-column justify-content-center text-center">
        <img src="'.$image.'" alt="" style="width: 200px;">
        <p>200000</p>
        <a href="index.php?url=cart&idPr='.$id .'">add to cart</a>
        <h4>'.$name.'</h4>
        </div>';
    }
    
    ?>
    </div>

</body>

</html>