<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%form1}}`.
 */
class m220524_172151_create_form1_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%form1}}', [
            'id' => $this->primaryKey(),
            'company_name'=>$this->string()->notNull(),
            'position'=>$this->string()->notNull(),
            'position_desc'=>$this->string(),
            'salary'=>$this->integer(),
            'start_date'=>$this->date()->defaultValue(date("Y-m-d")),
            'end_date'=>$this->date()->notNull(),
            'placement_date'=>$this->date()
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%form1}}');
    }
}
