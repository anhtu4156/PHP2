<?php
session_start();
if (!isset($_SESSION['sanpham'])) {
    $_SESSION['sanpham'] = array();
}
$sanpham = $_SESSION['sanpham'];

// Hàm thêm 
function themSP($ma, $ten, $gia)
{
    global $sanpham;
    $sanpham[$ma] = ['ten' => $ten, 'gia' => $gia];
    $_SESSION['sanpham'] = $sanpham;
}

if (isset($_GET['ma']) && $_GET['ten'] && $_GET['gia']) {
    $ma = $_GET['ma'];
    $ten = $_GET['ten'];
    $gia = $_GET['gia'];
    echo $ten;
    echo $ma;
    echo $gia;
    if (isset($_GET['add']) && $_GET['add']) {
        themSP($ma, $ten, $gia);
    }
}
print_r($sanpham);
?>

<form action="#" method="get">
    <label for="ma">nhập mã sản phẩm</label>
    <input type="text" name="ma" id="ma"><br><br>
    <label for="ten">nhập tên sản phẩm</label>
    <input type="text" name="ten" id="ten"><br><br>
    <label for="gia">nhập giá sản phẩm</label>
    <input type="text" name="gia" id="gia"><br><br>
    <input type="submit" name="add" value="add"><br><br><br><br>
</form>

<form action="#" method="get">
    <input type="text" name="timma">
    <input type="submit" value="timma" name="tim">
</form>

<table border="1" style="text-align: left;">
    <thead>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Giá sản phẩm</th>
    </thead>
    <tbody>

        <?php
        if (isset($_GET['timma'])) {
            $timMa = $_GET['timma'];
            foreach ($sanpham as $ma => $value) {
                if (stripos($ma, $timMa) !== false) {
                    $ten = $value['ten'];
                    $gia = $value['gia'];
                    echo "<tr>
                        <td>$ma</td>
                        <td>$ten</td>
                        <td>$gia</td>
                      </tr>";
                }
            }
        } else {
            foreach ($sanpham as $ma => $value) {
                $ten = $value['ten'];
                $gia = $value['gia'];
                echo "<tr>
                        <td>$ma</td>
                        <td>$ten</td>
                        <td>$gia</td>
                    </tr>";
            }
        }

        ?>
    </tbody>
</table>