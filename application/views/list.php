
<div class="container">
    <h1 class="jumbotron mt-2 text-center">La liste de nos produits</h1>
    <!-- Bootstrap-table (extension) -->

    <table data-toggle="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Photo</th>
                <!--<th>Description</th>-->
                <th>Prix hors taxe</th>
                <th>TVA</th>
                <th>Prix ttc</th>
                <th>Catégorie</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($list as $row) {
                $price_ttc = $row->prix_ht_produit * $row->tva_produit / 100 + $row->prix_ht_produit;

                echo '<tr><td>' . $row->description_court_produit . '</td>';
                echo '<td>' . $row->photo_produit . '</td>';
                //echo '<td>' . $row->description_long_produit . '</td>';
                echo '<td>' . $row->prix_ht_produit . '$</td>';
                echo '<td>' . $row->tva_produit . '$</td>';
                echo '<td>' . number_format($price_ttc, 2) . '$</td>';

                echo '<td>' . $row->nom_rubrique . '<br/> ' . $row->nom_sous_rubrique . '</td>';
                ?>
            <td>
                <a href="<?= site_url('products/read_by_id/' . $row->id_produit) ?>" class="btn btn-secondary">Voir plus</button>
            </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>

</div>
