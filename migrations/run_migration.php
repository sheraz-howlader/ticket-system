<?php

//start::enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
//end::enable error reporting

include "../system/DB.php";
$db = new DB();

$migrations = glob("*.php");
sort($migrations);

foreach ($migrations as $key => $migrationFile) {
    //skip run_migration.php file
    if (basename(__FILE__) == $migrationFile) continue;

    include $migrationFile;
    echo $key + 1 .'. '. "Migrated: $migrationFile<br>";
}
