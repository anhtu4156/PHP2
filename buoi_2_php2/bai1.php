<?php
session_start();
if(!isset($_SESSION['danhba'])){
    $_SESSION['danhba']= array();
}
$danhba = $_SESSION['danhba'];


if(isset($_GET['ten']) && $_GET['sdt']){
    $ten = $_GET['ten']; 
    $sdt = $_GET['sdt'];
    echo $ten;
    echo $sdt;
    if(isset($_GET['save']) && $_GET['save']){
        save($danhba,$ten,$sdt);

    }
    
}

function save(&$danhba,$ten, $sdt) {
    global $danhba;
    $danhba[$ten] = $sdt;
    $_SESSION['danhba'] = $danhba;
}

print_r($danhba);

?>

<form action="#" method="get">
    <label for="ten">nhập tên danh bạ</label>
    <input type="text" name="ten" id="ten"><br><br>
    <label for="sdt">nhập số điện thoại</label>
    <input type="text" name="sdt" id="sdt"><br><br>
    <input type="submit" name="save" value="save"><br><br><br><br>
</form>


<form action="#" method="get">
    <input type="text" name="timten">
    <input type="submit" value="timten" name="tim"> 
</form>

<table border="1" style="text-align: left;">
    <thead>
        <th>Tên danh bạ</th>
        <th>Số điện thoại</th>
    </thead>
    <tbody>
        
    <?php
    if(isset($_GET['timten'])){
        $timTen = $_GET['timten'];
        foreach($danhba as $ten => $sdt){
            if (stripos($ten, $timTen) !== false) {
                echo "<tr>
                        <td>$ten</td>
                        <td>$sdt</td>
                      </tr>";
            }
        }
    }else{
        foreach($danhba as $ten => $sdt){
            echo"<tr>
                    <td>$ten</td>
                    <td>$sdt</td>
                </tr>";
            
        }
    }
        
        ?>
    </tbody>
</table>

