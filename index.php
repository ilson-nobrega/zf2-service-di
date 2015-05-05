<?php
/**
 * @author: Ilson Nóbrega <ilson@inobrega.com.br>
 * @since: 04/05/2015 - 23:40
 */

require_once 'conexao.php';

$query = "SELECT * FROM clientes";

$stmt = $db->prepare($query);
$stmt->execute();

$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<table>
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Email</td>
    </tr>
    <?php
        foreach($clientes as $cliente):
    ?>
        <tr>
            <td><?php echo $cliente['id']; ?></td>
            <td><?php echo $cliente['nome']; ?></td>
            <td><?php echo $cliente['email']; ?></td>
        </tr>
    <?php
        endforeach;
    ?>
</table>