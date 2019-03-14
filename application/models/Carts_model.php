<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Cart management
 * 
 * User part
 * ------------------
 * CRUD fonctionnel
 */
class Carts_model extends CI_Model {

    /**
     * Add a product to the shopping cart if it is not already in the shopping cart
     * @param type $values
     * @param type $id_product
     */
    public function create($values, $id_product) {
        // Sort the number of lines for the same customer and product
        $sql = 'SELECT COUNT(id_produit) as num_product FROM panier WHERE id_client= ? AND id_produit = ?';
        $result = $this->db->query($sql, array($this->session->id, $id_product))->row();

        if ($result->num_product == "0") {
            $this->db->insert('panier', $values);
        }
    }

    
    

    /**
     * Display the list of products in the shopping cart linked to the user
     * @return type
     */
    public function read() {
        // Joining with tables that are linked to products
        $this->db->select('sum(quantite) as quantity, sum(prix_ht_produit * quantite) as all_price, sum(prix_ht_produit) as price, produit.description_court_produit, produit.description_long_produit, produit.prix_ht_produit, produit.tva_produit, panier.id_produit, panier.id')
                ->from('produit')
                ->join('sous_rubrique', 'produit.id_sous_rubrique = sous_rubrique.id_sous_rubrique')
                ->join('rubrique', 'sous_rubrique.id_rubrique = rubrique.id_rubrique')
                ->join('fournisseur', 'produit.id_fournisseur = fournisseur.id_fournisseur')
                ->join('panier', 'produit.id_produit = panier.id_produit')
                ->join('client', 'panier.id_client = client.id_client')
                ->where('panier.id_client', $this->session->id)
                // Grouped by id_product to display the different products
                ->group_by('produit.id_produit');

        return $this->db->get()->result();
    }

    /**
     * Display the total price of the products in the shopping cart linked to the user
     * @return type
     */
    public function total_price() {
        $this->db->select('sum(prix_ht_produit * quantite) as total_price')
                ->from('produit')
                ->join('panier', 'produit.id_produit = panier.id_produit')
                ->where('panier.id_client', $this->session->id);

        return $this->db->get()->row();
    }

    /**
     * Update the quantity of a product in the user's shopping cart
     * @param type $quantity
     * @param type $id_cart
     */
    public function update($quantity, $id_cart) {
        $this->db->set('quantite', $quantity);
        $this->db->where(array('id' => $id_cart, 'id_client' => $this->session->id));
        $this->db->update('panier');
    }

    /**
     * Delete a product from the user's shopping cart
     * @param type $id_product
     */
    public function delete($id_product) {
        $this->db->delete('panier', array('id_produit' => $id_product, 'id_client' => $this->session->id));
    }

}
