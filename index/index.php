<?php
    session_start();
    if(isset($_SESSION["logado"]) && $_SESSION["logado"] == 1){
        header("location: /principal/");
    }
?>
<!DOCTYPE HTML>
<!--
        Spatial by TEMPLATED
        templated.co @templatedco
        Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <head>
        <title>QUE TAL? by Silicius</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="js/jquery.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/skel-layers.min.js"></script>
        <script src="js/init.js"></script>

        <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
        </noscript>
    </head>
    <body class="landing">

        <!-- Header -->
        <header id="header" class="alt">
            <h1><strong><a href="/">Que tal?</a></strong></h1>
            <nav id="nav">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="cadastro/">Cadastrar</a></li>
                    <li><a href="#four" class="scrolly">Login</a></li>
                </ul>
            </nav>
        </header>

        <!-- Banner -->
        <section id="banner">
            <h2>Que tal?</h2>
            <p>Que tal encontrar a noite perfeita?<br />As melhores e mais variadas opções da cidade</p>
            <ul class="actions">
                <li><a href="#four" class="button special big scrolly">Entrar Agora</a></li>
            </ul>
        </section>

        <section id="three" class="wrapper style1">
            <div class="container">
                <header class="major special">
                    <h2>Opções Varidas</h2>
                    <p>Primeiro um jantar, depois uma balada e por fim um motel. <br/> <b>Que tal?</b></p>
                </header>
                <div class="feature-grid">
                    <div class="feature">
                        <div class="image rounded"><img src="images/rest1.jpg" alt="" /></div>
                        <div class="content">
                            <header>
                                <h4>Restaurantes</h4>
                                <p>Lorem ipsum dolor sit</p>
                            </header>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore esse tenetur accusantium porro omnis, unde mollitia totam sit nesciunt consectetur.</p>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="image rounded"><img src="images/bar.jpg" alt="" /></div>
                        <div class="content">
                            <header>
                                <h4>Bares</h4>
                                <p>Ratione maiores a, commodi</p>
                            </header>
                            <p>Animi mollitia optio culpa expedita. Dolorem alias minima culpa repellat. Dolores, fuga maiores ut obcaecati blanditiis, at aperiam doloremque.</p>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="image rounded"><img src="images/festa.jpg" alt="" /></div>
                        <div class="content">
                            <header>
                                <h4>Festas</h4>
                                <p>Possimus ex reprehenderit eaque</p>
                            </header>
                            <p>Maiores iusto inventore fugit architecto est iste expedita commodi sed, quasi feugiat nam neque mollitia vitae omnis, ea natus facere.</p>
                        </div>
                    </div>
                    <div class="feature">
                        <div class="image rounded"><img src="images/motel.jpg" alt="" /></div>
                        <div class="content">
                            <header>
                                <h4>Motéis</h4>
                                <p>Quaerat, excepturi eveniet laboriosam</p>
                            </header>
                            <p>Vitae earum unde, autem labore voluptas ex, iste dolorum inventore natus consequatur iure similique obcaecati aut corporis hic in! Porro sed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Four -->
        <section id="four" class="wrapper style3 special">                       
            <div class="inner">
                <header class="major narrow">
                    <h2>Entrar Agora</h2>
                    <p>Faça Login e tenha o passeio perfeito.</p>
                </header>
                <form action="login.php" method="POST">
                    <div class="container 50%">
                        <div class="row uniform 50%">
                            <div class="12u">
                                <input name="email" placeholder="Email" type="text" />
                            </div>
                            <div class="12u">
                                <input name="senha" placeholder="Senha" type="password" />
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="container 50%">
                    <ul class="actions">
                        <li><input type="submit" class="special" value="Login" /></li>
                        <li><input type="reset" class="alt" value="Limpar" /></li>
                    </ul>
                    </div>
                </form>
            </div>
        </section>

        <!-- Footer -->
        <footer id="footer">
            <div class="container">
                <ul class="icons">
                    <li><a href="#" class="icon fa-facebook"></a></li>
                    <li><a href="#" class="icon fa-twitter"></a></li>
                    <li><a href="#" class="icon fa-instagram"></a></li>
                </ul>
                <ul class="copyright">
                    <li>&copy; Silicius | <?= date("Y")?></li>
                </ul>
            </div>
        </footer>
        <script src="jquery.scrolly.min.js" type="text/javascript"></script>
        <script src="skel.min.js" type="text/javascript"></script>
        <script src="main.js" type="text/javascript"></script>
    </body>
</html>