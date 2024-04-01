<?php

namespace App\Db;

class Mysql
{
    private $db_name;
    private $db_user;
    private $db_password;
    private $db_host; 
    private $db_port;
    private $pdo = null;
    private static $_instance = null;

    private function __construct()
    {
        $conf = require_once _ROOTPATH_.'/config.php';

        if(isset($conf['db_name'])){
            $this->db_name = $conf['db_name'];
        }

        if(isset($conf['db_user'])){
            $this->db_user = $conf['db_user'];
        }

        if(isset($conf['db_password'])){
            $this->db_password = $conf['db_password'];
        }

        if(isset($conf['db_host'])){
            $this->db_host = $conf['db_host'];
        }

        if(isset($conf['db_port'])){
            $this->db_port = $conf['db_port'];
        }
    }

    public static function getInstance(): self
    {
        if(is_null(self::$_instance)){
            self::$_instance = new Mysql();
        }

        return self::$_instance;
    }

    public function getPDO(): \PDO
    {
        if(is_null($this->pdo)){
            $this->pdo = new \PDO('mysql:dbname=' . $this->db_name .';charset=utf8;host=' . $this->db_host . ';port='.$this->db_port , $this->db_user , $this->db_password);
            
        }

        return $this->pdo;
    }
}