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
                    <li><a href="#four" class="scrolly">Login</a></li>
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
                            <div class="2u">
                                <input name="dd" placeholder="Dia" type="text"  required="required"/>
                            </div>
                            <div class="2u">
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