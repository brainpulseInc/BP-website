<!DOCTYPE html>
<html>
<head>
    <title>Case Study - Brainpulse</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="76x76" href="./img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="./img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="./img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="./img/favicons/manifest.json">
    <link rel="mask-icon" href="./img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="./css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="./js/scripts.js"></script>
</head>

<body id="case-study">
<header>
    <div class="top">
        <a href="./index.html" class="logo">Brainpulse</a>
        <a class=" button-menu tcon tcon-menu--xcross" aria-label="toggle menu">
            <span class="tcon-menu__lines" aria-hidden="true"></span>
            <span class="tcon-visuallyhidden">toggle menu</span>
        </a>
    </div>

    <nav id="main-menu">
        <ul>
            <li><a href="./index.html">Home</a></li>
            <li><a href="./digital-transformation.html">Digital transformation</a></li>
            <!--<li><a href="#">Training</a></li>-->
            <!-- <li><a href="./clients.html">Clients</a></li> -->
            <li><a href="./blog-roll.html">The pulse</a></li>
            <li><a href="./about.html">About us</a></li>
            <li><a href="./contact.html">Contact</a></li>
        </ul>
    </nav>
</header>
<main>
    <div class="pictureSection">
        <img src="./img/header/case-study.jpg" alt="">
    </div>
    <div class="contentSection no-title">
        <div class="breadcrumb">
            <a class="first" href="#">Case study</a>
            /
            <span>Le site</span>
        </div>
        <section>
        <?php 
                $titlePage = "Le Site - Corporate Strategy & Operation optimization";
                $urlPage = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            ?>
            <h1><?php echo $titlePage; ?></h1>
            <ul class="socialshare">
                <li class="lk"><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $urlPage; ?>" target="_blank">Linkedin</a></li>
                <li class="fb"><a href="http://www.facebook.com/sharer.php?u=<?php echo $urlPage; ?>" target="_blank">Facebook</a></li>
                <li class="gp"><a href="https://plus.google.com/share?url=<?php echo $urlPage; ?>" target="_blank">Google +</a></li>
                <li class="tw"><a href="https://twitter.com/share?url=<?php echo $urlPage; ?>&amp;text=<?php echo $titlePage; ?>;hashtags=Brainpulse" target="_blank">Twitter</a></li>
                <li class="mail"> <a href="mailto:?Subject=<?php echo $titlePage; ?>.&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 <?php echo $urlPage; ?>">Email</a></li>
            </ul>
            <img class="presentation" src="./img/case-study-top.jpg" alt="">
        </section>

        <div class="row">
            <div class="col-md-9"><!--Left col-->
                <section>
                    <p class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat risus vel sollicitudin sagittis. </p>
                    <span class="subtitle">Challenge</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat risus vel sollicitudin sagittis. Phasellus elementum dui in eros pretium rhoncus. Ut tempus vitae purus auctor sodales. Donec luctus quis libero non blandit. Aenean vitae est sit amet quam rutrum interdum. Morbi sed ipsum nibh. Cras pellentesque mi non purus hendrerit vulputate. Morbi et dictum nisl, quis mattis dolor.</p>
                    <p>Aliquam fermentum massa justo, eu rhoncus erat lacinia quis. Vivamus ut libero non justo feugiat molestie vel sit amet nisl. Aenean non urna massa. Etiam vel bibendum velit. Nunc vehicula condimentum lorem ac tempor. Integer ultricies semper magna quis malesuada. In placerat aliquam ante id porttitor. Donec aliquet vulputate posuere. Sed non est neque. Ut id arcu nec tellus porttitor elementum at in justo. Nulla blandit metus id aliquam fringilla. Fusce vulputate malesuada sollicitudin.</p>
                    <br>
                    <img src="./img/case-study-int.jpg" alt="">
                    <br>
                    <span class="subtitle">PHOTO: Joe Blogs, NY TIMES</span>
                    <br> <br>

                    <span class="subtitle black">Challenge</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat risus vel sollicitudin sagittis. Phasellus elementum dui in eros pretium rhoncus. Ut tempus vitae purus auctor sodales. Donec luctus quis libero non blandit. Aenean vitae est sit amet quam rutrum interdum. Morbi sed ipsum nibh. Cras pellentesque mi non purus hendrerit vulputate. Morbi et dictum nisl, quis mattis dolor.</p>
                    <p>Aliquam fermentum massa justo, eu rhoncus erat lacinia quis. Vivamus ut libero non justo feugiat molestie vel sit amet nisl. Aenean non urna massa. Etiam vel bibendum velit. Nunc vehicula condimentum lorem ac tempor. Integer ultricies semper magna quis malesuada. In placerat aliquam ante id porttitor. Donec aliquet vulputate posuere. Sed non est neque. Ut id arcu nec tellus porttitor elementum at in justo. Nulla blandit metus id aliquam fringilla. Fusce vulputate malesuada sollicitudin.</p>
                    <br>
                    <span class="subtitle black">Results</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque volutpat risus vel sollicitudin sagittis. Phasellus elementum dui in eros pretium rhoncus. Ut tempus vitae purus auctor sodales. Donec luctus quis libero non blandit. Aenean vitae est sit amet quam rutrum interdum. Morbi sed ipsum nibh. Cras pellentesque mi non purus hendrerit vulputate. Morbi et dictum nisl, quis mattis dolor.</p>
                    <p>Aliquam fermentum massa justo, eu rhoncus erat lacinia quis. Vivamus ut libero non justo feugiat molestie vel sit amet nisl. Aenean non urna massa. Etiam vel bibendum velit. Nunc vehicula condimentum lorem ac tempor. Integer ultricies semper magna quis malesuada. In placerat aliquam ante id porttitor. Donec aliquet vulputate posuere. Sed non est neque. Ut id arcu nec tellus porttitor elementum at in justo. Nulla blandit metus id aliquam fringilla. Fusce vulputate malesuada sollicitudin.</p>

                </section>
                <div class="separation"></div> <!-- Separation -->
                <section class="case-study">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#" class="subtitle">Previous case study</a>
                            <img src="./img/prev-case.jpg" alt="">
                            <h2>Keurig - CRM & Content strategy</h2>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="subtitle">Next case study</a>
                            <img src="./img/next-case.jpg" alt="">
                            <h2>Vision 7 - Data Roadmap</h2>
                        </div>
                    </div>
                </section>
                <div class="separation"></div> <!-- Separation -->
            </div> <!-- /Left col-->
            <div class="col-md-3 sidebar"> <!--Right col-->

                <div class="separation"></div> <!-- Separation -->

                <div class="case">
                    <img src="./img/next-case.jpg" alt="">
                    <h3 class="subtitle black">Case Study</h3>
                    <p>Keurig - CRM & Content strategy</p>
                </div>

                <div class="separation"></div> <!-- Separation -->

                <div class="case">
                    <img src="./img/prev-case.jpg" alt="">
                    <h3 class="subtitle black">Case Study</h3>
                    <p>Keurig - CRM & Content strategy</p>
                </div>

                <div class="separation"></div> <!-- Separation -->

                <div class="case">
                    <img src="./img/next-case.jpg" alt="">
                    <h3 class="subtitle black">Case Study</h3>
                    <p>Keurig - CRM & Content strategy</p>
                </div>

                <div class="separation"></div> <!-- Separation -->

                <div class="case">
                    <img src="./img/prev-case.jpg" alt="">
                    <h3 class="subtitle black">Case Study</h3>
                    <p>Keurig - CRM & Content strategy</p>
                </div>

                <div class="separation"></div> <!-- Separation -->

                <div class="case">
                    <img src="./img/next-case.jpg" alt="">
                    <h3 class="subtitle black">Case Study</h3>
                    <p>Keurig - CRM & Content strategy</p>
                </div>

                <div class="separation"></div> <!-- Separation -->

            </div><!--/Right col-->
        </div> <!-- /row -->

    </div>
</main>
<footer>
    <div class="inside">
        <div class="col-sm-9 col-xs-12 left">
            <p>© 2016 Brainpulse - All rights reserved - <a href="tel:1.844.427.2466">1.844.427.2466</a> - <a href="./contact.html">contact us</a></p>
        </div>
        <div class="col-sm-3 col-xs-12 pull-right">
            <ul class="social">
                <li><a class="lk" target="_blank" href="https://www.linkedin.com/company/brainpulse-consulting">LinkedIn</a></li>
                <li><a class="tw" target="_blank" href="https://twitter.com/brainpulseinc">Twitter</a></li>
                <li><a class="fb" target="_blank" href="https://www.facebook.com/brainpulseconsulting/">Facebook</a></li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>
