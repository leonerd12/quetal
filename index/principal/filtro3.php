<?php
session_start();
if ($_SESSION["logado"] == null) {
    header("location: /");
}

$f1 = $_GET['f1'];
$f2 = $_GET['f2'];
?>
<?php include_once './top.php'; ?>

<!-- Header -->
<header id="header">
    <h1><strong><a href="../principal/">QUE TAL?</a></strong></h1>
    <nav id="nav">
        <ul>
            <!--<li><a href="pesquisa.php">Pesquisar</a></li>-->
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
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <a href="resultado.php?f1=<?= $f1 ?>&f2=<?= $f2 ?>&f3=1">                        
                    <div class="image fit captioned">
                        <img src="images/um.jpg" alt="" />
                        <h3>1 SUGESTÃO</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-12">
                <a href="resultado.php?f1=<?= $f1 ?>&f2=<?= $f2 ?>&f3=2">                        
                    <div class="image fit captioned">
                        <img src="images/dois.jpg" alt="" />
                        <h3>2 SUGESTÕES</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-12">
                <a href="resultado.php?f1=<?= $f1 ?>&f2=<?= $f2 ?>&f3=3">                        
                    <div class="image fit captioned">
                        <img src="images/tres.jpg" alt="" />
                        <h3>3 SUGESTÕES</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include_once './footer.php'; ?>