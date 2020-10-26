<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=127.0.0.1;port=3306;dbname=db',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8mb4',
     'attributes' => [
     PDO::MYSQL_ATTR_LOCAL_INFILE => 1,
     ],
    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
