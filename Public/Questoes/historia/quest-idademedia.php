<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questões de IDADE MÉDIA</title>
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
    <h1>Questões sobre IDADE MÉDIA </h1>
    <h2>NÍVEL FÁCIL</h2>

    <!-- Primeira pergunta -->
    <form method="POST" action="">
        <h3> 1. (UEL) Assinale V para as sentenças verdadeiras e F para as falsas.
        <br>( ) A Igreja Católica teve pouca influência durante a Idade Média na Europa.
        <br>( ) O número de escravizados aumentou durante o feudalismo em comparação com a quantidade existente no período do Império Romano.
        <br>( ) Durante o período do feudalismo na Idade Média, a economia era baseada nas atividades rurais.
        <br>( ) O clero possuía vastas propriedades durante o período feudal.
        <br>( ) As relações de suserania e vassalagem não poderiam acontecer entre nobres.
        </h3>
        <input type="radio" name="resposta1" value="a" required>a) V-F-F-F-V.<br>
        <input type="radio" name="resposta1" value="b">b) F-F-F-V-F.<br>
        <input type="radio" name="resposta1" value="c">c) V-V-V-V-F.<br>
        <input type="radio" name="resposta1" value="d">d) F-F-V-V-F.<br>
        <input type="radio" name="resposta1" value="e">e) F-F-V-F-F.<br><br>
        <input type="submit" name="verificar1" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar1'])) {
        $resposta1_usuario = $_POST['resposta1'];
        $resposta1_correta = "d";
        $explicacao1 = "
I. FALSA- A Igreja teve muita influência na vida pública e privada durante o período da Idade Média.
II. FALSA - Na Europa ocorreu uma diminuição no número de escravizados após as migrações bárbaras. Grande parte dos escravizados tornaram-se servos.
III. VERDADEIRA - No período da Idade Média, a vida rural foi predominante na Europa ocidental.
IV. VERDADEIRA - A Igreja Católica ficou conhecida como 'A grande senhora feudal', pela grande quantidade de terras que ela possuiu.
V. FALSA - As relações de suserania e vassalagem só poderiam acontecer entre nobres.";

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
        <h3>2.(ENEM) Complete as lacunas:
        Os nobres que doavam terras aos outros nobres eram os ____________, enquanto os _________________ eram os nobres que recebiam essas terras</h3>
        <input type="radio" name="resposta2" value="a" required>a) Burgueses – servos<br>
        <input type="radio" name="resposta2" value="b">b) Vassalos - suseranos.<br>
        <input type="radio" name="resposta2" value="c">c) Suseranos – vilões.<br>
        <input type="radio" name="resposta2" value="d">d) Suseranos – vassalos.<br>
        <input type="radio" name="resposta2" value= "e">e) Vassalos - burgueses<br><br>
        <input type="submit" name="verificar2" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar2'])) {
        $resposta2_usuario = $_POST['resposta2'];
        $resposta2_correta = "d";
        $explicacao2 = "Os nobres que doavam terras aos outros nobres eram os suseranos, enquanto os vassalos eram os nobres que recebiam essas terras.
Na Idade Média, as relações de suserania e vassalagem aconteciam entre nobres. Burgueses ou vilões não participavam desse processo.";

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
        <h3>3. (Unesp) Relacione os impostos com suas respectivas descrições
<br>(1) Talha.<br>
<br>(2) Mão morta.<br>
<br>(3) Banalidades.<br>
<br>(4) Corveia.<br>

<br>( ) Imposto referente a utilização de equipamentos e instalações do feudo, como moinho, forno, pontes e estradas.
<br>( ) Imposto referente a parte de tudo o que foi produzido nas terras.
<br>( ) Trabalho obrigatório realizado nas terras ou instalações do senhor feudal.
<br>( ) Taxa a ser paga pela família do patriarca falecido para poder continuar morando no feudo.
A sequência correta é:</h3>
        <input type="radio" name="resposta3" value="a" required>a) 1-2-3-4.<br>
        <input type="radio" name="resposta3" value="b">b) 2-4-3-1.<br>
        <input type="radio" name="resposta3" value="c">c) 2-3-4-1.<br>
        <input type="radio" name="resposta3" value="d">d) 3-1-4-2.<br>
        <input type="radio" name="resposta3" value="e">e) 3-1-2-4.<br><br>
        <input type="submit" name="verificar3" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar3'])) {
        $resposta3_usuario = $_POST['resposta3'];
        $resposta3_correta = "d";
        $explicacao3 = "Talha: imposto referente a parte de tudo o que foi produzido nas terras.
Mão morta: taxa a ser paga pela família do patriarca falecido para poder continuar morando no feudo.
Banalidades: imposto referente a utilização de equipamentos e instalações do feudo, como moinho, forno, pontes e estradas.
Corveia: trabalho obrigatório realizado nas terras ou instalações do senhor feudal.";

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
        <h3>4. (UFMG) Sobre as estruturas de um feudo, assinale a alternativa correta.</h3>
        <input type="radio" name="resposta4" value="a" required>a) Os muros dos castelos em um feudo tinham a função de proteger apenas o senhor feudal, pois normalmente os feudos possuíam leis que proibiam a entrada de servos nesse espaço.<br>
        <input type="radio" name="resposta4" value="b">b) O bosque era um espaço no feudo que o senhor feudal evitava frequentar, devido aos perigos ali existentes, como o ataque de animais selvagens e possíveis invasores.<br>
        <input type="radio" name="resposta4" value="c">c) Os moinhos e fornos eram de uso exclusivo do senhor feudal.<br>
        <input type="radio" name="resposta4" value="d">d) Mesmo o clero não tendo grande importância no período, era comum a existência de igrejas nos feudos.<br>
        <input type="radio" name="resposta4" value="e">e) Manso servil era a parte do feudo destinada à produção agrícola pelos servos.<br><br>
        <input type="submit" name="verificar4" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar4'])) {
        $resposta4_usuario = $_POST['resposta4'];
        $resposta4_correta = "e";
        $explicacao4 = "a) ERRADA: em momentos de guerras e invasões, servos também poderiam se proteger nos castelos.

b) ERRADA: os senhores feudais frequentavam os bosques principalmente para a prática da caça, tida como importante para a nobreza.

c) ERRADA: todos poderiam utilizar fornos e moinhos. Para isso era cobrado dos servos uma taxa, chamada banalidades.

d) ERRADA: a Igreja Católica teve grande importância na Idade Média.

e) CORRETA. Manso servil: parte do feudo destinada aos servos; manso senhorial: parte destinada às plantações do senhor feudal; manso comunal: região de uso de todos os habitantes do feudo.";

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
        <h3>5. (IFMT) A Idade Média foi marcada por forte religiosidade e crença na salvação eterna:

<br>“Assim, pois, a cidade de Deus, que é tomada como una, na realidade é tripla. Alguns rezam, outros lutam e outros trabalham. As três ordens vivem juntas e não podem ser separadas. Os serviços de cada uma dessas ordens permitem os trabalhos das duas e cada uma por sua vez presta apoio às demais. Enquanto essa lei esteve em vigor, o mundo ficou em paz, mas agora, as leis se debilitam e toda a paz desaparece.”

<h5>(Carmen ad Rotbertumbregem francorum, In: Jaime Pinsky (org). Modo de produção feudal. 4 ed. São Paulo: Global. 1986. P.71).</h5>

<h3>Analisando o texto acima, pode-se concluir que:</h3></h3>
        <input type="radio" name="resposta5" value="a" required>a) Para a Igreja medieval, a divisão em três ordens – religiosos, senhores e servos – obedecia à vontade divina, segundo a qual, cada ordem tem um papel na sociedade, cabendo a todos a aceitação.<br>
        <input type="radio" name="resposta5" value="b">b) A divisão em ordens era uma vontade humana, estando, portanto, em desacordo com a vontade divina.<br>
        <input type="radio" name="resposta5" value="c">c) O papel de cada ordem era determinado pela importância que a guerra tinha naquela sociedade, sendo que lutar e combater eram as atribuições mais sagradas durante a Idade Média.<br>
        <input type="radio" name="resposta5" value="d">d) O texto afirma que o serviço mais importante na sociedade medieval era exercido pelos servos – os que trabalham – pois deles dependia a nutrição de todos.<br>
        <input type="radio" name="resposta5" value="e">e) A desobediência à ordem estabelecida, durante o período medieval, foi um importante instrumento para a manutenção da paz.<br><br>
        <input type="submit" name="verificar5" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar5'])) {
        $resposta5_usuario = $_POST['resposta5'];
        $resposta5_correta = "a";
        $explicacao5 = "a) CORRETA. a Igreja justificava a ordem social vigente a partir de uma argumentação religiosa.

b) ERRADA: a visão teocêntrica da Idade Média, defendida pela Igreja Católica, afirmava que a divisão social (clero - nobreza - servos) existia por uma vontade divina. Logo, não deveria ser questionada ou modificada.

c) ERRADA: guerrear era papel da nobreza, porém essa não era considerada uma atribuição mais sagrada que o papel do próprio clero.

d) ERRADA: o texto afirma que cada um dos três serviços são importantes, pois possibilitam o serviço dos outros dois.

e) ERRADA: não a desobediência, mas sim a obediência, foi um instrumento para a manutenção da paz.";

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
        <h3>6. (PUC) Antes da epidemia da COVID-19, outras doenças espalharam-se rapidamente e causaram a morte de milhares de pessoas. Na Idade Média ocidental, ficou famosa a Peste Negra que, combinada com a fome, dizimou cerca de um terço da população europeia.

<br>Assinale a única alternativa que relaciona corretamente o surgimento dessa peste com o quadro maior da baixa Idade Média:</h3>
        <input type="radio" name="resposta6" value="a" required>a) O surgimento da Peste Negra reforçou o desenvolvimento científico, especialmente da medicina medieval, que pôde averiguar soluções salvíficas oferecidas pela Escolástica.<br>
        <input type="radio" name="resposta6" value="b">b) O surgimento da Peste Negra indica o renascimento das rotas de comércio europeu e contribuiu para a decadência do regime feudal.<br>
        <input type="radio" name="resposta6" value="c">c) A Peste Negra favoreceu o incremento das universidades na Europa, pois tanto suseranos quanto vassalos uniram-se para incentivar a elaboração de pesquisas e a criação de uma vacina eficaz.<br>
        <input type="radio" name="resposta6" value="d">d) A Peste Negra levou os papas, bispos e reis a se unirem para obrigar as pessoas infectadas a lutarem nas Cruzadas, com a meta de, desse modo, transmitirem a doença aos muçulmanos que dominavam Jerusalém.<br><br>
        <input type="submit" name="verificar6" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar6'])) {
        $resposta6_usuario = $_POST['resposta6'];
        $resposta6_correta = "b";
        $explicacao6 = "
a) ERRADA: soluções salvíficas (relacionadas a salvação cristã) não foram averiguadas a partir do uso do desenvolvimento científico durante a Peste Negra.

b) CORRETA: o feudalismo começa a perder força a partir das diversas epidemias, pandemias e dos renascimentos comercial e urbano.

c) ERRADA: a primeira vacina que se tem registro foi produzida no século XVIII, séculos depois do período da pandemia de Peste Negra.

d) ERRADA: a tática apresentada não foi utilizada pelo clero nas Cruzadas, apesar de a tática de infectar o inimigo com alguma doença ter sido utilizada em outras guerras.";

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