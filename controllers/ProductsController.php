<?php

/**
 * Created by PhpStorm.
 * User: mkhit
 * Date: 16.06.2017
 * Time: 16:33
 */
class ProductsController
{
    public function actionView($productId){

        $categories = [];
        $categories = Category::getCategoryList();

        $product = Product::getProductById($productId);

        require_once(ROOT.'/views/product/view.php');

         return true;
    }
}