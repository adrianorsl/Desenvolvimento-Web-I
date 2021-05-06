<!DOCTYPE html>
<?php
    $nome = (isset($_POST['nome']) ? $_POST['nome'] : '')."\n";
    $nome2 = "Computador \n";
    $dado1 = mt_rand (1, 6)."\n";
    $dado2 = mt_rand (1, 6)."\n";
    $dado3 = mt_rand (1, 6)."\n";
    $dado4 = mt_rand (1, 6)."\n";
    $soma1 = 0;
    $soma2 = 0;


?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php echo "Vamos ver quem tira o maior valor nos dados?" ?>
    <form action="" method="post">
    <fieldset>
    <legend>Quem e você</legend>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome" >
    </fieldset>
    <fieldset>
        <input type="submit" name="jogar" id="jogar" value="Jogar" >
    </fieldset>
    </form>
    <?php 
        echo nl2br($nome); 
        echo nl2br($dado1);
        switch ($dado1) {
            case 1 : echo nl2br("<img src= https://images.vectorhq.com/images/previews/27e/dado-1-138329.png>\n"); break;
            case 2 : echo nl2br("<img src= https://images.vectorhq.com/images/previews/482/dado-2-138325.png>\n"); break;
            case 3 : echo nl2br("<img src= https://images.vectorhq.com/images/previews/194/dado-3-138321.png>\n"); break;
            case 4 : echo nl2br("<img src= https://images.vectorhq.com/images/previews/6a9/dado-4-138319.png>\n"); break;
            case 5 : echo nl2br("<img src= https://images.vectorhq.com/images/previews/93c/dado-5-138316.png>\n"); break;
            case 6 : echo nl2br("<img src= https://cdn.picpng.com/dice/small/dice-cube-die-six-6-game-luck-91235.png>\n"); break;
        }
        echo nl2br($dado2); 
        switch ($dado2) {
            case 1 : echo nl2br("<img src= https://images.vectorhq.com/images/previews/27e/dado-1-138329.png>\n"); break;
            case 2 : echo nl2br("<img src= https://images.vectorhq.com/images/previews/482/dado-2-138325.png>\n"); break;
            case 3 : echo nl2br("<img src= https://images.vectorhq.com/images/previews/194/dado-3-138321.png>\n"); break;
            case 4 : echo nl2br("<img src= https://images.vectorhq.com/images/previews/6a9/dado-4-138319.png>\n"); break;
            case 5 : echo nl2br("<img src= https://images.vectorhq.com/images/previews/93c/dado-5-138316.png>\n"); break;
            case 6 : echo nl2br("<img src= https://cdn.picpng.com/dice/small/dice-cube-die-six-6-game-luck-91235.png>\n"); break;
        }
    ?>
    <?php
        echo nl2br($nome2);
        echo nl2br($dado3);
        switch ($dado3) {
            case 1 : echo nl2br("<img src= https://images.vectorhq.com/images/previews/27e/dado-1-138329.png>\n"); break;
            case 2 : echo nl2br("<img src= https://images.vectorhq.com/images/previews/482/dado-2-138325.png>\n"); break;
            case 3 : echo nl2br("<img src= https://images.vectorhq.com/images/previews/194/dado-3-138321.png>\n"); break;
            case 4 : echo nl2br("<img src= https://images.vectorhq.com/images/previews/6a9/dado-4-138319.png>\n"); break;
            case 5 : echo nl2br("<img src= https://images.vectorhq.com/images/previews/93c/dado-5-138316.png>\n"); break;
            case 6 : echo nl2br("<img src= https://cdn.picpng.com/dice/small/dice-cube-die-six-6-game-luck-91235.png>\n"); break;
        }
        echo nl2br($dado4); 
        switch ($dado4) {
            case 1 : echo nl2br("<img src= https://images.vectorhq.com/images/previews/27e/dado-1-138329.png>\n"); break;
            case 2 : echo nl2br("<img src= https://images.vectorhq.com/images/previews/482/dado-2-138325.png>\n"); break;
            case 3 : echo nl2br("<img src= https://images.vectorhq.com/images/previews/194/dado-3-138321.png>\n"); break;
            case 4 : echo nl2br("<img src= https://images.vectorhq.com/images/previews/6a9/dado-4-138319.png>\n"); break;
            case 5 : echo nl2br("<img src= https://images.vectorhq.com/images/previews/93c/dado-5-138316.png>\n"); break;
            case 6 : echo nl2br("<img src= https://cdn.picpng.com/dice/small/dice-cube-die-six-6-game-luck-91235.png>\n"); break;
        }
    ?>
    <?php 
    $soma1 = ($dado1 + $dado2);
    $soma2 = ($dado3 + $dado4);
    ?>
    <h3><?php
    if ($soma1 > $soma2) 
        echo "Você ganhou ".$nome;
    else if ($soma1 < $soma2) 
        echo "A máquina venceu ";
    else
        echo "Empatamos ";    
    ?></h3>
</body>
</html>