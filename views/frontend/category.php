<?php

use SlamMT\shop\widgets\Buy;
/* @var $this yii\web\View */

//echo Html::a($product->name, ['frontend/category', 'id' => $product->id])."<br>\n";    
?>
<h1>Товары</h1>
<table border=1>
<?php

foreach ($products as $product) {
   //echo "<tr>{$product->name}<td>{$product->cost}</td></tr>";
   echo "<tr><td>{$product->name}</td><td>{$product->cost}</td><td>".Buy::widget(['model' => $product])."</td></tr>";
   
}
?>
  
</table>
