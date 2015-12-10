<?php
session_start();
if ($_SESSION["logado"] == null) {
    header("location: /quetal/index/");
}
?>
<!DOCTYPE HTML>
<!--
        Strata by HTML5 UP
        html5up.net | @n33co
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>QUE TAL? - Silicius</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    </head>
    <body id="top">

        <!-- Header -->
        <header id="header">
            <a href="#" class="image avatar"><img src="<?php if ($_SESSION['email'] == 'leo@m2smart.com.br') echo 'images/leo.jpg';
else echo 'images/avatar.jpg' ?>" alt="" /></a>
            <h1><strong>Bem vindo(a), <?= $_SESSION['nome'] ?></strong>
                <br />
                <br/>
                <div>
                    <a href="../principal/"><button class="button special">QUE TAL?</button></a><br/><br/>
                    <a href="../sair/"><button class="button icon"><i class="icon fa-sign-out fa-lg"></i> Sair</button></a>
                    <!--<a href="../principal/principal.php">Voltar</a>-->
                </div>
            </h1>
        </header>

        <!-- Main -->
        <div id="main">

            <!-- One -->


            <!-- Two -->
            <section id="two">
                <h1>Últimas sugestões</h1>

                <?php
                include_once '../DB/conexao.php';

                $query = "SELECT * FROM us_sugestao WHERE id_us = " . $_SESSION['id'] . " ORDER BY id DESC;";
                $result = pg_query($query);

                if (pg_num_rows($result) > 0) {
                    while ($linha = pg_fetch_assoc($result)):
                        echo"<div class = 'row'>";
                        $emp1 = $linha['emp1'];
                        $emp2 = $linha['emp2'];
                        $emp3 = $linha['emp3'];

                        if ($linha['emp1'] != '' && $linha['emp1'] != null):
                            $q1 = "SELECT * FROM empresa WHERE id = " . $emp1 . ";";
                            $r1 = pg_query($q1);
                            while ($l1 = pg_fetch_assoc($r1)):
                                ?>
                                <div class="4u 12u(xsmall) work-item">
                                    <a href="">                        
                                        <div class="image fit captioned">
                                            <img src="../principal/<?= $l1['image_path'] ?>" alt="" />
                                            <h3><?= $l1['nome'] ?></h3>
                                        </div>
                                    </a>
                                </div>
                                <?php
                            endwhile;
                        endif;

                        if ($emp2 != '' && $emp2 != null):
                            $q2 = "SELECT * FROM empresa WHERE id = " . $emp2 . ";";
                            $r2 = pg_query($q2);
                            while ($l2 = pg_fetch_assoc($r2)):
                                ?>
                                <div class="4u 12u(xsmall) work-item">
                                    <a href="">                        
                                        <div class="image fit captioned">
                                            <img src="../principal/<?= $l2['image_path'] ?>" alt="" />
                                            <h3><?= $l2['nome'] ?></h3>
                                        </div>
                                    </a>
                                </div>
                                <?php
                            endwhile;
                        endif;

                        if ($emp3 != '' && $emp3 != null):
                            $q3 = "SELECT * FROM empresa WHERE id = " . $emp3 . ";";
                            $r3 = pg_query($q3);
                            while ($l3 = pg_fetch_assoc($r3)):
                                ?>
                                <div class="4u 12u(xsmall) work-item">
                                    <a href="">                        
                                        <div class="image fit captioned">
                                            <img src="../principal/<?= $l3['image_path'] ?>" alt="" />
                                            <h3><?= $l3['nome'] ?></h3>
                                        </div>
                                    </a>
                                </div>
                                <?php
                            endwhile;
                        endif;
                        echo "</div>";
                        echo "<hr>";
                    endwhile;
                }
                else {
                    echo "<h2>Ainda não há sugestões!</h2>";
                }
                ?>
            </section>



            <!-- Four -->
            <!--            
                                <section id="four">
                                        <h2>Elements</h2>
            
                                        <section>
                                                <h4>Text</h4>
                                                <p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
                                                This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
                                                This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
                                                <hr />
                                                <header>
                                                        <h4>Heading with a Subtitle</h4>
                                                        <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
                                                </header>
                                                <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
                                                <header>
                                                        <h5>Heading with a Subtitle</h5>
                                                        <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
                                                </header>
                                                <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
                                                <hr />
                                                <h2>Heading Level 2</h2>
                                                <h3>Heading Level 3</h3>
                                                <h4>Heading Level 4</h4>
                                                <h5>Heading Level 5</h5>
                                                <h6>Heading Level 6</h6>
                                                <hr />
                                                <h5>Blockquote</h5>
                                                <blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
                                                <h5>Preformatted</h5>
                                                <pre><code>i = 0;
            
            while (!deck.isInOrder()) {
            print 'Iteration ' + i;
            deck.shuffle();
            i++;
            }
            
            print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
                                        </section>
            
                                        <section>
                                                <h4>Lists</h4>
                                                <div class="row">
                                                        <div class="6u 12u$(xsmall)">
                                                                <h5>Unordered</h5>
                                                                <ul>
                                                                        <li>Dolor pulvinar etiam magna etiam.</li>
                                                                        <li>Sagittis adipiscing lorem eleifend.</li>
                                                                        <li>Felis enim feugiat dolore viverra.</li>
                                                                </ul>
                                                                <h5>Alternate</h5>
                                                                <ul class="alt">
                                                                        <li>Dolor pulvinar etiam magna etiam.</li>
                                                                        <li>Sagittis adipiscing lorem eleifend.</li>
                                                                        <li>Felis enim feugiat dolore viverra.</li>
                                                                </ul>
                                                        </div>
                                                        <div class="6u$ 12u$(xsmall)">
                                                                <h5>Ordered</h5>
                                                                <ol>
                                                                        <li>Dolor pulvinar etiam magna etiam.</li>
                                                                        <li>Etiam vel felis at lorem sed viverra.</li>
                                                                        <li>Felis enim feugiat dolore viverra.</li>
                                                                        <li>Dolor pulvinar etiam magna etiam.</li>
                                                                        <li>Etiam vel felis at lorem sed viverra.</li>
                                                                        <li>Felis enim feugiat dolore viverra.</li>
                                                                </ol>
                                                                <h5>Icons</h5>
                                                                <ul class="icons">
                                                                        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                                                                        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                                                                        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                                                                        <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                                                                        <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                                                                        <li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
                                                                </ul>
                                                        </div>
                                                </div>
                                                <h5>Actions</h5>
                                                <ul class="actions">
                                                        <li><a href="#" class="button special">Default</a></li>
                                                        <li><a href="#" class="button">Default</a></li>
                                                </ul>
                                                <ul class="actions small">
                                                        <li><a href="#" class="button special small">Small</a></li>
                                                        <li><a href="#" class="button small">Small</a></li>
                                                </ul>
                                                <div class="row">
                                                        <div class="6u 12u$(small)">
                                                                <ul class="actions vertical">
                                                                        <li><a href="#" class="button special">Default</a></li>
                                                                        <li><a href="#" class="button">Default</a></li>
                                                                </ul>
                                                        </div>
                                                        <div class="6u$ 12u$(small)">
                                                                <ul class="actions vertical small">
                                                                        <li><a href="#" class="button special small">Small</a></li>
                                                                        <li><a href="#" class="button small">Small</a></li>
                                                                </ul>
                                                        </div>
                                                        <div class="6u 12u$(small)">
                                                                <ul class="actions vertical">
                                                                        <li><a href="#" class="button special fit">Default</a></li>
                                                                        <li><a href="#" class="button fit">Default</a></li>
                                                                </ul>
                                                        </div>
                                                        <div class="6u$ 12u$(small)">
                                                                <ul class="actions vertical small">
                                                                        <li><a href="#" class="button special small fit">Small</a></li>
                                                                        <li><a href="#" class="button small fit">Small</a></li>
                                                                </ul>
                                                        </div>
                                                </div>
                                        </section>
            
                                        <section>
                                                <h4>Table</h4>
                                                <h5>Default</h5>
                                                <div class="table-wrapper">
                                                        <table>
                                                                <thead>
                                                                        <tr>
                                                                                <th>Name</th>
                                                                                <th>Description</th>
                                                                                <th>Price</th>
                                                                        </tr>
                                                                </thead>
                                                                <tbody>
                                                                        <tr>
                                                                                <td>Item One</td>
                                                                                <td>Ante turpis integer aliquet porttitor.</td>
                                                                                <td>29.99</td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td>Item Two</td>
                                                                                <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                                                                <td>19.99</td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td>Item Three</td>
                                                                                <td> Morbi faucibus arcu accumsan lorem.</td>
                                                                                <td>29.99</td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td>Item Four</td>
                                                                                <td>Vitae integer tempus condimentum.</td>
                                                                                <td>19.99</td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td>Item Five</td>
                                                                                <td>Ante turpis integer aliquet porttitor.</td>
                                                                                <td>29.99</td>
                                                                        </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                        <tr>
                                                                                <td colspan="2"></td>
                                                                                <td>100.00</td>
                                                                        </tr>
                                                                </tfoot>
                                                        </table>
                                                </div>
            
                                                <h5>Alternate</h5>
                                                <div class="table-wrapper">
                                                        <table class="alt">
                                                                <thead>
                                                                        <tr>
                                                                                <th>Name</th>
                                                                                <th>Description</th>
                                                                                <th>Price</th>
                                                                        </tr>
                                                                </thead>
                                                                <tbody>
                                                                        <tr>
                                                                                <td>Item One</td>
                                                                                <td>Ante turpis integer aliquet porttitor.</td>
                                                                                <td>29.99</td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td>Item Two</td>
                                                                                <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                                                                <td>19.99</td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td>Item Three</td>
                                                                                <td> Morbi faucibus arcu accumsan lorem.</td>
                                                                                <td>29.99</td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td>Item Four</td>
                                                                                <td>Vitae integer tempus condimentum.</td>
                                                                                <td>19.99</td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td>Item Five</td>
                                                                                <td>Ante turpis integer aliquet porttitor.</td>
                                                                                <td>29.99</td>
                                                                        </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                        <tr>
                                                                                <td colspan="2"></td>
                                                                                <td>100.00</td>
                                                                        </tr>
                                                                </tfoot>
                                                        </table>
                                                </div>
                                        </section>
            
                                        <section>
                                                <h4>Buttons</h4>
                                                <ul class="actions">
                                                        <li><a href="#" class="button special">Special</a></li>
                                                        <li><a href="#" class="button">Default</a></li>
                                                </ul>
                                                <ul class="actions">
                                                        <li><a href="#" class="button big">Big</a></li>
                                                        <li><a href="#" class="button">Default</a></li>
                                                        <li><a href="#" class="button small">Small</a></li>
                                                </ul>
                                                <ul class="actions fit">
                                                        <li><a href="#" class="button special fit">Fit</a></li>
                                                        <li><a href="#" class="button fit">Fit</a></li>
                                                </ul>
                                                <ul class="actions fit small">
                                                        <li><a href="#" class="button special fit small">Fit + Small</a></li>
                                                        <li><a href="#" class="button fit small">Fit + Small</a></li>
                                                </ul>
                                                <ul class="actions">
                                                        <li><a href="#" class="button special icon fa-download">Icon</a></li>
                                                        <li><a href="#" class="button icon fa-download">Icon</a></li>
                                                </ul>
                                                <ul class="actions">
                                                        <li><span class="button special disabled">Special</span></li>
                                                        <li><span class="button disabled">Default</span></li>
                                                </ul>
                                        </section>
            
                                        <section>
                                                <h4>Form</h4>
                                                <form method="post" action="#">
                                                        <div class="row uniform 50%">
                                                                <div class="6u 12u$(xsmall)">
                                                                        <input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
                                                                </div>
                                                                <div class="6u$ 12u$(xsmall)">
                                                                        <input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
                                                                </div>
                                                                <div class="12u$">
                                                                        <div class="select-wrapper">
                                                                                <select name="demo-category" id="demo-category">
                                                                                        <option value="">- Category -</option>
                                                                                        <option value="1">Manufacturing</option>
                                                                                        <option value="1">Shipping</option>
                                                                                        <option value="1">Administration</option>
                                                                                        <option value="1">Human Resources</option>
                                                                                </select>
                                                                        </div>
                                                                </div>
                                                                <div class="4u 12u$(small)">
                                                                        <input type="radio" id="demo-priority-low" name="demo-priority" checked>
                                                                        <label for="demo-priority-low">Low Priority</label>
                                                                </div>
                                                                <div class="4u 12u$(small)">
                                                                        <input type="radio" id="demo-priority-normal" name="demo-priority">
                                                                        <label for="demo-priority-normal">Normal Priority</label>
                                                                </div>
                                                                <div class="4u$ 12u(small)">
                                                                        <input type="radio" id="demo-priority-high" name="demo-priority">
                                                                        <label for="demo-priority-high">High Priority</label>
                                                                </div>
                                                                <div class="6u 12u$(small)">
                                                                        <input type="checkbox" id="demo-copy" name="demo-copy">
                                                                        <label for="demo-copy">Email me a copy of this message</label>
                                                                </div>
                                                                <div class="6u$ 12u$(small)">
                                                                        <input type="checkbox" id="demo-human" name="demo-human" checked>
                                                                        <label for="demo-human">I am a human and not a robot</label>
                                                                </div>
                                                                <div class="12u$">
                                                                        <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
                                                                </div>
                                                                <div class="12u$">
                                                                        <ul class="actions">
                                                                                <li><input type="submit" value="Send Message" class="special" /></li>
                                                                                <li><input type="reset" value="Reset" /></li>
                                                                        </ul>
                                                                </div>
                                                        </div>
                                                </form>
                                        </section>
            
                                        <section>
                                                <h4>Image</h4>
                                                <h5>Fit</h5>
                                                <div class="box alt">
                                                        <div class="row 50% uniform">
                                                                <div class="12u$"><span class="image fit"><img src="images/fulls/05.jpg" alt="" /></span></div>
                                                                <div class="4u"><span class="image fit"><img src="images/thumbs/01.jpg" alt="" /></span></div>
                                                                <div class="4u"><span class="image fit"><img src="images/thumbs/02.jpg" alt="" /></span></div>
                                                                <div class="4u$"><span class="image fit"><img src="images/thumbs/03.jpg" alt="" /></span></div>
                                                                <div class="4u"><span class="image fit"><img src="images/thumbs/04.jpg" alt="" /></span></div>
                                                                <div class="4u"><span class="image fit"><img src="images/thumbs/05.jpg" alt="" /></span></div>
                                                                <div class="4u$"><span class="image fit"><img src="images/thumbs/06.jpg" alt="" /></span></div>
                                                                <div class="4u"><span class="image fit"><img src="images/thumbs/03.jpg" alt="" /></span></div>
                                                                <div class="4u"><span class="image fit"><img src="images/thumbs/02.jpg" alt="" /></span></div>
                                                                <div class="4u$"><span class="image fit"><img src="images/thumbs/01.jpg" alt="" /></span></div>
                                                        </div>
                                                </div>
                                                <h5>Left &amp; Right</h5>
                                                <p><span class="image left"><img src="images/avatar.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
                                                <p><span class="image right"><img src="images/avatar.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
                                        </section>
            
                                </section>
            -->

        </div>

        <!-- Footer -->
        <footer id="footer">
            <ul class="copyright">
                <li>&COPY; QUE TAL? | <?= date("Y") ?></li>
                <li><a href="#" class="icon fa-facebook"></a></li>
                <li><a href="#" class="icon fa-twitter"></a></li>
                <li><a href="#" class="icon fa-instagram"></a></li>
            </ul>
        </footer>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.poptrox.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>

    </body>
</html>