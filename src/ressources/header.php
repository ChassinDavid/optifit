<!--Header comprenant 2 colonnes - Logo + titre et image d'exemple-->
<header class="container-fluid">
    <div class="row ml-1">
        <!--logo+titre et image en affichage responsive-->
        <div class="bg-image img-fluid col-md-6 mrSmall rounded-lg" style="background-image: url('https://mdbootstrap.com/img/new/fluid/nature/012.jpg');">
            <img src="./Pictures/logo-removebg-preview.png" alt="" class="img-fluid maxWidthImg rounded-lg float-left">
            <div class="d-flex ">
                <h1 class="text-white mb-1">Plaisirs Outdoor</h1>
            </div>
        </div>
        <!--Creation d'un carousel qui s'affichera sur grand écran-->
        <div class="col-md-6 ">
            <div id="carouselRando" class="carousel slide displayNoneMD" data-bs-ride="carousel">
                <!-- Indicateurs & traits -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselRando" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#carouselRando" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carouselRando" data-bs-slide-to="2"></button>
                </div>
                <!-- défilement images & carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./Pictures/IMG20220208114113.jpg" alt="" class="img-fluid rounded-lg displayNoneMD">
                    </div>
                    <div class="carousel-item">
                        <img src="./Pictures/IMG20220208114439.jpg" alt="" class="img-fluid rounded-lg displayNoneMD">
                    </div>
                    <div class="carousel-item">
                        <img src="./Pictures/IMG20220208113452.jpg" alt="" class="img-fluid rounded-lg displayNoneMD">
                    </div>
                </div>

                <!-- Contrôles gauche - droite & icones -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselRando" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselRando" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </div>
    <!--Barre de navigation-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark rounded-lg">
        <a class="navbar-brand" href="./index.html">Menu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link " href="./aSavoir.html">A Savoir</a></li>
                <li class="nav-item"><a class="nav-link " href="./programme.html">Programme</a></li>
                <li class="nav-item"><a class="nav-link " href="./contact.html">Nous contacter</a></li>
            </ul>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!--Ajout d'un fil d'ariane-->
    <div class="row">
        <nav class="col-12 rounded-lg" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="./index.html">Accueil</a></li>
                <li class="breadcrumb-item " aria-current="page">Programme</li>
                <li class="breadcrumb-item " aria-current="page">A savoir</li>
                <li class="breadcrumb-item " aria-current="page">Nous contacter</li>

            </ol>
        </nav>
    </div>

</header>