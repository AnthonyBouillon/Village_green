<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    /**
     * Affiche tous les produits
     */
    public function read() {

        $values['list'] = $this->products_model->read();

        $values['title'] = 'Tout nos produits';
        $values['page'] = 'list';
        $this->load->view('partials/template', $values);
    }

    /**
     * En cours ...
     */
    public function read_by_id() {
        $values['title'] = 'Village_green';
        $values['page'] = 'product';
        $this->load->view('partials/template', $values);
    }

}
