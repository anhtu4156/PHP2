<?php
// Mảng số đầu vào
$mangSo = [1, 2, 3, 4, 5];
$ketQua = [];
function tinhTongVaTrungBinh($mangSo)
{
    // ktra xem mảng có phần tử hay không
    if (empty($mangSo)) {
        return ['tong' => 0, 'trungBinh' => 0];
    }

    // tính tổng
    $tong = array_sum($mangSo);

    // tính trung bình cộng
    $soLuong = count($mangSo);
    $trungBinh = $tong / $soLuong;

    // trả về kết quả
    return ['tong' => $tong, 'trungBinh' => $trungBinh];
}

// nhập và lấy mảng số
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // check form
    if (isset($_POST['mangSo'])) {
        $mangSoNhap = $_POST['mangSo'];

        // chuyển chuỗi nhập thành mảng số
        // Hàm explode tách chuỗi
        // Hàm intval chuyển đổi một giá trị thành số nguyên
        // Hàm array_map sẽ trả về một mảng mới
        $mangSo = array_map('intval', explode(',', $mangSoNhap));
        
    }
}

?>
<form action="#" method="post">
    <label for="mangSo">Nhập mảng số (các số cách nhau bằng dấu phẩy): </label><br>
    <input type="text" name="mangSo" id="mangSo" required>
    <input type="submit" name="submit" value="Tính">
</form><br>
<table border="1">
    <thead>
        <th>tổng</th>
        <th>trung bình</th>
    </thead>
    <tbody>
        <?php
        // lấy kết quả
        $ketQua = tinhTongVaTrungBinh($mangSo);
        echo "<tr>
                    <td>$ketQua[tong]</td>
                    <td>$ketQua[trungBinh]</td>
                </tr>";
        ?>

    </tbody>
</table>