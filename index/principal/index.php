<?php
session_start();
if ($_SESSION["logado"] == null) {
    header("location: /");
}
?>

<?php include_once './top.php'; ?>

<!-- Header -->
<header id="header">
    <h1><strong><a href="../principal/">QUE TAL?</a></strong></h1>
    <nav id="nav">
        <ul>
            <li class="hidden-md hidden-lg"><strong><a href="../principal/">QUE TAL?</a></strong></li>
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
            <h2>O que você quer fazer?</h2>
            <p>O que temos para hoje à noite?</p>
        </header>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <a href="filtro2.php?f1=1">                        
                    <div class="image fit captioned">
                        <img src="images/pic02.jpg" alt="" />
                        <h3>Quero sair com os amigos.</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-12">
                <a href="filtro2.php?f1=2">                        
                    <div class="image fit captioned">
                        <img src="images/pic03.jpg" alt="" />
                        <h3>Quero sair com boa companhia.</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-12">
                <a href="filtro2.php?f1=3">                        
                    <div class="image fit captioned">
                        <img src="images/pic08.jpg" alt="" />
                        <h3>Quero sair sozinho.</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include_once './footer.php'; ?>