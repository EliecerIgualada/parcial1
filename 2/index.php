<?php 
 require_once("controllers/carrousel_controllers.php");
 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Parcial 1, Problema 2</title>
</head>
<body>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Segundo problema</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.instagram.com/anel25_barrios08/">Encuentrame en:</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tipos de reloj
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="https://listado.mercadolibre.com.pa/listado-reloj-digital?internal_referrer=true&matt_tool=6170365&matt_word=SEARCH">Reloj digital</a></li>
                        <li><a class="dropdown-item" href="https://www.amazon.com/-/es/Los-m%C3%A1s-vendidos-Relojes-de-Pulsera-Relojes-para-Hombre/zgbs/fashion/6358540011">Reloj de pulsera</a></li>
                        <li><a class="dropdown-item" href="https://molifer.com/relojes-de-torre/">Reloj de torre</a></li>
                        <li><a class="dropdown-item" href="https://www.istockphoto.com/es/fotos/reloj-de-bolsillo">Reloj de bolsillo</a></li>
                        <li><a class="dropdown-item" href="https://pa.ebay.com/b/Clear-Hourglass-Sand-Timer-Kitchen-Timers/98852/bn_113244864">Reloj de arena</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>

        <div class="carousel-inner">
        <?php $i=1;foreach(carrousel_controller::Mostrar() as $carousel){ ?>       
        <?php  if($i==1){ ?>
        <div class="carousel-item <?php echo "active"?>">
            <img src="<?php echo $carousel->getImag()?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1><?php echo $carousel->getDesc()?></h1>
                <h4> <p><?php echo $carousel->getTexto()?></p></h4>
            </div>
        </div>
        <?php } ?>
        <?php if($i>1) {?>
    <div class="carousel-item <?php echo "" ?>">
            <img src="<?php echo $carousel->getImag()?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1><?php echo $carousel->getDesc()?></h1>
                <h4><p><?php echo $carousel->getTexto()?></p></h4>
            </div>
        </div>
    
    <?php } ?>
<?php $i++;}?>
</div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>



