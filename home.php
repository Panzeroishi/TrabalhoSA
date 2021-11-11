<?php
    /*if(!isset($_session)){
        session_start();
    }
    */
    require_once "cabecalho.php";
    
?>
            
            
                    <main>

                        <div class="form1">
                        <label for="nome">Insira seu CNPJ</label>
                        <input type="text" placeholder="Digite seu CNPJ">
                        <input type="text" placeholder = "Nome ">
                        <input type="text" placeholder = "Endereço">
                        <input type="text" placeholder = "Sexo">
                        <input type="text" placeholder = "Telefone">
                        <button type="submit">Consultar</button>
                        </div>
                    </main>


<?php

    require_once "footer.php";

?>