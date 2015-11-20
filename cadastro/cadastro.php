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
            <h1><strong><a href="index.php">Que tal?</a></strong></h1>
            <nav id="nav">
                <ul>
                    <li><a href="../index/index.php">Home</a></li>
                    <li><a href="../cadastro/cadastro.php">Cadastrar</a></li>
                    <li><a href="../index/index.php#four" class="scrolly">Login</a></li>
                </ul>
            </nav>
        </header>

        <!-- Banner -->
        <section id="banner">

            <div class="inner">
                <header class="major narrow">
                    <h2>Formulário de Cadastro</h2>
                    <p>Informaçãoes Básicas</p>
                </header>
                <form action="cadastrar.php" method="POST">
                    <div class="container 50%">
                        <div class="row uniform 50%">
                            <div class="12u$">
                                <input name="nome" placeholder="Nome" type="text" required="required"/>
                            </div>
                            <div class="12u$">
                                <input name="sNome" placeholder="Sobrenome" type="text"  required="required"/>
                            </div>
                            <div class="2u 3u(xsmall)">
                                <input name="dd" placeholder="Dia" type="text"  required="required"/>
                            </div>
                            <div class="2u 3u(xsmall)">
                                <input name="mm" placeholder="Mês" type="text"  required="required"/>
                            </div>
                            <div class="4u$">
                                <input name="aaaa" placeholder="Ano" type="text"  required="required"/>
                            </div>
                            <div class="12u$">
                                <input name="email" placeholder="Email" type="email"  required="required"/>
                            </div>
                            <div class="12u$">
                                <input name="senha" placeholder="Senha" type="password"  required="required"/>
                            </div>
                            <div class="4u ">
                                <input type="checkbox" id="g1" name="1" value="1">
                                <label for="g1">Pipoca</label>
                            </div>
                            <div class="4u">
                                <input type="checkbox" id="g2" name="2" value="2">
                                <label for="g2">Música</label>
                            </div>
                            <div class="4u">
                                <input type="checkbox" id="g3" name="3" value="3">
                                <label for="g3">Comida</label>
                            </div>
                            <div class="4u">
                                <input type="checkbox" id="g4" name="4" value="4">
                                <label for="g4">Passeio</label>
                            </div>
                            <div class="4u">
                                <input type="checkbox" id="g5" name="5" value="5">
                                <label for="g5">Bebida</label>
                            </div>
                            <div class="4u">
                                <input type="checkbox" id="g6" name="6" value="6">
                                <label for="g6">Companhia</label>
                            </div>
                            <div class="4u">
                                <input type="checkbox" id="g7" name="7" value="7">
                                <label for="g7">Festa</label>
                            </div>
                            <div class="4u">
                                <input type="checkbox" id="g8" name="8" value="8">
                                <label for="g8">Fim de Tarde</label>
                            </div>
                            <div class="4u">
                                <input type="checkbox" id="g9" name="9" value="9">
                                <label for="g9">Noite</label>
                            </div>
                        </div>
                    </div>
                    <br />
                    <ul class="actions">
                        <li><input type="submit" class="special" value="Cadastrar" /></li>
                        <li><input type="reset" class="alt" value="Limpar" /></li>
                    </ul>
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
                    <li>&copy; Silicius</li>
                    <li>Design: <a href="http://templated.co">TEMPLATED</a></li>
                    <li>Images: <a href="http://unsplash.com">Unsplash</a></li>
                </ul>
            </div>
        </footer>
        <script src="jquery.scrolly.min.js" type="text/javascript"></script>
        <script src="skel.min.js" type="text/javascript"></script>
        <script src="main.js" type="text/javascript"></script>
    </body>
</html>