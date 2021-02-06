<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],

        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST_mysql', '127.0.0.1'),
            'port' => env('DB_PORT_mysql', '3306'),
            'database' => env('DB_DATABASE_mysql', 'forge'),
            'username' => env('DB_USERNAME_mysql', 'forge'),
            'password' => env('DB_PASSWORD_mysql', ''),
            'unix_socket' => env('DB_SOCKET_mysql', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
        ],

        'mysqlsrv' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL_CODE'),
            'host' => env('DB_HOST_CODE', '127.0.0.1'),
            'port' => env('DB_PORT_CODE', '3306'),
            'database' => env('DB_DATABASE_CODE', 'forge'),
            'username' => env('DB_USERNAME_CODE', 'forge'),
            'password' => env('DB_PASSWORD_CODE', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'mysql2' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST_TV', '127.0.0.1'),
            'port' => env('DB_PORT_TV', '3306'),
            'database' => env('DB_DATABASE_TV', 'forge'),
            'username' => env('DB_USERNAME_TV', 'forge'),
            'password' => env('DB_PASSWORD_TV', ''),
            'unix_socket' => env('DB_SOCKET_TV', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
        ],

        'mysql3' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST_P', '127.0.0.1'),
            'port' => env('DB_PORT_P', '3306'),
            'database' => env('DB_DATABASE_P', 'forge'),
            'username' => env('DB_USERNAME_P', 'forge'),
            'password' => env('DB_PASSWORD_P', ''),
            'unix_socket' => env('DB_SOCKET_p', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],


        'mysql4' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST_MK', '127.0.0.1'),
            'port' => env('DB_PORT_MK', '3306'),
            'database' => env('DB_DATABASE_MK', 'forge'),
            'username' => env('DB_USERNAME_MK', 'forge'),
            'password' => env('DB_PASSWORD_MK', ''),
            'unix_socket' => env('DB_SOCKET_MK', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],


        'mysql5' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST_OF', '127.0.0.1'),
            'port' => env('DB_PORT_OF', '3306'),
            'database' => env('DB_DATABASE_OF', 'forge'),
            'username' => env('DB_USERNAME_OF', 'forge'),
            'password' => env('DB_PASSWORD_OF', ''),
            'unix_socket' => env('DB_SOCKET_OF', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'sqlsrvMynikken' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST_sqlsrvMynikken', 'localhost'),
            'port' => env('DB_PORT_sqlsrvMynikken', '1433'),
            'database' => env('DB_DATABASE_sqlsrvMynikken', 'forge'),
            'username' => env('DB_USERNAME_sqlsrvMynikken', 'forge'),
            'password' => env('DB_PASSWORD_sqlsrvMynikken', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ],


        'mysql6' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST_IN', '127.0.0.1'),
            'port' => env('DB_PORT_IN', '3306'),
            'database' => env('DB_DATABASE_IN', 'forge'),
            'username' => env('DB_USERNAME_IN', 'forge'),
            'password' => env('DB_PASSWORD_IN', ''),
            'unix_socket' => env('DB_SOCKET_IN', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],




        'mysql10' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST_TVT', '127.0.0.1'),
            'port' => env('DB_PORT_TVT', '3306'),
            'database' => env('DB_DATABASE_TVT', 'forge'),
            'username' => env('DB_USERNAME_TVT', 'forge'),
            'password' => env('DB_PASSWORD_TVT', ''),
            'unix_socket' => env('DB_SOCKET_TVT', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
        ],


        'pgsql' => [
            'driver' => 'pgsql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

       'sqlsrv' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST_sql', 'localhost'),
            'port' => env('DB_PORT_sql', '1433'),
            'database' => env('DB_DATABASE_sql', 'forge'),
            'username' => env('DB_USERNAME_sql', 'forge'),
            'password' => env('DB_PASSWORD_sql', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ],

        'LAT_MyNIKKEN' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST_LAT_MyNIKKEN', 'localhost'),
            'port' => env('DB_PORT_LAT_MyNIKKEN', '1433'),
            'database' => env('DB_DATABASE_LAT_MyNIKKEN', 'forge'),
            'username' => env('DB_USERNAME_LAT_MyNIKKEN', 'forge'),
            'password' => env('DB_PASSWORD_LAT_MyNIKKEN', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ],

        'sqlsrv2' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST_NC', 'localhost'),
            'port' => env('DB_PORT_NC', '1433'),
            'database' => env('DB_DATABASE_NC', 'forge'),
            'username' => env('DB_USERNAME_NC', 'forge'),
            'password' => env('DB_PASSWORD_NC', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ],
        
        'sqlsrv3' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST_RECALCULATE', 'localhost'),
            'port' => env('DB_PORT_RECALCULATE', '1433'),
            'database' => env('DB_DATABASE_RECALCULATE', 'forge'),
            'username' => env('DB_USERNAME_RECALCULATE', 'forge'),
            'password' => env('DB_PASSWORD_RECALCULATE', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'temporarys',
            'prefix_indexes' => true,
        ],

        'sqlsrv4' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST_Genealogy', 'localhost'),
            'port' => env('DB_PORT_Genealogy', '1433'),
            'database' => env('DB_DATABASE_Genealogy', 'forge'),
            'username' => env('DB_USERNAME_Genealogy', 'forge'),
            'password' => env('DB_PASSWORD_Genealogy', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ],

        'sqlsrv5' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST_RE', 'localhost'),
            'port' => env('DB_PORT_RE', '1433'),
            'database' => env('DB_DATABASE_RE', 'forge'),
            'username' => env('DB_USERNAME_RE', 'forge'),
            'password' => env('DB_PASSWORD_RE', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ],

        'sqlsrvInconcert' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST_liga', 'localhost'),
            'port' => env('DB_PORT_liga', '1433'),
            'database' => env('DB_DATABASE_liga', 'forge'),
            'username' => env('DB_USERNAME_liga', 'forge'),
            'password' => env('DB_PASSWORD_liga', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ],

        'nikkenla_incorporation' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL_CODE'),
            'host' => env('DB_HOST_CODE', '127.0.0.1'),
            'port' => env('DB_PORT_CODE', '3306'),
            'database' => env('DB_DATABASE_CODE', 'forge'),
            'username' => env('DB_USERNAME_CODE', 'forge'),
            'password' => env('DB_PASSWORD_CODE', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'nikkenla_marketing' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL_la'),
            'host' => env('DB_HOST_la', '127.0.0.1'),
            'port' => env('DB_PORT_la', '3306'),
            'database' => env('DB_DATABASE_la', 'forge'),
            'username' => env('DB_USERNAME_la', 'forge'),
            'password' => env('DB_PASSWORD_la', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => 'predis',

        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => env('REDIS_DB', 0),
        ],

        'cache' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => env('REDIS_CACHE_DB', 1),
        ],

    ],

];
