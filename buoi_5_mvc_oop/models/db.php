<?php

require_once "env.php";

class db
{
    //tạo kết nối từ project php sang mysql

    function getConnect()
    {
        $connect = new PDO("mysql:host = " . DBHOST . ";dbname=" . DBNAME . ";charset = " . DBCHARSET, DBUSER, DBPASS);
        return $connect;
    }

    // nếu như dùng để lấy danh  sách thì truyền vào true
    // nếu như dùng để thêm sửa xóa thì là false
    function getData($query, $getAll = true)
    {
        $conn = $this->getConnect();
        $stmt = $conn->prepare($query);
        $stmt->execute();

        if ($getAll) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
