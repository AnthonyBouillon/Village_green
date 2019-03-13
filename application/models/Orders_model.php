<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Orders_model extends CI_Model {

    public function create_order($values) {
        $this->db->insert('commande', $values);
    }
    

}
