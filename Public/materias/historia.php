<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botões CRUD</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="container">
        <a href="link" class="button button-um">ESCRAVIDÃO</a>
        <a href="link" class="button button-dois">IDADE MÉDIA</a>
        <a href="link" class="button button-tres">PRÉ HISTÓRIA</a>
        <a href="link" class="button button-quatro">BRASIL COLONIAL</a>
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