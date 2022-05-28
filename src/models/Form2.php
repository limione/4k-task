<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;


class Form2 extends ActiveRecord
{

    public static function tableName()
    {
        return 'form2';
    }


    public function rules()
    {
        return [
            [['company_name', 'position', 'contact_email'], 'required'],
            [['placement_date'], 'safe'],
            [['placement_date'], 'default', 'value' => date('Y-m-d H:i')],
            [['company_name', 'position', 'contact_name', 'contact_email', 'status'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_name' => 'Company Name',
            'position' => 'Position',
            'contact_name' => 'Contact Name',
            'contact_email' => 'Contact Email',
            'placement_date' => 'Placement Date',
        ];
    }
}
