<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokémon Red</title>
 
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        h1{
            color: white;
        }
        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: black;
        }
        
        .container {
            display: flex;
        }
 
        .container a div {
            width: 200px;
            height: 250px;
            background-color: #ddd;
            margin: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            border-radius: 10px;
        }
 
        .container a div img {
            width: 180px;
        }
 
        .container a {
            text-decoration: none;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Escolha um pokémon:</h1>
    <div class="container">
        <a href="/pokemon/charmander">
            <div>
                <img src="https://external-preview.redd.it/UddQUiXHYfyqTrLDdBjEKJJ56K7YdPOXWIn5Pm9RtLM.jpg?width=640&crop=smart&auto=webp&s=7ea2de68b631056c3dcee7de5dd8ae705917c770">
                Charmander
            </div>
        </a>
        <a href="/pokemon/squirtle">
            <div>
                <img src="https://i.pinimg.com/originals/ed/21/34/ed213482f982ca6e6e79e9584e15ca56.jpg">
                Squirtle
            </div>
        </a>
        <a href="/pokemon/bulbassaur">
            <div>
                <img src="https://external-preview.redd.it/ugbcabmJEdqDrkW-8jnTZG-_-GXiji2sYjdndqaMvx0.jpg?auto=webp&s=3aaf6e2f740491864b302e2add262a4c57e76949">
                Bulbassaur
            </div>
        </a>
    </div>
</body>
</html>
<!--criação dessa pagina #06-->