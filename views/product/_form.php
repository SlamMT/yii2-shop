<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use SlamMT\shop\models\Category;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model SlamMT\shop\models\Product */
/* @var $form yii\widgets\ActiveForm */

$form = ActiveForm::begin();

// получаем всех категории
$category = Category::find()->all();
// формируем массив, с ключем равным полю 'id' и значением равным полю 'name' 
$items = ArrayHelper::map($category,'id','name');
//var_dump($items);
$params = [
    'prompt' => 'Укажите категорию'
];
echo $form->field($model, 'category_id')->dropDownList($items,$params);
ActiveForm::end();

?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <!--<?= $form->field($model, 'category_id')->textInput() ?> -->
    
    <?= $form->field($model, 'cost')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
