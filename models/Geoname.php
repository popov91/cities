<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "geoname".
 *
 * @property int $geonameid
 * @property string|null $name
 * @property string|null $asciiname
 * @property string|null $alternatenames
 * @property float|null $latitude
 * @property float|null $longitude
 * @property string|null $fclass
 * @property string|null $fcode
 * @property string|null $country
 * @property string|null $cc2
 * @property string|null $admin1
 * @property string|null $admin2
 * @property string|null $admin3
 * @property string|null $admin4
 * @property int|null $population
 * @property int|null $elevation
 * @property int|null $gtopo30
 * @property string|null $timezone
 * @property string|null $moddate
 */
class Geoname extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'geonames';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['geonameid'], 'required'],
            [['geonameid', 'population', 'elevation', 'gtopo30'], 'integer'],
            [['latitude', 'longitude'], 'number'],
            [['moddate'], 'safe'],
            [['name', 'asciiname'], 'string', 'max' => 200],
            [['alternatenames'], 'string', 'max' => 4000],
            [['fclass'], 'string', 'max' => 1],
            [['fcode'], 'string', 'max' => 10],
            [['country'], 'string', 'max' => 2],
            [['cc2'], 'string', 'max' => 60],
            [['admin1', 'admin3', 'admin4'], 'string', 'max' => 20],
            [['admin2'], 'string', 'max' => 80],
            [['timezone'], 'string', 'max' => 40],
            [['geonameid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'geonameid' => 'Geonameid',
            'name' => 'Name',
            'asciiname' => 'Asciiname',
            'alternatenames' => 'Alternatenames',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'fclass' => 'Fclass',
            'fcode' => 'Fcode',
            'country' => 'Country',
            'cc2' => 'Cc2',
            'admin1' => 'Admin1',
            'admin2' => 'Admin2',
            'admin3' => 'Admin3',
            'admin4' => 'Admin4',
            'population' => 'Population',
            'elevation' => 'Elevation',
            'gtopo30' => 'Gtopo30',
            'timezone' => 'Timezone',
            'moddate' => 'Moddate',
        ];
    }
}
