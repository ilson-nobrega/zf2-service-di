<?php
/**
 * @author: Ilson Nóbrega <ilson@inobrega.com.br>
 * @since: 04/05/2015 - 23:56
 */

class Cliente {

    private $db;

    public function __construct(Connect $conexao){
        $this->db = $conexao->connect();
    }

    public function listar() {
        $query = "SELECT * FROM clientes";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}