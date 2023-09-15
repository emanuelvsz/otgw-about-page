<!DOCTYPE html>
<html>
<head>
    <title>Minha Página</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            margin-left: 6vw;
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
            background-size: 110%;
            background-position: center;
            width: 120%;
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
                transform: translate(20px, 0);
            }
            100% {
                transform: translate(-20px, 0);
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
            left: 6vw;
            margin-top: 5vh;
            text-align: left;
            max-width: 60%;
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

        #icons {
            display: flex;
            align-items: center;
            margin-top: 4vh;
        }

        .span {
            color: white;
            margin-right: 2vw;
            display: flex;
            align-items: center;
        }

        .span i {
            margin-right: .5vw;
        }

        .fas {
            color: white;
            font-size: 20px;
        }

        .icon-img{
            height: 20px;
            width: 20px;
        }

        #type {
            height: 3vh;
            background-color: #0e0e0e;
            opacity: .65px;
            color: white;
            font-family: "Montserrat", sans-serif;
            font-size: 13px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
            margin-left: 2vw;
            padding-left: .5vw;
            padding-right: .5vw;
        }

        .image-container {
            height: 370px;
            display: flex;
            flex-direction: column;
            width: 25%;
            margin-left: 2vw;
            background-color: green;
            position: absolute;
            right: 6%;
            bottom: 25%;
            background-image: url('https://m.media-amazon.com/images/M/MV5BYzhjNzI0NWEtMzEyYy00OGViLThhMjctMWQxNGQ3Y2IzOTY4XkEyXkFqcGdeQXVyNjAwNDUxODI@._V1_.jpg');
            background-size: cover;
            background-position: center;
            overflow: hidden;
        }

        /* Botão oculto inicialmente */
        .image-container .button-container {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .image-container .button-container button {
            background-color: #501b9f;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button-container button a {
            color: white;
            font-family: 'Montserrat', sans-serif;
            text-decoration: none;
        }

        .image-container:hover .button-container {
            transform: translateY(0);
        }

    </style>
</head>
<body>
    <main>
        <header>
            <h1><a href="/">The Unknown</a></h1>
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
                <h3>"Beware the Unknown's silent call."</h3>
                <div>
                    <p>
                        "Over the Garden Wall" is a mysterious and enchanting animated series that follows the surreal adventures of two half-brothers, Wirt and Greg, as they find themselves lost in a strange and otherworldly forest known as The Unknown. With the help of a wise old woodsman and a talking bluebird named Beatrice, they must navigate a series of whimsical and sometimes eerie encounters with bizarre creatures and enigmatic characters. Along their journey, Wirt and Greg search for a way home while uncovering the mysteries of The Unknown and the dark secrets that lie within. This beautifully animated and atmospheric series combines elements of fantasy, folklore, and mystery, making it a captivating and thought-provoking tale for viewers of all ages.
                    </p>

                    <div id="icons">
                        <div class="span"><i class="fas fa-film"></i> 10 Episódios</div>
                        <div class="span"><i class="fas fa-star"></i> 4.1/5.0</div>
                        <img class="icon-img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/22/DJCTQ_-_L.svg/1200px-DJCTQ_-_L.svg.png" alt="">
                        <div id="type">
                            SERIADO
                        </div>
                    </div>
                </div>
            </div>
            <div class="image-container">
                <div class="button-container">
                    <button>
                        <a href="https://play.hbomax.com/series/urn:hbo:series:GXufwFQjcx8PCwgEAAA95?source=googleHBOMAX&action=open">Assistir na HBO Max</a>
                    </button>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
