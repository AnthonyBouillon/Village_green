
<div class="container">
    <h1 class="jumbotron mt-2 text-center">La liste de tous nos produits</h1>
    <!-- Bootstrap-table (extension) -->
            <label>Vous recherchez un produit en particulier ? Tapez son nom, sa reference ou sa catégorie.</label>
    <form class="form-inline my-2 my-lg-0" method="POST" action="<?= site_url('products/product') ?>">

        <input class="form-control mr-sm-2" type="search" placeholder="Entrez le nom d'un produit" aria-label="Search" name="search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
    </form>
 <hr/>
    <table data-toggle="table"  class="text-center">
        <thead>
            <tr>
                <th>Reference</th>
                <th>Nom</th>
                <th>Photo</th>
                <!--<th>Description</th>-->
                <th>Prix hors taxe</th>
                <th>TVA<br/>(pour particuliers)</th>
                <th>Prix ttc</th>
                <th>Catégorie</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($list as $row) {
                $price_ttc = $row->prix_ht_produit * $row->tva_produit / 100 + $row->prix_ht_produit;

                echo '<tr><td>' . $row->reference_fournisseur . '</td>';
                echo '<td>' . $row->description_court_produit . '</td>';
                echo '<td>' . $row->photo_produit . '</td>';
                //echo '<td>' . $row->description_long_produit . '</td>';
                echo '<td>' . $row->prix_ht_produit . '$</td>';
                echo '<td>' . $row->tva_produit . ' %</td>';
                echo '<td>' . number_format($price_ttc, 2) . '$</td>';

                echo '<td>' . $row->nom_rubrique . '<br/> ' . $row->nom_sous_rubrique . '</td>';
                ?>
            <td>
                <a href="<?= site_url('products/read_by_id/' . $row->id_produit) ?>" class="btn btn-secondary">Voir plus</a>
            </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>

</div>
