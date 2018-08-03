<?php

use yii\db\Migration;

/**
 * Class m180802_082011_test
 */
class m180802_082011_test extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180802_082011_test cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180802_082011_test cannot be reverted.\n";

        return false;
    }
    */
}
