<?php

namespace app\models;

class Bids extends \yii\db\ActiveRecord
{

	
	public static function tableName()
    {
        return 'bids';
    }
	
	public function getEvents()
    {
        return $this->hasOne(Events::className(), ['id' => 'id_event']);
    }
}