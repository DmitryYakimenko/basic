<?php

namespace app\models;

class Events extends \yii\db\ActiveRecord
{
	
	public static function tableName()
    {
        return 'events';
    }
	
	public function getBids()
    {
        return $this->hasMany(Bids::className(), ['id_event' => 'id']);
    }
}
