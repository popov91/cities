<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%geoname}}`.
 */
class m201026_191411_create_geonames_table extends Migration
{
    const TABLE_NAME = '{{%geonames}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(self::TABLE_NAME, [
            'geonameid'      => 'int PRIMARY KEY',
            'name'           => 'varchar(200)',
            'asciiname'      => 'varchar(200)',
            'alternatenames' => 'varchar(4000)',
            'latitude'       => 'decimal(10,7)',
            'longitude'      => 'decimal(10,7)',
            'fclass'         => 'char(1)',
            'fcode'          => 'varchar(10)',
            'country'        => 'varchar(2)',
            'cc2'            => 'varchar(60)',
            'admin1'         => 'varchar(20)',
            'admin2'         => 'varchar(80)',
            'admin3'         => 'varchar(20)',
            'admin4'         => 'varchar(20)',
            'population'     => 'int',
            'elevation'      => 'int',
            'gtopo30'        => 'int',
            'timezone'       => 'varchar(40)',
            'moddate'        => 'date',
        ]);

        $this->createIndex('ix-geoname[name]',self::TABLE_NAME, 'name');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('ix-geoname[name]',self::TABLE_NAME);
        $this->dropTable(self::TABLE_NAME);
    }
}
