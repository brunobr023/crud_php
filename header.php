<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        body, header, li, ol{
            margin: 0;
            border: 0;
            align-items: center;
            
        }
        header{
            grid-area: auto;
            background-color: aquamarine;
            margin-top: 25px;
            margin-left: 10px;
            margin-bottom: 25px;
        }
        ol{
            display: flex;
            padding-bottom: 25px;
        }
        li{
            display: flex;
            position: relative;
            flex-wrap: wrap;
            text-wrap: wrap;
            margin-left: 25px;
            align-items: baseline;
            justify-content: end;
            justify-content: space-between;
        }
        .logo{
            margin-right: 100px;
            justify-content: left;
            flex-wrap: wrap;
            text-wrap: wrap;
        }
        
    </style>
</head>
<body>
    <header class="header">
        <ol>
            <li class="logo"><img src="" alt="LOGO"></li>
            <li><a href="#">Formualario</a></li>
            <li><a href="#">Verificação de Conteudo</a></li>
            <li><a href="#">Alterações</a></li>
            <li><a href="#">Delets</a></li>
        </ol>
        <h1>Olá estou alterando</h1>
        <p>teste test teste</p>
    </header>