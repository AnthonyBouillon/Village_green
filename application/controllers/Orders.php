<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

   public function buy_cart() {
        $values = array(
          'date_commande' => date('Y-m-d'),
          'adresse_livraison' =>  $this->input->post('delivery_address'),
          'adresse_facturation' =>  $this->input->post('invoice_address'),
          'reglement' => 0,
          'etat_commande' =>  'En attente de confirmation',
          'id_client' => $this->session->id
        );
        $this->orders_model->create_order($values);
        redirect('carts/cart', 'location');
    }
}
