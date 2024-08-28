<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de um Triângulo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="div1">     
        <form method="post">
        <h1>Calculo da área de um triângulo:</h1>
        <label for="base" class="base1">Insira a base do triângulo em cm:</label>
        <input type="number" id="base" name="base" step="0.01" required>
        <br>
        <label for="altura" class="altura1">Insira a altura do triângulo em cm:</label>
        <input type="number" id="altura" name="altura" step="0.01" required>
        <br>
        <button type="submit" name="calculo_do_triangulo">Calcular</button>
        
    </form>



    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['calculo_do_triangulo'])){
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        $area = ($base * $altura) /2;
        echo "A área do triângulo é $area cm.";
            
        }
        
        echo '<br>';

        if ($area> 100) {
            echo "A área do triângulo é maior que o valor limite 100.";
        } elseif ($area == 100) {
            echo "A área do triângulo é igual o limite 100.";
        } else {
            echo  "A área do triângulo é menor que o valor limite 100.";
        }
    }
    ?>
    </div>
</body>
</html>