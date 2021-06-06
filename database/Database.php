<?php

namespace App\Database;

class Database {

    private static $user = "franckch_root";
    private static $pass = "katagourouma";
    private static $dsn ="mysql:host=localhost;dbname=franckch_portfolio_db";
    private static $dbcon;

    private function __construct() {

    }

    //get pdo connection
    public static function getDb(){
        if(!isset(self::$dbcon)) {
            try {
                self::$dbcon = new \PDO(self::$dsn, self::$user, self::$pass);
                self::$dbcon->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                self::$dbcon->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
            } catch (\PDOException $e) {
                $msg = $e->getMessage();
                include 'views/custom-error.php';
                exit();
            }
        }

        return self::$dbcon;
    }

}
