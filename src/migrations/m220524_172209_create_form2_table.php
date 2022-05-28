<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%form2}}`.
 */
class m220524_172209_create_form2_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%form2}}', [
            'id' => $this->primaryKey(),
            'company_name'=>$this->string()->notNull(),
            'position'=>$this->string()->notNull(),
            'contact_name'=>$this->string(),
            'contact_email'=>$this->string()->notNull(),
            'placement_date'=>$this->date()->defaultValue(date("Y-m-d")),
            'status'=>$this->integer()

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%form2}}');
    }
}
