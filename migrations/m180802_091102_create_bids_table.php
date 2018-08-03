<?php

use yii\db\Migration;

/**
 * Handles the creation of table `bids`.
 * Has foreign keys to the tables:
 *
 * - `events`
 */
class m180802_091102_create_bids_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('bids', [
            'id' => $this->primaryKey(),
            'id_event' => $this->integer()->notNull(),
            'name' => $this->string(),
            'email' => $this->string(),
            'price' => $this->float(),
        ]);

        // creates index for column `id_event`
        $this->createIndex(
            'idx-bids-id_event',
            'bids',
            'id_event'
        );

        // add foreign key for table `events`
        $this->addForeignKey(
            'fk-bids-id_event',
            'bids',
            'id_event',
            'events',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `events`
        $this->dropForeignKey(
            'fk-bids-id_event',
            'bids'
        );

        // drops index for column `id_event`
        $this->dropIndex(
            'idx-bids-id_event',
            'bids'
        );

        $this->dropTable('bids');
    }
}
