<?php

require_once( '../_controller/controllerdados.php' );
$controller = Controllerdados::getInstance();
$result = $controller->verDadosProjeto();
$tamanho = count($result);

?>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <title>Ecomp jr</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/owl.theme.css">
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <!-- Main css -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>
</head>

<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

    <!-- =========================
     NAVIGATION LINKS     
============================== -->
    <div class="navbar navbar-fixed-top custom-navbar" role="navigation">
        <div class="container">

            <!-- navbar header -->
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
                <a href="#" class="navbar-brand">ECOMP JR</a>
            </div>

            <div class="collapse navbar-collapse">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../index.html" class="smoothScroll">Home</a></li>
                    <li><a href="membros.html" class="smoothScroll">Membros</a></li>
                    <li><a href="projetos.html" class="smoothScroll">Projetos</a></li>
                    <li><a href="contatos.html" class="smoothScroll">Contatos</a></li>

                </ul>

            </div>

        </div>
    </div>




    <!-- =========================
   REGISTER SECTION   
============================== -->
    <section id="register" class="parallax-section">
        <div class="container">
            <div class="row">

                <div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="0.6s">
                    <h2>Cadastre um projeto</h2>
                    <h3>Nunc eu nibh vel augue mollis tincidunt id efficitur tortor. Sed pulvinar est sit amet tellus iaculis hendrerit.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet consectetuer diam nonummy.</p>

                    <div id="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>IdProjeto</th>
                            <th>Nome Projeto</th>
                            <th>Empresa</th>                                                    
                            <th>Data Inicio</th>
                            <th>Data Término</th>
                            <th>Pagamento</th>
                            <th>Preco</th>
                            <th>Membros</th>
                    
                        </tr>
                        
                    <?php
                    $i = 0;
                                        
                    while ($fetch = pg_fetch_row($result)) { ?>
                        <tr>
                            <td><?php echo $fetch[0]; ?> &nbsp;</td>
                            <td><?php echo $fetch[6]; ?> &nbsp;</td>
                            <td><?php echo $fetch[2]; ?> &nbsp;</td>
                            <td><?php echo $fetch[3]; ?> &nbsp;</td>
                            <td><?php echo $fetch[4]; ?> &nbsp;</td>
                            <td><?php echo $fetch[5]; ?> &nbsp;</td>
                            <td><?php echo $fetch[1]; ?> &nbsp;</td>
                            <td><?php echo $fetch[7]; ?> &nbsp;</td>
                        </tr>
                    <?php
                    }
                    ?>
                    <tbody>
                </table>
            </div>

                </div>

                <div class="wow fadeInUp col-md-5 col-sm-5" data-wow-delay="1s">
                    <form action="../_controller/cadastroProjeto.php" method="POST">
                        <div>
                            <input name="organizationname" type="text" class="form-control" id="organizationname" placeholder="Nome da Empresa Contratante"> 
                            <input name="projectname" type="text" class="form-control" id="projectname" placeholder="Nome do Projeto">
                            <input name="projectPrice" type="number" class="form-control" id="projectPrice" placeholder="Valor do projeto">
                             Data de Início<input name="initialDate" type="date" class="form-control" id="intialDate" placeholder="Data de Inicio">                            
                             Data de Entrega<input name="dateLast" type="date" class="form-control" id="dateLast" placeholder="Data de Término">
                             Membros Participantes<input name="organizationmember" type="text" class="form-control" id="organizationmember"
                                placeholder="Digite os Emails Separardos Por Vírgula, (Ex: João@gmail, Maria@yahoo)">Formas de Pagamento
                            <div>

                                <div class="col-md-6 col-lg-6 col-sm-12"><input type="radio" name="pagamento">Cartão</div>
                                <div class="col-md-6 col-lg-6 col-sm-12"><input type="radio" name="pagamento">Dinheiro</div>


                            </div>

                        </div>
                        <div class="col-md-offset-6 col-md-6 col-sm-offset-1 col-sm-10">
                            <input name="submit" type="submit" class="form-control" id="submit" value="REGISTRAR PROJETO">
                        </div>
                    </form>
                    <form action="../_controller/cadastro.php" method="POST">
                        <input name="name" type="text" class="form-control" id="name" placeholder="Nome do Membro">
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                        <input name="password" type="password" class="form-control" id="password" placeholder="Senha">
                        <input name="confirmPassword" type="password" class="form-control" id="confirmPassword" placeholder="Confirme Senha">
                        <input name="points" type="number" class="form-control" id="points" placeholder="Pontos do Membro">
                        Data de Nascimento <input name="dateB" type="date" class="form-control" id="dateB">
                        <input name="office" type="text" class="form-control" id="office" placeholder="Cargo na Empresa">
                        <div class="col-md-offset-6 col-md-6 col-sm-offset-1 col-sm-10">
                            <input name="submit" type="submit" class="form-control" id="submit" value="CADASTRAR USUÁRIO">
                        </div>
                    </form>
                </div>

                <div class="col-md-1"></div>

            </div>
        </div>
    </section>

    <!-- =========================
    FOOTER SECTION   
============================== -->
    <footer>
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <p class="wow fadeInUp" data-wow-delay="0.6s">Copyright &copy; 2017 Your Company | Design: <a rel="nofollow" href="http://www.templatemo.com/page/1" target="_parent">Templatemo</a></p>
                    <p class="wow fadeInUp" data-wow-delay="0.6s">Conheça a Ecomp Jr. +55 (75) 10100-1010</p>
                    <ul class="social-icon">
                        <li>
                            <a target="_blanck" href="https://www.facebook.com/ecompjr.uefs/" class="fa fa-facebook wow fadeInUp" data-wow-delay="1s"></a>
                        </li>
                        <li>
                            <a target="_blanck" href="https://twitter.com/EcompJr" class="fa fa-twitter wow fadeInUp" data-wow-delay="1.3s"></a>
                        </li>

                        <li>
                            <a target="_blanck" href="https://www.instagram.com/ecompjr/?hl=pt-br" class="fa fa-instagram wow fadeInUp" data-wow-delay="1.6s"></a>
                        </li>
                        <li>
                            <a target="_blanck" href="http://www.ecompjr.com.br" class="fa fa-envelope-o wow fadeInUp" data-wow-delay="1.9s"></a>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </footer>


    <!-- Back top -->
    <a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>


    <!-- =========================
     SCRIPTS   
============================== -->
    <script src="../js/jquery.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.parallax.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/smoothscroll.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/custom.js"></script>
</body>

</html>