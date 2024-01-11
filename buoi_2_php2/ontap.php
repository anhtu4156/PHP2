<?php

// khai báo biến 
// $a = 0;
// $name = 'tu';
// echo $name . '<br>';
// echo $a . '<br>';

// mảng 
// mảng tuần tự
// $arr = [1,2,3,4,5];
// echo $arr[2] . '<br>';
// print_r($arr);
// var_dump($arr);
// for($i = 0; $i <count($arr); $i++){
// echo $arr[$i] . '<br>';
// }

// mảng liên hợp
$manglh = ["red" => "mau do", "green" => "mau xanh", "blue" => "xanh duong", "yellow" => "mau vang"];
// echo $manglh["green"];
// foreach($manglh as $key => $value){
//     echo "vi tri: " . $key . "_gia tri:" . $value .'<br>';
// }
?>

<!-- <table border="1" style="text-align: left;">
    <thead>
        <th>vi tri</th>
        <th>gia tri</th>
    </thead>
    <tbody>
        <?php
        // foreach($manglh as $key => $value){
        //     echo"<tr>
        //             <td>$key</td>
        //             <td>$value</td>
        //         </tr>";
            
        // }
        ?>
    </tbody>
</table> -->

<?php
// ham dung de dong goi cac chuc nang trong 1 doan truong trinh
// giup clean code va tai su dung code

// kiem tra so chan le
// function kt($n){
//     // $n la tham so
//     // co the co nhieu tham so duoc cach nhau boi dau phay
//     if($n % 2 == 0){
//         echo "$n la so chan";
//     }else{
//         echo "$n la so le";
//     }
// }

// kt(5);


// ham co tra ve
// tinh dien tich hinh chu nhat

function dienTichHCN($a, $b) {
    return $a * $b;
}

echo dienTichHCN(3,4);