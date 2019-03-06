<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User management
 * 
 * User part
 */
class Users_model extends CI_Model {

    /**
     * Add a user to the database
     *
     * @param type $values
     */
    public function create($values) {
        $this->db->insert('client', $values);
    }

    /**
     * Read the user's information linked to his email
     * (Sert à récupérer le mot de passe crypté de la base de données pour le comparé avec le mot de passe saisie)
     * @param type $email
     * @return type
     */
    public function read_by_email($email) {
        return $this->db->get_where('client', array('email_client' => $email))->row();
    }

    /**
     * Count the number of times the user's email and password are in the database
     * (Is used for login)
     */
    public function read_by_login($email, $password) {
        $this->db->select('COUNT(*) as "num_rows"')
                ->from('client')
                ->where(array('email_client' => $email, 'mot_de_passe' => $password));

        return $this->db->get()->row();
    }

}
