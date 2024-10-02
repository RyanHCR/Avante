<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questões Filsofia Antiga</title>
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
    <h1>Questões sobre a Filsofia Antiga</h1>

    <!-- Primeira pergunta -->
    <form method="POST" action="">
        <h3>1. Questão 01(Enem/2017) 
Uma conversação de tal natureza transforma o ouvinte; o contato de Sócrates paralisa e embaraça; 
leva a refletir sobre si mesmo, a imprimir à atenção uma direção incomum: os temperamentais, 
como Alcibíades sabem que encontrarão junto dele todo o bem de que são capazes, mas fogem porque receiam essa influência poderosa, 
que os leva a se censurarem. Sobretudo a esses jovens, muitos quase crianças, que ele tenta imprimir sua orientação.

O texto evidencia características do modo de vida socrático, que se baseava na:</h3>
        <input type="radio" name="resposta" value="Contemplação da tradição mítica."> Contemplação da tradição mítica.<br>
        <input type="radio" name="resposta" value="Sustentação do método dialético.">  Sustentação do método dialético.<br>
        <input type="radio" name="resposta" value="Relativização do saber verdadeiro."> Relativização do saber verdadeiro.<br>
        <input type="radio" name="resposta" value=" Valorização da argumentação retórica">  Valorização da argumentação retórica.<br>
        <input type="radio" name="resposta" value="Investigação dos fundamentos da natureza.">  Investigação dos fundamentos da natureza.<br><br>
        <input type="submit" name="verificar1" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar1'])) {

        $resposta1_usuario = $_POST['resposta'];
        $resposta1_correta = "Sustentação do método dialético.";
        $explicacao1 = "Resposta: B.
Sócrates foi um defensor da ignorância como o princípio básico para o conhecimento. 
Daí a importância da sua frase 'só sei que nada sei'. Para ele, é preferível não saber a julgar saber.
Sendo assim, Sócrates construiu um método que, através do diálogo (método dialético), 
as falsas certezas e os pré-conceitos eram abandonados, o interlocutor assumia a sua ignorância. 
A partir daí, buscava o conhecimento verdadeiro.";

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
        <h3>2. Questão 02 (Enem 2019) Em sentido geral e fundamental, Direito é a técnica da coexistência humana, 
         isto é, a técnica voltada a tornar possível a coexistência dos homens. Como técnica, 
         o Direito se concretiza em um conjunto de regras (que, nesse caso, são leis ou normas); 
         e tais regras têm por objeto o comportamento intersubjetivo, isto é, o comportamento recíproco dos homens entre si.

        O sentido geral e fundamental do Direito, conforme foi destacado, refere-se à</h3>
        <input type="radio" name="resposta2" value="aplicação de códigos legais." required> aplicação de códigos legais.<br>
        <input type="radio" name="resposta2" value="regulação do convívio social.">  regulação do convívio social.<br>
        <input type="radio" name="resposta2" value="legitimação de decisões políticas.">  legitimação de decisões políticas.<br>
        <input type="radio" name="resposta2" value="mediação de conflitos econômicos."> mediação de conflitos econômicos.<br><br>
        <input type="radio" name="resposta2" value="representação da autoridade constituída."> representação da autoridade constituída.<br><br>
        <input type="submit" name="verificar2" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar2'])) {
        $resposta2_usuario = $_POST['resposta2'];
        $resposta2_correta = "aplicação de códigos legais.";
        $explicacao2 = "No texto, o Direito é compreendido como uma técnica que tem como objetivo possibilitar a 'coexistência dos homens' 
        ('homens' aqui tomado como sinônimo de seres humanos).
        Assim, a formulação de um conjunto de regras busca a regulação do convívio social, 
        possibilitando uma relação justa e recíproca entre os sujeitos";

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
        <h3>3. Questão 03(Unicamp 2018) 
Para Platão, o que havia de verdadeiro em Parmênides era que o objeto de conhecimento é um objeto de razão e não de sensação, 
e era preciso estabelecer uma relação entre objeto racional e objeto sensível ou material que privilegiasse o primeiro em detrimento do segundo. 
Lenta, mas irresistivelmente, a Doutrina das Ideias formava-se em sua mente.

O texto faz referência à relação entre razão e sensação, um aspecto essencial da Doutrina das Ideias de Platão (427 a.C.-346 a.C.). 
De acordo com o texto, como Platão se situa diante dessa relação?</h3>
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