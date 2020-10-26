<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "postal_codes".
 *
 * @property string|null $country_code
 * @property string|null $postal_code
 * @property string|null $place_name
 * @property string|null $admin_name1
 * @property string|null $admin_code1
 * @property string|null $admin_name2
 * @property string|null $admin_code2
 * @property string|null $admin_name3
 * @property string|null $admin_code3
 * @property float|null $latitude
 * @property float|null $longitude
 * @property int|null $accuracy
 */
class PostalCode extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'postal_codes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['latitude', 'longitude'], 'number'],
            [['accuracy'], 'integer'],
            [['country_code'], 'string', 'max' => 2],
            [['postal_code', 'admin_code1', 'admin_code2', 'admin_code3'], 'string', 'max' => 20],
            [['place_name'], 'string', 'max' => 180],
            [['admin_name1', 'admin_name2', 'admin_name3'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'country_code' => 'Country Code',
            'postal_code' => 'Postal Code',
            'place_name' => 'Place Name',
            'admin_name1' => 'Admin Name1',
            'admin_code1' => 'Admin Code1',
            'admin_name2' => 'Admin Name2',
            'admin_code2' => 'Admin Code2',
            'admin_name3' => 'Admin Name3',
            'admin_code3' => 'Admin Code3',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'accuracy' => 'Accuracy',
        ];
    }
}
