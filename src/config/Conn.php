<?php

    class Conn {
    private static ?Conn $instance = null;
    private PDO $connection;


    private function __construct() {
        try {
            $this->connection = new PDO(
            "mysql:host=localhost;dbname=Systeme_Auth;charset=utf8", "root", "",
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]

        );

        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }


    public static function getInstance(): Conn {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }


    public function getConnection(): PDO {
        return $this->connection;
    }
}

$db1 = Conn::getInstance()->getConnection();




if($db1) {
    echo "kayna";
} else {
    echo "erreur";
}



