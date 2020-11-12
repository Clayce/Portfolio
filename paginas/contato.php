<!-- extensão php não fecha tag automaticamente, tem que ser manual -->
<?php
    include "cabecalho.php";
?>

    <main> <!-- conteúdo principal do site -->
        
        <header>
            <h1 align="center" class="big">Contato</h1>
        </header>

        <article>
            <div class="linha">
                <div class="col12">
                    <?= isset($_GET["msg"]) ? "<h2>".$_GET["msg"]."</h2><br><br>" : "" ?> <!-- para ação pequena com php -->
                    <form action="infocontato.php" method="post" name="contato" enctype="multipart/form-data">
                        <label for="nome">Nome:</label> 
                        <input onkeyup="valida('nome', this.value)" class="corletra" type="text" id="nome" placeholder=" Escreva seu nome aqui" name="nome">
                        <br><br>
                        
                        <label for="fone">Celular:</label> 
                        <input class="corletra" type="tel" id="fone" placeholder=" Ex. (00) 0 0000-0000 " name="fone">
                        <br><br>

                        <label for="email">E-mail:</label> 
                        <input type="email" id="email" placeholder=" Ex. seuemail@seuemail.com" name="email">
                        <br><br>

                        <label for="cpf">CPF:</label> 
                        <input onkeyup="valida('cpf', this.value)" type="text" id="cpf" placeholder=" Digite seu CPF aqui" name="CPF">
                        <br><br>

                        <label>
                            Nacionalidade:
                        </label>

                        <label onclick="checkbox('chkbras')">
                            <input id="chkbras" checked 
                            type="checkbox"
                            name="nacionalidade[]" value="Brasileiro">
                            Brasileiro
                        </label>

                        <label onclick="checkbox('chkest')">
                            <input id="chkest" type="checkbox"
                            name="nacionalidade[]" value="Estrangeiro">
                            Estrangeiro
                        </label>
                       
                        <br><br>
                        <label>
                            Gostaria de enviar um arquivo?
                        </label>
                        <input class="corletra" type="file" id="arquivo" name="arquivo">
                        <br><br>

                        <button class="corletra" type="submit">
                            Enviar
                        </button>

                        <button class="corletra" type="reset">
                            Apagar
                        </button>

                    </form>        
                </div>
            </div>
 
        </article>

    </main>
<script src="contato.js"></script>
<?php
    include "rodape.php";
?>