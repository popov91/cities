<?php

namespace app\commands;

use Yii;
use yii\console\Controller;

class InsertController extends Controller
{
    public function actionCities()
    {
        $cities = 'web/csv/cities/allCountries.txt';

        $insert = "LOAD DATA LOCAL INFILE '$cities' INTO TABLE geonames (
             geonameid, name, asciiname, alternatenames,
             latitude, longitude, fclass, fcode, country,
             cc2, admin1, admin2, admin3, admin4,
             population, elevation, gtopo30, timezone,
             moddate);";

        $db = Yii::$app->db;
        $truncate_table = "TRUNCATE TABLE geonames";
        $transaction = $db->beginTransaction();
        try {
            $db->createCommand($truncate_table)->execute();
            $db->createCommand($insert)->execute();
            $transaction->commit();
        } catch(\Throwable $e) {
            $transaction->rollBack();
        }
    }

    public function actionPostcodes()
    {
        $postal_codes = 'web/csv/postal_code/allCountries.txt';

        $insert = "LOAD DATA LOCAL INFILE '$postal_codes' INTO TABLE postal_codes (
             country_code, postal_code, place_name, admin_name1,
             admin_code1, admin_name2, admin_code2, admin_name3, admin_code3,
             latitude, longitude, accuracy);";

        $db = Yii::$app->db;
        $truncate_table = "TRUNCATE TABLE postal_codes";
        $transaction = $db->beginTransaction();
        try {
            $db->createCommand($truncate_table)->execute();
            $db->createCommand($insert)->execute();
            $transaction->commit();
        } catch(\Throwable $e) {
            $transaction->rollBack();
        }
    }
}
