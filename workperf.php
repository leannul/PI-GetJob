<?php
include_once(dirname(__FILE__) . "./inc/MySQL.php");

include_once(dirname(__FILE__) . "/inc/header.php");
include_once("./inc/menu.php");
$id = $_GET['id'];

$sql = $pdo->prepare('SELECT ID, nome, descricao FROM anuncios WHERE ID = ' . $id);

if ($sql->execute()) {
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    foreach ($info as $key => $values) {

        $nome = $values['nome'];
        $desc = $values['descricao'];
    }
}
?>

<div class="container center p-4">
    <div class="nome shadow-lg p-2">
        <h2><?php echo $nome ?></h2>
        <div class="text-right s"><button><a style="color:black; font-family:'Courier'; text-decoration: none;background-color:green; border: 3px outset orange" role="button" href="workperf.php">Contratar</a></button></div>
    </div>
</div>

<div class="container mar p-3">
    <h1>Descrição:</h1>
    <div class="desc">
        <h3><?php echo $desc ?></h3>
    </div>
</div>

<?php
include_once(dirname(__FILE__) . "./inc/footer.php");
include_once(dirname(__FILE__) . "./inc/down.php");
?>