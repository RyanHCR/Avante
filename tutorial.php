<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursinho Avante</title>
    <link rel="stylesheet" href="Resources/css/index.css">
    <link rel="icon" type="image/png" href="Resources/images/astroneer2.png">
    <script src="Resources/js/animation.js"></script>
</head>
<body>
<header class="header">
    <div class="left-buttons">
        <a href="Public/materias/historia.php"><button class="nav-button">HISTÓRIA</button></a>
        <a href="Public/materias/geografia.php"><button class="nav-button">GEOGRAFIA</button></a>
    </div>
    <div class="logo-container">
        <img src="Resources/images/logo.jpeg" alt="Logo" class="logo">
    </div>
    <div class="right-buttons">
        <a href="Public/materias/sociologia.php"><button class="nav-button">SOCIOLOGIA</button></a>
        <a href="Public/materias/filosofia.php"><button class="nav-button">FILOSOFIA</button></a>
    </div>
</header>
<div class="sub-header">
        <p>TUTORIAL</p>
    </div>
<a href="index.php" class="button-back">VOLTAR</a>
<video class="tutorial" width="700" height="500" controls>
  <source src="Resources/images/tutorialcursoavante.mp4" type="video/mp4">
</video>

<br><br><br><br><br><br>
<footer>
    <img class="footerlogo" src="Resources/images/footerlogo.png">
        <p>&copy; 2024 Todos os direitos reservados.</p>
        <p>
            <a href="https://www.facebook.com/?locale=pt_BR">Facebook</a>
            <a href="https://www.instagram.com/">Instagram</a>
            <a href="https://x.com/?lang=pt-br">Twitter</a>
        </p>
    </footer>

</body>

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
</html>