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
                ->join('rubrique', 'sous_rubrique.id_sous_rubrique = rubrique.id_rubrique');
        
        return $this->db->get()->result();
    }

}
