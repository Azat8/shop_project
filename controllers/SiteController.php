<?php

include_once (ROOT.'/models/Category.php');
include_once (ROOT.'/models/Product.php');
class SiteController
{
    public function actionIndex(){
        $categories = [];
        $categories = Category::getCategoryList();

        $latestProduct = [];
        $latestProduct = Product::getLatestProduct();

        require_once (ROOT.'/views/site/index.php');

        return true;
    }
}