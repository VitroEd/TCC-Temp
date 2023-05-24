<!-- PAGE PAGE PAGE PAGE -->

<?php
include("conexao.php");
$idb = $_GET["idb"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" width="1000">
    <?php
    $query = mysqli_query($conexao, "SELECT * FROM blog INNER JOIN bloginfo ON blog_bloginfo_codigo = bloginfo_codigo INNER JOIN blogimg ON blog_blogimg_codigo = blogimg_codigo WHERE blog_codigo=$idb ORDER BY blog_codigo DESC ");
    while( $exibe = mysqli_fetch_array($query)){
    ?>
        <tr>
            <td><img src="imgs/<?php echo $exibe[9] ?>" width="200"></td>
            <td width="200" height="200"><?php echo $exibe[5] ?></td>
            <td><?php echo $exibe[6] ?></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>


