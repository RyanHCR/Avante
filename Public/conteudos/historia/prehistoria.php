<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botões CRUD</title>
    <link rel="stylesheet" href="../../../Resources/css/index.css">
</head>
<body>
    
<header class="header">
    <div class="left-buttons">
        <a href="historia.php"><button class="nav-button">HISTÓRIA</button></a>
        <a href="geografia.php"><button class="nav-button">GEOGRAFIA</button></a>
    </div>
    <div class="logo-container">
        <img src="../../../Resources/images/logo.jpeg" alt="Logo" class="logo">
    </div>
    <div class="right-buttons">
        <a href="sociologia.php"><button class="nav-button">SOCIOLOGIA</button></a>
        <a href="filosofia.php"><button class="nav-button">FILOSOFIA</button></a>
    </div>
</header>

    <a href="../../../index.php" class="button-back">VOLTAR</a>
    <p>A Pré-História foi o período do surgimento e desenvolvimento dos primeiros humanos na Terra. Para sobreviver às intemperes da natureza, eles tiveram que se adaptar ao meio ambiente. Esses grupos eram caçadores, pescadores e coletores, alimentando-se daquilo que estava disponível na natureza.</p>
    <img src="../../../Resources/images/pre-hist1.jpeg">
<p>A Pré-História é, basicamente, dividida entre Paleolítico, Mesolítico (período intermediário) e Neolítico. Nesses períodos, acompanhamos o desenvolvimento dos hominídeos com a elaboração de novas ferramentas, além do surgimento do homo sapiens sapiens, há cerca de 300 mil anos.</p>
<p>Paleolítico (Idade da Pedra Lascada)</p>
<p>Período: Aproximadamente 2,5 milhões a.C. a 10.000 a.C.
Características: É a fase mais longa da pré-história. Os seres humanos eram caçadores e coletores, utilizando ferramentas de pedra lascada. A arte rupestre, como as pinturas nas cavernas de Lascaux e Altamira, e as primeiras esculturas, como a Vênus de Willendorf, datam desse período.</p>
<p>Mesolítico (Idade da Pedra Média)</p>
<p>Período: Aproximadamente 10.000 a.C. a 5.000 a.C.
Características: Este período é uma fase de transição entre o Paleolítico e o Neolítico. A caça e a coleta continuaram, mas houve um aumento na utilização de pequenas ferramentas de pedra polida, e o início de um estilo de vida mais sedentário. Algumas culturas começaram a desenvolver técnicas primitivas de agricultura.</p>

<p>Neolítico (Idade da Pedra Polida)</p>
<p>Período: Aproximadamente 5.000 a.C. a 3.000 a.C.
Características: Caracteriza-se pelo desenvolvimento da agricultura, domesticação de animais e o surgimento de assentamentos permanentes. O homem passou de uma vida nômade para uma vida agrícola, criando as primeiras aldeias e, eventualmente, cidades. Também surgiram avanços na cerâmica, tecelagem e construção.</p>

    <style>

        .button-back {
            width: 120px;
            height: 50px;
            display: block;
            padding: 27px;
            text-decoration: none;
            color: white;
            border: 1px solid transparent;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-sizing: border-box;
            border-radius: 50px; /* Bordas arredondadas */
            font-weight: bold; /* Destaca o texto dos botões */
            margin-top: 50px;
            margin-left: 70px;
            display: flex;
            align-items: center;
        }

        a.button-back {
            display: flex;
            text-align: center;
            text-shadow: rgb(50, 50, 50) 0.1em 0.1em 0.1em;
        }

        .button-back { background-color: #A3DBE4; } /* Azul para o botão 1 */

        .button-back:hover {
            opacity: 0.9;
            transform: scale(1.06); /* Efeito de zoom ao passar o mouse */
        }

        .button-back:active {
            opacity: 0.7;
        }
    </style>
</body>
</html>