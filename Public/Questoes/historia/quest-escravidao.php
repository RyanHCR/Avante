<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questões de ESCRAVIDÃO</title>
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
    <h1>Questões sobre ESCRAVIDÃO </h1>
    <h2>NÍVEL FÁCIL</h2>

    <!-- Primeira pergunta -->
    <form method="POST" action="">
        <h3> 1. Sobre o processo de escravização no Brasil, assinale a alternativa correta:
        </h3>
        <input type="radio" name="resposta1" value="a" required>a) Os povos escravizados no Brasil eram amparados por lei com relação a castigos físicos. Portanto, essa prática desumana não acontecia com eles.<br>
        <input type="radio" name="resposta1" value="b">b) Os povos escravizados foram, desde o início da colonização, exclusivamente homens vindos do continente africano.<br>
        <input type="radio" name="resposta1" value="c">c) Os povos indígenas brasileiros nunca foram escravizados, pois os padres jesuítas os viam como indivíduos que precisavam ser catequizados.<br>
        <input type="radio" name="resposta1" value="d">d) O fim da escravidão no Brasil aconteceu logo nos primeiros anos de colonização, por conta do alto custo que os donos de fazendas tinham para manter um escravizado.<br>
        <input type="radio" name="resposta1" value="e">e) A escravização de pessoas aconteceu, na sua maioria, com povos vindos do continente africano, apesar de os indígenas também terem servido de mão de obra escrava.<br><br>
        <input type="submit" name="verificar1" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar1'])) {
        $resposta1_usuario = $_POST['resposta1'];
        $resposta1_correta = "e";
        $explicacao1 = "Os africanos foram os povos mais escravizados no Brasil, porque a compra e venda desses povos era lucrativa para Portugal. Contudo, os indígenas também foram escravizados, em especial nos primeiros anos de colonização.";

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
        <h3>2.“Toda a habitação de negros fugidos, que passem de cinco, em parte despovoada, ainda que não tenham ranchos levantados e nem se achem pilões nele”

O trecho acima se refere a:</h3>
        <input type="radio" name="resposta2" value="a" required>a) Quilombos.<br>
        <input type="radio" name="resposta2" value="b">b) Senzalas.<br>
        <input type="radio" name="resposta2" value="c">c) Casas-grande<br>
        <input type="radio" name="resposta2" value="d">d) Espaços de comércio de escravizados.<br>
        <input type="radio" name="resposta2" value= "e">e) Nenhuma das anteriores.<br><br>
        <input type="submit" name="verificar2" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar2'])) {
        $resposta2_usuario = $_POST['resposta2'];
        $resposta2_correta = "a";
        $explicacao2 = "Os quilombos eram espaços no meio das florestas onde os povos escravizados viviam foragidos após escaparem das grandes fazendas.";

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
        <h3>3. (Fuvest) A resistência dos povos africanos durante a escravização no Brasil é um aspecto de extrema importância no estudo da história da escravidão no país. Sobre esse tema, assinale o que for correto:</h3>
        <input type="radio" name="resposta3" value="a" required>a) Os quilombos eram espaços de refúgio onde os padres jesuítas realizavam processos de catequização com escravizados. Para cada escravizado catequizado, a Coroa portuguesa pagava uma quantia em ouro para seu senhor.<br>
        <input type="radio" name="resposta3" value="b">b) O processo de escravização no Brasil aconteceu sem que os escravizados apresentassem nenhum tipo de resistência. Isso explica o fato de a escravidão ter durado tanto tempo no país.<br>
        <input type="radio" name="resposta3" value="c">c) Além das fugas e revoltas, a resistência dos escravizados contra a escravidão ocorreu também por meio de manifestações culturais e religiosas. No contexto em que viviam, lutar para manter vivos seus costumes e língua, por exemplo, era um ato de resistência.<br>
        <input type="radio" name="resposta3" value="d">d) As leis abolicionistas criadas no Brasil durante o século XIX surgiram exclusivamente por conta do contexto europeu. O desenvolvimento das atividades mercantis na Inglaterra são um exemplo disso.<br>
        <input type="radio" name="resposta3" value="e">e) Considerando a ação da Princesa Isabel na assinatura da Lei Áurea, em 1888, é possível afirmar que ela deve ser considerada a principal heroína na luta da população brasileira contra a escravidão.<br><br>
        <input type="submit" name="verificar3" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar3'])) {
        $resposta3_usuario = $_POST['resposta3'];
        $resposta3_correta = "c";
        $explicacao3 = "A resistência não aconteceu apenas através de fugas e rebeliões. Como aos escravizados era proibido manter sua cultura, praticar sua religiosidade e seus costumes, mesmo que contra as regras, foram algumas das diversas formas de resistência ao modelo escravagista.";

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
        <h3>4. (Uenp) Sobre a relação entre a Inglaterra e o fim da escravidão no Brasil, analise as sentenças e assinale a alternativa correta:</h3>
        <input type="radio" name="resposta4" value="a" required>a) Os ingleses defendiam a manutenção da escravidão no Brasil. Como eles eram os grandes navegadores, todos os navios carregados de escravizados precisavam pagar uma taxa para a coroa britânica. Portanto, a escravidão brasileira era favorável a estes.<br>
        <input type="radio" name="resposta4" value="b">b) Os ingleses defendiam a manutenção da escravidão no Brasil. O principal motivo estava nos acordos realizados entre Brasil e Portugal a partir de 1808, com a Abertura dos Portos brasileiros às nações amigas. Assim, o tráfico de escravizados era lucrativo para a Inglaterra.<br>
        <input type="radio" name="resposta4" value="c">c) Os ingleses eram contrários a manutenção da escravidão no Brasil. Isso porque o que era de seu interesse era a escravização de povos asiáticos, onde eles possuíam colônias. Mesmo propondo acordos com D. João VI para que o uso de africanos fosse substituído, a mudança não seria vantajosa para Portugal, que declinou.<br>
        <input type="radio" name="resposta4" value="d">d) Os ingleses eram contrários a manutenção da escravidão no Brasil. Símbolo das ideias iluministas, a Inglaterra era defensora dos direitos individuais dos seres humanos e, portanto, contrária a qualquer tipo de escravização de pessoas.<br>
        <input type="radio" name="resposta4" value="e">e) Os ingleses eram contrários a manutenção da escravidão no Brasil. Por conta de seu processo de industrialização, a escravidão não era interessante para os britânicos porque, como não ganha salário, um escravizado não pode consumir e, consequentemente, não pode consumir produtos ingleses. Portanto, a escravidão brasileira para a Inglaterra representava um menor mercado consumidor brasileiro apto a comprar seus produtos.<br><br>
        <input type="submit" name="verificar4" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar4'])) {
        $resposta4_usuario = $_POST['resposta4'];
        $resposta4_correta = "e";
        $explicacao4 = "O modelo mercantil inglês necessitava de uma maior quantidade de pessoas para consumir seus produtos. Assim, para eles seria mais interessante o fim da escravidão não por uma questão humanitária, mas econômica.";

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
        <h3>5. (ENEM) A África Ocidental é conhecida pela dinâmica das suas mulheres comerciantes, caracterizadas pela perícia, autonomia e mobilidade. A sua presença, que fora atestada por viajantes e por missionários portugueses que visitaram a costa a partir do século XV, consta também na ampla documentação sobre a região. A literatura é rica em referências às grandes mulheres como as vendedoras ambulantes, cujo jeito para o negócio, bem como a autonomia e mobilidade, é tão típico da região.

<h5>HAVIK, P. Dinâmicas e assimetrias afro-atlânticas: a agência feminina e representações em mudança na Guiné (séculos XIX e XX). In: PANTOJA, S. (Org.). Identidades, memórias e histórias em terras africanas. Brasília: LGE; Luanda: Nzila, 2006.</h5>

<h3>A abordagem realizada pelo autor sobre a vida social da África Ocidental pode ser relacionada a uma característica marcante das cidades no Brasil escravista nos séculos XVIII e XIX, que se observa pela:</h3></h3>
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
        $resposta5_correta = "c";
        $explicacao5 = "Principalmente nos grandes centros urbanos, negras escravas participavam do comércio de alguns produtos, sob supervisão de seus senhores, ou não. Entravam na modalidade de “Escravos de ganho”. Negras libertas, já inseridas neste sistema, tinham a tendência de continuar no comércio, portanto, não era estranho ver este tipo de ocorrência.";

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
        <h3>6. (Enem) A escravidão não há de ser suprimida no Brasil por uma guerra servil, muito menos por insurreições ou atentados locais. Não deve sê-lo, tampouco, por uma guerra civil, como o foi nos Estados Unidos. Ela poderia desaparecer, talvez, depois de uma revolução, como aconteceu na França, sendo essa revolução obra exclusiva da população livre. É no Parlamento e não em fazendas ou quilombos do interior, nem nas ruas e praças das cidades, que se há de ganhar, ou perder, a causa da liberdade.

<h5>NABUCO, J. O abolicionismo [1883]. Rio de Janeiro: Nova Fronteira; São Paulo: Publifolha, 2000 (adaptado).</h5>

<h3>No texto, Joaquim Nabuco defende um projeto político sobre como deveria ocorrer o fim da escravidão no Brasil, no qual:</h3></h3>
        <input type="radio" name="resposta6" value="a" required>a) Copiava o modelo haitiano de emancipação negra.<br>
        <input type="radio" name="resposta6" value="b">b) Incentivava a conquista de alforrias por meio de ações judiciais.<br>
        <input type="radio" name="resposta6" value="c">c) Optava pela via legalista de libertação.<br>
        <input type="radio" name="resposta6" value="d">d) Priorizava a negociação em torno das indenizações aos senhores.<br>
        <input type="radio" name="resposta6" value="e">e) Antecipava a libertação paternalista dos cativos.<br><br>
        <input type="submit" name="verificar6" value="Verificar Resposta">
    </form>

    <?php
    if (isset($_POST['verificar6'])) {
        $resposta6_usuario = $_POST['resposta6'];
        $resposta6_correta = "c";
        $explicacao6 = "A resistência não aconteceu apenas através de fugas e rebeliões. Como aos escravizados era proibido manter sua cultura, praticar sua religiosidade e seus costumes, mesmo que contra as regras, foram algumas das diversas formas de resistência ao modelo escravagista.";

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