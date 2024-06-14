<?php
require 'Produto.class.php';
$produto = new Produto();

$meuProduto = $produto->getProdutos();
?>
<table border = '1'>
    <tr>
        <th>Codigo</th>
        <th>Descricao</th>
        <th>Preco</th>
        <th>Fornecedor</th>
    </tr>
    
    <?php
    foreach ($meuProduto as $item):
        ?>
        <tr>
            <td><?php echo $item['id'];?></td>
            <td><?php echo $item['descricao'];?></td>
            <td><?php echo $item['preco'];?></td>
            <td><?php echo $item['fornecedor'];?></td>
            <?php
    endforeach;
        ?>
        </tr>
</table>        