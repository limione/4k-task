<?php

namespace app\models;

use Yii;


class Form1 extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'form1';
    }

    public function rules()
    {
        return [
            [['company_name', 'position', 'end_date'], 'required'],
            [['salary'], 'integer'],
            [['start_date', 'end_date', 'placement_date'], 'safe'],
            [['company_name', 'position', 'position_desc'], 'string', 'max' => 255],
            [['start_date'],  'default', 'value' => date('Y-m-d H:i')]

        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_name' => 'Company Name',
            'position' => 'Position',
            'position_desc' => 'Position Description',
            'salary' => 'Salary, $',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'placement_date' => 'Placement Date',
        ];
    }
}
