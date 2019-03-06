

<script src="https://use.fontawesome.com/c560c025cf.js"></script>
<div class="container">
    <div class="card shopping-cart">
        <div class="card-header bg-dark text-light">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            Mon panier

            <div class="clearfix"></div>
        </div>
        <div class="card-body">
            <?php
            foreach ($read_cart as $row) {
                $price_ttc = $row->prix_ht_produit * $row->tva_produit / 100 + $row->prix_ht_produit;
                ?>
                <!-- PRODUCT -->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-2 text-center">
                        <img class="img-responsive" src="http://placehold.it/120x80" alt="prewiew" width="120" height="80">
                    </div>
                    <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                        <h4 class="product-name"><strong><?= $row->description_court_produit ?></strong></h4>
                        <h4>
                            <small><?= $row->description_long_produit ?></small>
                        </h4>
                    </div>
                    <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                        <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                            <h6><strong><?= number_format($price_ttc * $row->quantity, 2) ?>$ <span class="text-muted">x</span></strong></h6>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4">
                            <div class="quantity">
                                <form method="POST" action="<?= site_url('carts/update_cart/') ?>">
                                    <input type="text" value="<?= $row->id ?>" class="minus btn btn-primary" name="id_cart">
                                    <input type="number" step="1" max="99" min="1" value="<?= $row->quantity ?>" title="Qty" class="qty" size="4" name="quantity">
                                    <input type="submit" value="ok" class="minus btn btn-primary">
                                </form>
                            </div>
                        </div>
                        <div class="col-2 col-sm-2 col-md-2 text-right">
                            <form method="POST" action="<?= site_url('carts/delete_cart/' . $row->id_produit) ?>">
                                <input type="hidden" name="id_produit" value="<?= $row->id_produit ?>">
                                <button type="submit" name="delete_cart" class="btn btn-outline-danger btn-xs">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
                <hr>
            <?php } ?>





        </div>
        <div class="card-footer">

            <div class="pull-right" style="margin: 10px">
                <button class="btn btn-success pull-right">Acheter</button>
                <div class="pull-right" style="margin: 5px">
                    Prix toute taxe comprise : <b> <?= number_format($total_price->total_price * 22.50 / 100 + $total_price->total_price, 2) ?>$</b>
                </div>
            </div>
        </div>
    </div>
</div>
<style>


    .quantity {
        float: left;
        margin-right: 15px;
        background-color: #eee;
        position: relative;
        width: 80px;
        overflow: hidden
    }

    .quantity input {
        margin: 0;
        text-align: center;
        width: 15px;
        height: 15px;
        padding: 0;
        float: right;
        color: #000;
        font-size: 20px;
        border: 0;
        outline: 0;
        background-color: #F6F6F6
    }

    .quantity input.qty {
        position: relative;
        border: 0;
        width: 100%;
        height: 40px;
        padding: 10px 25px 10px 10px;
        text-align: center;
        font-weight: 400;
        font-size: 15px;
        border-radius: 0;
        background-clip: padding-box
    }

    .quantity .minus, .quantity .plus {
        line-height: 0;
        background-clip: padding-box;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
        -webkit-background-size: 6px 30px;
        -moz-background-size: 6px 30px;
        color: #bbb;
        font-size: 20px;
        position: absolute;
        height: 50%;
        border: 0;
        right: 0;
        padding: 0;
        width: 25px;
        z-index: 3
    }

    .quantity .minus:hover, .quantity .plus:hover {
        background-color: #dad8da
    }

    .quantity .minus {
        bottom: 0
    }
    .shopping-cart {
        margin-top: 20px;
    }

</style>