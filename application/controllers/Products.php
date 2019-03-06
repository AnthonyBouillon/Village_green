<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    /**
     * Affiche la page d'accueil + les derniers produits
     */
    public function home() {
        $values['recent_product'] = $this->products_model->read_recent_product();
        $values['title'] = 'Accueil';
        $values['page'] = 'home';
        $this->load->view('partials/template', $values);
    }
    /**
     * Affiche tous les produits dans la liste
     */
    public function product () {
        $values['list'] = $this->products_model->read();
        $values['title'] = 'Tout nos produits';
        $values['page'] = 'list';
        $this->load->view('partials/template', $values);
    }

    

    /**
     * FAIRE DES VERIFICATIONS
     */
    public function read_by_id($id_product = !null) {
        $values['product'] = $this->products_model->read_by_id($id_product);
        
        if ($values['product'] != null) {

            if ($this->input->post()) {
                $values = array(
                    'id_produit' => $id_product,
                    'id_client' => $this->session->id,
                    'quantite' => 1
                );
                $this->carts_model->create($values, $id_product);
            }
            $values['product'] = $this->products_model->read_by_id($id_product);
            $values['title'] = 'Village_green';
            $values['page'] = 'product';
            $this->load->view('partials/template', $values);
        } else {
            redirect('products/home', 'location');
        }
    }

}
