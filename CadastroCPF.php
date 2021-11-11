<?php
    require_once "cabecalho.php";
    require_once "funcoes.php";
    
?>

<body>

    <form action="" method="post">
        
        <label for="">Digite CEP</label>
        <input type="text" name="cep">
        <button name="buscar">Buscar Cep</button>

        <?php isset($_POST['buscar']) ? $endereco = chama_endereco($_POST['cep']) : ''?>
        <label for="">Rua</label>
        
        <input type="text" value="<?= isset($_POST['buscar']) ? $endereco -> logradouro : '' ?>">

        <label for="">Número</label>
        <input type="number">

        <label for="">Bairro</label>
        <input type="text" value="<?=isset($_POST['buscar']) ? $endereco -> bairro : '' ?>">

        <label for="">Cidade</label>
        <input type="text" value="<?=isset($_POST['buscar']) ? $endereco -> localidade : '' ?>">

        <label for="">UF</label>
        <input type="text" value="<?=isset($_POST['buscar']) ? $endereco -> uf : '' ?>">
    </form>
<?php

    require_once "footer.php";

?>