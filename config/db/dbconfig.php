<?php
    class Database
    {

    private $host;
    private $user;
    private $pass;
    private $database;
    private $dbconnect;
    public $link;

    function __construct()
    {
        //Dados conexão
        $ini = parse_ini_file("config.ini");

        $this->host = $ini['host'];
        $this->user = $ini['user'];
        $this->pass = $ini['pass'];
        $this->database = $ini['database'];

    }

    public function connect()
    {
            $this->dbconnect = new mysqli($this->host,$this->user,$this->pass,$this->database);
            if (mysqli_connect_error())
            {
                echo mysqli_connect_error();
                exit();
            }
            else
                return $this->dbconnect;

        }
    }


?>