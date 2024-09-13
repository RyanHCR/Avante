<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz com Verificação Individual</title>
    <style>
        .explicacao {
            margin-top: 20px;
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 5px;
        }
        .correta {
            color: green;
        }
        .incorreta {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Quiz de Conhecimento</h1>

    <!-- Primeira pergunta -->
    <form method="POST" action="">
        <h3>1. Qual é o maior planeta do Sistema Solar?</h3>
        <input type="radio" name="resposta1" value="Terra" required> Terra<br>
        <input type="radio" name="resposta1" value="Marte"> Marte<br>
        <input type="radio" name="resposta1" value="Júpiter"> Júpiter<br>
        <input type="radio" name="resposta1" value="Saturno"> Saturno<br><br>
        <input type="submit" name="verificar1" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar1'])) {
        $resposta1_usuario = $_POST['resposta1'];
        $resposta1_correta = "Júpiter";
        $explicacao1 = "Júpiter é o maior planeta do Sistema Solar, com um diâmetro de aproximadamente 139.820 km.";

        echo "<h2>Resultado da Primeira Pergunta:</h2>";
        if ($resposta1_usuario == $resposta1_correta) {
            echo "<p class='correta'>Parabéns, você acertou! A resposta correta é $resposta1_correta.</p>";
        } else {
            echo "<p class='incorreta'>Você errou. A resposta correta é $resposta1_correta.</p>";
        }
        echo "<div class='explicacao'>
                <h3>Explicação:</h3>
                <p>$explicacao1</p>
              </div>";
    }
    ?>

    <!-- Segunda pergunta -->
    <form method="POST" action="">
        <h3>2. Qual é o elemento químico mais abundante na Terra?</h3>
        <input type="radio" name="resposta2" value="Oxigênio" required> Oxigênio<br>
        <input type="radio" name="resposta2" value="Hidrogênio"> Hidrogênio<br>
        <input type="radio" name="resposta2" value="Carbono"> Carbono<br>
        <input type="radio" name="resposta2" value="Nitrogênio"> Nitrogênio<br><br>
        <input type="submit" name="verificar2" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar2'])) {
        $resposta2_usuario = $_POST['resposta2'];
        $resposta2_correta = "Oxigênio";
        $explicacao2 = "O oxigênio é o elemento químico mais abundante na Terra, representando aproximadamente 46,6% da crosta terrestre.";

        echo "<h2>Resultado da Segunda Pergunta:</h2>";
        if ($resposta2_usuario == $resposta2_correta) {
            echo "<p class='correta'>Parabéns, você acertou! A resposta correta é $resposta2_correta.</p>";
        } else {
            echo "<p class='incorreta'>Você errou. A resposta correta é $resposta2_correta.</p>";
        }
        echo "<div class='explicacao'>
                <h3>Explicação:</h3>
                <p>$explicacao2</p>
              </div>";
    }
    ?>

    <!-- Terceira pergunta -->
    <form method="POST" action="">
        <h3>3. Quem pintou a Mona Lisa?</h3>
        <input type="radio" name="resposta3" value="Vincent van Gogh" required> Vincent van Gogh<br>
        <input type="radio" name="resposta3" value="Pablo Picasso"> Pablo Picasso<br>
        <input type="radio" name="resposta3" value="Leonardo da Vinci"> Leonardo da Vinci<br>
        <input type="radio" name="resposta3" value="Claude Monet"> Claude Monet<br><br>
        <input type="submit" name="verificar3" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar3'])) {
        $resposta3_usuario = $_POST['resposta3'];
        $resposta3_correta = "Leonardo da Vinci";
        $explicacao3 = "A Mona Lisa foi pintada por Leonardo da Vinci, um dos maiores artistas do Renascimento.";

        echo "<h2>Resultado da Terceira Pergunta:</h2>";
        if ($resposta3_usuario == $resposta3_correta) {
            echo "<p class='correta'>Parabéns, você acertou! A resposta correta é $resposta3_correta.</p>";
        } else {
            echo "<p class='incorreta'>Você errou. A resposta correta é $resposta3_correta.</p>";
        }
        echo "<div class='explicacao'>
                <h3>Explicação:</h3>
                <p>$explicacao3</p>
              </div>";
    }
    ?>

    <!-- Quarta pergunta -->
    <form method="POST" action="">
        <h3>4. Qual país é conhecido como a terra do sol nascente?</h3>
        <input type="radio" name="resposta4" value="China" required> China<br>
        <input type="radio" name="resposta4" value="Japão"> Japão<br>
        <input type="radio" name="resposta4" value="Coreia do Sul"> Coreia do Sul<br>
        <input type="radio" name="resposta4" value="Índia"> Índia<br><br>
        <input type="submit" name="verificar4" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar4'])) {
        $resposta4_usuario = $_POST['resposta4'];
        $resposta4_correta = "Japão";
        $explicacao4 = "O Japão é conhecido como a 'terra do sol nascente' devido à sua localização a leste do continente asiático.";

        echo "<h2>Resultado da Quarta Pergunta:</h2>";
        if ($resposta4_usuario == $resposta4_correta) {
            echo "<p class='correta'>Parabéns, você acertou! A resposta correta é $resposta4_correta.</p>";
        } else {
            echo "<p class='incorreta'>Você errou. A resposta correta é $resposta4_correta.</p>";
        }
        echo "<div class='explicacao'>
                <h3>Explicação:</h3>
                <p>$explicacao4</p>
              </div>";
    }
    ?>
</body>
</html>


