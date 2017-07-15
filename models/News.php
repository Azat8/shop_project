<?php

/**
 * Created by PhpStorm.
 * User: mkhit
 * Date: 16.06.2017
 * Time: 23:24
 */
class News
{
    public static function getNewsItemById($id){
        $id = intval($id);

        if($id){

            $db = Db::getConnection();

            $result = $db->query('SELECT * from news WHERE id='.$id);

//            $result->setFetchMode(PDO::FETCH_NUM);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItem = $result->fetch();

            return $newsItem;
        }
    }
    public static function getNewsList(){

        $db = Db::getConnection();

        $newList = [];

        $result = $db->query('SELECT id, title, date, short_content 
                                        FROM news 
                                        ORDER BY date DESC 
                                        LIMIT 10');

        $i = 0;

        while($row = $result->fetch()){
            $newList[$i]['id'] = $row['id'];
            $newList[$i]['title'] = $row['title'];
            $newList[$i]['date'] = $row['date'];
            $newList[$i]['short_content'] = $row['short_content'];
            $i++;
        }
        return $newList;
    }
}