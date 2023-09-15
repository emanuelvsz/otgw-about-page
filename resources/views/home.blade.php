<!DOCTYPE html>
<html>
<head>
    <title>Minha Página</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel&family=Cormorant+Garamond:ital,wght@1,300&family=Lobster+Two&family=Montserrat:ital,wght@1,100;1,400&family=Sacramento&display=swap');

        * {
            text-decoration: none;
            color: #1F1612;
        }

        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow: hidden;
        }

        h1 {
            margin-left: 3vw;
            font-family: 'Sacramento', sans-serif;
            color: #1F1612;
        }

        header {
            background-color: rgb(232, 219, 170, 0.80);
            display: flex;
            flex-direction: row;
            align-items: center;
            height: 13vh;
        }

        header nav {
            display: flex;
            align-items: center;
            margin-left: 15vw;
        }

        header nav ul {
            list-style: none;
            display: flex;
        }

        header nav ul li{
            list-style: none;
            display: flex;
            font-family: 'Cinzel', sans-serif;
            margin-right: 4.5vw;
        }

        header nav ul li a {
            text-decoration: none;
            color: inherit;
            position: relative;
            display: inline-block;
        }

        header nav ul li a:hover {
            color: #934333;
            transition: 0.3s ease;

        }

        header nav ul li a::before,
        header nav ul li a::after {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            background-color: #934333;
            transition: width 0.3s ease;
            transform-origin: 50%;
        }

        header nav ul li a::before {
            left: 50%;
            transform: translateX(-50%);
        }

        header nav ul li a::after {
            right: 50%;
            transform: translateX(50%);
        }

        header nav ul li a:hover::before,
        header nav ul li a:hover::after {
            width: 50%;
        }

        header nav ul li:last-child {
            margin-right: 0;
        }

        main {
            background-image: url('https://wallpaperset.com/w/full/0/c/2/2652.jpg');
            background-size: cover;
            background-position: center;
            height: 100%;
            overflow: hidden;
        }

        section {
            background-image: url('https://wallpaperaccess.com/full/1370379.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
        }

        section::before {
            content: "";
            background-image: url('https://wallpaperaccess.com/full/1370379.jpg');
            background-size: 110%; /* Aumenta o tamanho da imagem em relação à seção */
            background-position: center;
            width: 120%; /* Aumenta a largura da imagem em relação à seção */
            height: 100%;
            position: absolute;
            filter: blur(5px);
            animation: moveBackground 13s ease-in-out infinite alternate;
        }

        @keyframes moveBackground {
            0% {
                transform: translate(0, 0);
            }
            50% {
                transform: translate(20px, 0); /* Movimento para a direita */
            }
            100% {
                transform: translate(-20px, 0); /* Movimento de volta para a esquerda */
            }
        }

        #main-content {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        #title-container {
            position: absolute;
            top: 0;
            left: 10vw;
            margin-top: 5vh;
            text-align: left;
            max-width: 60%; /* Defina a largura máxima desejada, por exemplo, 60% */
        }

        h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 60px;
            color: #fff;
            margin-bottom: 0;
        }

        h3 {
            font-size: 24px;
            margin: 0;
            color: #e6d9a5;
            margin-bottom: 5vh;
        }

        p {
            font-size: 18px;
            color: lightgrey
        }

    </style>
</head>
<body>
    <main>
        <header>
            <h1><a href="/">Over The Garden Wall</a></h1>
            <nav>
                <ul>
                    <li><a href="/">About</a></li>
                    <li><a href="/pagina">Characters</a></li>
                    <li><a href="/pagina">Episodes</a></li>
                </ul>
            </nav>
        </header>
    </main>
    <section>
        <div id="main-content">
            <div id="title-container">
                <h2>Over the Garden Wall</h2>
                <h3>"Hidden shadows reveal deep secrets."</h3>
                <div>
                    <p>
                        "Over the Garden Wall" is a mysterious and enchanting animated series that follows the surreal adventures of two half-brothers, Wirt and Greg, as they find themselves lost in a strange and otherworldly forest known as The Unknown. With the help of a wise old woodsman and a talking bluebird named Beatrice, they must navigate a series of whimsical and sometimes eerie encounters with bizarre creatures and enigmatic characters. Along their journey, Wirt and Greg search for a way home while uncovering the mysteries of The Unknown and the dark secrets that lie within. This beautifully animated and atmospheric series combines elements of fantasy, folklore, and mystery, making it a captivating and thought-provoking tale for viewers of all ages.
                    </p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
