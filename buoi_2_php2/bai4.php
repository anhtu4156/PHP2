<?php
$soNhap =0;
function tinhGiaiThua($n) {
    if ($n < 0) {
        return "Không thể tính giai thừa cho số âm.";
    }

    if ($n == 0 || $n == 1) {
        return 1;
    }

    $giaiThua = 1;
    for ($i = 2; $i <= $n; $i++) {
        $giaiThua *= $i;
    }

    return $giaiThua;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // check form
    if (isset($_POST['so'])) {
        $soNhap = $_POST['so'];

    }
}
?>
<form action="#" method="post">
    <label for="so">Nhập số cần tính:</label><br>
    <input type="number" name="so" id="so" required>
    <input type="submit" name="submit" value="Tính">
</form><br>
<table border="1">
    <thead>
        <th>số</th>
        <th>kết quả</th>
    </thead>
    <tbody>
        <?php
        // lấy kết quả
        $ketQua = tinhGiaiThua($soNhap);
        echo "<tr>
                    <td>$soNhap</td>
                    <td>$ketQua</td>
                </tr>";
        ?>

    </tbody>
</table>