<?php 
include("blades/header.php"); 
include("../controllers/funcoes.php");
?>
<div class="container border rounded mt-5 bg-white">
<a href="cadastro.php"><button type="button" class="mt-2 btn btn-success">Cadastrar</button></a>

<form action="index.php" method="post">
    <input class="mt-2 form-control" type="text" name="buscar" size="30" placeholder="Buscar">
</form>

<?php 
mostrarDados();
?>

</div>

<?php 
include("blades/footer.php")
?>