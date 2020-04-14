<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="type.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>


    <header class="container-fluid">

        <div class="overlay overlay-bg" style="background-image: url(&quot;https://www.norskespilleautomater.com/wp-content/uploads/toplist-header-bg-1660x400.jpg&quot;);"></div>


        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><span><img class="logo img-fluid" loading="lazy" src="https://www.norskespilleautomater.com/wp-content/themes/norskespilleautomater.com-child/assets/images/logo.png" alt="logo" class="logo lazyloaded" data-lazy-src="https://www.norskespilleautomater.com/wp-content/themes/norskespilleautomater.com-child/assets/images/logo.png" data-was-processed="true"></span></a>
                        <p class="navbar-text" style="color:white; font-weight:400px"><strong>norske<br>spilleautomater</strong></p>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav navbar-nav ml-auto">
                    <?php wp_nav_menu(

                        array(

                            'theme_location' => 'top-menu',
                            'menu_class' => 'navigation',
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'menu_id' => true,
                            'menu_class' => 'navbar-nav mr-auto'

                        )
                    ); ?>
                </ul>
            </div>
        </nav>


        <div class="carousel-caption align-items-center" style="text-align:left">
            <h1 class="banner-h1"><strong>Freespins</strong></h1>
            <p> <strong>For mange av oss casino spillere er freespins populært og her hos oss på <a class="header-link" href="#">Norske Spilleautomater</a>
                    får du en oppdatert oversikt over hvor du kan sikre deg gratisrunder akkurat nå.
                    For å få gratisrundene kreves det at du registrerer en gratis spillerkonto ved å bruke linkene på denne
                    siden. Trykk på linken og opprett konto med en gang.</strong></p>
            <p><strong>Pengene du vinner på gratisrundene må omsettes før de kan tas ut, men her får du uansett en
                    mulighet til å vinne gevinster uten å risikere noe av egne penger. Hvis vi ikke har nevnt noe
                    annet så kommer freespins inn på kontoen din rett etter at du har registrert kontoen</strong></p>
            <p><strong>Enkelte casinoer tilbyr free spins uten omsetning. Klikk på topplisten under hvis du
                    vil sjekke ut hvilke casinoer som har de beste freespins tilbudene uten omsetningskrav.
                    Freespins uten omsetningskrav betyr enkelt og greit at du er fri til å gjøre akkurat det du
                    vil med gevinstene du får.</strong></p>
        </div>


    </header>