<?php

include "conexao.php";
require_once "cabecalho.php";


if(isset($_POST['email']) || isset($_POST['senha']) || isset($_POST['nome']) ){
        //strlen verifica a quantidade de caracteres
        if(strlen($_POST['email']) == 0){
            echo "Preencha seu email";
            
        } else if(strlen($_POST['senha']) == 0){
            echo "Preencha sua senha";
            
        } else if(strlen($_POST['nome']) == 0){
            echo "Preencha o seu nome";
            
        } else{
            
         //Função do mysql para limpar os campos real_escape_string
         $email = $mysqli->real_escape_string($_POST['email']);
         $senha = $mysqli->real_escape_string($_POST['senha']);
         $nome = $mysqli->real_escape_string($_POST['nome']);    
            
            
         $sql_code = "INSERT INTO usuario (`id`, `email`, `senha`, `nome`) VALUES (NULL, '$email', '$senha', '$nome');";
        
         echo "Dados inseridos com sucesso!"; 
         echo '<a href="login.php">Fazer login</a>';
            
         $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL". $mysqli -> error);
        }};
?>    

<body>
    <form action="" method="post">
      
        <p>
            <label>Digite seu nome</label>
            <input name="nome">
        </p>
        
        <p>
            <label>Digite seu e-mail</label>
            <input name="email" type="email">
        </p>
        
        <p>
            <label>Digite a sua senha</label>
            <input name="senha" type="password">
        </p>
        
        <button type="submit">Enviar</button>
        <a href="login.php">Fazer login</a>
    </form>
<?php

    require_once "footer.php";

?>