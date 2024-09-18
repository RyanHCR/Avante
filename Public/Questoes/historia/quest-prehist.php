<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questões de PRÉ-HISTÓRIA</title>
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
    <h1>Questões sobre PRÉ-HISTÓRIA </h1>
    <h2>NÍVEL FÁCIL</h2>

    <!-- Primeira pergunta -->
    <form method="POST" action="">
        <h3> 1. (Enem) Os nossos ancestrais dedicavam-se à caça, à pesca e à coleta de frutas e vegetais, garantindo sua subsistência, porque ainda não conheciam as práticas de agricultura e pecuária. Uma vez esgotados os alimentos, viam-se obrigados a transferir o acampamento para outro lugar.
        </h3>
        <input type="radio" name="resposta1" value="a" required>a) pendularismo<br>
        <input type="radio" name="resposta1" value="b">b) nomadismo<br>
        <input type="radio" name="resposta1" value="c">c) êxodo rural<br>
        <input type="radio" name="resposta1" value="d">d) transumância<br>
        <input type="radio" name="resposta1" value="e">e) sedentarismo<br><br>
        <input type="submit" name="verificar1" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar1'])) {
        $resposta1_usuario = $_POST['resposta1'];
        $resposta1_correta = "b";
        $explicacao1 = "A agricultura exige um estilo de vida sedentário ou seja, modo de vida em que o indivíduo não esteja mudando o tempo todo de lugar. Por sua parte, o nomadismo se caracteriza pela mobilidade, algo compatível com as atividades de caça e coleta de frutos.";

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
    <img src="Resources/IMAGES/quest2.jpg">
        <h3>2. A pintura rupestre ao lado, que é um patrimônio cultural brasileiro, expressa:</h3>
        <input type="radio" name="resposta2" value="a" required>a) o conflito entre os povos indígenas e os europeus durante o processo de colonização do Brasil.<br>
        <input type="radio" name="resposta2" value="b">b) a organização social e política de um povo indígena e a hierarquia entre seus membros.<br>
        <input type="radio" name="resposta2" value="c">c) aspectos da vida cotidiana de grupos que viveram durante a chamada pré-história do Brasil.<br>
        <input type="radio" name="resposta2" value="d">d) os rituais que envolvem sacrifícios de grandes dinossauros atualmente extintos.<br>
        <input type="radio" name="resposta2" value= "e">e) a constante guerra entre diferentes grupos paleoíndios da América durante o período colonial.<br><br>
        <input type="submit" name="verificar2" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar2'])) {
        $resposta2_usuario = $_POST['resposta2'];
        $resposta2_correta = "c";
        $explicacao2 = "As pinturas rupestres retratavam, provavelmente, o dia a dia dos seres humanos daquela época, como as caçadas e os animais que habitavam no entorno. A alternativa (c) resume bem esta ideia e, portanto, é a correta.";

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
<h2>NÍVEL MÉDIO</h2>
    <!-- Terceira pergunta -->
    <form method="POST" action="">
        <h3>3. (UFG) As pinturas rupestres são evidências materiais do desenvolvimento intelectual dos seres humanos. Embora tradicionalmente estudadas pela Arqueologia, elas ajudaram a redefinir a concepção de que a História se inicia com a escrita, pois</h3>
        <input type="radio" name="resposta3" value="a" required>a) funcionam como códices velados de uma comunidade à espera de decifração.<br>
        <input type="radio" name="resposta3" value="b">b) expressam uma concepção de tempo marcada pela cronologia.        <br>
        <input type="radio" name="resposta3" value="c">c) indicam o predomínio da técnica sobre as forças da natureza.<br>
        <input type="radio" name="resposta3" value="d">d) atestam as relações entre registros gráficos e mitos de origem.<br>
        <input type="radio" name="resposta3" value="e">e) registram a supremacia do indivíduo sobre os membros de seu grupo.<br><br>
        <input type="submit" name="verificar3" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar3'])) {
        $resposta3_usuario = $_POST['resposta3'];
        $resposta3_correta = "a";
        $explicacao3 = "Tradicionalmente, considerava-se que a pré-história terminava com o surgimento da escrita. No entanto, essa teoria foi superada, pois vários povos como os incas e astecas jamais conheceram a escrita e nem por isso deixaram de construir civilizações impressionantes.
Desta forma, os desenhos encontrados nas cavernas ganharam novos significados. Atualmente, a hipótese mais provável é que seriam uma forma de registro das atividades da comunidade.";

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
        <h3>4. (UFPE) “Já se afirmou ser a Pré-História uma continuidade da História Natural, havendo uma analogia entre a evolução orgânica e o progresso da cultura.”
        Sobre a Pré-história, qual das alternativas a seguir é INCORRETA?</h3>
        <input type="radio" name="resposta4" value="a" required>a) Várias ciências auxiliam no estudo, como a antropologia, a arqueologia e a química.<br>
        <input type="radio" name="resposta4" value="b">b) A Pré-história pode ser dividida em Paleolítico e Neolítico, no que se refere ao processo técnico de trabalhar a pedra.<br>
        <input type="radio" name="resposta4" value="c">c) Sobre o Paleolítico, podemos afirmar que foi o período de grande desenvolvimento artístico, cujo exemplo são as pinturas antropomorfas e zoomorfas realizadas nas cavernas.<br>
        <input type="radio" name="resposta4" value="d">d) O Neolítico apresentou um desenvolvimento artístico diferente do Paleolítico, através dos traços geométricos do desenho e da pintura.<br>
        <input type="radio" name="resposta4" value="e">e) Os primeiros seres semelhantes ao homem foram o Australopithecus e o Homem de Java que eram bem mais adaptados que o Homem de Neanderthal<br><br>
        <input type="submit" name="verificar4" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar4'])) {
        $resposta4_usuario = $_POST['resposta4'];
        $resposta4_correta = "e";
        $explicacao4 = "O homem moderno surgiu de uma das espécies do Austrolopithecus. Já o Homem de Java foi um fóssil encontrado na Indonésia no final do séc. XIX. Por muito tempo se acreditou que ele seria o elo perdido entre as espécies de macaco e seres humanos. Hoje em dia, esta hipótese está descartada, pelo que a afirmação na sentença é incorreta.
Igualmente, é preciso ter em conta que o Homem de Neanderthal era melhor adaptado ao ambiente que essas duas espécies.";

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
        <h3>5. (UFRGS) A denominação "Revolução Neolítica", cunhada nos anos 60 pelo arqueólogo Gordon Childe, refere-se a uma série de intensas transformações. Entre essas mudanças, é correto citar</h3>
        <input type="radio" name="resposta5" value="a" required>a) a criação do poder político centralizado associado ao domínio do poder religioso.<br>
        <input type="radio" name="resposta5" value="b">b) o desenvolvimento de conglomerados urbanos baseados no trabalho escravo.<br>
        <input type="radio" name="resposta5" value="c">c) a instituição privada das terras, com o cultivo de cereais e a criação de animais.<br>
        <input type="radio" name="resposta5" value="d">d) o surgimento da divisão natural do trabalho, com a atribuição de papel produtivo relevante à mulher.<br>
        <input type="radio" name="resposta5" value="e">e) a transição da economia de subsistência para uma economia industrial<br><br>
        <input type="submit" name="verificar5" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar5'])) {
        $resposta5_usuario = $_POST['resposta5'];
        $resposta5_correta = "d";
        $explicacao5 = "O período Neolítico ou Período da Pedra Polida é caracterizado pela sedentarização dos seres humanos. Assim, o trabalho passa a ser dividido de acordo com a capacidade física de cada indivíduo, cabendo à mulher as tarefas agrícolas e ao homem, à caça.";

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
        <h3>6. (Unicamp) Desde o período neolítico, os povos de distintas partes do mundo desenvolveram sistemas agrários próprios aproveitando as condições naturais de seus habitats e do conhecimento adquirido e transmitido entre os membros da comunidade.
        Assinale a alternativa que estabelece corretamente a relação entre o povo habitante de uma determinada área, o sistema produtivo por ele desenvolvido, as condições naturais aproveitadas e os produtos cultivados.</h3>
        <input type="radio" name="resposta6" value="a" required>a) Egípcios; uso da irrigação e drenagem; planícies úmidas e férteis dos rios Tigres e Eufrates; arroz e café.<br>
        <input type="radio" name="resposta6" value="b">b) Incas; uso de terraços com técnicas de curvas de nível e irrigação de vales; aproveitamento dos altiplanos andinos; batata e milho.<br>
        <input type="radio" name="resposta6" value="c">c) Chineses; uso intensivo dos terraços das altas montanhas; planalto de Anatólia no extremo leste da Ásia; café e cacau.<br>
        <input type="radio" name="resposta6" value="d">d) Mesopotâmicos; uso de cultivos de inundação e de regadio; vales férteis dos rios Ganges e Amarelo; cana-de-açúcar e feijão.<br><br>
        <input type="submit" name="verificar6" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar6'])) {
        $resposta6_usuario = $_POST['resposta6'];
        $resposta6_correta = "b";
        $explicacao6 = "Os incas aproveitavam o relevo dos altiplanos para cultivar alimentos como a batata e o milho.";

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