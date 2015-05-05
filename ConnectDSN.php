<?php
/**
 * @author: Ilson Nóbrega <ilson@inobrega.com.br>
 * @since: 05/05/2015 - 00:31
 */

require 'ConnectInterface.php';

class ConnectDSN implements ConnectInterface{

    private $dsn;
    private $user;
    private $password;

    public function __construct($dsn, $user, $password){
        $this->dsn = $dsn;
        $this->user = $user;
        $this->password = $password;
    }

    public function connect() {
        return new PDO($this->dsn, $this->user, $this->password);
    }

}