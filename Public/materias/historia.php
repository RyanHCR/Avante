<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conteúdos de história</title>
    <link rel="stylesheet" href="../../Resources/css/index.css">
    <link rel="icon" type="image/png" href="../../Resources/images/astroneer2.png">
</head>
<body>
    
<header class="header">
    <div class="left-buttons">
        <a href="historia.php"><button class="nav-button"style="color:#356A72">HISTÓRIA</button></a>
        <a href="geografia.php"><button class="nav-button">GEOGRAFIA</button></a>
    </div>
    <div class="logo-container">
        <img src="../../Resources/images/logo.jpeg" alt="Logo" class="logo">
    </div>
    <div class="right-buttons">
        <a href="sociologia.php"><button class="nav-button">SOCIOLOGIA</button></a>
        <a href="filosofia.php"><button class="nav-button">FILOSOFIA</button></a>
    </div>
</header>

    <a href="../../index.php" class="button-back">VOLTAR</a>
<div class="container">
        <a href="../conteudos/historia/escravidao.php" class="button button-um">ESCRAVIDÃO</a>
        <a href="../conteudos/historia/idademedia.php" class="button button-dois">IDADE MÉDIA</a>
        <a href="../conteudos/historia/prehistoria.php" class="button button-tres">PRÉ-HISTÓRIA</a>
        <a href="../conteudos/historia/brasilcolonial.php" class="button button-quatro">BRASIL COLONIAL</a>
    </div>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            gap: 35px;
            width: 1000px;
            text-align: center;
            font-family:'Roboto', sans-serif;
            margin-top:-40px;
            margin-left:17.4%;
        }

        .button {
            display: block;
            width: 100%;
            padding: 27px;
            text-decoration: none;
            color: white;
            border: 1px solid transparent;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-sizing: border-box;
            border-radius: 28px; /* Bordas arredondadas */
            font-weight: bold; /* Destaca o texto dos botões */
        }

        .button-um , .button-dois , .button-tres , .button-quatro  { background-color: #6FC3D0; } /* Azul para o botão 1 */

        .button:hover {
            opacity: 0.9;
            transform: scale(1.06); /* Efeito de zoom ao passar o mouse */
        }

        .button:active {
            opacity: 0.7;
        }

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