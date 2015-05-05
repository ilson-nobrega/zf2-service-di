<?php
/**
 * @author: Ilson Nóbrega <ilson@inobrega.com.br>
 * @since: 04/05/2015 - 23:40
 */
require_once 'Connect.php';
require_once 'Clientes.php';

$conexao = new Connect("localhost", "zf2-service-di", "postgres", "123456");
$cliente = new Cliente($conexao);

$listaClientes = $cliente->listar();

require_once 'clientes.list.php';
?>
