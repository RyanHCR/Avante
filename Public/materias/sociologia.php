<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botões CRUD</title>
    <link rel="stylesheet" href="Resources/css/index.css">
</head>
<body>
    
<header class="header">
        <div class="left-buttons">
            <button class="nav-button">HISTÓRIA</button>
            <button class="nav-button">GEOGRAFIA</button>
        </div>
        <div class="logo-container">
            <img src="Resources/images/logo.jpeg" alt="Logo" class="logo">
        </div>
        <div class="right-buttons">
            <button class="nav-button">SOCIOLOGIA</button>
            <button class="nav-button">FILOSOFIA</button>
        </div>
    </header>


<div class="container">
        <a href="link" class="button button-um">CULTURA</a>
        <a href="link" class="button button-dois">SOCIÓLOGOS BRASILEIROS</a>
        <a href="link" class="button button-tres">PODER, ESTADO E POLÍTICA</a>
        <a href="link" class="button button-quatro">SOCIOLOGIA CONTEMPORÂNEA</a>
    </div>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            gap: 35px; /* Espaço entre os botões */
            width: 1000px; /* Largura dos botões + margem */
            text-align: center;
            margin-left:16%;
            font-family:'Roboto', sans-serif;
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
    </style>
</body>
</html>