<?php
require_once "DB.php";
class Category extends db
{
    function getAllCategory()
    {
        $sql = "SELECT * FROM category";
        return $this->getData($sql);
    }
}
