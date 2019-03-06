<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    /**
     * 
     */
    public function create() {

        if ($this->input->post()) {

            $this->form_validation->set_rules('name', 'nom', 'required|min_length[1]|max_length[150]', array(
                'required' => 'Le {field} est obligatoire',
                'min_length' => 'Le {field} doit comporter au moins 1 caractère',
                'max_length' => 'Le {field} est trop grand'
                    )
            );
            $this->form_validation->set_rules('firstname', 'prénom', 'required|min_length[1]|max_length[150]', array(
                'required' => 'Le {field} est obligatoire',
                'min_length' => 'Le {field} doit comporter au moins 1 caractère',
                'max_length' => 'Le {field} est trop grand'
                    )
            );
            $this->form_validation->set_rules('phone', 'numéro de téléphone', 'required|numeric|min_length[10]|max_length[15]', array(
                'required' => 'Le {field} est obligatoire',
                'numeric' => 'Le {field} doit comporter que des chiffres',
                'min_length' => 'Le {field} doit comporter au moins 10 chiffres',
                'max_length' => 'Le {field} est trop grand'
                    )
            );

            $this->form_validation->set_rules('email', 'adresse email', 'required|is_unique[client.email_client]|valid_email|min_length[5]|max_length[150]', array(
                'required' => 'L\'{field} est obligatoire',
                'is_unique' => 'L\'{field} existe déjà',
                'valid_email' => 'L\'{field} est incorrect',
                'min_length' => 'L\'{field} doit comporter au moins 5 caractères',
                'max_length' => 'L\'{field} est trop grand'
                    )
            );
            $this->form_validation->set_rules('address', 'adresse complète', 'required|min_length[1]|max_length[150]', array(
                'required' => 'L\'{field} est obligatoire',
                'min_length' => 'L\'{field} doit comporter au moins 10 chiffres',
                'max_length' => 'L\'{field} est trop grand'
                    )
            );
            $this->form_validation->set_rules('password', 'mot de passe', 'required', array(
                'required' => 'Le {field} est obligatoire',
                    )
            );

            if ($this->form_validation->run()) {
                $values = array(
                    'nom_client' => $this->input->post('name'),
                    'prenom_client' => $this->input->post('firstname'),
                    'telephone_client' => $this->input->post('phone'),
                    'email_client' => $this->input->post('email'),
                    'mot_de_passe' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'adresse_client' => $this->input->post('address'),
                    'adresse_facturation_client' => $this->input->post('address'),
                    'adresse_livraison_client' => $this->input->post('address'),
                    'statut_client' => 'Particulier',
                    'id_commercial' => 3
                );

                $this->users_model->create($values);
                // Après l'inscription l'utilisateur est redirigé vers la page d'accueil (A CORRIGER)
                redirect('products/home', 'location');
            }


            /*  $config['protocol'] = 'smtp';
              $config['smtp_host'] = "ssl://smtp.googlemail.com";
              $config['smtp_port'] = 465;
              $config['smtp_user'] = "anthonybouilloncontact@gmail.com";
              $config['smtp_pass'] = "";
              $this->load->library('email', $config);
              $this->email->from("anthonybouilloncontact@gmail.com", "ddd");
              $this->email->to("anthonybouilloncontact@gmail.com");
              $this->email->subject("dd");
              $this->email->message("ddd");
              $this->email->send(); */
        }
    }


    /**
     * Probleme de redirection si il se trompe
     */
    public function login() {
        if ($this->input->post()) {
            $email = $this->input->post('email2');
            $password = $this->input->post('password2');
            $data = $this->users_model->read_by_email($email);
            if (password_verify($password, $data->mot_de_passe)) {
                $result = $this->users_model->read_by_login($email, $data->mot_de_passe);
            }
        }

        if (!empty($result) && $result->num_rows == "1") {
            $data = $this->users_model->read_by_email($email);
            
            $this->session->set_userdata('id', $data->id_client);
            $this->session->set_userdata('username', $data->prenom_client);
            $this->session->set_userdata('admin', $data->admin);
            redirect('products/product', 'location');
        } else {
            // ...
            
        }
    }
    /**
     * Déconnexion, destruction des sessions et redirection vers la page d'accueil
     */
    public function logout() {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('admin');
        redirect('products/home', 'location');
    }

}
