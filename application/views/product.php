<div class="container">
    <div class="row">
        <div class="col-lg-6 ">
            <div class="cart h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/1200x700" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <?= $product->description_court_produit ?>

                    </h4>
                    <p><?= $product->nom_rubrique . ' | ' . $product->nom_sous_rubrique ?></p>
                    <h5><?= number_format($product->prix_ht_produit, 2) ?>$ hors taxe</h5>
                    <p class="card-text"><?= $product->description_long_produit ?></p>
                </div>
                <div class="card-footer">
                    <?php if(!empty($this->session->id)){ ?>
                    <form method="POST">
                        <button type="submit" class="btn btn-block btn-secondary" name="add_cart">Ajouter au panier</button>
                    </form>
                    <?php } else { ?>
                    <form method="POST">
                        <button type="button" class="btn btn-block btn-secondary">Vous devez vous connecter <br/> pour acheter un produit</button>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6 ">
            <div class="text-center">
                <hr/>
                <h4 class="text-center">Produit fournis par : <?= $product->nom_fournisseur . ' ' . $product->prenom_fournisseur ?></h4>
                <hr/>
                <img class="img-fluid" width="320" src="<?= site_url('assets/image/supplier.jpg') ?>" alt="">
                <hr/>
                <p>Adresse e-mail : <?= $product->email_fournisseur ?></p>
                <hr/>
            </div>
        </div>
    </div>
</div>

