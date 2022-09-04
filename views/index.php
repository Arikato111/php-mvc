<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/public/icon.svg" type="image/x-icon">
    <title>Paravel app</title>
    <!-- <style> body { background-color: #f2f2f2; padding: 50px; } h1 { color: blue; padding: 0 50px; } .container { background-color: white; margin: 30px; padding: 10px; font-size: 18px; border-radius: 4px; color: #5b5b5b; } </style>  -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap');

        body {
            background-color: #f2f2f2;
        }

        * {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-family: 'Raleway', sans-serif;
        }

        .content {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 90vh;
        }

        .box {
            background-color: white;
            display: inline-block;
            text-align: left;
            padding: 10px 20px;
            margin: 0 20px;
            box-shadow: 0px 3px 10px 3px rgb(224, 224, 224);
            border-radius: 5px;
            width: 700px;
        }

        .title {
            color: blue;
            font-size: 40px;
            margin-top: 30px;
            font-weight: 500;
        }

        .subtitle {
            font-size: 30px;
            margin-left: 2rem;
        }

        .box-list {
            display: inline-block;
            text-align: left;
        }

        .list {
            font-size: 25px;
            list-style-type: circle;
            margin-left: 4rem;
        }

        .github {
            font-size: 24px;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            /* border: 2px solid black; */
            border-radius: 5px;
            transition: 0.25s;
        }
        a {
            text-decoration: none;
        }

        .github:hover {
            background-color: black;
            color: white;
            transition: 0.25s;
            transform: translate(0,-10px);
        }

        .github-img {
            width: 50px;
            background-color: white;
            border-radius: 100px;
            margin: 5px 10px;
        }
    </style>
</head>

<body>
    <div class="content">
        <div class="box">
            <div class="title"><b><?php echo $props['appName']; ?></b></div>
            <hr>
            <div class="subtitle">Library and MVC </div>
            <div class="box-list">
                <ul class="list">
                    <li><b>M</b>odels <b>V</b>iew <b>C</b>ontrollers</li>
                    <li>custom Route</li>
                    <li>view</li>
                    <li>dotenv</li>
                    <li>and more</li>
                </ul>
            </div>
            <a target="_blank" href="https://github.com/Arikato111/php-mvc">

                <div class="github" align="center">
                    <img class="github-img" src="/public/github_icon.svg" alt="github logo"><b>Read more</b>
                </div>
            </a>
        </div>
    </div>
</body>

</html>