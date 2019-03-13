<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * This class only concerns the display of products
 * 
 * User part
 */
class Products_model extends CI_Model {

    /**
     * Outputs all products
     * @return type
     */
    public function read() {
        $this->db->select('*')
                ->from('produit')
                ->join('sous_rubrique', 'produit.id_sous_rubrique = sous_rubrique.id_sous_rubrique')
                ->join('rubrique', 'sous_rubrique.id_rubrique = rubrique.id_rubrique')
                ->join('fournisseur', 'produit.id_fournisseur = fournisseur.id_fournisseur');
        return $this->db->get()->result();
    }

    /**
     * Outputs product, category and supplier information
     * @param type $id_product
     * @return type
     */
    public function read_by_id($id_product) {
        $this->db->select('*')
                ->from('produit')
                ->join('sous_rubrique', 'produit.id_sous_rubrique = sous_rubrique.id_sous_rubrique')
                ->join('rubrique', 'sous_rubrique.id_rubrique = rubrique.id_rubrique')
                ->join('fournisseur', 'produit.id_fournisseur = fournisseur.id_fournisseur')
                ->where('id_produit', $id_product);
        return $this->db->get()->row();
    }

    public function search_product($value) {
        $this->db->select('*')
                ->from('produit')
                ->join('sous_rubrique', 'produit.id_sous_rubrique = sous_rubrique.id_sous_rubrique')
                ->join('rubrique', 'sous_rubrique.id_rubrique = rubrique.id_rubrique')
                ->join('fournisseur', 'produit.id_fournisseur = fournisseur.id_fournisseur')
                ->like('description_court_produit', $value)
                ->or_like('reference_fournisseur', $value)
                ->or_like('nom_rubrique', $value)
                ->or_like('nom_sous_rubrique', $value);
        return $this->db->get()->result();
    }

    /**
     * Outputs the last products from database
     * @return type
     */
    public function read_recent_product() {
        $this->db->select('*')
                ->from('produit')
                ->join('sous_rubrique', 'produit.id_sous_rubrique = sous_rubrique.id_sous_rubrique')
                ->join('rubrique', 'sous_rubrique.id_rubrique = rubrique.id_rubrique')
                // From the largest to the smallest id (decreasing = décroissant)
                ->order_by('produit.id_produit', 'DESC')
                ->limit(6);

        return $this->db->get()->result();
    }

}
