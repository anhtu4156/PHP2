<?php
$soNhap =0;
$soMu = 0;
function tinhLuyThua($so, $mu) {
    if ($mu < 0) {
        return "Không thể tính lũy thừa với số mũ âm.";
    }

    $luyThua = 1;
    for ($i = 1; $i <= $mu; $i++) {
        $luyThua *= $so;
    }

    return $luyThua;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // check form
    if (isset($_POST['so'])) {
        $soNhap = $_POST['so'];
        $soMu = $_POST['mu'];

    }
}
?>
<form action="#" method="post">
    <label for="so">Nhập số cần tính:</label><br>
    <input type="number" name="so" id="so" required><br>
    <label for="mu">Nhập số mũ:</label><br>
    <input type="number" name="mu" id="mu" required>
    <input type="submit" name="submit" value="Tính">
</form><br>
<table border="1">
    <thead>
        <th>số nhập</th>
        <th>số mũ</th>
        <th>kết quả</th>
    </thead>
    <tbody>
        <?php
        // lấy kết quả
        $ketQua = tinhLuyThua($soNhap,$soMu);
        echo "<tr>
                    <td>$soNhap</td>
                    <td>$soMu</td>
                    <td>$ketQua</td>
                </tr>";
        ?>

    </tbody>
</table>