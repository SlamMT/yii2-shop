<?php
namespace SlamMT\shop\models;

class Product extends \yii\db\ActiveRecord {

	public static function tableName()
    {
        return '{{%product}}';
    }
    
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Код (актикул)',
            'category_id' => 'Главная категория',
            'name' => 'Название',
        ];
    }
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['category_id'], 'integer'],
            [['code'], 'string'],
            [['name'], 'string', 'max' => 200],
        ];
    }
    
    public function getCategory()
    {
		return $this->hasOne(Category::className(), ['id' => 'category_id']);
	}
}