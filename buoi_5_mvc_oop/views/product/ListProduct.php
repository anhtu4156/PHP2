
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <a href="index.php?url=them">thêm sản phẩm</a> -->
    <form action="index.php?url=them" method="post">
        <input type="text" name="name" id="" placeholder="tên sản phẩm">
        <input type="text" name="price" id="" placeholder="Giá">
        <input type="submit" name="send" id="">
    </form><br>
    <table border="1">
        <tr>
            <td>id</td>
            <td>ten sản phẩm</td>
            <td>giá</td>
            <td>hành động</td>
        </tr>
        <?php
        foreach($products as $value){
            extract($value);
            echo"  <tr>
            <td>$id</td>
            <td>$ten_sp</td>
            <td>$gia</td>
            <td><a href='index.php?url=sua&idPr=$id'>sửa</a><a href='index.php?url=xoa&idPr=$id'>xoa</a></td>
            </tr>";
        }
        ?>
        
    </table>
</body>
</html>