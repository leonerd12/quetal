<?php
session_start();
if ($_SESSION["logado"] == null) {
    header("location: /quetal/index/");
}

$f1 = $_GET['f1'];
$f2 = $_GET['f2'];

?>
<!DOCTYPE HTML>
<!--
        Spatial by TEMPLATED
        templated.co @templatedco
        Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <head>
        <title>QUE TAL? By Silicius</title>
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
    <body>

        <!-- Header -->
        <header id="header">
            <h1><strong><a href="../principal/">QUE TAL?</a></strong></h1>
            <nav id="nav">
                <ul>
                    <li><a href="pesquisa.php">Pesquisar</a></li>
                    <li><a href="../conta/">Conta</a></li>
                    <li><a href="../sair/">Logout</a></li>
                </ul>
            </nav>
        </header>        

        <!-- Two -->
        <section id="two" class="wrapper style2 special">
            <div class="container">
                <header class="major">
                    <h2>Quantas sugestões você deseja?</h2>
                    <p>Selecione a melhor opção!</p>
                </header>
                <div class="row 150%">
                    <div class="4u 12u(xsmall)">
                        <a href="resultado.php?f1=<?= $f1?>&f2=<?= $f2?>&f3=1">                        
                            <div class="image fit captioned">
                                <img src="images/pic02.jpg" alt="" />
                                <h3>1 SUGESTÃO</h3>
                            </div>
                        </a>
                    </div>
                    <div class="4u 12u(xsmall)">
                        <a href="resultado.php?f1=<?= $f1?>&f2=<?= $f2?>&f3=2">                        
                            <div class="image fit captioned">
                                <img src="images/pic03.jpg" alt="" />
                                <h3>2 SUGESTÕES</h3>
                            </div>
                        </a>
                    </div>
                    <div class="4u 12u(xsmall)">
                        <a href="resultado.php?f1=<?= $f1?>&f2=<?= $f2?>&f3=3">                        
                            <div class="image fit captioned">
                                <img src="images/pic08.jpg" alt="" />
                                <h3>3 SUGESTÕES</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <!--                                <ul class="actions">
                                                        <li><a href="#" class="button special big">Nulla luctus</a></li>
                                                        <li><a href="#" class="button big">Sed vulputate</a></li>
                                                </ul>-->
            </div>
        </section>


        <!-- Main -->
<!--        <section id="main" class="wrapper">
            <div class="container">

                <header class="major special">
                    <h2>Generic</h2>
                    <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
                </header>

                <a href="#" class="image fit"><img src="images/pic01.jpg" alt="" /></a>
                <p>Vis accumsan feugiat adipiscing nisl amet adipiscing accumsan blandit accumsan sapien blandit ac amet faucibus aliquet placerat commodo. Interdum ante aliquet commodo accumsan vis phasellus adipiscing. Ornare a in lacinia. Vestibulum accumsan ac metus massa tempor. Accumsan in lacinia ornare massa amet. Ac interdum ac non praesent. Cubilia lacinia interdum massa faucibus blandit nullam. Accumsan phasellus nunc integer. Accumsan euismod nunc adipiscing lacinia erat ut sit. Arcu amet. Id massa aliquet arcu accumsan lorem amet accumsan.</p>
                <p>Amet nibh adipiscing adipiscing. Commodo ante vis placerat interdum massa massa primis. Tempus condimentum tempus non ac varius cubilia adipiscing placerat lorem turpis at. Aliquet lorem porttitor interdum. Amet lacus. Aliquam lobortis faucibus blandit ac phasellus. In amet magna non interdum volutpat porttitor metus a ante ac neque. Nisi turpis. Commodo col. Interdum adipiscing mollis ut aliquam id ante adipiscing commodo integer arcu amet Ac interdum ac non praesent. Cubilia lacinia interdum massa faucibus blandit nullam. Accumsan phasellus nunc integer. Accumsan euismod nunc adipiscing lacinia erat ut sit. Arcu amet. Id massa aliquet arcu accumsan lorem amet accumsan commodo odio cubilia ac eu interdum placerat placerat arcu commodo lobortis adipiscing semper ornare pellentesque.</p>
                <p>Amet nibh adipiscing adipiscing. Commodo ante vis placerat interdum massa massa primis. Tempus condimentum tempus non ac varius cubilia adipiscing placerat lorem turpis at. Aliquet lorem porttitor interdum. Amet lacus. Aliquam lobortis faucibus blandit ac phasellus. In amet magna non interdum volutpat porttitor metus a ante ac neque. Nisi turpis. Commodo col. Interdum adipiscing mollis ut aliquam id ante adipiscing commodo integer arcu amet blandit adipiscing arcu ante.</p>

            </div>
        </section>-->

        <?php include_once './footer.php'; ?>