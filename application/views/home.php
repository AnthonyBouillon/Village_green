<div class="container">
    <div class="row">

        <div class="col-lg-12">
            
            <!-- BLOCK CAROUSEL -->
            <div id="carouselExampleIndicators" class="carousel slide my-4">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://fakeimg.pl/900x300/" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://fakeimg.pl/900x300/" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://fakeimg.pl/900x300/" alt="Third slide">
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
            <h1 class="text-center">Nos produits les plus récents</h1>
            <hr/>
            
            <!-- BLOCK PRODUCT -->
            <div class="row">
                <?php
                foreach ($recent_product as $row) {
                    $price_ttc = $row->prix_ht_produit * $row->tva_produit / 100 + $row->prix_ht_produit;
                ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                                
                                <h4 class="card-title"><?= $row->description_court_produit ?></h4>
                                <p><?= $row->nom_rubrique . ' ' . $row->nom_sous_rubrique ?></p>
                                
                                <h5><?= number_format($price_ttc, 2) ?>$ ttc</h5>
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
