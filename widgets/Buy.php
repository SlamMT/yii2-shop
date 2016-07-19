<?php
namespace SlamMT\shop\widgets;

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

use yii\base\Widget;

class Buy extends Widget
{ 
    public $model;
    
    public function init() 
    { 
        parent::init();  
    } 
    public function run() 
    { 
        $model = $this->model;
        $input = Html::input('text', 'code', '', ['class' => 'input buy']);
        //$button = Html::submitButton('В корзину', ['class' => 'btn btn-lg ', 'name' => 'buy-button']);
        $button = Html::submitInput('В корзину', ['class' => 'btn btn-primary', 'name' => 'buy-button']);
        return Html::tag('div', $input.' '.$button, ['class' => 'buy-button']);
    } 
}