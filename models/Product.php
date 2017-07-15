<?php

class Product
{
    const SHOW_BY_DEFAULT = 6;

    public static function getLatestProduct($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);
        $db = Db::getConnection();
        $productList = [];

        
        $result = $db->query('SELECT id, name, price, image, is_new FROM product '
                            .'WHERE status = "1" '
                            .'ORDER BY id DESC '
                            .'LIMIT ' . $count
        );

        $i = 0;

        while ($row = $result->fetch()){
            $productList[$i]['id'] = $row['id'];
            $productList[$i]['name'] = $row['name'];
            $productList[$i]['image'] = $row['image'];
            $productList[$i]['price'] = $row['price'];
            $productList[$i]['is_new'] = $row['is_new'];
            $i++;
        }

        return $productList;
    }
    public static function getProductListByCategory($categoryId = false, $page = 1)
    {
        if ($categoryId) {

            $page =  intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

            $db = Db::getConnection();
            $productList = [];
            $result = $db->query("SELECT id, name, price, image, is_new, description, brand FROM product "
                                ."WHERE status = '1' AND category_id = '$categoryId' "
                                ."ORDER BY id DESC "
                                ."LIMIT ".self::SHOW_BY_DEFAULT
                                .' OFFSET '.$offset
                                );
            $i = 0;

            while ($row = $result->fetch()){
                $productList[$i]['id'] = $row['id'];
                $productList[$i]['name'] = $row['name'];
                $productList[$i]['image'] = $row['image'];
                $productList[$i]['price'] = $row['price'];
                $productList[$i]['is_new'] = $row['is_new'];
                $productList[$i]['description'] = $row['description'];
                $productList[$i]['brand'] = $row['brand'];
                $i++;
            }

            return $productList;
        }
    }

    public static function getProductById($id)
    {
        $id = intval($id);

        if ($id){

            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM product WHERE id='.$id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }
}