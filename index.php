<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="index.css">
    <title> Calculadora? </title>
    <meta charset="utf-8">
</head>

<body>
    <div class="container">
        <div class="titulo">
            <h1>Calculadora</h1>
        </div>
        <form  method="POST">
            <p class="inputN">
                Número 1: <input type="number" name="numero1" />
            </p>
            <p class="inputN">
                Número 2: <input type="number" name="numero2" />
            </p>
            <button class="btnOp" name="adicao" id="adicao">+</button>

            <button class="btnOp" name="subtracao" id="subtracao">-</button>

            <button class="btnOp" name="multiplicacao" id="multiplicacao">X</button>

            <button class="btnOp" name="divisao" id="divisao">/</button>
            <div class="res">
                <?php
              if(isset($_POST['adicao'])|| isset($_POST['subtracao'])|| isset($_POST['multiplicacao']) ||isset($_POST['divisao'])) {
                $n1 = $_POST['numero1'];
                $n2 = $_POST['numero2'];

                if (isset($_POST['adicao'])) {
                    echo "<div class ='res'> Resultado da adição: " . ($n1 + $n2) . "</div>";
                } else if (isset($_POST['subtracao'])) {
                    echo "<div class ='res'> Resultado da subtração: " . ($n1 - $n2). "</div>";
                } else if (isset($_POST['multiplicacao'])) {
                    echo "<div class ='res'> Resultado da multiplicação: " . ($n1 * $n2). "</div>";
                } else if (isset($_POST['divisao'])) {
                    echo "<div class ='res'> Resultado da divisão: " . ($n1 / $n2). "</div>";
                }

            }
                ?>
            </div>
        </form>
    </div>
</body>

</html>