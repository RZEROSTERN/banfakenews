<?php

use yii\db\Migration;
use app\helpers\MigrationHelper;

class m170923_210142_table_zones extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%zones}}', [
            'zone_id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], MigrationHelper::resolveTableOptions($this->db->driverName));

        // Unique index for name
        $this->createIndex(
            'name_idx',
            '{{%zones}}',
            'name',
            true
        );
    }

    public function safeDown()
    {
        $this->droptable('{{%zones}}');
    }
}
