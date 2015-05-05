<?php
/**
 * @author: Ilson Nóbrega <ilson@inobrega.com.br>
 * @since: 04/05/2015 - 23:45
 */

$host = 'localhost';
$db = 'zf2-service-di';
$user = 'postgres';
$password = 'root';

$db = new PDO("pgsql:host={$host}; dbname={$db}", $user, $password);