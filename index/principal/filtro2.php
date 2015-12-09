<?php
session_start();
if ($_SESSION["logado"] == null) {
    header("location: /");
}

$f1 = $_GET['f1'];
?>
<?php include_once './top.php'; ?>

<!-- Header -->
<header id="header">
    <h1><a href="">QUE TAL?</a></h1>
    <nav id="nav">
        <ul>
            <li><a href="../conta/">Conta</a></li>
            <li><a href="../sair/">Logout</a></li>
        </ul>
    </nav>
</header>        

<!-- Two -->
<section id="two" class="wrapper style2 special">
    <div class="container">
        <header class="major">
            <h2>Quanto podemos gastar hoje?</h2>
            <p>Selecione a melhor opção!</p>
        </header>
        <div class="row ">
            <div class="col-md-4 col-sm-12">
                <a href="filtro3.php?f1=<?= $f1 ?>&f2=4">                        
                    <div class="image fit captioned">
                        <img src="images/tantofaz.jpg" alt="" />
                        <h3>O valor não importa.</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-12">
                <a href="filtro3.php?f1=<?= $f1 ?>&f2=5">                        
                    <div class="image fit captioned">
                        <img src="images/menosdinheiro.jpg" alt="" />
                        <h3>Tô com pouca grana hoje :(</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-12">
                <a href="filtro3.php?f1=<?= $f1 ?>&f2=6">                        
                    <div class="image fit captioned">
                        <img src="images/maisdinheiro.jpg" alt="" />
                        <h3>Posso gastar um pouco mais :)</h3>
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