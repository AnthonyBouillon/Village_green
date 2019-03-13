<div class="container">
    <div class="row">

        <div class="col-lg-12">
            
            <!-- BLOCK CAROUSEL -->
            <div id="carouselExampleIndicators" class="carousel slide my-4">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 img-fluid img_slider" src="https://www.rockstation.fr/media/bannierehaut__084716800_1632_21042017.jpg" alt="First slide" >
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid img_slider" src="https://fr.yamaha.com/fr/files/banniere_2000x864_21613132bb95d331bfb42a2c2118d77f.jpg" alt="Second slide" >
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid img_slider" src="http://www.edclaxtonguitars.com/mediafiles/home_images/5_the-malabar-custom-guitar-banner-front.jpg/" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid img_slider" src="https://fr.yamaha.com/fr/files/20151124_Yamana33113_1200x480_47294516e1a8d078921229639245e428.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            
            <hr/>
            <h1 class="text-center jumbotron">Les derniers produits sorties dans notre boutique</h1>
            <hr/>
            
            <!-- BLOCK PRODUCT -->
            <div class="row">
                <?php
                foreach ($recent_product as $row) {
                ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                                
                                <h4 class="card-title"><?= $row->description_court_produit ?></h4>
                                <p><?= $row->nom_rubrique . ' ' . $row->nom_sous_rubrique ?></p>
                                
                                <h5><?= number_format($row->prix_ht_produit, 2) ?>$ hors taxe</h5>
                                <p class="card-text"><?= $row->description_long_produit ?></p>
                                
                            </div>
                            
                            <div class="card-footer">
                                <a href="<?= site_url('products/read_by_id/' . $row->id_produit) ?>" class="btn btn-secondary" style="float:right">Voir plus</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>  
            </div>
            
        </div>
    </div>
</div>
