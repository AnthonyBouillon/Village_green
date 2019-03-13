<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Carts extends CI_Controller {

    /**
     * Display the shopping cart with all items
     */
    public function cart() {
        // Display products
        $values['read_cart'] = $this->carts_model->read();
        // Display the total price
        $values['total_price'] = $this->carts_model->total_price();
        $values['title'] = 'Mon panier';
        $values['page'] = 'cart';
        $this->load->view('partials/template', $values);
    }

    /**
     * Update the quantity of the product associated with its identifiant
     */
    public function update_cart() {
        $this->carts_model->update($this->input->post('quantity'), $this->input->post('id_cart'));
        redirect('carts/cart', 'location');
    }

    /**
     * Deletes a product associated with its identifier
     * @param type $id_cart
     */
    public function delete_cart() {
        $this->carts_model->delete($this->input->post('id_product'));
        redirect('carts/cart', 'location');
    }



}
