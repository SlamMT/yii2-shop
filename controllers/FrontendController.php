<?php

namespace SlamMT\shop\controllers;

use SlamMT\shop\models\category;
use SlamMT\shop\models\product;

class FrontendController extends \yii\web\Controller
{
    public function actionCategory($id)
    {
        //$products = Product::find()->where(['id' => category_id])->all();
        //$products = Product::find()->where(['category_id' => $category_id])->all();
        
        $category = Category::findOne($id);
        $products = $category->products;
        
        //var_dump($products);
        return $this->render('category',  ['products' => $products]);
    }

    public function actionIndex()
    {   
        $categories = Category::find()->all();
        //var_dump($category);
        //select('id','name');
        return $this->render('index', ['categories' => $categories]);
        
    }

}
