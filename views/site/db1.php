<div class="site-contact">
	<b>Сделать скрипты для подготовки базы данных(миграции)</b><br/>
	<p>Создаем 2 миграции на каждую таблицу</p>
	<p>Для events</p>
	<img src="/../uploads/migration_img/events.png">
	<p>Для bids</p>
	<img src="/../uploads/migration_img/bids.png"><br/>
	<b>Код events</b><br/>
	<pre>
use yii\db\Migration;

/**
 * Handles the creation of table `events`.
 */
class m180802_083007_create_events_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('events', [
            'id' => $this->primaryKey(),
            'caption' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('events');
    }
}
	</pre>
	<b>Код bids</b><br/>
	<pre>
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
</pre>
	<b>Выполнение миграции</b><br/>
	<p>Для events</p>
	<img src="/../uploads/migration_img/events_to.png">
	<p>Для bids</p>
	<img src="/../uploads/migration_img/bids_to.png">
	<br/>
	<b>В БД</b>
	<p>В events</p>
	<img src="/../uploads/migration_img/events_db.png">
	<p>В bids</p>
	<img src="/../uploads/migration_img/bids_db.png">

</div>