<?php
if (isset($_POST['nome'])) {
    $nome= $_POST ['nome'];
    $descricao= $_POST['descricao'];
    $preco= $_POST['preco'];
    $fornecedor= $_POST['fornecedor'];
 
 
   // echo "produto ......: ".$nome."<br>";
    //echo "descricao ......: ".$descricao."<br>";
    //echo "preco ......: ".$preco."<br>";
    //echo "fornecedor......: ".$fornecedor."<br>";
 
 
$produto = new Produto ();
$produto->InserirProduto($nome, $descricao, $preco, $fornecedor);
 
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastrar produtos</title>
</head>
<body>
    <div class="conatiner">
        <div class="centralizar">
            <form action="" method="post">
                Nome:<br>
                <input type="text" name="nome"> <br><br>
                Descrição: <br>
                <input type="text" name="descrição"><br><br>
                Preço:<br>
                <input type="text" name="preço"><br><br>
               Fornecedor:<br>
                <input type="text" name="fornecedor"><br><br>              
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>
 