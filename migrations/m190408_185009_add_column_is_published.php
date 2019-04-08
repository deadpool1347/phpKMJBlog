<?php

use yii\db\Migration;

/**
 * Class m190408_185009_add_column_is_published
 */
class m190408_185009_add_column_is_published extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE `article` ADD COLUMN `is_published` INT NOT NULL DEFAULT '0' AFTER `theme_id`;");
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('article', 'is_published');
        return true;
    }
}
