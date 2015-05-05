<?php
/**
 * @author: Ilson Nóbrega <ilson@inobrega.com.br>
 * @since: 04/05/2015 - 23:45
 */

class Connect {

    private $host;
    private $db;
    private $user;
    private $password;

    public function __construct($host, $db, $user, $password){
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->password = $password;
    }

    public function connect() {
        return new PDO("pgsql:host={$this->$host}; dbname={$this->$db}", $this->$user, $this->$password);
    }
}
