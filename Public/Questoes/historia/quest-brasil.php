<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questões de BRASIL COLONIA</title>
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
    <h1>Questões sobre BRASIL COLONIA </h1>
    <h2>NÍVEL FÁCIL</h2>

    <!-- Primeira pergunta -->
    <form method="POST" action="">
        <h3> 1. (Enem) No período pré-colonial a atividade econômica que teve maior destaque foi:
        </h3>
        <input type="radio" name="resposta1" value="a" required>a) pau-brasil<br>
        <input type="radio" name="resposta1" value="b">b) mineração<br>
        <input type="radio" name="resposta1" value="c">c) cana-de-açúcar<br>
        <input type="radio" name="resposta1" value="d">d) café<br>
        <input type="radio" name="resposta1" value="e">e) algodão<br><br>
        <input type="submit" name="verificar1" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar1'])) {
        $resposta1_usuario = $_POST['resposta1'];
        $resposta1_correta = "a";
        $explicacao1 = "A extração e comercialização do pau-brasil foi a primeira atividade econômica realizada pelos portugueses no Brasil. Mais tarde, se implantaria a cana-de-açúcar";

        echo "<h2>Resultado:</h2>";
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
        <h3>2. Sobre o período chamado Brasil Colônia, assinale a alternativa INCORRETA:
</h3>
        <input type="radio" name="resposta2" value="a" required>a) A esquadra de Pedro Álvares Cabral saiu da Espanha.<br>
        <input type="radio" name="resposta2" value="b">b) O monte que os portugueses avistaram foi chamado de Monte Pascoal.<br>
        <input type="radio" name="resposta2" value="c">c) Quando chegaram nas terras brasileiras os portugueses rezaram uma missa.<br>
        <input type="radio" name="resposta2" value="d">d) O escrivão da esquadra de Cabral era Pero Vaz de Caminha.<br>
        <input type="radio" name="resposta2" value= "e">e) A motivação dos portugueses era conquistar novos territórios.<br><br>
        <input type="submit" name="verificar2" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar2'])) {
        $resposta2_usuario = $_POST['resposta2'];
        $resposta2_correta = "a";
        $explicacao2 = "A esquadra de Cabral saiu de Lisboa, Portugal, em 9 de março de 1500.";

        echo "<h2>Resultado:</h2>";
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
<h2>NÍVEL MÉDIO</h2>
    <!-- Terceira pergunta -->
    <form method="POST" action="">
        <h3>3. (Fuvest) No Brasil colonial, a escravidão caracterizou-se essencialmente:</h3>
        <input type="radio" name="resposta3" value="a" required>a) por sua vinculação exclusiva ao sistema agrário exportador.<br>
        <input type="radio" name="resposta3" value="b">b) pelo incentivo da Igreja e da Coroa à escravidão de índios e negros.<br>
        <input type="radio" name="resposta3" value="c">c) por estar amplamente distribuída entre a população livre, constituindo a base econômica da sociedade.<br>
        <input type="radio" name="resposta3" value="d">d) por destinar os trabalhos mais penosos aos negros e mais leves aos índios.<br>
        <input type="radio" name="resposta3" value="e">e) por impedir a emigração em massa de trabalhadores livres para o Brasil.<br><br>
        <input type="submit" name="verificar3" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar3'])) {
        $resposta3_usuario = $_POST['resposta3'];
        $resposta3_correta = "c";
        $explicacao3 = "Os negros e indígenas escravizados foram a base do crescimento econômico do Brasil. Todas as tarefas eram realizadas por esses dois povos e até mesmo indivíduos de pouca condição financeira tinham pessoas escravizadas a seu serviço.";

        echo "<h2>Resultado:</h2>";
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
        <h3>4. (UEL) No Brasil colônia, a pecuária teve um papel decisivo na:</h3>
        <input type="radio" name="resposta4" value="a" required>a) ocupação das áreas litorâneas.<br>
        <input type="radio" name="resposta4" value="b">b) expulsão do assalariado do campo.<br>
        <input type="radio" name="resposta4" value="c">c) formação e exploração dos minifúndios.<br>
        <input type="radio" name="resposta4" value="d">d) fixação do escravo na agricultura.<br>
        <input type="radio" name="resposta4" value="e">e) expansão para o interior.<br><br>
        <input type="submit" name="verificar4" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar4'])) {
        $resposta4_usuario = $_POST['resposta4'];
        $resposta4_correta = "e";
        $explicacao4 = "A criação do gado demanda grandes extensões de terra. Por isso, os portugueses tiveram que se afastar do litoral a fim de criar os animais e, deste modo, acabaram expandindo os limites do Tratado de Tordesilhas.";

        echo "<h2>Resultado:</h2>";
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
<h2>NÍVEL DIFICIL</h2>
    <!-- Quinta pergunta -->
    <form method="POST" action="">
        <h3>5. (Unesp) A constatação de que “Essa aliança refletiu-se numa política de terras que incorporou concepções rurais tanto feudais como mercantis” justifica-se, pois a política de terras desenvolvida por Portugal durante a colonização brasileira</h3>
        <input type="radio" name="resposta5" value="a" required>a) permitiu tanto o surgimento de uma ampla camada de pequenos proprietários, cuja produção se voltava para o mercado interno, quanto a implementação de sólidas parcerias comerciais com o restante da América.<br>
        <input type="radio" name="resposta5" value="b">b) determinou tanto uma rigorosa hierarquia nobiliárquica nas terras coloniais, quanto o confisco total e imediato das terras comunais cultivadas por grupos indígenas ao longo do litoral brasileiro.<br>
        <input type="radio" name="resposta5" value="c">c) envolveu tanto a cessão vitalícia do usufruto de terras que continuavam a ser propriedades da Coroa, quanto a orientação principal do uso da terra para a monocultura exportadora.<br>
        <input type="radio" name="resposta5" value="d">d) garantiu tanto a prevalência da agricultura de subsistência, quanto a difusão, na região amazônica e nas áreas centrais da colônia, das práticas da pecuária e da agricultura de exportação.<br>
        <input type="radio" name="resposta5" value="e">e) assegurou tanto o predomínio do minifúndio no Nordeste brasileiro, quanto uma regular distribuição de terras entre camponeses no Centro-Sul, com o objetivo de estimular a agricultura de exportação.<br><br>
        <input type="submit" name="verificar5" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar5'])) {
        $resposta5_usuario = $_POST['resposta5'];
        $resposta5_correta = "c";
        $explicacao5 = "
A alternativa mostra que concepção feudal da doação de terra estava expressa no caráter vitalício da propriedade da mesma. Já o caráter mercantil é expresso na utilização da terra para a exploração de um único produto.";

        echo "<h2>Resultado:</h2>";
        if ($resposta5_usuario == $resposta5_correta) {
            echo "<p class='correta'>Parabéns, você acertou! A resposta correta é $resposta5_correta.</p>";
        } else {
            echo "<p class='incorreta'>Você errou. A resposta correta é $resposta5_correta.</p>";
        }
        echo "<div class='explicacao'>
                <h3>Explicação:</h3>
                <p>$explicacao5</p>
              </div>";
    }
    ?>

    <!-- Sexta pergunta -->
    <form method="POST" action="">
        <h3>6. (Unicamp )
“Quando os portugueses começaram a povoar a terra, havia muitos destes índios pela costa junto das Capitanias. Porque os índios se levantaram contra os portugueses, os governadores e capitães os destruíram pouco a pouco, e mataram muitos deles. Outros fugiram para o sertão, e assim ficou a costa despovoada de gentio ao longo das Capitanias. Junto delas ficaram alguns índios em aldeias que são de paz e amigos dos portugueses.”

<h5>(Pero de Magalhães Gandavo, Tratado da Terra do Brasil, em http://www.cce.ufsc.br/~nupill/literatura/ganda1.html. Acessado em 20/08/2012.)</h5>x

<h3>Conforme o relato de Pero de Gandavo, escrito por volta de 1570, naquela época</h3></h3>
        <input type="radio" name="resposta6" value="a" required>a) as aldeias de paz eram aquelas em que a catequese jesuítica permitia o sincretismo religioso como forma de solucionar os conflitos entre indígenas e portugueses.<br>
        <input type="radio" name="resposta6" value="b">b) a violência contra os indígenas foi exercida com o intuito de desocupar o litoral e facilitar a circulação do ouro entre as minas e os portos.<br>
        <input type="radio" name="resposta6" value="c">c) a fuga dos indígenas para o interior era uma reação às perseguições feitas pelos portugueses e ocasionou o esvaziamento da costa.<br>
        <input type="radio" name="resposta6" value="d">d) houve resistência dos indígenas à presença portuguesa de forma semelhante às descritas por Pero Vaz de Caminha, em 1500.<br><br>
        <input type="submit" name="verificar6" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar6'])) {
        $resposta6_usuario = $_POST['resposta6'];
        $resposta6_correta = "c";
        $explicacao6 = "Em reação à presença e maus-tratos dos portugueses, os indígenas abandonaram seus antigos territórios junto ao litoral e foram buscar refúgio no interior. Era a única maneira de continuar a viver sem conflitos com o invasor.";

        echo "<h2>Resultado:</h2>";
        if ($resposta6_usuario == $resposta6_correta) {
            echo "<p class='correta'>Parabéns, você acertou! A resposta correta é $resposta6_correta.</p>";
        } else {
            echo "<p class='incorreta'>Você errou. A resposta correta é $resposta6_correta.</p>";
        }
        echo "<div class='explicacao'>
                <h3>Explicação:</h3>
                <p>$explicacao6</p>
              </div>";
    }
    ?>
</body>
</html>