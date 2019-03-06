<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Insert un utilisateur
 * Lis les informations de l'utilisateur
 */
class Products_model extends CI_Model {

    public function read() {
        // jointure pour nom fournisseur, nom rubrique et sous rubrique 
        $this->db->select('*')
                ->from('produit')
                ->join('sous_rubrique', 'produit.id_sous_rubrique = sous_rubrique.id_sous_rubrique')
                ->join('rubrique', 'sous_rubrique.id_sous_rubrique = rubrique.id_rubrique')
                ->join('fournisseur', 'produit.id_fournisseur = fournisseur.id_fournisseur');

        return $this->db->get()->result();
    }

    public function read_by_id($id_product) {
        // jointure pour nom fournisseur, nom rubrique et sous rubrique 
        $this->db->select('*')
                ->from('produit')
                ->join('sous_rubrique', 'produit.id_sous_rubrique = sous_rubrique.id_sous_rubrique')
                ->join('rubrique', 'sous_rubrique.id_sous_rubrique = rubrique.id_rubrique')
                ->join('fournisseur', 'produit.id_fournisseur = fournisseur.id_fournisseur')
                ->where('id_produit', $id_product);

        return $this->db->get()->row();
    }

    public function delete($id_product) {
        $this->db->delete('produit', $id_product);
    }

}
