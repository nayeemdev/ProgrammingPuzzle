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

        #square {
            width: 100px;
            height: 100px;
            background-color: blue;
            position: absolute;
            top: 50px;
            left: 0;
        }
    </style>
</head>

<body>
<div id="square"></div>

<script>
    const square = document.getElementById('square');
    square.style.transitionDuration = '0.5s'; // for smooth animation

    let x = 0;
    let y = 0;
    let xDirection = 1;
    let yDirection = 1;
    let movingDistance = 10;
    let changeDirectionOnWindowWidth = 100;
    let changeDirectionOnWindowHeight = 100 + 50;

    function moveSquare() {
        transformSquare();
        changeDirectionOfSquare();
    }

    function transformSquare() {
        x += xDirection * movingDistance;
        y += yDirection * movingDistance;
        square.style.transform = `translate(${x}px, ${y}px)`;
    }

    function changeDirectionOfSquare() {
        const windowWidth = window.innerWidth;
        const windowHeight = window.innerHeight;
        if (x + changeDirectionOnWindowWidth >= windowWidth || x <= 0) {
            xDirection *= -1;
        }

        if (y + changeDirectionOnWindowHeight >= windowHeight || y <= 0) {
            yDirection *= -1;
        }
    }

    setInterval(moveSquare, 1000);
</script>
</body>

</html>