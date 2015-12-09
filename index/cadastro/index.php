<!DOCTYPE HTML>
<!--
        Spatial by TEMPLATED
        templated.co @templatedco
        Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <head>
        <title>QUE TAL?</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="js/jquery.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/mod.js"></script>
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
            <h1><a href="">Que tal?</a></h1>
            <nav id="nav">
                <ul>
                    <li><a href="../">Home</a></li>
                    <li><a href="../#four" class="scrolly">Login</a></li>
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
                            <div class="12u">
                                <input name="nome" id="nomeInput" placeholder="Nome" type="text" required="required"/>
                            </div>
                            <div class="12u">
                                <input name="sNome" id="snomeInput" placeholder="Sobrenome" type="text"  required="required"/>
                            </div>
                            <div class="4u 4u(xsmall)">
                                <input name="dd" id="diaInput" placeholder="Dia" type="text"  required="required"/>
                            </div>
                            <div class="4u 4u(xsmall)">
                                <input name="mm" id="mesInput" placeholder="Mês" type="text"  required="required"/>
                            </div>
                            <div class="4u 4u(xsmall)">
                                <input name="aaaa" id="anoInput" placeholder="Ano" type="text"  required="required"/>
                            </div>
                            <div class="12u">
                                <input name="email" id="ecadInput" placeholder="Email" type="email"  required="required"/>
                            </div>
                            <div class="12u">
                                <input name="senha" id="scadInput" placeholder="Senha" type="password"  required="required"/>
                            </div>
                        </div>
                        <br/>
                        <header class="major narrow">
                            <p>Deixe marcado apenas opções de seu insteresse</p>
                        </header>
                        <div class="row">
                            <div class="4u 4u(small)">
                                <input type="checkbox" id="g1" name="1" value="1" checked="checked">
                                <label for="g1">Pipoca</label><br/>
                                <input type="checkbox" id="g2" name="2" value="2" checked="checked">
                                <label for="g2">Música</label><br/>
                                <input type="checkbox" id="g3" name="3" value="3" checked="checked">
                                <label for="g3">Comida</label>
                            </div>
                            <div class="4u 4u(small)">
                                <input type="checkbox" id="g4" name="4" value="4" checked="checked">
                                <label for="g4">Passeio</label><br/>
                                <input type="checkbox" id="g5" name="5" value="5" checked="checked">
                                <label for="g5">Bebida</label><br/>
                                <input type="checkbox" id="g6" name="6" value="6" checked="checked">
                                <label for="g6">Companhia</label>
                            </div>
                            <div class="4u 4u(small)">
                                <input type="checkbox" id="g7" name="7" value="7" checked="checked">
                                <label for="g7">Festa</label><br/>
                                <input type="checkbox" id="g9" name="9" value="9" checked="checked">
                                <label for="g9">Noite</label>
                            </div>
                        </div>
                    </div>
                    <br />
                    <ul class="actions">
                        <li><button type="button" id="cadbtn" class="button special">Cadastrar</button></li>
                        <li><button type="button" id="limpcadbtn" class="button alt">Limpar</button></li>
                    </ul>
                </form>
            </div>
        </section>

        <!-- Footer -->
        <footer id="footer">
            <div class="container">
                <ul class="copyright">
                    <li>&copy; Silicius | <?= date("Y") ?></li>
                </ul>
            </div>
        </footer>
        <script src="jquery.scrolly.min.js" type="text/javascript"></script>
        <script src="skel.min.js" type="text/javascript"></script>
        <script src="main.js" type="text/javascript"></script>
    </body>
</html>