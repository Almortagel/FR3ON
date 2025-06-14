<?php
    
    define('PATH', realpath('.'));
    define('SUBFOLDER', false);
    define('URL', 'https://top-follwers.cf');
    define('DINAMICLISANCE', 'GLYCON-THAZV-KGEYP-RMYOL');
    
    ini_set('display_errors', 1);
    date_default_timezone_set('Europe/Istanbul');
    
    return [
      'db' => [
        'name'    =>  'smmsponc_top',
        'host'    =>  'localhost',
        'user'    =>  'smmsponc_top',
        'pass'    =>  'smmsponc_top',
        'charset' =>  'utf8mb4' 
      ]
    ];
    
    