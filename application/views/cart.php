<div class="container">
    <div class="card">
        <!-- Header cart -->
        <div class="card-header bg-dark text-light">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i> 
            <span>Mon panier</span>
        </div>

        <div class="card-body">
            <?php
            foreach ($read_cart as $row) {
                // price to VAT for a product 
                $price_ttc = $row->prix_ht_produit * $row->tva_produit / 100 + $row->prix_ht_produit;
                ?>
                <!-- PRODUCT -->
                <div class="row">

                    <!-- BLOCK IMG -->
                    <div class="col-12 col-sm-12 col-md-2 text-center">
                        <img class="img-responsive" src="http://placehold.it/120x80" alt="prewiew" width="120" height="80">
                    </div>

                    <!-- BLOCK TEXT -->
                    <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                        <h4 class="product-name"><strong><?= $row->description_court_produit ?></strong></h4>
                        <h4>
                            <small><?= $row->description_long_produit ?></small>
                        </h4>
                    </div>


                    <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">

                        <!-- BLOCK PRICE -->
                        <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                            <h6><strong><?= number_format($row->prix_ht_produit * $row->quantity, 2) ?>$ hors taxe <span class="text-muted">x</span></strong></h6>
                        </div>

                        <!-- BLOCK QUANTITY -->
                        <div class="col-4 col-sm-4 col-md-4">
                            <div class="quantity">
                                <form method="POST" action="<?= site_url('carts/update_cart/') ?>">
                                    <input type="text" value="<?= $row->id ?>" class="minus btn btn-primary" name="id_cart">
                                    <input type="number" step="1" max="99" min="1" value="<?= $row->quantity ?>" title="Qty" class="qty" size="4" name="quantity">
                                    <input type="submit" value="ok" class="minus btn btn-primary">
                                </form>
                            </div>
                        </div>

                        <!-- BLOCK DELETE -->
                        <div class="col-2 col-sm-2 col-md-2 text-right">
                            <form method="POST" action="<?= site_url('carts/delete_cart/') ?>" class="delete_cart">
                                <input type="hidden" name="id_product" value="<?= $row->id_produit ?>">
                                <button type="submit" name="delete_cart"  class="btn btn-outline-danger btn-xs btn_delete_cart" onclick="return confirm('Etes vous sur de vouloir supprimer cette article ?')">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
                <hr>
            <?php } ?>
        </div>

        <!-- BLOCK FOOTER + VAT PRICE -->
        <div class="card-footer">
<div class="pull-leftt" style="margin: 5px">
                     <b> <?= !empty($this->session->id) ? 'Prix toute taxe comprise : ' . number_format($total_price->total_price * 22.50 / 100 + $total_price->total_price, 2) . '$' : '' ?></b>
                </div>
            <div class="pull-right" style="margin: 10px">
                <form method="POST" action="<?= site_url('orders/buy_cart/') ?>" id="form_command">
                    <input type="text" name="delivery_address" placeholder="Adresse de livraison" required>
                    <input type="text" name="invoice_address" placeholder="Adresse de facturation" required>
                    &nbsp;
                    <button class="btn btn-success pull-right" type="submit" id="btn_command">Valider ma commande</button>
                </form>
               <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" id="form_paypal">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="VD4HEE3JLX7UJ">
<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>


                
                
            </div>
        </div>

    </div>
</div>

<style>
    html{ height:100%; }
    body{ min-height:100%;  position:relative; }

    body::after{ content:''; display:block; height:100px; }

    footer{ 
        position:absolute; 
        bottom:0; 
        width:100%; 
    }
</style>
<script>
   /*  $('#btn_paypal').hide();
   $('#btn_command').click(function(){
       $('#btn_paypal').show();
   });*/
</script>