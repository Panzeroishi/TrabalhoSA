<?php

//require_once "cabecalho.php";

require_once "conexao.php";


$query='';

  //if(isset($_POST['pesquisar'])){
    //criar a string da query
  //$query = "SELECT * FROM cliente WHERE {$_POST['coluna']} LIKE '%".$_POST['valor_pesquisa']."%'";
  //echo $query;
  //}else{
  //criar a string da query
  $query = "SELECT * FROM cpf";
  //}

  $resultado = $con -> query ($query);
?>


<table>
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nome</th>
            <th scope="col">Cep</th>
            <th scope="col">Telefone</th>
            <th scope="col">Sexo</th>
            <th scope="col" colspan="2">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($resultado as $value){?>
            <tr>
                <th scope="row"><?=$value['id']?></th>
                <th scope="col"><?=$value['nome']?></th>
                <th scope="col"><?=$value['cep']?></th>
                <th scope="col"><?=$value['telefone']?></th>
                <th scope="col"><?=$value['sexo']?></th>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php

//require_once "footer.php";
        
?>