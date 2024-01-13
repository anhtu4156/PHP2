<?php

    extract($oldProduct);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input value="<?= $ten_sp ?>" type="text" name="name" id="" placeholder="tên sản phẩm">
        <input value="<?= $gia ?>" type="text" name="price" id="" placeholder="Giá">
        <input type="submit" name="update" id="">
    </form>
</body>
</html>