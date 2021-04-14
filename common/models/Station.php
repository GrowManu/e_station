<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "e_station".
 *
 * @property int $id
 * @property string $name
 * @property string $city
 * @property int $status
 */
class Station extends \yii\db\ActiveRecord {
    
    //public $status = ['closed', 'open'];

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'e_station';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['name', 'city', 'status'], 'required'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['city'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'city' => 'City',
            'status' => 'Status',
        ];
    }

}
