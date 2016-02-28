<?php
//ini_set('display_errors', '1'); 
//error_reporting(E_ALL | E_STRICT); 

try {
    $pdo = new PDO('mysql:host=connect.bluequeen.tk;dbname=---', '---', '---', [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->query('SELECT * FROM dane');

    foreach ($stmt as $row) {
        $imie = $row['imie'];
        $nazwisko = $row['nazwisko'];
        $miejscowosc = $row['miejscowosc'];
        $dataur = $row['dataur'];
        $wyksztalcenie = $row['wyksztalcenie'];
        $numer = $row['numer'];
        $foto = $row['foto'];
        $facebook = $row['facebook'];
        $opis = $row['opis'];
    }

    $stmt = $pdo->query('SELECT * FROM timeline WHERE id="1" LIMIT 1'); //pobranie pierwszego
    foreach ($stmt as $row) {

        $nazwa1 = $row['Nazwa'];
        $krotkiopis1 = $row['krotkiopis'];
        $lata1 = $row['lata'];
        $foto1 = $row['foto'];
    }

    $stmt = $pdo->query('SELECT * FROM timeline WHERE id="2" LIMIT 1'); //pobranie pierwszego
    foreach ($stmt as $row) {

        $nazwa2 = $row['Nazwa'];
        $krotkiopis2 = $row['krotkiopis'];
        $lata2 = $row['lata'];
        $foto2 = $row['foto'];
    }
    $stmt = $pdo->query('SELECT * FROM timeline WHERE id="3" LIMIT 1'); //pobranie pierwszego
    foreach ($stmt as $row) {

        $nazwa3 = $row['Nazwa'];
        $krotkiopis3 = $row['krotkiopis'];
        $lata3 = $row['lata'];
        $foto3 = $row['foto'];
    }
    $stmt = $pdo->query('SELECT * FROM timeline WHERE id="4" LIMIT 1'); //pobranie pierwszego
    foreach ($stmt as $row) {

        $nazwa4 = $row['Nazwa'];
        $krotkiopis4 = $row['krotkiopis'];
        $lata4 = $row['lata'];
        $foto4 = $row['foto'];
    }
    $stmt->closeCursor();
    echo '</ul>';
} catch (PDOException $e) {
    echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
}
// losowanie obrazków

$files = glob('img/carousel/*.{jpg,png,gif}', GLOB_BRACE);
shuffle($files);


?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Przemysław Blokus</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/agency.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script&subset=latin-ext,latin' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body id="page-top" class="index">




        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top"><?php echo $imie . ' ' . $nazwisko ?></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#team">O mnie</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#services">Umiejętności</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#portfolio">Portfolio</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">Curriculum Vitae</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Kontakt</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <!-- Header -->
        <header>

            <!--
            <div class="container">
                <div class="intro-text">
                    <div class="intro-lead-in">Witaj!</div>
                    <div class="intro-heading">Miło mi cię poznać</div>
                    <a href="#team" class="page-scroll btn btn-xl">Dowiedz się więcej</a>
                </div>
            </div>
            -->

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
						for($i=0; $i < 4; $i++)
						{
							if($i == 0)
							{
								echo '<div class="item active">';
							}
							else
							{
								echo '<div class="item">';
							}
							
							echo ' <img src="'. $files[$i] .'" alt="Something went wrong">';
							
							echo '</div>';
										
						}
					?>
				</div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            



        </header>

        <!-- Team Section -->
        <section id="team" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">O MNIE</h2>

                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-4" style="position: relative; left: 50%; transform: translateX(-50%) "> <!-- sprawdz tu nie powinno byc css-->
                        <div class="team-member">
                            <img src="<?php echo $foto ?>" class="img-responsive img-circle" alt="">
                            <p><h4><?php echo $imie . ' ' . $nazwisko ?></h4></p> <!-- Czy naglowek moze byc w p ?? -->
                            <p class="text-muted">Data urodzenia: <?php echo $dataur ?></p>
                            <p class="text-muted">Miejscowosc: <?php echo $miejscowosc ?></p>
                            <p class="text-muted">Wykształcenie: <?php echo $wyksztalcenie ?></p>
                            <ul class="list-inline social-buttons">

                                <li><a href="<?php echo $facebook ?>"><i class="fa fa-facebook-square"></i></a>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <p class="large text-muted"><?php echo $opis ?></p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Services Section -->
        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Umiejętności</h2>
                        <h3 class="section-subheading text-muted">Z ciągłym pragnieniem rozwoju.</h3>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-fighter-jet fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">Szybkość</h4>
                        <p class="text-muted">Powierzona zadania staram się wykonywać najszybciej jak to możliwe, przy zachowaniu jak najwyżej jakości świadczonej usługi.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">Doświadczenie</h4>
                        <p class="text-muted">Posiadam doświadczenie zdobyte na rynku pracy w wielu dziedzinach. Ukończyłem wiele kursów z zakresu grafiki komputerowej, a także z zakresu zarządzania sieciami. Posiadam także szeroką wiedzę na temat hardware.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-gears fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">Pasje</h4>
                        <p class="text-muted">Jestem fascynatem kolarstwa w każdej postaci, na każdym możliwym kroku staram się doskonalić swoje umiejętności, dotyczy to także ścieżki zawodowej.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Grid Section -->
        <section id="portfolio" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Portfolio</h2>
                        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal"/>
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/roundicons.png" class="img-responsive" alt=""/>
                        </a>
                        <div class="portfolio-caption">
                            <h4>Round Icons</h4>
                            <p class="text-muted">Graphic Design</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal"/>
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/startup-framework.png" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Startup Framework</h4>
                            <p class="text-muted">Website Design</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/treehouse.png" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Treehouse</h4>
                            <p class="text-muted">Website Design</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Curriculum Vitae</h2>
                        <h3 class="section-subheading text-muted">Zapraszam do zapoznania się z moją ścieżką zawodową.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="<?php echo $foto4 ?>" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4><?php echo $lata4 ?></h4>
                                        <h4 class="subheading"><?php echo $nazwa4 ?></h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"><?php echo $krotkiopis4 ?></p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="<?php echo $foto1 ?>" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4><?php echo $lata1 ?></h4>
                                        <h4 class="subheading"><?php echo $nazwa1 ?></h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"><?php echo $krotkiopis1 ?></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="<?php echo $foto3 ?>" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4><?php echo $lata3 ?></h4>
                                        <h4 class="subheading"><?php echo $nazwa3 ?></h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"><?php echo $krotkiopis3 ?></p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="<?php echo $foto2 ?>" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4><?php echo $lata2 ?></h4>
                                        <h4 class="subheading"><?php echo $nazwa2 ?></h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"><?php echo $krotkiopis2 ?></p>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <!-- Clients Aside 
        <aside class="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </aside>
        -->
        <!-- Contact Section -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Kontakt</h2>
                        <h3 class="section-subheading text-muted">Zapraszam do kontatku. Chętnie odpowiem na wszystkie pańskie pytania.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Twoje imię *" id="name" required data-validation-required-message="Proszę wprowadź swoje imię.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Twój Email *" id="email" required data-validation-required-message="Proszę wprowadź swój adres Email.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Twój nr telefonu *" id="phone" required data-validation-required-message="Proszę wprowadź swój nr telefonu.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Twoja wiadomość *" id="message" required data-validation-required-message="Proszę wprowadź wiadomość."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl">Wyślij wiadomość</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <span class="copyright">Copyright &copy; Przemysław Blokus</span>
                    </div>

                </div>
            </div>
        </footer>

        <!-- Portfolio Modals -->
        <!-- Use the modals below to showcase details about your portfolio projects! -->

        <!-- Portfolio Modal 1 -->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <p>
                                    <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                                <ul class="list-inline">
                                    <li>Date: July 2014</li>
                                    <li>Client: Round Icons</li>
                                    <li>Category: Graphic Design</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 2 -->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Project Heading</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
                                <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                                <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 3 -->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                                <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="js/classie.js"></script>
        <script src="js/cbpAnimatedHeader.js"></script>

        <!-- Contact Form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/agency.js"></script>

    </body>

</html>
