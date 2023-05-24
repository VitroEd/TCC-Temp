<?php include("../models/conexao.php") ?>
<?php include("blades/header.php") ?>

    <?php
    $varIda = $_GET["ida"];
    $query = mysqli_query($conexao,"SELECT * FROM aluno WHERE codigo = $varIda");
    while($exibe = mysqli_fetch_array($query)){
    ?>
<div class="container border rounded mt-5 bg-white">
    <form action="../controllers/atualizarAluno.php" method="post">
    <div class="row">
    <div class="my-3 col">
        <input type="hidden" name="alunoCodigo" value="<?php echo $exibe[0] ?>">
        <label class="form-label">Nome</label>
        <input class="form-control" type="text" name="alunoNome" value="<?php echo $exibe[1] ?>">
        </div>
        <div class="my-3 col">
        <label class="form-label">Cidade</label>
        <input class="form-control" type="text" name="alunoCidade" value="<?php echo $exibe[2] ?>">
        </div>
    </div>    
    <label class="radio-inline">Masculino</label>
    <input class="form-check-input" type="radio" value="m" name="alunoSexo" <?php echo ($exibe[3]=="m")?"checked":""?>>
    <label class="radio-inline">Feminino</label>
    <input class="form-check-input" type="radio" value="f" name="alunoSexo" <?php echo ($exibe[3]=="f")?"checked":""?>><br>
        <input class="mt-2 mb-2 btn btn-primary" type="submit" value="Atualizar">
    </form>
</div>
    
    <?php } ?>

<?php include("blades/footer.php") ?>