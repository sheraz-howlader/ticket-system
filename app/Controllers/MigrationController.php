<?php

class MigrationController
{
    public function migrate()
    {
        include "system/DB.php";
        $db = new DB();

        $migrations = glob("migrations/" . "*.php");
        sort($migrations);


        foreach ($migrations as $key => $migrationFile) {
            include $migrationFile;
            echo "success :". explode( '/', $migrationFile)[1] ."<br>";
        }
    }
}
