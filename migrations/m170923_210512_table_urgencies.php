<?php

use yii\db\Migration;
use app\helpers\MigrationHelper;

class m170923_210512_table_urgencies extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%urgencies}}', [
            'urgency_id' => $this->primaryKey(),
            'zone_id' => $this->integer(11),
            'level' => "ENUM('bajo', 'medio', 'alto')",
            'need_brigade' => "ENUM('si', 'no', '-', 'relevos')",
            'supplies_required' => "TEXT",
            'supplies_accept' => "TEXT",
            'supplies_not_required' => "TEXT",
            'address' => $this->string(250),
            'detail_source' => $this->string(250),
            'last_updated' => $this->integer(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], MigrationHelper::resolveTableOptions($this->db->driverName));

        // add foreign key for table `zones`
        $this->addForeignKey(
            'fk-urgencies-zone_id',
            '{{%urgencies}}',
            'zone_id',
            '{{%zones}}',
            'zone_id',
            'CASCADE',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->droptable('{{%urgencies}}');
    }
}
