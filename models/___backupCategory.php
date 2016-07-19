<?php
namespace app\models;

class Category extends \yii\db\ActiveRecord {

	public static function tableName()
    {
        return '{{%category}}';
    }
    
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
        ];
    }
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['id'], 'integer'],
            [['name'], 'string', 'max' => 200],
        ];
    }
    
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
	}
}