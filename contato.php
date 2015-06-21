<div class="jumbotron">

    <h1>Formulário de Contato</h1>
    <p>Esse é um site de estudo das aulas que estou realizando na Code Education.</p>
    <form method="POST">
            <?php
            if (isset($_POST["nome"])) {
                echo "<div class='alert alert-success' role='alert'>";
                echo "Ola " . "<strong>".$_POST["nome"]."</strong>". " seus dados foram enviados com sucesso";
            }
            echo "</div>";

            ?>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?php if (isset($_POST['nome'])){echo $_POST['nome'];} else {echo '';};?>" >
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php if (isset($_POST['email'])){echo $_POST['email'];} else {echo '';};?>">
        </div>
        <div class="form-group">
            <label for="assunto">Assunto</label>
            <input type="text" class="form-control" id="assunto" name="assunto" placeholder="assunto" value="<?php if (isset($_POST['assunto'])){echo $_POST['assunto'];} else {echo '';};?>">
        </div>
        <div class="form-group">
            <label for="mensagem">Mensagem</label>
            <textarea class="form-control" rows="3" name="mensagem"><?php if (isset($_POST['mensagem'])){echo $_POST['mensagem'];} else {echo '';};?></textarea>
        </div>

        <button type="submit" class="btn btn-default">Enviar</button>
    </form>




</div>