<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Insert un utilisateur
 * Lis les informations de l'utilisateur
 */
class Users_model extends CI_Model {

    /**
     * Enregistre un utilisateur
     * @param type $values
     */
    public function create($values) {
        $this->db->insert('client', $values);
    }

    /**
     * Compte le nombre de fois où l'adresse email et le mot de passe de l'utilisateur se trouve dans la base de données (
     */
    public function read_by_login($email, $password) {
        $this->db->select('COUNT(*) as "num_rows"')
                ->from('client')
                ->where(array('email_client' => $email, 'mot_de_passe' => $password));

        return $this->db->get()->row();
    }

    /**
     * Lis les informations de l'utilisateur lié à sont email
     * @param type $email
     * @return type
     */
    public function read_by_email($email) {
        return $this->db->get_where('client', array('email_client' => $email))->row();
    }

}
