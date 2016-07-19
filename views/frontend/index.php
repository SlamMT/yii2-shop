<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
//var_dump($categories);

foreach ($categories as $category) {
    echo Html::a($category->name, ['frontend/category', 'id' => $category->id])."<br>\n";
}      

?>
<h1>frontend/index</h1>

<p>
   
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
