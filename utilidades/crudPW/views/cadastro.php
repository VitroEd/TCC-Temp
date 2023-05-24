<?php include("blades/header.php") ?>

<div class="container border rounded mt-5 bg-white">
    <form action="../controllers/cadastrarAluno.php" method="post">
        <div class="row">
            <div class="my-3 col">
                <label class="form-label">Nome</label>
                <input class="form-control" type="text" name="alunoNome">
            </div>
            <div class="my-3 col">
                <label class="form-label">Cidade</label>
                <input class="form-control" type="text" name="alunoCidade">
            </div>
        </div>
        <label class="radio-inline">Masculino</label>
        <input class="form-check-input" type="radio" value="m" name="alunoSexo">
        <label class="radio-inline">Feminino</label>
        <input class="form-check-input" type="radio" value="f" name="alunoSexo">
        <br>
        <input class="mt-2 mb-2 btn btn-success" type="submit" value="Cadastrar">
    </form>
</div>

<?php include("blades/footer.php") ?>