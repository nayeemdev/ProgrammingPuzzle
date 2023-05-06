<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puzzle 2 for box animation</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .main {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .buttons {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .link {
            margin: 5px 10px;
            padding: 10px 20px;
            background-color: #000;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            border: 1px solid #000;
            transition-duration: 0.3s;
        }

        .link:hover {
            background-color: #fff;
            color: #000;
        }
    </style>
</head>

<body>
<div class="main">
    <div class="buttons">
        <a href="src/Puzzle1" class="link">Puzzle 1</a>
        <a href="src/Puzzle2" class="link">Puzzle 2</a>
        <a href="src/Puzzle3" class="link">Puzzle 3</a>
    </div>
</div>
</body>

</html>