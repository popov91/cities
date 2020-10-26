<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%postal_codes}}`.
 */
class m201026_191427_create_postal_codes_table extends Migration
{
    const TABLE_NAME = '{{%postal_codes}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(self::TABLE_NAME, [
            'country_code' => 'char(2)',
            'postal_code'  => 'varchar(20)',
            'place_name'   => 'varchar(180)',
            'admin_name1'  => 'varchar(100)',
            'admin_code1'  => 'varchar(20)',
            'admin_name2'  => 'varchar(100)',
            'admin_code2'  => 'varchar(20)',
            'admin_name3'  => 'varchar(100)',
            'admin_code3'  => 'varchar(20)',
            'latitude'     => 'decimal(10,7)',
            'longitude'    => 'decimal(10,7)',
            'accuracy'     => 'int',
        ]);

        $this->createIndex('ix-postal_codes[postal_code]',self::TABLE_NAME, 'postal_code');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('ix-postal_codes[postal_code]',self::TABLE_NAME);
        $this->dropTable(self::TABLE_NAME);
    }
}
