<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_POST['d1'] ?? 1;
        $divisor = $_POST['d2'] ?? 1;
    ?>
    <main>
        <h1>Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="d1">Dividendo</label>
            <input type="number" name="d1" value="<?=$dividendo?>">
            <label for="d2">Divisor</label>
            <input type="number" name="d2" min="1" value="<?=$divisor?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Dividindo</h2>
        <?php 
            
            $quociente = (int) ($dividendo/$divisor);
            $resultado = $quociente*$divisor;
            $resto = $dividendo % $divisor;
            
        ?>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?="-".$resultado?></td>
                <td><?=$quociente?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=" "?></td>
            </tr>
        </table>
    </section>
</body>
</html>