<?php

include_once (ROOT.'/models/Category.php');
include_once (ROOT.'/models/Product.php');
class CatalogController
{
    public function actionIndex()
    {

        $categories = [];
        $categories = Category::getCategoryList();

        $latestProduct = [];
        $latestProduct = Product::getLatestProduct();

        require_once (ROOT.'/views/catalog/view.php');

        return true;
    }
    public function actionCategory($categoryId, $page = 1)
    {
        $categories = [];
        $categories = Category::getCategoryList();

        $categoryProducts = [];
        $categoryProducts = Product::getProductListByCategory($categoryId, $page);


        require_once (ROOT.'/views/catalog/view.php');

    }
    public function actionAll()
    {
        $categories = [];
        $categories = Category::getCategoryList();

        $latestProduct = [];
        $latestProduct = Product::getLatestProduct(6);


        require_once (ROOT.'/views/catalog/all.php');
    }
}