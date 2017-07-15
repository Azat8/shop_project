<?php

class Category
{
    public static function getCategoryList()
    {
        $db = Db::getConnection();

        $categoryList = [];

        $result = $db->query('SELECT id, name FROM category');

        $i = 0;

        while ($row = $result->fetch()){
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }
        return $categoryList;
    }
}